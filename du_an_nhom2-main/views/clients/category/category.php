<?php include_once ROOT_DIR . "views/clients/header.php" ?>

<div class="clearfix"></div>
<div class="featured-products me-3">
    <h2 class="mt-5 text-black"><?= $title  ?></h2>

</div>

        
        
  
        <?php foreach ($products as $product) : ?>
            <!-- Box Sản Phẩm -->
            <div class="col-md-3 col-sm-6 ">
                <div class="products">
                <div class="thumbnail">
                    <img src="<?= $product['image'] ?>" alt="Product Image" class="product-img">
                </div>   
                    <div class="productname">
                        
                            <h5 class="productname"><?= $product['name'] ?></h5></div>
                
                      
                       
                            <span class="price"><?= $product['price'] ?></span>    
                    <div class="button_group">
                         <button class="button add-cart" type="button">Add To Cart</button>
                         <button class="button compare" type="button"><i class="fa fa-exchange"></i></button>
                         <button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
        <?php endforeach ?>
   
    


<?php include_once ROOT_DIR . "views/clients/footer.php" ?>