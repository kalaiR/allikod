<!-- // To send HTML mail, the Content-type header must be set
$headers_mailForSender = 'From: info@vallikodivanniarmatrimonial.in' . "\r\n" .'Reply-To:'.$email. "\r\n" .'X-Mailer: PHP/' . phpversion();
$headers_mailForSender .= 'MIME-Version: 1.0' . "\r\n";
$headers_mailForSender .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

mail($to_mailForSender, $subject_mailForSender, $message_mailForSender, $headers_mailForSender);

//echo $to_mailForSender;
//echo  $subject_mailForSender;
//echo $message_mailForSender;
//echo $headers_mailForSender;



//$customeremail=$_POST['mail'];
 //$vallikodiemail="valli.vallikodi@gmail.com,vidhya@atomicka.com,";
$to_mailForSender ="valli.vallikodi@gmail.com";  
//$to_mailForSender  = "$customeremail,$vallikodiemail";
//$to_mailForSender  = "rajeswari@atomicka.com,yogi.a89@gmail.com";
$subject_mailForSender = 'Vallikodi Vanniar Matrimonial';
// message --> 
<!-- $message_mailForSender = ' -->

<table style=" width:960px;height:auto;margin:0 auto; border="0"; cellpadding="0"; cellspacing="0">
         <tr style=" background-color: #5c7500; margin-top: 50px;height: 50px;">
            <td><p style="text-align: center;color:#fff; padding-top: 15px;">Vallikodi Vanniyar Martimonial.com</p></td>
        </tr>
        <tr style="background-color:#74872e;height: 30px;">
            <td style=" width: 200px; padding-top:5px;padding-left: 5px; color: white;display: inline-block; ">
                <p1>Date : <?php echo date("d-M-Y") ?></p1>
            </td>
            <td style="width: 200px; display: inline-block;margin-left: 150px; text-align: center; color: #fff;">
                <p1>Interested Profile Details</p1>
            </td>
            <td style="width: 200px; display: inline-block;margin-left: 150px; text-align: center; color: #fff;">
                <p1>Vallikodi ID : <?php echo "VM".$receiver_profile_details['userdetail_id']; ?></p1>
            </td>
        </tr>
        <tr>
            <td>
                <img src="<?php echo media_url(); ?>assets/img/logo1.png">
            </td>
        </tr>
        <tr style="color: #3c6a3c;margin-top: 30px; margin-left: 30px; font-size:25px; font-weight: bold;">
                <td><p style="margin:10 30px;" >Dear <?php echo $receiver_profile_details['user_fname']; ?><p></td>
        </tr>
                <tr style="color:black;margin-top:5px; margin-left: 45px; ">
                   <tr>
                        <td><p style="margin:10 30px;"> <?php echo $sender_profile_details['user_fname'] ?> is interested in your profile.</p></td>
                    </tr>      
                </tr>
                <tr style="color:black">
                    <tr style="color: rgba(0,0,0,); text-align:left;">
                        <td style="width: 200px; display: inline-block; padding:15px; margin-right:15px; border-radius: 25px;margin:10 30px;">
                            <a href="#">
                                <?php
                                        $prefix = '';
                                        $prefix_one = 'th_';
                                        $prefix_two = 'new_';
                                        $prefix_latest_images = '';
                                        $prefix_latest_images = '';
                                        $default_images = '';
                                        $latest_images = '';  
                                        unset($current_images);
                                        $current_images = array(); 
                                    if(!empty($sender_profile_details['images'])){
                                                $current_images = explode(',', $sender_profile_details['images'] );
                                                $latest_images = end($current_images);                       
                                            $prefix_one_status = file_exists(FCPATH."uploads/profile/".$prefix_one.$sender_profile_details['images']);
                                            $prefix_two_status = file_exists(FCPATH."uploads/profile/".$prefix_two.$sender_profile_details['images']);
                                            $prefix_latest_images = file_exists(FCPATH."uploads/profile/".$latest_images); 
                                        }

                                        // To get Gender based image for display //
                                        if((!empty($sender_profile_details['user_gender']))&&($sender_profile_details['user_gender']!=1)){
                                                $default_images = "defalt_female.png";
                                        }else{
                                                $default_images = "defalt_male.png";
                                        }

                                        if(!empty($sender_profile_details['images'])){    
                                            if($prefix_one_status)
                                                $prefix = $prefix_one;
                                            else if($prefix_two_status)
                                                $prefix = $prefix_two;
                                        }
                                    ?>
                                <img src="<?php 
                                    if(!empty($sender_profile_details['images'])): 
                                        echo media_url()."uploads/profile/".$prefix.$sender_profile_details['images']; 
                                    else:
                                        echo media_url()."assets/img/no_image.jpg"; 
                                    endif; 
                                ?>" alt="Image not loaded" style="max-width: 100%;">
                                <!-- <img style="max-width: 100%;" src="img/no_image.jpg"> -->
                            </a>
                        </td>
                        <td style="width: 200px; display: inline-block; padding:15px; border-radius: 25px;">
                            <p><a href="#" style="text-decoration: none; color:#000;font-size: 20px; text-align:left;font-weight:bold;"><?php echo $sender_profile_details['user_fname'] ?></a></p>
                            <p><a href="#" style="text-decoration: none; color:#000;font-size: 12px; text-align: ce">Vallikodi Id: <?php echo $sender_profile_details['userdetail_id'] ?></a></p>
                             <!-- <p><a href="#" style="text-decoration: none; color:#000;font-size: 12px; text-align:left;">25 yrs, B Tech, Star</a></p> -->
                             <?php if(!empty($sender_profile_details['edu_education'])){ 
                                    $val = $this->user_model->get_education($sender_profile_details['edu_education']);
                                    $result_education = $val['edu_name'];
                                    } else $result_education = "None"; ?>
                             <?php if(!empty($value['rel_nakshathra_id'])){                             
                                $val = $this->user_model->get_nakshathra($value['rel_nakshathra_id']);
                                $result_star = $val['name'];
                                } else $result_star = "None";?>
                             <p><a href="#" style="text-decoration: none; color:#000;font-size: 12px; text-align:left;"><?php echo $sender_profile_details['user_age']." yrs, ".$result_education.", ".$result_star ?></a></p>
                             <p>  
                                <a href="<?php echo base_url().'viewdetail_from_email/'.$sender_profile_details['userdetail_id'];?>" style="text-decoration: none; color:#000;font-size: 16px; text-align:left; color: #5c7500 ; font-weight: bold; margin-top: 30px;">View full details</a>
                             </p>
                        </td>
                    </tr> 
                </tr>           
        
                <tr style="color:black;padding-top:40px; margin-left: 45px;">
                    <td><p style="margin:10px 30px;">Thank you for being a Vallikodi Vanniar Matrimonial family member,</p1>
                    </td>
                </tr>
                <tr style="color:black;margin-top:45px; margin-left: 45px;">
                    <tr>
                        <td><p style="margin:0px 30px;">With Warm Regards,</p></td>
                    </tr>
                    <tr>
                        <td style="color:black;padding-top:35px;font-weight: bold; ">
                            <p style="margin:0px 30px;">VALLIKODI VANNIAR MATRIMONIAL TEAM.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="<?php echo media_url(); ?>assets/img/fav.ico">
                        </td>
                    </tr>
                    <tr> <td style="margin:0px 30px;background-color: #5c7500;height: 1px;"></td>
                    </tr>
                </tr>   
    </table>
<!-- '; -->

<!-- // To send HTML mail, the Content-type header must be set
$headers_mailForSender = 'From: info@vallikodivanniarmatrimonial.in' . "\r\n" .'Reply-To:'.$email. "\r\n" .'X-Mailer: PHP/' . phpversion();
$headers_mailForSender .= 'MIME-Version: 1.0' . "\r\n";
$headers_mailForSender .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

mail($to_mailForSender, $subject_mailForSender, $message_mailForSender, $headers_mailForSender);