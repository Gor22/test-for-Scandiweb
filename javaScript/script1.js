
const outField = document.querySelector('.wrepperField_add');
let product = document.querySelector('#productType');


        class Categorys{
       
            
            book(){
               
               outField.innerHTML = `<div class='wrepperField'><label for='weight'>Weight(KG)</label> 
                                  <input type='number' class='inputField' id='weight' min="1" max="1000" step="1" name='prodDescription[]' type='text'  required></div>
                                  
                                  <p class='hints'>Please, provide weight</p>`;

                console.log('book1');
            }
             DVD(){
                outField.innerHTML = `<div class='wrepperField'><label for='size'>Size(MB)</label> 
                                   <input type='number'class='inputField' id='size' min="1" max="1000" step="1" name='prodDescription[]' type='text'  required></div>
                                   <p class='hints'>Please, provide size</p>`;

            console.log('DVD2');
            }
             furniture() {
                outField.innerHTML = `<div class='wrepperField'> <label for='Height'>Height</label><input  class='inputField' id='height' type='number' min="1" max="1000" step="1" name='prodDescription[]' required></div>
                                  <div class='wrepperField'> <label for='Width'>Width</label><input class='inputField' id='width' min="1" type='number' max="1000" step="1" name='prodDescription[]' required></div>
                                  <div class='wrepperField'> <label for='Lenght'>Lenght</label><input class='inputField' id='length' type='number' min="1" max="1000" step="1" name='prodDescription[]' required></div>
                                  <p class='hints'>Please, provide dimensions</p>`;      
            console.log('furniture3');
            }
            
            
            
        }
   
        
        

        product.onchange = function () {

            let categorys = new Categorys();
            const arrF = [categorys.DVD, categorys.book,categorys.furniture];
 
            //console.log(product.value);
            let prodSelect = product.value;
            arrF[prodSelect]();
            
            
            
        };
        
        
        
        
        
        
        
  
 