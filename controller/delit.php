<?php
    //require_once'map.php';
    require_once'model.php';
    
   



class ControlDelit {
    public $db;
    function __construct($db) {
        $this->db = $db;
    }
    public function delit(){
        if(isset($_POST['delBTN']) && !empty($_POST['DelId_Prod'])  ){    
            $del= $_POST['DelId_Prod'];
            $arr_Idprod = array_map('intval', $del);
            $Str = implode(',', $arr_Idprod);

           //var_dump($Str);
           $del_sql = "DELETE FROM `goods` WHERE `id_g`in(".$Str.")";
           $this->db->execute($del_sql);
          header("Location: http://a44576o7.beget.tech/");
          
      

        }
    } 
}

$delit = new ControlDelit($db);
$delit->delit();


