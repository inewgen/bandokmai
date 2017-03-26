<?php if (isset($products_h) && is_array($products_h)): ?>
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">สินค้าแนะนำ</h2>
                        <div class="product-carousel">

<?php   foreach ($products_h as $product_h): ?>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="<?php echo array_get($product_h, 'images.0.url', '');?>" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link">
                                            <i class="fa fa-shopping-cart"></i>
                                            Add to cart
                                        </a>
                                        <a href="<?php echo url('products/' . array_get($product_h, 'id', ''));?>" class="view-details-link">
                                            <i class="fa fa-link"></i>
                                            See details
                                        </a>
                                    </div>
                                </div>
                                
                                <h2>
                                    <a href="single-product.html">
                                        <?php echo array_get($product_h, 'title', '');?>
                                    </a>
                                </h2>
                                
                                <div class="product-carousel-price">
                                    <ins>฿<?php echo array_get($product_h, 'price', '');?></ins>
                                    <del>฿<?php echo array_get($product_h, 'price_normal', '');?></del>
                                </div> 
                            </div>
<?php   endforeach; ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
<?php endif; ?>
