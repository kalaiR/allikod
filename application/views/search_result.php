<?php if(!$this->input->is_ajax_request()) { ?>
<?php 
include('include/header.php');
include('include/menu.php');
// print_r($results);
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
                        <div class="col-md-8">
                            <!-- <?php //if(!empty($total_rows)) : ?>
                                <p>
                                    Search Results :  <?php //echo  $current_tot; ?> of <?php //echo $total_rows; ?>
                                    <?php //if(!empty($rdisplayresults)) : ?>
                                        <?php //echo  " - ".$rdisplayresults;?>
                                    <?php //endif; ?>    
                                </p>
                            <?php //endif; ?> -->
                        </div>
                        <div class="search_btn back-box">
                                <a href="<?php echo base_url(); ?>search" class="register_angkar_btn">Back</a>
                        </div>
                     </div>
                </div>
                <div class="row">
                    <div class="col-md-9 ajaxdata">
<?php } ?>
                    <?php 
                        // if(isset($search_data))
                        //     print_r($search_data);
                        $session_search = $this->session->all_userdata();
                        if(!empty($session_search['search_inputs']['show_profile'])){
                            $displayresults =  $session_search['search_inputs']['show_profile'];
                            if($displayresults == 'both'){
                                $rdisplayresults = "With All Photos";
                            }elseif($displayresults == 'with_photo'){
                                $rdisplayresults = "With Photos";
                            }elseif($displayresults == 'without_photo'){
                                $rdisplayresults = "Without Photos";    
                            }
                        }

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
                	<?php if(!empty($total_rows)) : ?>
                        <p>
                            Search Results :  <?php echo  $current_tot; ?> of <?php echo $total_rows; ?>
                            <?php if(!empty($rdisplayresults)) : ?>
                                <?php echo  " - ".$rdisplayresults;?>
                            <?php endif; ?>    
                        </p>
                    <?php endif; ?>
                    <?php
                        if(!empty($results)){                    
                        foreach($results as $key => $value) { 
                            $prefix = '';
                            $prefix_one = 'th_';
                            $prefix_two = 'new_';
                            $prefix_latest_images = '';
                            $default_images = '';
                            $latest_images = '';  
                            unset($current_images);
                            $current_images = array();                      
                            if(!empty($value['images'])){
                                $current_images = explode(',', $value['images'] );
                                $latest_images = end($current_images);                       
                                $prefix_one_status = file_exists(FCPATH."uploads/profile/".$prefix_one.$latest_images);
                                $prefix_two_status = file_exists(FCPATH."uploads/profile/".$prefix_two.$latest_images); 
                                $prefix_latest_images = file_exists(FCPATH."uploads/profile/".$latest_images); 
                            }
                            // To get Gender based image for display //
                            if((!empty($value['user_gender']))&&($value['user_gender']!=1)){
                                    $default_images = "defalt_female.png";
                            }else{
                                    $default_images = "defalt_male.png";
                            }
                    ?>                        
                    <div class="col-md-4 col-xs-6">                    
                         <?php                             
                            if(!empty($prefix_one_status))
                                $prefix = $prefix_one;
                            else if(!empty($prefix_two_status))
                                $prefix = $prefix_two;                            

                        // echo  "prefix===========>".$prefix;                                   
                        ?>
                        <img src="<?php 
                            if((!empty($value['images']))&&(!empty($prefix))): 
                                echo media_url()."uploads/profile/".$prefix.$latest_images; 
                            else:
                                echo media_url()."uploads/profile/".$default_images; 
                            endif; 
                        ?>" alt="Image not loaded" style="width:170px;height:170px;">
                          <div>
                           <ul class="">
                              <li><a href="#lightbox<?php echo $key;?>" data-toggle="modal">More Images</a></li>
                            </ul>
                          </div> 
                          <?php 
                          // echo '<pre>';
                          // print_r($current_images);
                          // echo '</pre>';
                          ?>
                          <div class="modal fade and carousel slide lig" id="lightbox<?php echo $key;?>">
                           <div class="modal-dialog ">
                              <div class="modal-body">
                                  <ol class="carousel-indicators">
                                        <?php 
                                        if(!empty($current_images)){
                                        foreach($current_images as $ckey => $cvalue) { ?>
                                            <li data-target="#lightbox" data-slide-to="<?php echo $ckey;?>"></li>
                                        <?php } }?>
                                  </ol>
                                  <div class="carousel-inner">
                                            <?php 
                                                if(!empty($value['images'])){              
                                                    foreach($current_images as $skey => $svalue) {       
                                                        if($skey!=0){?>
                                                            <div class="item">
                                                                    <div class="numbertext"><?php echo $skey+1;?> / <?php echo count($current_images);?></div>
                                                                    <img class="lig-box"src="<?php echo media_url()."uploads/profile/".$prefix_two.$svalue;?>" alt="First slide">
                                                            </div>
                                                        <?php }else{?>
                                                             <div class="item active">
                                                                <div class="numbertext"><?php echo $skey+1;?> / <?php echo count($current_images);?></div>
                                                                <img class="lig-box"src="<?php echo media_url()."uploads/profile/".$prefix_two.$svalue;?>" alt="First slide">
                                                                </div>
                                                        <?php }
                                                    }
                                            } ?>
                                  </div>
                                  <a class="left carousel-control" href="#lightbox<?php echo $key;?>" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                  </a>
                                  <a class="right carousel-control" href="#lightbox<?php echo $key;?>" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                  </a>
                              </div>
                           </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 border_box det_border">
                        <div class="head-box"><h4>Vallikodi ID : V1
                          <?php if(!empty($value['userdetail_id'])){ echo $value['userdetail_id'];}?></h4>
                        </div>
                        <!-- <div class="text-box-name"> -->
                            <div class="col-md-5 col-xs-5 name-box">
                                <p><b>Name</b></p>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <p><?php if(!empty($value['user_fname'])){ echo $value['user_fname'];}?></p>
                            </div>
                            <!-- </div>     -->
                            <div class="col-md-5 col-xs-5 name-box">
                              <p><b>DOB/Age</b></p>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <p> <?php if(!empty($value['user_dob'])){ echo $value['user_dob'];}?></p>
                            </div>
                            <div class="col-md-5 col-xs-5 name-box">
                                <p><b>Star</b></p>
                            </div>
                            <div class="col-md-6 col-xs-6">
                              <p>  <?php if(!empty($value['rel_nakshathra_id'])){                             
                                $val = $this->user_model->get_nakshathra($value['rel_nakshathra_id']);
                                echo $val['name'];
                                }else "None";?></p>
                            </div>
                            <div class="col-md-5 col-xs-5 name-box">
                              <p><b>Religion</b></p>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <p> <?php if(!empty($value['rel_religion'])){ echo $value['rel_religion'];} else "None"; ?></p>
                            </div>
                            <div class="col-md-5 col-xs-5 name-box">
                              <p><b>Education</b></p>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <p> <?php if(!empty($value['edu_education'])){ 
                                    $val = $this->user_model->get_education($value['edu_education']);
                                    echo $val['edu_name'];
                                    } else "None"; ?>
                                </p>
                            </div>
                            <div class="col-md-5 col-xs-5 name-box">
                              <p><b>Occupation</b></p>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <p> <?php if(!empty($value['edu_occupation'])){ 
                                    $val = $this->user_model->get_occupation($value['edu_occupation']);
                                    echo $val['occupation_name'];
                                    } else "None";?>
                                </p>
                            </div>
                            <?php 
                                $user_session = $this->session->userdata("login_status");
                                if(!empty($user_session)){ ?>
                                        <div class="col-md-5 col-xs-5 name-box">
                                            <p><b>Location</b></p>
                                        </div>
                                        <div class="col-md-6 col-xs-6">
                                            <p> 
                                            <?php if(!empty($value['comm_current_countrycountry'])){ echo $value['comm_current_countrycountry'];}
                                            ?>
                                            <?php if(!empty($value['comm_current_city'])){ echo " / ".$value['comm_current_city'];}
                                            ?>
                                            <?php //if(!empty($value['comm_current_district'])){ echo " / ".$value['comm_current_district'];}
                                            ?>
                                            </p>
                                        </div>
                                <?php } ?>    
                                <div style="clear:both"></div>
                            <div class="text-box-name">
                             <?php
                               $user_session = $this->session->userdata("login_status");
                               if(!empty($user_session)){ ?>
                                    <div class="col-md-6 col-xs-9">
                                        <p><a href="<?php echo base_url().'viewdetail/'.$value['userdetail_id'];?>" target="_blank">View Full Details</a>
                                        </p>
                                    </div>
                                <?php }else{ ?>
                                     <a class="popup-with-zoom-anim" href="#small-dialog">View Full Details</a>
                                <?php } ?>    
                            </div>
                        <!-- </div> -->
                    </div> 
                    <?php } 
                    }else{?>
                         <div class="text-box-name" align="center">
                            <p>No Record Found</p>
                         </div>
                    <?php }
                    ?>

                    <div class="col-md-12" style="display: inline-block;">
                        <div>
                        <?php
                        if(!empty($links)) :
                            echo "<div class='col-md-8 nopadding pull-right '>
                                        <div class='col-md-5 col-xs-12 pagination-box clearfix' style='display:inline-block'>" .$links . "
                                    </div>";
                            if(!empty($pages)) : ?>
                            <!-- <div class="col-md-2 goto">Go to</div> -->
                            <div class="col-md-4 dir_page">Go to
                              <select class="extra_drop pagination_scrol" name="pagination_dropdown" id="pagination_dropdown" 
                              onchange="location = this.value;">                                               
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
                                    }?>
                            </select>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php endif;
                        ?>
                    </div> <!-- col-md-12 ends -->                    
<?php if(!$this->input->is_ajax_request()) { ?>
                </div> <!-- col-md-9 -->
            </div> <!-- row ends  --> 
                <?php //if(sizeof($results) > 1): ?>
                 <div class="col-md-3">
                        <input type="hidden" class="filter_start_age" value="18">
                        <input type="hidden" class="filter_end_age" value="34">
                        <input type="hidden" class="filter_start_height" value="137">
                        <input type="hidden" class="filter_end_height" value="213">
                        <input type="hidden" class="filter_start_weight" value="41">
                        <input type="hidden" class="filter_end_weight" value="140">
                        <input type="hidden" class="filter_occ">
                        <input type="hidden" class="filter_edu">
                        <input type="hidden" class="filter_emp">
                        <input type="hidden" class="filter_food">
                        <input type="hidden" class="filter_comp">
                        <input type="hidden" class="filter_btype">
                        <div class="right_sidebar_area">
                            <aside class="s_widget categories_widget">
                                <div class="s_title">
                                    <h4>Searching Options</h4>
                                    <img src="img/widget-title-border.png" alt="">
                                </div>
                                <ul>
                                    <li><a href="#"><img src="img/categories-list.png" alt=""><b>Age Limit</b></a></li>
                                </ul>
                                <div class="s_widget price_widget age-box age_limit_act">
                                    <div id="price_select" class="age_select"></div>
                                        <div class="price_inner">
                                        <input type="text" id="age_value" readonly style="border:0; color:#f6931f; font-weight:bold;">
                                        <!-- <a href="#">$50</a>
                                        <a href="#">$350</a> -->
                                    </div>
                                </div>    
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="right_sidebar_area">
                            <aside class="s_widget categories_widget">
                                <ul>
                                    <li><a href="#"><img src="img/categories-list.png" alt=""><b>Height Limit</b></a></li>
                                </ul>
                                <div class="s_widget price_widget age-box height_limit_act">
                                    <div id="height_select"></div>
                                        <div class="price_inner">
                                        <input type="text" id="height" readonly style="border:0; color:#f6931f; font-weight:bold;">
                                        <!-- <a href="#">$50</a>
                                        <a href="#">$350</a> -->
                                    </div>
                                </div>    
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="right_sidebar_area">
                            <aside class="s_widget categories_widget">
                                <ul>
                                    <li><a href="#"><img src="img/categories-list.png" alt=""><b>Weight Limit<b></a></li>
                                </ul>
                                <div class="s_widget price_widget age-box weight_limit_act">
                                    <div id="weight_select"></div>
                                        <div class="price_inner">
                                        <input type="text" id="weight" readonly style="border:0; color:#f6931f; font-weight:bold;">
                                        <!-- <a href="#">$50</a>
                                        <a href="#">$350</a> -->
                                    </div>
                                </div>    
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="right_sidebar_area">
                            <aside class="s_widget categories_widget">
                                <ul>
                                    <li><a href="#"><img src="img/categories-list.png" alt=""><b>Marital Status<b></a></li>
                                </ul>
                                <?php 
                                foreach ($selection_values['maritalstatus_values'] as $mar_val): 
                                    // echo "search_mar_status".$search_data['mar_status'];
                                    // echo "mar_id".$mar_val['maritalcategory_id']; 
                                ?>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" class="mar_status_act" value="<?php echo $mar_val['maritalcategory_id'] ?>" <?php if(strtolower($mar_val['marital_name'])=="single" && $search_data['mar_status'] == $mar_val['maritalcategory_id']){ echo "checked";} elseif($search_data['mar_status'] == $mar_val['maritalcategory_id']) echo "checked"; ?>>
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            <?php echo $mar_val['marital_name'] ?>
                                    </label>
                                </div>   
                                <input type="hidden" class="filter_mar_status" value="<?php if(strtolower($mar_val['marital_name'])=="single") echo $mar_val['maritalcategory_id']; ?>">                        
                                <?php endforeach; ?>        
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="right_sidebar_area">
                            <aside class="s_widget categories_widget">
                                <ul>
                                    <li><a href="#"><img src="img/categories-list.png" alt=""><b>Occupation</b></a></li>
                                </ul>
                                <?php 
                                // print_r($occupation_category);
                                  foreach ($occupation_category as $occ_val): ?>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="occupation_act" value="<?php echo $occ_val['occ_category_id']; ?>">
                                                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                <?php echo ucfirst(strtolower($occ_val['occupation_name'])); ?>
                                        </label>
                                    </div>
                                <?php endforeach; ?> 
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="right_sidebar_area">
                            <aside class="s_widget categories_widget">
                                <ul>
                                    <li><a href="#"><img src="img/categories-list.png" alt=""><b>Education</b></a></li>
                                </ul>
                                <?php 
                                // print_r($education_category);
                                  foreach ($education_category as $edu_val): ?>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="education_act" value="<?php echo $edu_val['educationcategory_id']; ?>">
                                                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                <?php echo ucfirst(strtolower($edu_val['cat_name'])); ?>
                                        </label>
                                    </div>
                                <?php endforeach; ?> 
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="right_sidebar_area">
                            <aside class="s_widget categories_widget">
                                <ul>
                                    <li><a href="#"><img src="img/categories-list.png" alt=""><b>Employed In</b></a></li>
                                </ul>
                                <?php 
                                  //print_r($selection_values['employedin_values']);
                                  foreach ($selection_values['employedin_values'] as $emp_val): ?>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="employedin_act" value="<?php echo $emp_val['employedin_id']; ?>">
                                                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                <?php echo ucfirst(strtolower($emp_val['name'])); ?>
                                        </label>
                                    </div>
                                <?php endforeach; ?> 
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="right_sidebar_area">
                            <aside class="s_widget categories_widget">
                                <ul>
                                    <li><a href="#"><img src="img/categories-list.png" alt=""><b>Food</b></a></li>
                                </ul>
                                <?php 
                                  //print_r($selection_values['food_values']);
                                  foreach ($selection_values['food_values'] as $food_val): ?>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="food_act" value="<?php echo $food_val['food_id']; ?>">
                                                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                <?php echo ucfirst(strtolower($food_val['name'])); ?>
                                        </label>
                                    </div>
                                <?php endforeach; ?> 
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="right_sidebar_area">
                            <aside class="s_widget categories_widget">
                                <ul>
                                    <li><a href="#"><img src="img/categories-list.png" alt=""><b>Complexion</b></a></li>
                                </ul>
                                <?php 
                                  //print_r($selection_values['complexion_values']);
                                  foreach ($selection_values['complexion_values'] as $com_val): ?>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="complexion_act" value="<?php echo $com_val['complexion_id']; ?>">
                                                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                <?php echo ucfirst(strtolower($com_val['name'])); ?>
                                        </label>
                                    </div>
                                <?php endforeach; ?>  
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="right_sidebar_area">
                            <aside class="s_widget categories_widget">
                                <ul>
                                    <li><a href="#"><img src="img/categories-list.png" alt=""><b>Body Type</b></a></li>
                                </ul>
                                <?php 
                                  //print_r($selection_values['food_values']);
                                  foreach ($selection_values['bodytype_values'] as $body_val): ?>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="btype_act" value="<?php echo $body_val['bodytype_id']; ?>">
                                                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                <?php echo ucfirst(strtolower($body_val['typename'])); ?>
                                        </label>
                                    </div>
                                <?php endforeach; ?>  
                        </div>
                    </div>
                <?php //endif; ?>
            </div> <!-- container ends -->
        </section>
<?php 
    include('include/footer.php');
?> 
<?php } ?>
