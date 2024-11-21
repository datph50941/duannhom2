<?php include_once ROOT_DIR . "views/clients/header.php" ?>

<div class="clearfix"></div>
<div class="featured-products">
   <h3 class="title"><strong>Featured</strong> Products</h3>
   <div class="control">
      <a id="prev_featured" class="prev" href="#">&lt;</a>
      <a id="next_featured" class="next" href="#">&gt;</a>
   </div>
</div>

        
        
  
        <?php foreach ($products as $pro) : ?>
            <!-- Box Sản Phẩm -->
            <div class="col-md-3 col-sm-6 ">
                <div class="products">
                <div class="thumbnail">
                    <img src="<?= $pro['image'] ?>" alt="Product Image" class="product-img">
                </div>   
                    <div class="productname">
                        
                            <h5 class="productname"><?= $pro['name'] ?></h5></div>
                
                      
                       
                            <span class="price"><?= $pro['price'] ?></span>    
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