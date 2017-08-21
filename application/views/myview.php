<?php 
    include('include/header.php');
    include('include/menu.php');

    $session_search = $this->session->all_userdata();

?> 
     <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h3 title="My Views"><img class="left_img" src="<?php echo media_url(); ?>assets/img/banner/t-left-img.png" alt="">My Views<img class="right_img" src="<?php echo media_url(); ?>assets/img/banner/t-right-img.png" alt=""></h3>
                    <!--<a href="index.html">Home</a>
                    <a href="shop-cart.html">Pricing</a>-->
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->  
      <section class="blog_grid_area">
            <div class="container">
                <div class="row">                                          
                    <div class="col-md-12">
                        <div class="members_profile_inners">
                           <div class="members_about_box">
                                <div class="heads">
                                    <h3 id="hcolor">Name : 
                                    <?php 
                                    if(!empty($session_search['login_session']['user_fname'])){ 
                                        echo $session_search['login_session']['user_fname'];
                                        }
                                    ?>
                                    <!-- a href="<?php //echo base_url(); ?>myedit" class="btn form-control edit_btn pull-right">Edit</a> -->
                                    </h3>
                                </div>                               
                                <div class="profile_list">
                                    <div class="row myview_head">
                                        <div class="col-md-4">Vallikodi ID
                                        </div>
                                        <div class="col-md-4">Name
                                        </div>
                                        <div class="col-md-4">View Date 
                                        </div>
                                    </div>
                                    <?php 
                                    if(!empty($results)){
                                        foreach($results as $key => $value) { 
                                            if($key % 2 == 0){ ?>                                        
                                                <div class="row myview_con">
                                                    <div class="col-md-4">
                                                    <a href="<?php echo base_url()."viewdetail/".$value['profile_id'];?>">
                                                    <?php echo $value['profile_id'];?>
                                                    </a>
                                                    </div>
                                                    <div class="col-md-4"><?php echo $value['user_fname'];?>
                                                    </div>
                                                    <div class="col-md-4"><?php echo $value['added_date'];?>
                                                    </div>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="row myview_nor">
                                                    <div class="col-md-4"><a href="<?php echo base_url()."viewdetail/".$value['profile_id'];?>"><?php echo $value['profile_id'];?></a>
                                                    </div>
                                                    <div class="col-md-4"><?php echo $value['user_fname'];?>
                                                    </div>
                                                    <div class="col-md-4"><?php echo $value['added_date'];?> 
                                                    </div>
                                                </div>
                                            <?php }
                                        }
                                    }
                                    ?>            
                                </div>                   
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </section>
        <!--================End Pricing Area =================-->     
        
<?php 
    include('include/footer.php');
?>
<!-- <script type="text/javascript">
$(document).ready(function () {

   var arr = <?php echo json_encode($rasi); ?>     
   $('.horo_row #box_6, #box_7, #box_10, #box_11').attr('readonly', 'readonly');   
   $.each(arr, function( i, val ) {    
     $('.third-row').each(function(){
        var id=$(this).data('id');
        var res = id.split("_");          
        if(res[1]==val){
            img='<?php echo media_url(); ?>'+'assets/img/rasi/'+i+'.png';             
            $("#"+id).append("<img src="+img+" />");
        }
      });  
   }); 

   var asham_arr = <?php echo json_encode($amsham); ?>    
   $('.asham_horo_row #abox_6, #abox_7, #abox_10, #abox_11').attr('readonly', 'readonly');
   $.each(asham_arr, function( i, val ) {    
     $('.asham-row').each(function(){
        var id=$(this).data('id');
        var res = id.split("_");          
        if(res[1]==val){
            img='<?php echo media_url(); ?>'+'assets/img/rasi/'+i+'.png';             
            $("#"+id).append("<img src="+img+" />");
        }
      });  
   }); 

});    
</script> -->
