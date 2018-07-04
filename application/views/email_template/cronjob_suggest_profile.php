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
                <p1>Login Details</p1>
            </td>
            <td style="width: 200px; display: inline-block;margin-left: 150px; text-align: center; color: #fff;">
                <p1>Vallikodi ID : <?php echo $userdetail_id; ?></p1>
            </td>
        </tr>
        <tr>
            <td>
                <img style="margin:0 50px;" src="<?php echo media_url(); ?>assets/img/logo1.png">
            </td>
        </tr>
        <tr style="color: #3c6a3c;margin-top: 30px; margin-left: 30px; font-size:25px; font-weight: bold;">
                <td><p style="margin:10 30px;" >Dear <?php echo $user_fname; ?><p></td>
        </tr>
            <tr style="color:black;margin-top:5px; margin-left: 45px; ">
                    <!-- <p1>Welcome to Vallikodi Vanniar Matrimonial.Thanks for Registered with us.Our support team will contact you soon for Verification process.We will activate your account once finished our Verification process. (Net Banking payment will be avilable)<p1> -->
                <tr>
                    <td><p style="margin:0 30px; text-align: justify;" >Here are exculsive matches for you. <p></td>
                </tr>
            </tr>
            
            <tr style="color:black;margin-top:5px; margin-left: 30px; font-weight: bold; ">
                <td><p style="margin:10px 30px; padding-bottom:15px;">Suggested Profile :- </p></td>
            </tr>
             <tr style="color:black;margin-top:5px; margin-left: 30px; ">
                <td><p style="margin:10px 30px; padding-bottom:15px;">Recently registered profiles are shown below :- </p></td>
            </tr>
        
            <tr style="color:black">
                <tr style="color: rgba(0,0,0,); text-align:center;">
                    <?php 
                    // print_r($matching_profile);
                    foreach($matching_profile as $key => $value) { 
                        // echo $value['images'];
                        // echo $value['userdetail_id'];
                        $prefix = '';
                        $prefix_one = 'th_';
                        $prefix_two = 'new_';
                        $prefix_latest_images = '';
                        $prefix_latest_images = '';
                        $default_images = '';
                        $latest_images = '';  
                        unset($current_images);
                        $current_images = array(); 
                        if(!empty($value['images'])){
                            // echo "if";
                            $current_images = explode(',', $value['images'] );
                            $latest_images = end($current_images);                       
                            $prefix_one_status = file_exists(FCPATH."uploads/profile/".$prefix_one.$value['images']);
                            $prefix_two_status = file_exists(FCPATH."uploads/profile/".$prefix_two.$value['images']);
                            $prefix_latest_images = file_exists(FCPATH."uploads/profile/".$latest_images); 
                        }

                        // To get Gender based image for display //
                        if((!empty($value['user_gender']))&&($value['user_gender']!=1)){
                                $default_images = "defalt_female.png";
                        }else{
                                $default_images = "defalt_male.png";
                        }

                        if(!empty($value['images'])){   
                            if($prefix_one_status)
                                $prefix = $prefix_one;
                            else if($prefix_two_status)
                                $prefix = $prefix_two;
                        }
                        // echo $prefix_one_status;
                        // echo $prefix_two_status
                    ?>
                         <td style="width: 200px; display: inline-block; /*background-color:rgba(192,192,192,0.2);*/ padding:15px; margin-right:15px; border-radius: 25px; border: 1px solid rgba(192,192,192,0.5);">
                        <a href="<?php echo base_url().'viewdetail_from_email/'.$value['userdetail_id'];?>"><img style="max-width: 100%;" src="<?php 
                            if(!empty($value['images'])): echo media_url()."uploads/profile/".$prefix.$value['images']; else: echo media_url()."assets/img/no_image.jpg"; endif; 
                        ?>"></a>
                        <p><a href="<?php echo base_url().'viewdetail_from_email/'.$value['userdetail_id'];?>" style="text-decoration: none; color:#000;font-size: 12px;">Vallikodi Id: <?php echo $value['userdetail_id']; ?></a></p>
                        <p style="font-size: 11px;"><span style="padding:0 5px"><?php echo $value['user_age']; ?> yrs,</span><span style="padding:0 5px"><?php echo $value['edu_name']; ?>,</span><span style="padding:0 5px"><?php echo $value['name']; ?></span></p>
                    </td>
                    <?php } ?>
                   <!--  <td style="width: 200px; display: inline-block;/*background-color:rgba(192,192,192,0.2);*/padding: 15px;margin-right:15px; border-radius: 25px;border: 1px solid rgba(192,192,192,0.5);">
                       <img style="max-width: 100%;" src="assets/img/no_image.jpg">
                        <p><a href="#" style="text-decoration: none; color:#000;font-size: 12px;">Id:123</a></p>
                        <p style="font-size: 11px;"><span style="padding:0 5px">25 yrs,</span><span style="padding:0 5px">B Tech,</span><span style="padding:0 5px">Star</span></p>
                    </td>
                    <td style="width: 200px; display: inline-block;/*background-color:rgba(192,192,192,0.2);*/ padding:15px; border-radius: 25px;border: 1px solid rgba(192,192,192,0.5);">
                       <img style="max-width: 100%;" src="assets/img/no_image.jpg">
                       <p><a href="#" style="text-decoration: none; color:#000;font-size: 12px;">Id:123</a></p>
                       <p style="font-size: 11px;"><span style="padding:0 5px">25 yrs,</span><span style="padding:0 5px">MCA,</span><span style="padding:0 5px">Star</span></p>
                    </td> -->
                </tr> 
            </tr>                
        <tr style="color:black;margin-top:5px; margin-left: 30px; font-weight: bold; ">
            <td><p style="margin:10px 30px;">Payment Details :-<p></td>
        </tr>
        <tr style="color:black;padding-top:10px; margin-left: 70px;">
            <tr>
                <td><p style="margin:10px 30px;"> Please check the payment details in below link:</p></td>
            </tr>
            <tr>
                <td><a style="margin:10px 30px; " href="<?php echo base_url()."payment" ?>"><?php echo base_url()."payment" ?></a></td>
            </tr>
        </tr>
        <!-- <div style="color:black;margin-top:10px; margin-left: 45px; font-weight: bold; ">
            <p1>1) Fee structure details in INDIA :-</p1>
        </div> -->
        <!-- <div style="color:black;padding-top:10px; margin-left: 70px;">
            <p1>3 Months validity & display data with photo Rs.2500/- [60 Profiles can be viewed];<br>
                6 Months validity & display data with photo Rs.4000/- [120 Profiles can be viewed];
            </p1>
        </div> -->
        <!-- <div style="color:black;margin-top:10px; margin-left: 45px; font-weight: bold; ">
            <p1>2) Fee structure details in Renewal fee:-</p1>
        </div>
        <div style="color:black;padding-top:10px; margin-left: 70px;">
            <p1>3 Months validity & display data with photo Rs.2000/- [60 Profiles can be viewed];<br>
                6 Months validity & display data with photo Rs.3500/- [120 Profiles can be viewed];
            </p1>
        </div> -->
        <tr style="color:black;padding-top:40px; margin-left: 45px;">
            <td><p style="margin:10px 30px;">Thank you for being a Vallikodi Vanniar Matrimonial family member,</p1></td>
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
                    <img style="margin:0px 30px;height:20px;width:20px;" src="<?php echo media_url(); ?>assets/img/logo1.png">
                </td>
            </tr>
            <tr> <td style="margin:0px 30px;background-color: #5c7500;height: 1px;"></td>
            </tr>
    </table>
<!-- '; -->

<!-- // To send HTML mail, the Content-type header must be set
$headers_mailForSender = 'From: info@vallikodivanniarmatrimonial.in' . "\r\n" .'Reply-To:'.$email. "\r\n" .'X-Mailer: PHP/' . phpversion();
$headers_mailForSender .= 'MIME-Version: 1.0' . "\r\n";
$headers_mailForSender .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

mail($to_mailForSender, $subject_mailForSender, $message_mailForSender, $headers_mailForSender);