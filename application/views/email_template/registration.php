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
                <img src="images/banner.png">
            </div>
            <div style="color: #3c6a3c;margin-top: 30px; margin-left: 30px; font-size:25px; font-weight: bold;">
                <p1>Dear <?php echo $user_fname; ?><p1>
            </div>
            <div style="color:black;margin-top:5px; margin-left: 45px; ">
                <!-- <p1>Welcome to Vallikodi Vanniar Matrimonial.Thanks for Registered with us.Our support team will contact you soon for Verification process.We will activate your account once finished our Verification process. (Net Banking payment will be avilable)<p1> -->
                <?php if($reg_purpose == "quick_reg"){ ?>
                    <p1>Welcome to Vallikodi Vanniar Matrimonial.Thanks for Registered with us. You have completed only quick registration process. Still you have to give more data's to complete your registration process with us. Once you finished all those through full registration page, Our support team will contact you soon for Verification process. We will activate your account once finished our Verification process. (Net Banking payment will be avilable)<p1>
                <?php }else{ ?>
                    <p1>Welcome to Vallikodi Vanniar Matrimonial.Thanks for Registered with us.Our support team will contact you soon for Verification process.We will activate your account once finished our Verification process. (Net Banking payment will be avilable)<p1>
                <?php } ?>
            </div>
            <div style="color:black;margin-top:5px; margin-left: 30px; font-weight: bold; ">
                <p1>Your Login Credentials :- <p1>
            </div>
            <div style="color:black;margin-top:5px; margin-left: 45px;">
                <div style="padding-top: 10px;">
                    <div style="width: 200px; display: inline-block;">
                        <p1>Vallikodi ID <p1>
                    </div>
                    <div style="width: 200px; display: inline-block;">
                        <p1>: <?php echo "VM".$user_id; ?><p1>
                    </div>
                </div> 
                <div style="padding-top: 10px;">
                    <div style="width: 200px;display: inline-block;">
                        <p1>User Name/Login ID<p1>
                    </div>
                    <div style="width: 200px; display: inline-block;">
                        <p1>: <?php echo $user_email; ?><p1>
                    </div>
                </div> 
                <div style="padding-top: 10px;">
                    <div style="width: 200px;display: inline-block;">
                        <p1>Password<p1>
                    </div>
                    <div style="width: 200px; display: inline-block;">
                        <p1>: <?php echo $user_pwd; ?><p1>
                    </div>
                </div>
            </div>            
        </div>
        <div style="color:black;margin-top:5px; margin-left: 30px; font-weight: bold; ">
            <p1>Payment Details :-<p1>
        </div>
        <div style="color:black;margin-top:10px; margin-left: 45px; font-weight: bold; ">
            <p1>1) Fee structure details in INDIA :-</p1>
        </div>
        <div style="color:black;padding-top:10px; margin-left: 70px;">
            <p1>3 Months validity & display data with photo Rs.2500/- [60 Profiles can be viewed];<br>
                6 Months validity & display data with photo Rs.4000/- [120 Profiles can be viewed];
            </p1>
        </div>
        <div style="color:black;margin-top:10px; margin-left: 45px; font-weight: bold; ">
            <p1>2) Fee structure details in Renewal fee:-</p1>
        </div>
        <div style="color:black;padding-top:10px; margin-left: 70px;">
            <p1>3 Months validity & display data with photo Rs.2000/- [60 Profiles can be viewed];<br>
                6 Months validity & display data with photo Rs.3500/- [120 Profiles can be viewed];
            </p1>
        </div>
        <div style="color:black;padding-top:10px; margin-left: 45px;">
            <p1>Thank you for being a Vallikodi Vanniar Matrimonial family member,</p1>
        </div>
        <div style="color:black;margin-top:45px; margin-left: 45px;">
            <p1>With Warm Regards,</p1>
            <div style="color:black;padding-top:50px;font-weight: bold; ">
                <p1>VALLIKODI VANNIAR MATRIMONIAL TEAM.</p1>
            </div>
            <div>
                <img src="images/logo.png">
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