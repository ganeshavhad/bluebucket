<?php require_once('header.php'); ?>
    
        <div class="products-catagories-area clearfix">

             <div class="amado-pro-catagory clearfix">

                
                <?php for($i=0;$i<3;$i++){   ?>
           
                <div class="single-products-catagory clearfix">
                
                          <img src="<?php echo base_url('').$offer[$i]->PATH; ?>" width="100px" height="50px" alt="">
                  
                      
                         <div class="hover-content">
                            <div class="line"></div>
                            <p><?php echo $offer[$i]->DISCRIPTION;?></p>
                            <h4><?php echo $offer[$i]->TITLE;?></h4>
                        </div> 
            
                </div>
                <?php } ?> 
                              
            </div>
            <hr><hr>


             <div class="amado-pro-catagory clearfix">

                
                <?php foreach($drinks_types as $value){   ?>
           
                <div class="single-products-catagory clearfix">
                
                        <!--   <img src="<?php //echo base_url('').$drinks_types[$i]->DRINK_TYPE_IMG; ?>" width="100px" height="50px" alt=""> -->
                  
                      
                            <div class="line">
                            <h4><?php echo $value->DRINK_TYPE;?></h4>
                          <!--   <h4><?php //echo $drinks_types[$i]->TITLE;?></h4> -->
                            </div>
                   
            
                </div>
                <?php } ?> 
                              
            </div>
 <hr><hr>

             <div class="amado-pro-catagory clearfix">

                
                <?php foreach($shop as $value){  ?>
           
                <div class="single-products-catagory clearfix">
                
                        <img src="<?php echo base_url('').$value->IMAGE_PATH; ?>" width="100px" height="50px" alt=""> 
                  
                      
                         <!--  <p><?php //echo $value->PARTNER_MOBILE_NUMBER;?></p> -->
                            <h4><?php echo $value->BAR_NAME;?></h4>
                        
                </div>
                <?php } ?> 
                              
            </div>
        </div> 
   </div>

<?php require_once('footer.php'); ?>