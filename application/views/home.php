<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!--SLIDER <?php echo base_url('assets/css/master.css'); ?>START-->

<div class="flexslider home-slider">

  <ul class="slides">

    <li> <img alt="alt" src="<?php echo base_url('assets/media/slides/2.jpg'); ?>" >

      <div class="flex-caption">

        <div class="banner">

          <h1>Lorem Ipsem Dollar</h1>

          <div class="line_1"></div>

          <h4>Maecenas non justo varius, egestas nisi nec, ultrices erat. Aliquam elit urna</h4>

          <p>Sed iaculis, nisi vel rhoncus sagittis, est risus ultricies eros, a varius diam eros pretium arcu. <br>

            Etiam mattis orci ut pharetra laoreet.</p>

          <a class="btn_c" href="#">Details</a> </div>

      </div>

    </li>

     <li> <img alt="alt" src="<?php echo base_url('assets/media/slides/1.jpg'); ?>" >

      <div class="flex-caption">

        <div class="banner">

          <h1>Lorem Ipsem Dollar</h1>

          <div class="line_1"></div>

          <h4>Maecenas non justo varius, egestas nisi nec, ultrices erat. Aliquam elit urna</h4>

          <p>Sed iaculis, nisi vel rhoncus sagittis, est risus ultricies eros, a varius diam eros pretium arcu. <br>

            Etiam mattis orci ut pharetra laoreet.</p>

          <a class="btn_c" href="#">Details</a> </div>

      </div>

    </li>

     <li> <img alt="alt" src="<?php echo base_url('assets/media/slides/3.jpg'); ?>" >

      <div class="flex-caption">

        <div class="banner">

          <h1>Lorem Ipsem Dollar</h1>

          <div class="line_1"></div>

          <h4>Maecenas non justo varius, egestas nisi nec, ultrices erat. Aliquam elit urna</h4>

          <p>Sed iaculis, nisi vel rhoncus sagittis, est risus ultricies eros, a varius diam eros pretium arcu. <br>

            Etiam mattis orci ut pharetra laoreet.</p>

          <a class="btn_c" href="#">Details</a> </div>

      </div>

    </li>

    

  

  </ul>

  <div class="container">

    <div class="banner_nav ">

      <div class="scroll_down">Scroll down <span class="fa fa-arrow-circle-down"></span></div>

    </div>

  </div>

</div>

<!--SLIDER END -->

<div id="content">

  <div class="container">

    <div class="h_row_1 ideas-hover">

      <div class="row">

        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12  animated" data-animation="rollIn" >

          <div class="box hg_510 box_1 red5">

            <figure class="effect-chico"> <img alt="alt" src="<?php echo base_url('assets/media/promo/1.jpg'); ?>" width="760" height="510" >

              <figcaption> </figcaption>

            </figure>

            <div class="box_inn">

              <h1>5 unforgateable Rings Ideas</h1>

              <p>Nullam eros diam, rhoncus sit amet laoreet nec,<br>

                commodo pharetra lorem.<a href="#" class="fa fa-arrow-circle-right"></a></p>

            </div>

          </div>

        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 animated" data-animation="bounceInRight">

          <div class="box hg_510 box_2 red5">

            <figure class="effect-chico"> <img alt="alt" src="<?php echo base_url('assets/media/promo/2.jpg'); ?>" width="360" height="510" >

              <figcaption> </figcaption>

            </figure>

            <div class="box_inn">

              <h1>Awesome Collection 

                </h1>

              <p>Nullam eros diam, rhoncus sit amet laoreet nec, commodo pharetra lorem.<a href="#" class="fa fa-arrow-circle-right"></a></p>

            </div>

          </div>

        </div>

      </div>

    </div>

    <div class="h_row_2 ideas-hover">

      <div class="row">

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12  animated" data-animation="rollIn">

          <div class="box hg_310 box_1 red5">

            <figure class="effect-chico "> <img alt="alt" src="<?php echo base_url('assets/media/promo/3.jpg'); ?>" width="260" height="310" >

              <figcaption> </figcaption>

            </figure>

            <div class="box_inn">

              <h5>Ultimate Bngal Collection</h5>

              <p>Donec blandit erat rutrum</p>

            </div>

          </div>

        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 animated" data-animation="fadeInUpBig">

          <div class="box hg_310 box_2 red5">

            <figure class="effect-chico "> <img alt="alt" src="<?php echo base_url('assets/media/promo/4.jpg'); ?>" width="560" height="310" >

              <figcaption> </figcaption>

            </figure>

            <div class="box_inn">

              <h1>Selection of a Large Collection</h1>

              <p>Egestas nisi nec, ultrices erat. Aliquam elit urna, rutrum et accumsan in <a href="#" class="fa fa-arrow-circle-right"></a></p>

            </div>

          </div>

        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 animated" data-animation="bounceInRight">

          <div class="box hg_310 box_3 red5">

            <figure class="effect-chico "> <img alt="alt" src="<?php echo base_url('assets/media/promo/5.jpg'); ?>" width="259" height="310" >

              <figcaption> </figcaption>

            </figure>

            <div class="box_inn">

              <h5>Multicolored Rings Design</h5>

              <ul>

                <li><span></span></li>

                <li><span></span></li>

                <li><span></span></li>

                <li><span></span></li>

              </ul>

            </div>

          </div>

        </div>

      </div>

    </div>

    <div class="h_row_3 animated" data-animation="fadeInUp">

      <h1 style="color:#E6D484">Welcome To 47th DDC</h1>

      <p><?php  if(isset($cms) AND !empty($cms)){ echo $cms[0]['content']; } ?></p>

      <a href="/aboutus" class="btn_c">Read More &rarr;</a>

      

    </div>

    <div class="clearfix">&nbsp;</div>

    <hr>

    <div class=" animated" data-animation="fadeInUp">

      <div class="clearfix">

        <h3 class="ttl">LATEST COLLECTION </h3>

      </div>

      <div class="carosel product_c">
          <div class="row"> 
            <!-- Place somewhere in the <body> of your page -->
            <div >
              <ul class="bxcarousel" >
                <?php foreach($latest_collection as $i => $item){ ?>
                <li>
                  <div class="main_box">
                    <div class="box_1"> 
                      <!--img alt="alt" src="<?php echo base_url('assets/media/product/'.$item['imagepath']); ?>" width="259" height="200"-->
                      <img alt="alt" src="<?php echo base_url('assets/media/product/1.jpg'); ?>" width="259" height="200">
                      <div class="overlay"><a class="btn_c info_btn" href="<?php echo base_url(strtolower($item['ceurl']).'/'.strtolower($item['seurl']).'/'.strtolower($item['peurl'])); ?>">More info</a> </div>
                    </div>
                    <div class="desc">
                      <h5><?php echo $item['title']; ?></h5>
                      <p></p>
                      <div class="price">Rs. <?php echo $item['price']; ?></div>
                    </div>
                  </div>
                </li>
                <?php } ?>
              </ul>

            </div>

          </div>

        </div>

    </div>

  </div>

</div>