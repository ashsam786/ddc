<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div id="content">
  <div class="container">
    <div class="title clearfix">
      <h2><?php echo $product->title; ?></h2>
      <div class="title_right"> <a href="<?php echo base_url('products'); ?>" class="backtocate"><span class="fa fa-arrow-circle-left"></span>Back to catalog</a> </div>
    </div>
    <div class="pro_main_c">
      <div class="row">
        <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12 animated  animation-done bounceInLeft" data-animation="bounceInLeft">
          <div class="slider_1 clearfix">
            <div class="clearfix" id="image-block">
  <div id="slider-product" class="flexslider">
    <ul class="slides">
      <li> <img src="media/product/1.jpg"/> </li>
      <li> <img src="media/product/2.jpg"/> </li>
      <li> <img src="media/product/3.jpg"/> </li>
      <li> <img src="media/product/4.jpg"/> </li>
      <li> <img src="media/product/1.jpg"/> </li>
      <li> <img src="media/product/2.jpg"/> </li>
      <li> <img src="media/product/3.jpg"/> </li>
      <li> <img src="media/product/4.jpg"/> </li>

    </ul>
  </div>
  <div id="carousel" class="flexslider">
    <ul class="slides">
      <li> <div class="carousel-item"><img src="media/product/1.jpg"/></div> </li>
     <li> <div class="carousel-item"><img src="media/product/2.jpg"/></div> </li>
          <li> <div class="carousel-item"><img src="media/product/3.jpg"/></div> </li>
               <li> <div class="carousel-item"><img src="media/product/4.jpg"/></div> </li>
      <li> <div class="carousel-item"><img src="media/product/1.jpg"/></div> </li>
     <li> <div class="carousel-item"><img src="media/product/2.jpg"/></div> </li>
          <li> <div class="carousel-item"><img src="media/product/3.jpg"/></div> </li>
               <li> <div class="carousel-item"><img src="media/product/4.jpg"/></div> </li>
    </ul>
  </div>
</div>
          </div>
        </div>
        <div class="col-lg-6 col-md-5 col-sm-6 col-xs-12 animated animation-done  bounceInRight" data-animation="bounceInRight">
          <div class="desc_blk">
            <h5>description</h5>
            <div class="desc_blk_inn">
				<?php echo $product->description; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="tabing animated  animation-done bounceInUp "  data-animation="bounceInUp">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#information" data-toggle="tab">More INFORMATION</a></li>
        </ul>
        
        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active" id="information">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			  <?php foreach($pdetail as $i => $v){ ?>
				<?php if(isset($v['en'])){ ?>
					<div class="rew_blk clearfix">
					  <h5><?php echo $i; ?></h5>
					  <?php foreach($v['en'] as $ind => $val){
						  echo '<p><strong>'.$ind.':</strong> '.$val.'</p>';
					  } ?>
					</div>					
				<?php } ?>
			  <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=" animated  fadeInUp" data-animation="fadeInUp">
        <div class="clearfix">
          <h3>Related Products</h3>
        </div>
        <div class="carosel product_c">
          <div class="row"> 
            <!-- Place somewhere in the <body> of your page -->
            <div >
              <ul class="bxcarousel" >
             <li>
                  <div class="main_box">
                    <div class="box_1"> <img alt="alt"  src="media/product/1.jpg" width="259" height="200">
                    
                    
                    <div class="overlay"> <a class="btn_c cart_btn_1" href="#">Add to cart</a> <a class="btn_c info_btn" href="product.html">More info</a> </div>
                    
                    </div>
                    <div class="desc">
                      <h5>2-piece salad servers set</h5>
                      <p>Kitchen utensils</p>
                      <div class="price">$1.50</div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="main_box">
                    <div class="box_1"> <img alt="alt"  src="media/product/2.jpg" width="259" height="200">
                    
                                <div class="overlay"> <a class="btn_c cart_btn_1" href="#">Add to cart</a> <a class="btn_c info_btn" href="product.html">More info</a> </div>
                    
                    </div>
                    <div class="desc">
                      <h5>2-piece salad servers set</h5>
                      <p>Kitchen utensils</p>
                      <div class="price">$1.50</div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="main_box">
                    <div class="box_1"> <img alt="alt"  src="media/product/3.jpg" width="259" height="200">
                    
                                <div class="overlay"> <a class="btn_c cart_btn_1" href="#">Add to cart</a> <a class="btn_c info_btn" href="product.html">More info</a> </div>
                    
                    
                    </div>
                    <div class="desc">
                      <h5>2-piece salad servers set</h5>
                      <p>Kitchen utensils</p>
                      <div class="price">$1.50</div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="main_box">
                    <div class="box_1"> <img alt="alt"  src="media/product/4.jpg" width="259" height="200">
                    
                                <div class="overlay"> <a class="btn_c cart_btn_1" href="#">Add to cart</a> <a class="btn_c info_btn" href="product.html">More info</a> </div>
                                
                                </div>
                    <div class="desc">
                      <h5>2-piece salad servers set</h5>
                      <p>Kitchen utensils</p>
                      <div class="price">$1.50</div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="main_box">
                    <div class="box_1"> <img alt="alt"  src="media/product/1.jpg" width="259" height="200">
                    
                                <div class="overlay"> <a class="btn_c cart_btn_1" href="#">Add to cart</a> <a class="btn_c info_btn" href="product.html">More info</a> </div>
                    
                    </div>
                    <div class="desc">
                      <h5>2-piece salad servers set</h5>
                      <p>Kitchen utensils</p>
                      <div class="price">$1.50</div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="main_box">
                    <div class="box_1"> <img alt="alt"  src="media/product/1.jpg" width="259" height="200">
                                <div class="overlay"> <a class="btn_c cart_btn_1" href="#">Add to cart</a> <a class="btn_c info_btn" href="product.html">More info</a> </div>
                    
                    
                    </div>
                    <div class="desc">
                      <h5>2-piece salad servers set</h5>
                      <p>Kitchen utensils</p>
                      <div class="price">$1.50</div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="main_box">
                    <div class="box_1"> <img alt="alt"  src="media/product/2.jpg" width="259" height="200">
                                <div class="overlay"> <a class="btn_c cart_btn_1" href="#">Add to cart</a> <a class="btn_c info_btn" href="product.html">More info</a> </div>
                    
                    
                    </div>
                    <div class="desc">
                      <h5>2-piece salad servers set</h5>
                      <p>Kitchen utensils</p>
                      <div class="price">$1.50</div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="main_box">
                    <div class="box_1"> <img alt="alt"  src="media/product/3.jpg" width="259" height="200">
                    
                                <div class="overlay"> <a class="btn_c cart_btn_1" href="#">Add to cart</a> <a class="btn_c info_btn" href="product.html">More info</a> </div>
                    </div>
                    <div class="desc">
                      <h5>2-piece salad servers set</h5>
                      <p>Kitchen utensils</p>
                      <div class="price">$1.50</div>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="main_box">
                    <div class="box_1"> <img alt="alt"  src="media/product/4.jpg" width="259" height="200">
                                <div class="overlay"> <a class="btn_c cart_btn_1" href="#">Add to cart</a> <a class="btn_c info_btn" href="product.html">More info</a> </div>
                    
                    </div>
                    <div class="desc">
                      <h5>2-piece salad servers set</h5>
                      <p>Kitchen utensils</p>
                      <div class="price">$1.50</div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="main_box">
                    <div class="box_1"> <img alt="alt"  src="media/product/1.jpg" width="259" height="200">
                    
                                <div class="overlay"> <a class="btn_c cart_btn_1" href="#">Add to cart</a> <a class="btn_c info_btn" href="product.html">More info</a> </div>
                    </div>
                    <div class="desc">
                      <h5>2-piece salad servers set</h5>
                      <p>Kitchen utensils</p>
                      <div class="price">$1.50</div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="main_box">
                    <div class="box_1"> <img alt="alt"  src="media/product/1.jpg" width="259" height="200">
                    
                                <div class="overlay"> <a class="btn_c cart_btn_1" href="#">Add to cart</a> <a class="btn_c info_btn" href="product.html">More info</a> </div>
                    
                    </div>
                    <div class="desc">
                      <h5>2-piece salad servers set</h5>
                      <p>Kitchen utensils</p>
                      <div class="price">$1.50</div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="main_box">
                    <div class="box_1"> <img alt="alt"  src="media/product/2.jpg" width="259" height="200">
                    
                                <div class="overlay"> <a class="btn_c cart_btn_1" href="#">Add to cart</a> <a class="btn_c info_btn" href="product.html">More info</a> </div>
                    
                    </div>
                    <div class="desc">
                      <h5>2-piece salad servers set</h5>
                      <p>Kitchen utensils</p>
                      <div class="price">$1.50</div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="main_box">
                    <div class="box_1"> <img alt="alt"  src="media/product/3.jpg" width="259" height="200">
                    
                                <div class="overlay"> <a class="btn_c cart_btn_1" href="#">Add to cart</a> <a class="btn_c info_btn" href="product.html">More info</a> </div>
                    
                    </div>
                    <div class="desc">
                      <h5>2-piece salad servers set</h5>
                      <p>Kitchen utensils</p>
                      <div class="price">$1.50</div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="main_box">
                    <div class="box_1"> <img alt="alt"  src="media/product/4.jpg" width="259" height="200">
                    
                    
                    
                                <div class="overlay"> <a class="btn_c cart_btn_1" href="#">Add to cart</a> <a class="btn_c info_btn" href="product.html">More info</a> </div>
                    </div>
                    <div class="desc">
                      <h5>2-piece salad servers set</h5>
                      <p>Kitchen utensils</p>
                      <div class="price">$1.50</div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="main_box">
                    <div class="box_1"> <img alt="alt"  src="media/product/1.jpg" width="259" height="200">
                    
                                <div class="overlay"> <a class="btn_c cart_btn_1" href="#">Add to cart</a> <a class="btn_c info_btn" href="product.html">More info</a> </div>
                    
                    </div>
                    <div class="desc">
                      <h5>2-piece salad servers set</h5>
                      <p>Kitchen utensils</p>
                      <div class="price">$1.50</div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>