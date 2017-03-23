@extends('layouts.ustora')

@section('title', 'ร้านบ้านดอกไม้สด :: หน้าหลัก')

@section('content')

<?php if (isset($banners) && is_array($banners)) : ?>
    <div class="slider-area">
        	<!-- Slider -->
			<div class="block-slider block-slider4">
				<ul class="" id="bxslider-home4">

<?php foreach ($banners as $banner) : ?>
					<li>
						<img src="<?php echo array_get($banner, 'images.0.url', ''); ?>" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								<?php echo array_get($banner, 'title', ''); ?>
							</h2>
							<h4 class="caption subtitle"><?php echo array_get($banner, 'subtitle', ''); ?></h4>
<?php   if (array_get($banner, 'type', '0') > 0) : ?>
							<a class="caption button-radius" href="<?php echo array_get($banner, 'button_url', ''); ?>">
                                <span class="icon"></span>
                                <?php echo array_get($banner, 'button_title', ''); ?>
                            </a>
<?php   endif; ?>
						</div>
					</li>
<?php endforeach; ?>

				</ul>
			</div>
			<!-- ./Slider -->
    </div> <!-- End slider area -->
<?php endif; ?>
    
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>30 Days return</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Free shipping</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>New products</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">สินค้าล่าสุดของเรา</h2>
                        <div class="product-carousel">
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="public/img/products/001.png" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="single-product.html">ช่อกุหลาบสีขาว</a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins>฿700.00</ins> <del>฿1000.00</del>
                                </div> 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="public/img/products/002.png" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2>ช่อกุหลาบสีชมพู</h2>
                                <div class="product-carousel-price">
                                    <ins>฿899.00</ins> <del>฿999.00</del>
                                </div> 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="public/img/products/003.png" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2>ช่อกุหลาบสีแดง + สีชมพู</h2>

                                <div class="product-carousel-price">
                                    <ins>฿400.00</ins> <del>฿425.00</del>
                                </div>                                 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="public/img/products/004.png" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="single-product.html">ช่อกุหลาบสีแดง</a></h2>

                                <div class="product-carousel-price">
                                    <ins>฿200.00</ins> <del>฿225.00</del>
                                </div>                            
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="public/img/products/005.png" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2>แจกันกุหลาบสีขาว</h2>

                                <div class="product-carousel-price">
                                    <ins>฿1200.00</ins> <del>฿1355.00</del>
                                </div>                                 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="public/img/products/001.png" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="single-product.html">Samsung gallaxy note 4</a></h2>

                                <div class="product-carousel-price">
                                    <ins>฿400.00</ins>
                                </div>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    
    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            <img src="public/demo/ustora/img/brand1.png" alt="">
                            <img src="public/demo/ustora/img/brand2.png" alt="">
                            <img src="public/demo/ustora/img/brand3.png" alt="">
                            <img src="public/demo/ustora/img/brand4.png" alt="">
                            <img src="public/demo/ustora/img/brand5.png" alt="">
                            <img src="public/demo/ustora/img/brand6.png" alt="">
                            <img src="public/demo/ustora/img/brand1.png" alt="">
                            <img src="public/demo/ustora/img/brand2.png" alt="">                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->
    
    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top Sellers</h2>
                        <a href="" class="wid-view-more">View All</a>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="public/img/products/001_thumb.png" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">ช่อกุหลาบสีชมพู</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>฿400.00</ins> <del>฿425.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="public/img/products/001_thumb.png" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">ช่อกุหลาบสีชมพู</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>฿400.00</ins> <del>฿425.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="public/img/products/001_thumb.png" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">ช่อกุหลาบสีชมพู</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>฿400.00</ins> <del>฿425.00</del>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Recently Viewed</h2>
                        <a href="#" class="wid-view-more">View All</a>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="public/img/products/001_thumb.png" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">ช่อกุหลาบสีชมพู</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>฿400.00</ins> <del>฿425.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="public/img/products/001_thumb.png" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">ช่อกุหลาบสีชมพู</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>฿400.00</ins> <del>฿425.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="public/img/products/001_thumb.png" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">ช่อกุหลาบสีชมพู</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>฿400.00</ins> <del>฿425.00</del>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top New</h2>
                        <a href="#" class="wid-view-more">View All</a>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="public/img/products/001_thumb.png" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">ช่อกุหลาบสีชมพู</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>฿400.00</ins> <del>฿425.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="public/img/products/001_thumb.png" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">ช่อกุหลาบสีชมพู</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>฿400.00</ins> <del>฿425.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="public/img/products/001_thumb.png" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">ช่อกุหลาบสีชมพู</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>฿400.00</ins> <del>฿425.00</del>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End product widget area -->
@endsection

@push('styles')
    <style type="text/css">
    	/* Style */
    </style>
@endpush

@push('scripts')
    <script type="text/javascript">
        $(function () {
        	/* Script */
        });
	</script>
@endpush
