<?php
    require_once'controller/create.php';
    require_once'controller/readType.php';
   
    
    
    
    
    
    
    
    
    

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Main</title>
    <link rel="stylesheet" href="css/style1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="werepperContainer">
    <form method='POST' method="controller/create.php" id="product_form">
    <div class="header">
        <div class="innerWrepperHeader flexRow">
            <p class="logo">Add-product</p>
            <menu>
                <ul class="topMenu flexRow">
                    <li class="topMenu__item"><a href="index.php" class="cancel" title='Cancel'><span class="cancelTitle">Cancel</span></a></li>
                    <!--li class="topMenu__item"><button class="Btn btnAdd">MASS DELETE</button></li-->
                    
                    <li class="topMenu__item">
                        <!--form method='POST' method="controller/create.php"-->
                            <input type='submit' class="Btn" id="Save" name='delBTN'value='SAVE'title='Save'>  
                       
                       
                    
                    </li>
                    
                </ul>
            </menu>
        </div>
    </div>
    <div class="main">
       <div class='wrepperForm'>
        <div class='wrepperField'>  
            <label for='sku'>SKU</label><input class="inputField" type="text" name='sku' id='sku' required>
        </div>
         <div class='wrepperField'>  
            <label for='sku'>Name</label><input class="inputField" type="text" name='name' id='name' required>
        </div>
        <div class='wrepperField'>
            <label for='sku'>Prise($)</label><input class="inputField" type="number" min="0" max="1000000" step="0.1" name='price' id='price' required>
        </div>
       
        <div class='wrepperField'>
            <label for='sku'> Type switcher</label>
            <select class='inputField' name='productType' id='productType' required>
               <option value="" selected disabled hidden>Select type</option>
                <?php   
                    $list='';
                    $count =0;
                    foreach($TypeRequest as $TypeProd)
                    {   
                        
                        $list.="<option class='inputField' value='{$count}'>{$TypeProd['title']}</option>";
                        $count++;
                    }
                    print_r($list);
                ?>
            </select>
        </div>
        <div class='wrepperField_add'></div>
           
           
           
        </div>
        
        
       </form> 
        
    </div>
    </div>
    <footer class="footer">
            <span class="textCopyright">Kovalёv ES. test for scandiweb</span>
            
    </footer>
    
    


    <script src='javaScript/script1.js'></script>
</body>

</html>



