<?php 
include('include/header.php');
include('include/menu.php');

preg_match("/[^\/]+$/", $this->uri->uri_string(), $values); 
$current_tot = '';
if($values[0]!=0){
    $current_tot = $values[0];
    $current_tot = $current_tot*10; 
}else{
    $current_tot = 10;
}
if(isset($per_page)&&(!empty($total_rows)))
    $pages = ceil($total_rows/$per_page);

?> 
     <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                 <div class="banner_content">
                    <h3 title="Search Result"><img class="left_img" src="<?php echo media_url(); ?>assets/img/banner/t-left-img.png" alt="">Search Result<img class="right_img" src="<?php echo media_url(); ?>assets/img/banner/t-right-img.png" alt=""></h3>                    
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->  
       <!--================search_reslut grid Area =================-->
        <section class="shop_area shop_left_sidebar_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 aline-center-box">
                        <div class="col-md-4 head-box">
                            <div class="welcome_title">
                                <h3>Search Result</h3>
                                 <img src="<?php echo media_url(); ?>assets/img/w-title-b.png" alt="">
                            </div>
                        </div>   
                    </div>    
                </div> 
                 <div class="row">
                     <div class="col-md-12 ">
                     <?php if(!empty($total_rows)) : ?>
                        <div class="col-md-8">
                            <p>Search Results :  <?php echo  $current_tot; ?> of <?php echo $total_rows; ?> </p>
                        </div>
                     <?php endif; ?>
                        <div class="search_btn back-box">
                                <a href="<?php echo base_url(); ?>search" class="register_angkar_btn">Back</a>
                        </div>
                     </div>
                </div>
                <div class="row">
                <div class="col-md-9">
                <?php
                if(!empty($results)){
                foreach($results as $value) { 
                    // echo $value['images']."<br>";
                    // echo base_url()."uploads/profile/".$value['images'];
                    // echo "image_status"."<br>".file_exists(base_url()."uploads/profile/".$value['images'])."<br>";
                    $prefix = '';
                    $prefix_one = 'th_';
                    $prefix_two = 'new_';
                    if(!empty($value['images'])){
                        $prefix_one_status = file_exists(FCPATH."uploads/profile/".$prefix_one.$value['images']);
                        $prefix_two_status = file_exists(FCPATH."uploads/profile/".$prefix_two.$value['images']);
                    }
                    // if(file_exists(FCPATH."uploads/profile/".$value['images'])){
                ?>                        
                    <div class="col-md-4 col-sm-6">
                         <?php //echo FCPATH."uploads/profile/".$value['images']; 
                            if(!empty($prefix_one_status))
                                $prefix = $prefix_one;
                            else if(!empty($prefix_two_status))
                                $prefix = $prefix_two;
                        ?>
                        <img src="<?php 
                            if(!empty($value['images'])): 
                                echo media_url()."uploads/profile/".$prefix.$value['images']; 
                            else:
                                echo media_url()."assets/img/no_image.jpg"; 
                            endif; 
                        ?>" alt="Image not loaded" style="width:170px;height:170px;">
                          <!-- <div><a href="#">More Images</a></div>  -->
                          <div>
                           <ul class="">
                              <li><a href="#lightbox" data-toggle="modal">More Images</a></li>
                            </ul>
                          </div> 
                          <div class="modal fade and carousel slide lig" id="lightbox">
                           <div class="modal-dialog ">
                              <div class="modal-body">
                                  <ol class="carousel-indicators">
                                    <li data-target="#lightbox" data-slide-to="0" class="active"></li>
                                    <li data-target="#lightbox" data-slide-to="1"></li>
                                    <li data-target="#lightbox" data-slide-to="2"></li>
                                  </ol>
                                  <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="numbertext">1 / 3</div>
                                      <img class="lig-box"src="<?php echo base_url(); ?>assets/img/search-result-page/img1.jpg" alt="First slide">
                                    </div>
                                    <div class="item">
                                        <div class="numbertext">2 / 3</div>
                                      <img class="lig-box" src="<?php echo base_url(); ?>assets/img/search-result-page/img1.jpg" alt="Second slide">
                                    </div>
                                    <div class="item">
                                         <div class="numbertext">3 / 3</div>
                                      <img class="lig-box" src="<?php echo base_url(); ?>assets/img/search-result-page/img1.jpg" alt="Third slide">
                                    </div>
                                  </div>
                                  <a class="left carousel-control" href="#lightbox" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                  </a>
                                  <a class="right carousel-control" href="#lightbox" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                  </a>
                              </div>
                           </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 border_box det_border">
                      <div class="head-box"><h4>Vallikodi ID : V1
                      <?php if(!empty($value['userdetail_id'])){ echo $value['userdetail_id'];}?></h4></div>
                        <div class="text-box-name">
                          <div class="col-md-5 col-xs-6 name-box">
                            <p><b>Name</b></p>
                          </div>
                            <div class="col-md-1 ">
                              <p> : </p>
                            </div>
                            <div class="col-md-6 ">
                             <p><?php if(!empty($value['user_fname'])){ echo $value['user_fname'];}?></p>
                            </div>
                        </div>    
                        <div class="col-md-5 col-xs-6 name-box">
                          <p><b>DOB / Age</b></p>
                        </div>
                        <div class="col-md-1 ">
                              <p> : </p>
                            </div>
                        <div class="col-md-6">
                            <p> <?php if(!empty($value['user_dob'])){ echo $value['user_dob'];}?></p>
                        </div>
                        <div class="col-md-5 col-xs-6 name-box">
                            <p><b>Star</b></p>
                        </div>
                        <div class="col-md-1 ">
                              <p> : </p>
                        </div>
                        <div class="col-md-6">
                          <p>  <?php if(!empty($value['rel_nakshathra_id'])){                             
                            $val = $this->user_model->get_nakshathra($value['rel_nakshathra_id']);
                            echo $val['name'];
                            }?></p>
                        </div>
                        <div class="col-md-5 col-md-5 col-xs-6 name-box">
                          <p><b>Religion</b></p>
                        </div>
                        <div class="col-md-1 ">
                              <p> : </p>
                        </div>
                        <div class="col-md-6">
                            <p> <?php if(!empty($value['rel_religion'])){ echo $value['rel_religion'];}?></p>
                        </div>
                        <div class="col-md-5 col-md-5 col-xs-6 name-box">
                          <p><b>Education</b></p>
                        </div>
                        <div class="col-md-1 ">
                              <p> : </p>
                        </div>
                        <div class="col-md-6">
                            <p> <?php if(!empty($value['edu_education'])){ 
                                $val = $this->user_model->get_education($value['edu_education']);
                                echo $val['edu_name'];
                                }?>
                            </p>
                        </div>
                        <div class="col-md-5 col-md-5 col-xs-6 name-box">
                          <p><b>Occupation</b></p>
                        </div>
                        <div class="col-md-1 ">
                              <p> : </p>
                        </div>
                        <div class="col-md-6">
                            <p> <?php if(!empty($value['edu_occupation'])){ 
                                $val = $this->user_model->get_occupation($value['edu_occupation']);
                                echo $val['occupation_name'];
                                }?>
                            </p>
                        </div>
                        <div class="text-box-name pu">
                          <div class="col-md-6">
                            <p><a href="<?php echo base_url().'viewdetail/'.$value['userdetail_id'];?>" target="_blank">View Full Details</a></p>
                          </div>  
                        </div>
                    </div>      
                <?php } 
                }else{?>
                     <div class="text-box-name" align="center">
                        <p>No Record Found</p>
                     </div>
                <?php }
                ?>
                </div>
                    <!-- <div class="col-md-3">
                        <div class="right_sidebar_area">
                            <aside class="s_widget categories_widget">
                                <div class="s_title">
                                    <h4>Searching Options</h4>
                                    <img src="<?php echo media_url(); ?>assets/img/widget-title-border.png" alt="">
                                </div>
                                <ul>
                                    <li><a href="#"><img src="<?php echo media_url(); ?>assets/img/categories-list.png" alt=""><b>Age Limit</b></a></li>
                                </ul>
                                <div class="s_widget price_widget age-box">
                                    <div id="price_select"></div>
                                        <div class="price_inner">
                                        <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                                        <!-- <a href="#">$50</a>
                                        <a href="#">$350</a> ->
                                    </div>
                                </div>
                                </aside>    
                        </div>
                    
                        <div class="right_sidebar_area">
                            <aside class="s_widget categories_widget">
                                <ul>
                                    <li><a href="#"><img src="<?php echo media_url(); ?>assets/img/categories-list.png" alt=""><b>Height Limit</b></a></li>
                                </ul>
                                <div class="s_widget price_widget age-box">
                                    <div id="height_select"></div>
                                        <div class="price_inner">
                                        <input type="text" id="height" readonly style="border:0; color:#f6931f; font-weight:bold;">
                                        <!-- <a href="#">$50</a>
                                        <a href="#">$350</a> ->
                                    </div>
                                </div>  
                                </aside>  
                        </div>
                   
                        <div class="right_sidebar_area">
                            <aside class="s_widget categories_widget">
                                <ul>
                                    <li><a href="#"><img src="<?php echo media_url(); ?>assets/img/categories-list.png" alt=""><b>Weight Limit</b></a></li>
                                </ul>
                                <div class="s_widget price_widget age-box">
                                    <div id="weight_select"></div>
                                        <div class="price_inner">
                                        <input type="text" id="weight" readonly style="border:0; color:#f6931f; font-weight:bold;">
                                        <!-- <a href="#">$50</a>
                                        <a href="#">$350</a> ->
                                    </div>
                                </div> 
                                </aside>   
                        </div>
                   
                        <div class="right_sidebar_area">
                            <aside class="s_widget categories_widget">
                                <ul>
                                    <li><a href="#"><img src="<?php echo media_url(); ?>assets/img/categories-list.png" alt=""><b>Marital Status</b></a></li>
                                </ul>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Single
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Widowed
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Divorced
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Annulled
                                    </label>
                                </div>
                                </aside>
                        </div>
                    
                        <div class="right_sidebar_area">
                            <aside class="s_widget categories_widget">
                                <ul>
                                    <li><a href="#"><img src="<?php echo media_url(); ?>assets/img/categories-list.png" alt=""><b>Occupation</b></a></li>
                                </ul>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Admin
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Airline
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Agriculture
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Other
                                    </label>
                                </div>
                                </aside>
                        </div>
                   
                        <div class="right_sidebar_area">
                            <aside class="s_widget categories_widget">
                                <ul>
                                    <li><a href="#"><img src="<?php echo media_url(); ?>assets/img/categories-list.png" alt=""><b>Education</b></a></li>
                                </ul>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Bachelor of Architecture - B.Arch.
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Bachelor of Arts - B.A.
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Bachelor of Computer Applications - B.C.A.
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Other
                                    </label>
                                </div>
                                </aside>
                        </div>
                    
                        <div class="right_sidebar_area">
                            <aside class="s_widget categories_widget">
                                <ul>
                                    <li><a href="#"><img src="<?php echo media_url(); ?>assets/img/categories-list.png" alt=""><b>Employed In</b></a></li>
                                </ul>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Business
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Defence
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                           Self Employed
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Other
                                    </label>
                                </div>
                                </aside>
                        </div>
                   
                        <div class="right_sidebar_area">
                            <aside class="s_widget categories_widget">
                                <ul>
                                    <li><a href="#"><img src="<?php echo media_url(); ?>assets/img/categories-list.png" alt=""><b>Food</b></a></li>
                                </ul>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                           Vegtarian
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                           Non - Vegtarian
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Eggetartion
                                    </label>
                                </div>
                                </aside>
                        </div>
                    
                        <div class="right_sidebar_area">
                            <aside class="s_widget categories_widget">
                                <ul>
                                    <li><a href="#"><img src="<?php echo media_url(); ?>assets/img/categories-list.png" alt=""><b>Complexion</b></a></li>
                                </ul>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                           Very Fair
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                           Fair
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                           Wheatish
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                           Dark
                                    </label>
                                </div>
                                </aside>
                        </div>
                    
                        <div class="right_sidebar_area">
                            <aside class="s_widget categories_widget">
                                <ul>
                                    <li><a href="#"><img src="<?php echo media_url(); ?>assets/img/categories-list.png" alt=""><b>Body Type</b></a></li>
                                </ul>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                           Average
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                          Althletic
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                          Slim
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                           Heavy
                                    </label>
                                </div>
                                </aside>
                        </div>
                    </div> -->
                </div>              
                <!-- <div class="pagination>                    
                    <a class="prev" href="#">Previous</a>
                    <a class="arrow_left" href="#"><i class="fa fa-angle-left"></i></a>
                    <a class="arrow_right" href="#"><i class="fa fa-angle-right"></i></a>
                    <a class="next" href="#">Next</a>
                </div> -->
                <?php
                if(!empty($links)) :
                            echo "<div class='col-md-8 nopadding pull-right '>
                                    <div class='pagination-box clearfix'>" .$links . "
                                        </div>
                                    </div>";
                endif;
                ?>
                <?php if(!empty($pages)): ?>
                    <select name="pagination_dropdown" id="pagination_dropdown" onchange="location = this.value;">
                        <?php                     
                        for($i=1;$i<=$pages;$i++){
                            if($i!=$values[0]){?>
                            <option value="<?php echo base_url()."search_result/".$i;?>">
                                <?php echo $i; 
                                ?>
                            </option>
                            <?php }else{?>
                            <option value="<?php echo base_url()."search_result/".$i;?>" selected>
                                <?php echo $i;?>
                            </option>
                            <?php }
                        }
                     ?>                    
                    </select>
                <?php endif; ?>
            </div>
        </section>
        <!--================End search_reslut grid Area =================-->               
        
       <!--  <div id="largeContent" style="display:none;">
            <div class="media tool_content">
                <div class="media-left">
                    <img src="<?php echo media_url(); ?>assets/img/map-persion.png" alt="">
                </div>
                <div class="media-body">
                    <h3>Sandi Williams</h3>
                    <h5>21 years old</h5>
                    <h5>From Paris</h5>
                    <h5>Distance 16 km</h5>
                </div>
            </div>
        </div> -->
<?php 
    include('include/footer.php');
?> 

