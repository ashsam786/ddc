<div id="content">
  <div class="container">
    <div class="catelog_c">
      
      <div class="title clearfix">
        <h2>Product Category</h2>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
          <div class="sidebar sidebar_1 " >
            
          <?php if(isset($subcategory_list['en']) && !empty($subcategory_list['en'])){
             foreach($subcategory_list['en'] as $i => $v){ ?>
                <div class="side_box side_box_1 red5">
                  <h5><a href="<?php echo base_url($v[0]['cat_eurl']); ?>" class="tgl_btn"><?php echo $i; ?></a></h5>
                  <ul class="tgl_c">
                    <?php foreach($v as $r){ ?>
                        <li><a href="<?php echo base_url($i.'/'.$r['subcat_eurl']); ?>"><?php echo $r['subcategory']; ?></a></li>
                    <?php } ?>
                  </ul>
                </div>
          <?php  }             
          } ?>

            <!--div class="side_box side_box_1 red5">
              <h5><a href="#" class="tgl_btn">categories</a></h5>
              <ul class="tgl_c">
                <li><a href="#">Tea and Coffee</a></li>
                <li><a href="#">Cutlery</a></li>
                <li><a href="#">Chopping Boards </a></li>
                <li><a href="#">Textile</a></li>
                <li><a href="#">Household Appliances</a></li>
                <li><a href="#">Pots</a></li>
                <li><a href="#">Barbecue</a></li>
              </ul>
            </div>
            <div class="side_box side_box_1 red5">
              <h5><a href="#" class="tgl_btn">categories</a></h5>
              <ul class="tgl_d">
                <li><a href="#">Tea and Coffee</a></li>
                <li><a href="#">Cutlery</a></li>
                <li><a href="#">Chopping Boards </a></li>
                <li><a href="#">Textile</a></li>
                <li><a href="#">Household Appliances</a></li>
                <li><a href="#">Pots</a></li>
                <li><a href="#">Barbecue</a></li>
              </ul>
            </div>
            <div class="side_box side_box_1 red5">
              <h5><a href="#" class="tgl_btn">categories</a></h5>
              <ul class="tgl_c">
                <li><a href="#">Tea and Coffee</a></li>
                <li><a href="#">Cutlery</a></li>
                <li><a href="#">Chopping Boards </a></li>
                <li><a href="#">Textile</a></li>
                <li><a href="#">Household Appliances</a></li>
                <li><a href="#">Pots</a></li>
                <li><a href="#">Barbecue</a></li>
              </ul>
            </div>
            <div class="side_box side_box_1 red5">
              <h5><a href="#" class="tgl_btn">categories</a></h5>
              <ul class="tgl_c">
                <li><a href="#">Tea and Coffee</a></li>
                <li><a href="#">Cutlery</a></li>
                <li><a href="#">Chopping Boards </a></li>
                <li><a href="#">Textile</a></li>
                <li><a href="#">Household Appliances</a></li>
                <li><a href="#">Pots</a></li>
                <li><a href="#">Barbecue</a></li>
              </ul>
            </div-->
            
            
            
            
          </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
          <div class="product_c">
            <div class="filter_c"> <span>Show:</span>
              <div class="select_box sel_1">
                <select class="selbx ">
                  <option>25</option>
                  <option>1</option>
                  <option>2</option>
                </select>
              </div>
             
              
            </div>
            <div class="row view-grid animated  fadeInUp" data-animation="fadeInUp" >

            <?php if(isset($subCategories) && !empty($subCategories)){
                foreach($subCategories as $i => $row){ ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 ">
                      <div class="main_box">
                        <div class="box_1"> <img alt="alt"  width="259" height="200" src="<?php echo base_url('assets/media/product/'.$row->imagepath); ?>" draggable="false">
                          <div class="overlay"> <a href="#" class="btn_c cart_btn_1">Add to cart</a> <a href="<?php echo base_url('#'); ?>" class="btn_c info_btn">More info</a> </div>
                        </div>
                        <div class="desc">
                          <h5><a href="#" title="<?php echo $row->title; ?>"><?php echo limit_content_length($row->title, 65); ?></a></h5>
                          <p><?php echo $row->subcat; ?></p>
                          <div class="price">$<?php echo $row->price; ?></div>
                        </div>
                      </div>
                    </div>
            <?php }  
            } ?>              

            </div>
            <div class="page_c clearfix red5"> <a href="#" class="prev"><span class="fa fa-chevron-left"></span>Previous</a>
              <ul>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li><a href="#">7</a></li>
                <li><a href="#">8</a></li>
                <li><a href="#">9</a></li>
                <li><a href="#">10</a></li>
              </ul>
              <a href="#" class="next">Next<span class="fa fa-chevron-right"></span></a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>