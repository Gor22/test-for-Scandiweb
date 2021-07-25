<?php
    require_once'controller/read.php';
    require_once'controller/delit.php'
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
    <div class="header">
        <div class="innerWrepperHeader flexRow">
            <p class="logo">Product List</p>
            <menu>
                <ul class="topMenu flexRow">
                    <li class="topMenu__item"><a href="add-product.php" class="btnAdd"><span class="btnAddTitle" title='Add'>ADD</span></a></li>
                    <!--li class="topMenu__item"><button class="Btn btnAdd">MASS DELETE</button></li-->
                    
                    <li class="topMenu__item">
                        <form method='POST' id="product_form">
                            <input type='submit'  class="Btn" name='delBTN'value='MASS DELETE' title='Mass delete'>  
                       
                       
                    
                    </li>
                    
                </ul>
            </menu>
        </div>
    </div>
    <main class="main">
        <!--div class="cartProd ">
            <input type="checkbox" class="cartProd__check">
            <div class="cardProd__innerWrerpper">
                <p class="SKU">fwewfwe</p>
                <p class="name">Стул</p>
                <p class="priseWrepper">
                    <span class="prise">100</span>
                    <span class="currency">$</span>
                </p>
                <p class="productSpecific">ываыаываыыв</p>
            </div>

        </div-->

 <!--input type='checkbox' name='DelId_listenerCourse[]' value='${JsonA[i]['id_listenerCourse']}'-->
        <?php
        $allGoods='';
        foreach($products as $goods){
            $allGoods.= "<div class='cartProd'>           
            <input type='checkbox' name='DelId_Prod[]' value='{$goods['id_g']}' class=' delete-chekbox' id='delete-product-btn'>
            <div class='cardProd__innerWrerpper'>
                <!--p class='SKU'>{$goods['title']}</p-->
                <p class='article'>{$goods['article']}</p>
                <p class='name'>{$goods['name']}</p>
                <p class='priseWrepper'>
                    <span class='prise'>{$goods['prise']}</span>
                    <span class='currency'>$</span>
                </p>
                <p class='productSpecific'>{$goods['specification']}</p>
            </div>

        </div>";
            
            
        }
        
        print_r($allGoods);
        
        
        
        ?>
        
 </form>
    </main>
</div>
    
    

  


    
     <footer class="footer">
        <span class="textCopyright">Kovalёv ES. test for scandiweb</span>
        
    </footer>
</body>



   

</html>