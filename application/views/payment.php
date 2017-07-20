<?php 
    include('include/header.php');
?> 
       <?php 
            include('include/menu.php');
        ?> 
     <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h3><img class="left_img" src="<?php echo base_url(); ?>assets/img/banner/t-left-img.png" alt="">Payments<img class="right_img" src="<?php echo base_url(); ?>assets/img/banner/t-right-img.png" alt=""></h3>
                    <!--<a href="index.html">Home</a>
                    <a href="shop-cart.html">Pricing</a>-->
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->  
       <section class="pricing_area">
            <div class="container">
                <div class="welcome_title">
                    <h3>Payment Details</h3>
                    <img src="<?php echo base_url(); ?>assets/img/w-title-b.png" alt="">
                </div>
                <!--<div class="plan_inner">
                    <div class="pricing_topic">
                        <div class="border_div"></div>
                        <div class="border_div_right"></div>
                        <a href="#">Basic</a>
                        <a class="active" href="#">Premium</a>
                    </div>-->
                    <div class="col-md-10 aline-center-box">
                        <h3>Additional (below mentioned fee structure details appeared in end of register form):</h3><br>
                     </div>   
                        <div class="col-md-8  aline-center-box">
                            <h4> 1) Payment structure details:-</h4>
                        </div><br>
                     <div class="row ">
                        <div class="col-sm-7 aline-center-box">
                            <table class="table" id="fees-box">
                                <tr>
                                    <th rowspan="2" id="h1">Duration</th>
                                    <th rowspan="2" id="h1">Maximum Profiles to view</th>
                                    <th colspan="2" id="h1">Payment</th>
                                </tr>
                                <tr>
                                  <th id="h1">Registration fee</th>
                                  <th id="h1">Renewal fee</th>
                                </tr>
                                    <tr>
                                      <td id="d1">3 Month ( 90 Days )</td>
                                      <td id="d1">60</td>
                                      <td id="d1">Rs. 2500/-</td>
                                      <td id="d1">Rs. 2000/-</td>
                                    </tr>
                                    <tr>
                                      <td id="d1">6 Month ( 180 Days )</td>
                                      <td id="d1">120</td>
                                      <td id="d1">Rs. 4000/-</td>
                                      <td id="d1">Rs. 3500/-</td>
                                    </tr>
                            </table>
                         </div>               
                    </div>
                    <div class="row">
                        <div class="col-md-10 aline-center-box">
                            <h4>VallikodivanniarMatrimonial offers you various payment options for your coveniences.just choose the scheme which best suits your needs, and pay by any of the following options</h4><br>
                        </div>
                    </div>
                    <div class="row">    
                        <div class="col-sm-8 aline-center-box">
                            <h4>1) For Net Banking and Cash Desposit:</h4><br>
                        </div>
                    </div>
                    <div class="row"> 
                            <div class="col-sm-7 aline-center-box">
                                <div class="row">
                                    <div class="col-sm-4">      
                                        <p>Bank Name : HDFC Bank<br>A/C Holder Name : VALLIKODI VANNIYARKUL,<br>A/C No : 50200000223817 <br>IFSC code : HDFC0002611 <br><br>Bank Address<br>Soorya Icon,<br>
                                        Gr.Flr., # 360 M.G.Road,<br>Puducherry Opp.Petit Seminare School M.G.Road,Pondicherry - 605001<br>Pondicherry <br>india</p><br>
                                    </div>
                                        <div class="col-sm-3 aline-center-box image-box">
                                             <img src="<?php echo base_url(); ?>assets/img/bank/hdfc.png" alt="bank">
                                        </div>            
                                </div>    
                            </div>               	          
                         </div>
                            <div class="row">
                                <div class="col-sm-8 aline-center-box">
                                        <h4>2) Cash at Our Office : M/S. VALLIKODI VANNIYARKUL,</h4><br>
                                </div>
                            </div>                         
                                <div class="col-sm-7 aline-center-box">
                                    <div class="row">
                                        <div class="col-sm-4">               
                                            <p>C/O VALLIKODI V SHATHRIYA THIRUMANA<br>NO-98 VAZHUDAVOOR ROAD<br>V V P NAGAR<br>PONDICHERRY 605009,India.<br>off: 2272438<br>Mobile:+91 9655332217, 7397734480</p><br>
                                        </div>
                                        <div class="col-sm-3 aline-center-box image-box">
                                            <img src="<?php echo base_url(); ?>assets/img/bank/cash.png" alt="bank">
                                        </div>
                                        <div class="col-sm-4 aline-center-box image-box">
                                            <img src="<?php echo base_url(); ?>assets/img/bank/cheque.png" alt="bank">
                                        </div>              
                                    </div>
                                </div>   
                                <div class="col-sm-8 aline-center-box">            
                                    <h4> 3) Demand Draft :</h4><br>
                                </div>
                                <div class="col-sm-7  aline-center-box ">        
                                    <p>You can make the payment by Demand Draft (Payable at Puducherry) in favour of<br>"Vallikodi Vanniarkula Shathriya Thirumana Thagaval Thodarbu maiyam"</p>
                                </div>    
                        </div>  
                    </div>                   
                </div>    
            </div>
        </section>
        <!--================End Pricing Area =================-->       
        
       <!-- <div id="largeContent" style="display:none;">
            <div class="media tool_content">
                <div class="media-left">
                    <img src="<?php echo base_url(); ?>assets/img/map-persion.png" alt="">
                </div>
                <div class="media-body">
                    <h3>Sandi Williams</h3>
                    <h5>21 years old</h5>
                    <h5>From Paris</h5>
                    <h5>Distance 16 km</h5>
                </div>
            </div>
        </div>-->
        
<?php 
    include('include/footer.php');
?> 
    </body>
</html>