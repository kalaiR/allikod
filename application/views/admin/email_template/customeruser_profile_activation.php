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
// message  -->
<!-- $message_mailForSender = ' -->

<div style=" width:960px;height:auto;margin:0 auto;">
        <div style=" background-color: #5c7500; margin-top: 50px;height: 50px;">
            <p style="text-align: center;color:#fff; padding-top: 15px;">Vallikodi Vanniyar Martimonial.com</p>
        </div>
        <div style="background-color:#74872e;height: 30px;">
            <div style=" width: 200px; padding-top:5px;padding-left: 5px; color: white;display: inline-block; ">
                <p1>Date : <?php echo date("d-M-Y") ?></p1>
            </div>
            <div style="width: 200px; display: inline-block;margin-left: 150px; text-align: center; color: #fff;">
                <p1>Login Details</p1>
            </div>
            <div style="width: 200px; display: inline-block;margin-left: 150px; text-align: center; color: #fff;">
                <p1>Vallikodi ID : <?php echo "VM".$user_id; ?></p1>
            </div>
        </div>
        <div>
            <div style="margin-left: 50px;">
                <img src="<?php echo media_url(); ?>assets/img/logo1.png">
            </div>
            <div style="color: #3c6a3c;margin-top: 30px; margin-left: 30px; font-size:25px; font-weight: bold;">
                <p1>Dear <?php echo $user_fname."  VM".$user_id.","; ?> </p1>
            </div>
            <div style="color:black;margin-top:5px; margin-left: 45px; ">
                <p1><!-- Dear Selva Kumar VM67450, --> Your profile has been Activated. Kindly check the following details to access your account.</p1>
            </div>
            
            <div style="color:black;margin-top:5px; margin-left: 30px; font-weight: bold; ">
                <p1>Your Login Credentials :- </p1>
            </div>
            <div style="color:black;margin-top:5px; margin-left: 45px;">
                <div style="width: 200px; display: inline-block;">
                    <p1>Vallikodi ID </p1>
                </div>
                <div style="width: 200px; display: inline-block;">
                    <p1>: <?php echo "VM".$user_id; ?></p1>
                </div>
                <div style="padding-top: 10px;">
                    <div style="width: 200px;display: inline-block;">
                        <p1>User Name/Login ID</p1>
                    </div>
                    <div style="width: 200px; display: inline-block;">
                        <p1>: <?php echo $user_email; ?></p1>
                    </div>
                </div> 
                <div style="padding-top: 10px;">
                    <div style="width: 200px;display: inline-block;">
                        <p1>Password</p1>
                    </div>
                    <div style="width: 200px; display: inline-block;">
                        <p1>: <?php echo $user_pwd; ?></p1>
                    </div>
                </div>
            </div>
            <div style="color:black;margin-top:5px; margin-left: 30px; font-weight: bold; ">
                <p1>Other Details :- </p1>
            </div>
            <div style="color:black;margin-top:5px; margin-left: 45px;">
                <?php if($user_online_or_simple == "online"){ ?>
                    <div style="width: 200px; display: inline-block;">
                        <p1>Period in Months</p1>
                    </div>
                    <div style="width: 200px; display: inline-block;">
                        <p1>: <?php echo $period_in_month; ?></p1>
                    </div>
                <?php } ?>
                <div style="padding-top: 10px;">
                    <div style="width: 200px;display: inline-block;">
                        <p1>Start Date</p1>
                    </div>
                    <div style="width: 200px; display: inline-block;">
                        <p1>: <?php echo $startdate; ?></p1>
                    </div>
                </div> 
                <div style="padding-top: 10px;">
                    <div style="width: 200px;display: inline-block;">
                        <p1>End Date</p1>
                    </div>
                    <div style="width: 200px; display: inline-block;">
                        <p1>: <?php echo $enddate; ?></p1>
                    </div>
                </div>
                <div style="padding-top: 10px;">
                    <div style="width: 200px;display: inline-block;">
                        <p1>Total no. Profiles</p1>
                    </div>
                    <div style="width: 200px; display: inline-block;">
                        <p1>: <?php echo $totalno_of_profile; ?></p1>
                    </div>
                </div>
                <!-- <div style="padding-top: 10px;">
                    <div style="width: 200px;display: inline-block;">
                        <p1>Payment Status<p1>
                    </div>
                    <div style="width: 200px; display: inline-block;">
                        <p1>: Active</p1>
                    </div>
                </div> -->
            </div>            
        </div>
        <div style="color:black;padding-top:40px; margin-left: 45px;">
            <p1>Thank you for being a Vallikodi Vanniar Matrimonial family member,</p1>
        </div>
        <div style="color:black;margin-top:45px; margin-left: 45px;">
            <p1>With Warm Regards,</p1>
            <div style="color:black;padding-top:35px;font-weight: bold; ">
                <p1>VALLIKODI VANNIAR MATRIMONIAL TEAM.</p1>
            </div>
            <div>
                <img src="<?php echo media_url(); ?>assets/img/fav.ico">
            </div>
        </div>
        <div style="background-color: #5c7500;height: 1px;">
        </div>
    </div>
<!-- '; -->

<!-- // To send HTML mail, the Content-type header must be set
$headers_mailForSender = 'From: info@vallikodivanniarmatrimonial.in' . "\r\n" .'Reply-To:'.$email. "\r\n" .'X-Mailer: PHP/' . phpversion();
$headers_mailForSender .= 'MIME-Version: 1.0' . "\r\n";
$headers_mailForSender .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

mail($to_mailForSender, $subject_mailForSender, $message_mailForSender, $headers_mailForSender);