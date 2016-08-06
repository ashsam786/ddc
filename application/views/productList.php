<div id="content">
  <div class="container">
    <div class="catelog_c">
      
      <div class="title clearfix">
        <h2>Product Category</h2>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
          <div class="sidebar sidebar_1">  
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
          </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
          <div class="product_c">
            <div class="filter_c"> <span>Show:</span>
              <div class="select_box sel_1">
                <select class="selbx selectItemCount">
                  <option>12</option>
                  <option>20</option>
                  <option>30</option>
                  <option>40</option>
                  <option>50</option>
                </select>
              </div>
            </div>
            <div class="row view-grid animated  fadeInUp" data-animation="fadeInUp" >
            <?php if(isset($subCategories) && !empty($subCategories)){
                foreach($subCategories as $i => $row){ ?>            
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 ">
                      <div class="main_box">
                        <div class="box_1"> <img alt="alt"  width="259" height="200" src="<?php echo base_url('assets/media/product/'.$row->imagepath); ?>" draggable="false">
                          <div class="overlay"> <a href="#" class="btn_c cart_btn_1">Add to cart</a> <a href="<?php echo base_url('/'.$page->eurl.'/'.$row->seurl.'/'.$row->eurl); ?>" class="btn_c info_btn">More info</a> </div>
                        </div>
                        <div class="desc">
                          <h5><a href="<?php echo base_url('/'.$page->eurl.'/'.$row->seurl.'/'.$row->eurl); ?>" title="<?php echo $row->title; ?>"><?php echo limit_content_length($row->title, 60); ?></a></h5>
                          <p><?php echo $row->subcat; ?></p>
                          <div class="price">$<?php echo $row->price; ?></div>
                        </div>
                      </div>
                    </div>
            <?php }  
            } ?>              

            </div>
            <div class="page_c clearfix red5">
                <?php 
                  echo $prevLink;
                  echo '<ul>';
                  echo $this->pagination->create_links();
                  echo '</ul>';
                  echo $nextLink;
                ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>