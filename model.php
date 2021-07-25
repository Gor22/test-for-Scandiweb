<?php 

   
 

    class DataBase{
      //храним соединение с БД
      public $link;
      
      
      
      
      //соединение с БД
      public function __construct() {
          $this->connect();// вызываем в конструкт.
          
          
      }
      
      //установка соед. с БД
      public function connect(){
        $config = require_once'config.php';
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['db_name'].';charset='.$config['charset'];
        $this->link = new PDO($dsn, $config['username'], $config['password']);
        
        
        return $this;
      }
      
      
  
      
      
      //чтение курсов
      public function Read($sql){
        $sqlReqest = $this->link->prepare($sql);
        $sqlReqest->execute();
        $use = $sqlReqest->fetchAll(PDO::FETCH_ASSOC);
        return $use; 
          
      }
      
      
      
      
     public function execute($sql){
        $sqlReqest = $this->link->prepare($sql);
        $sqlReqest->execute();
        
      } 
      
      
    
    
    public function add($sql, $value){
          $sqlReqest = $this->link->prepare($sql);
          $sqlReqest->execute($value);
         /* $use = $sqlReqest->fetchAll(PDO::FETCH_ASSOC);
          return $use; */
      }
    
    
    
    
      
      
      
      
      
      
      
      
      
      
  }      
   
   $db = new DataBase(); 
  


   
   
   
 
   
 class write{
 
    public $SKU;
    public $Name;
    public $Prise;
    public $Type;
    public $dicription;
    public $add_sql;
    public $db;
            
    
    function __construct($SKU, $Name, $Prise, $Type, $dicription, $db, $add_sql) {
       
        
         $this->SKU=$SKU;
         $this->Name=$Name;
         $this->Prise=$Prise;
         $this->Type=$Type;
         $this->dicription=$dicription; 
         $this->add_sql=$add_sql;
         $this->db = $db;
         
                 
    }
    
    
    
    public function writeing(){
       if(isset($_POST['sku'])){  

             
           $arrProd=['DVDFields','BookFields','FurnitureFields'];
           $out = new $arrProd[$this->Type]($this->SKU, $this->Name, $this->Prise, $this->Type, $this->dicription, $this->db, $this->add_sql);
           //var_dump($out);
           $out->addProd();
         
        }
    }
}  
class MainFields {
    public $sku;
    public $name;     
    public $prise;
    public $typeProd; 
    public $db;

    function __construct($sku, $name, $prise, $typeProd, $db ,$add_sql) {
        $this->sku = $sku;
        $this->name = $name;
        $this->prise = $prise; 
        $this->typeProd = $typeProd;
        $this->add_sql=$add_sql;
        $this->db = $db;
    }   
        
    public function addProd(){
        //echo $this->sku, $this->name, $this->prise, $this->typeProd;
            
    }
   
}
 






class BookFields extends MainFields{
    public $weight;  
    function __construct($sku, $name, $prise, $typeProd, $weight, $db ,$add_sql) {
            parent::__construct($sku, $name, $prise, $typeProd, $db ,$add_sql);
            $this->weight = $weight[0];        
    } 
    
    public function addProd(){
        $add_sql = $this->add_sql;
        $prise=(float)$this->prise;
        $type=((int)$this->typeProd)+1;
        $sku = $this->sku;
        $name = $this->name;
        $weight = "Weight:".$this->weight.'KG';
        $value = [':sku'=>$sku,':name'=>$name,':prise'=>$prise,':typeProd'=>$type,':dimensions'=>$weight ];
        $this->db->add($add_sql, $value);
        //var_dump($type);

        header("Location: http://a44576o7.beget.tech/");
    }         
}
    



class DVDFields extends MainFields{
    public $size;  
    function __construct($sku, $name, $prise, $typeProd, $size, $db, $add_sql) {
            parent::__construct($sku, $name, $prise, $typeProd, $db, $add_sql);
            $this->size = $size[0];        
    } 
    
    public function addProd(){
        $add_sql = $this->add_sql;
        $prise=(float)$this->prise;
        $type=((int)$this->typeProd)+1;
        $sku = $this->sku;
        $name = $this->name;
        $size = "Size:".$this->size.'MB';
        
        //var_dump($size );
        $value = [':sku'=>$sku,':name'=>$name,':prise'=>$prise,':typeProd'=>$type ,':dimensions'=>$size ];
        $this->db->add($add_sql, $value);
        
       
        
        
        header("Location: http://a44576o7.beget.tech/");
    }         
}


class FurnitureFields extends MainFields{
    public $height; 
    public $width; 
    public $length; 
    public $dimensions;
   
    function __construct($sku, $name, $prise, $typeProd,  $dimensions, $db, $add_sql) {
            parent::__construct($sku, $name, $prise, $typeProd, $db, $add_sql);

             $this->height = $dimensions[0]; 
             $this->width = $dimensions[1]; 
             $this->length = $dimensions[2]; 
           
  
    } 
    
    public function addProd(){
        $add_sql = $this->add_sql;
        $prise=(float)$this->prise;
        $type=((int)$this->typeProd)+1;
        $sku = $this->sku;
        $name = $this->name;
        $dimensions = "Dimension: ".$this->height."X".$this->width."x".$this->length/*, $dataProd*/; 
        
        
        $value = [':sku'=>$sku,':name'=>$name,':prise'=>$prise,':typeProd'=>$type,':dimensions'=>$dimensions ];
        $this->db->add($add_sql, $value);

       header("Location: http://a44576o7.beget.tech/");
     
    }         
}
