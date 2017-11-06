<?php 
include('include/header.php');
include('include/menu.php');

// print_r($results);


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
                            <?php if(!empty($total_rows)) : ?>
                                <p>
                                    Search Results :  <?php echo  $current_tot; ?> of <?php echo $total_rows; ?>
                                    <?php if(!empty($rdisplayresults)) : ?>
                                        <?php echo  " - ".$rdisplayresults;?>
                                    <?php endif; ?>    
                                </p>
                            <?php endif; ?>
                        </div>
                        <div class="search_btn back-box">
                                <a href="<?php echo base_url(); ?>search" class="register_angkar_btn">Back</a>
                        </div>
                     </div>
                </div>
                <div class="row">
                <div class="col-md-9">
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
                        <div class="col-md-12" style="display: inline-block;"">
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
                    </div> <!-- col-md-9 -->
                </div> <!-- row ends  -->    
            </div> <!-- container ends -->
        </section>
<?php 
    include('include/footer.php');
?> 

