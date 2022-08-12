<!DOCTYPE html>
<!-- saved from url=(0020)https://www.nvsp.in/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title></title>
    

    <link rel="icon" href="https://www.nvsp.in/Content/images/eci-icon.ico" type="image/x-icon">

    
    <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!-- Custome style -->
    
    <script src="./home_files/jquery.toast.min.js.download" integrity="sha512-zlWWyZq71UMApAjih4WkaRpikgY9Bz1oXIW5G0fED4vk14JjGlQ1UmkGM392jEULP8jbNMiwLWdM8Z87Hu88Fw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="./home_files/jquery.toast.min.css" integrity="sha512-wJgJNTBBkLit7ymC6vvzM1EcSWeM9mmOu+1USHaRBbHkm6W9EgM0HY27+UtUaprntaYQJF75rc8gjxllKs5OIQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
    
    <script src="./home_files/toasterNotifications.js.download"></script>

    
    
    
    
    

    <link href="./home_files/toastr.css" rel="stylesheet">
    <script src="./home_files/toastr.min.js.download"></script>

    
    

    <link href="./home_files/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" referrerpolicy="no-referrer">

    
    <link href="./home_files/bootstrap-flatly.min.css" rel="stylesheet">
    <link href="./home_files/style.css" rel="stylesheet" type="text/css">

    <!-- Font Awesome -->
    
    
    
<link rel="stylesheet" href="./home_files/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    
    
    
    
    <link rel="stylesheet" href="./home_files/fontawesome.min.css" integrity="sha512-xX2rYBFJSj86W54Fyv1de80DWBq7zYLn2z0I9bIhQG+rxIF6XVJUpdGnsNHWRa6AvP89vtFupEPDP8eZAtu9qA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="./home_files/animations.css" rel="stylesheet">
    <link href="./home_files/fonts.css" rel="stylesheet">
    <link href="./home_files/main.css" rel="stylesheet" class="color-switcher-link">

    
    
    
    <script src="./home_files/jquery.js.download" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    
    
    <script src="./home_files/bootstrap.bundle.min.js.download" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
      <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <![endif]-->

    <link href="../before_login/Register_files/toastr.css" rel="stylesheet">
    <script src="../before_login/Register_files/toastr.js.download"></script>
    
    <style>
        .label-danger {
            color: #fff;
            background-color: #f1200a;
        }

        .line-height-body-default {
            line-height: 0.67em;
        }

        .mainColor li {
            color: white;
        }
    </style>

    <style>
        /*.form-control {
          padding: 6px 5px !important;
        }*/
    </style>
</head>
<body>
    <input type="hidden" id="hdnLanguageArray">
    

    <div id="dvLoading2" class="lds-dual-ring" style="z-index: 7000; display: none;"></div>
    <div class="clearfix"></div>

    <!--[if lt IE 9]>
      <div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
    <![endif]-->
    <!--Modals start-->
    <!--knowAcModal By Sayali-->

    <div id="knowAcModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="row">
                        <div class="col-md-11 text-center">
                            <h4 class="modal-title">
                                Map
                            </h4>
                        </div>
                        <div class="col-md-1 text-right">
                            <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div id="know_my_AC_partial"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- eof .modal -->
    <div id="canvas">
        <div id="box_wrapper">

            <div class="page_header_wrapper header_white" style="height: 102.5px;"><header class="page_header header_white toggler_right">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-5 col-sm-12">
                            <a href="index.html" class="logo top_logo">

                                <img src="./home_files/logo.png">
                            </a>
                        </div>

                        <div class="col-md-7 col-sm-12">

                            <!-- main nav start -->
                            <nav class="mainmenu_wrapper text-right">
                                <ul class="mainmenu sf-menu">
                                        <li class="active">
                                            <a href="index.html">Home</a>
                                        </li>
                                        <li>
                                            <a href="About.html">About Us   </a>
                                        </li>
                                    
                                            <li>
                                                <a href="Dashboard.html">Dashboard</a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user-o"></i><span class="caret"></span></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="UserProfile.php">My Profile</a></li>
                                                    <li>
                                                        <a href="LogOut.php" id="login">Logout</a>
                                                    </li>
                                                </ul>
                                            </li>

                                </ul>
                            </nav>
                            <!-- eof main nav -->
                            <!-- header toggler -->
                            <span class="toggle_menu">
                                <span></span>
                            </span>
                        </div>
                    </div>
                </div>
            </header></div>



            <body>
    <input type="hidden" id="hdnLanguageArray" />
    

    <div id="dvLoading2" class="lds-dual-ring" style="z-index: 7000; display: none;"></div>
    <div class="clearfix"></div>

    
    <div id="knowAcModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="row">
                        <div class="col-md-11 text-center">
                            <h4 class="modal-title">
                                Map
                            </h4>
                        </div>
                        <div class="col-md-1 text-right">
                            <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div id="know_my_AC_partial"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- eof .modal -->
    <div id="canvas">
        <div id="box_wrapper">

            



            <section class="ls section-content-min-height toppadding_10">
              
                

    <div class="container">
        <div class="row">

            <div class="card card-default">

                <div class="card-heading text-center">
                    
                        <h5 class="mt-5">Download electronic copy of EPIC Card</h5>

                </div>

                    <div class="col-md-12">
                        <marquee width="100%" direction="left" bgcolor="#d9d9ff">
                            Currently e-EPIC download facility is available for the electors registered after November 2020  having unique mobile number in our records. For others, this facility will be available soon.
                        </marquee>
                    </div>
                <div class="card-body" id="divpanel">

                   
                    <div class="row mt-2">


                        <div class="col-md-4 col-md-offset-1 text-right">
                            <label class="" id="label_searchid">EPIC no </label>
                        </div>
                        
                        <div class="col-md-2">
                            
                            <input class="form-control" id="epic" name="SearchId" type="text" value="" />
                            <input id="selected_epic_no" name="selected_epic_no" type="hidden" value="" />

                        </div>
                        
                        


                    </div>

                    <div class="row mt-2">
                        <div class="col-md-4 col-md-offset-1 text-right">
                            <!-- <label class="">Select State </label> -->
                        </div>
                        
                        <div class="col-md-2">
                            <button type="submit" id="showFormListBtn" class="btn btn-primary " >
                                <i class="fa fa-search"></i>&nbsp;Search
                            </button>

                        </div>
                    </div>

                    <div id="ListPartial" class="col-md-12 col-sm-12" style="margin-top:2%;">

                    </div>
                    <div id="diveKYC" class="col-md-8 col-sm-8 col-md-offset-2 card card-default" style="margin-top:2%; display:none">

                        <div id="isNotOTPVerification" style="display:none">
                            <div class="col-md-12">
                                <label class="control-label" id="nomobile_messagelabel" style="display:none">
                                </label>
                            </div>
                        </div>

                        <div class="col-md-12 card-body">

                            <label class="control-label" id="messagelabel" style="display:block">
                                e-EPIC download facility is only available with registered mobile number or registered email ID. The facility to update your mobile no. will be available soon.
                            </label>

                        </div>

                        
                    </div>

                    <div id="divdetail_container">
                        <div id="divdetail" class="col-md-8 col-sm-8 col-md-offset-2" style="margin-top:2%; display:none">
                            <div class="card card-default">


                                <div class="card-body" id="isOTPVerification" style="display:none">
                                    <div class="col-md-12">
                                        <label class="control-label">
                                            Please authenticate using OTP verification.
                                        </label>
                                        <button type="button" id="SendOTPbtn" onclick="SendOTP();" class="btn btn-info col-md-offset-1">Send OTP</button><br />
                                        <span>Note: OTP will be sent to the registered Email Address <span id="email_show"></span></span>
                                        <span id="txtmobileno"></span>

                                    </div>
    </div>
                                    <div class="" id="div_otp" display="none">
                                        <div class="form-group col-md-12"><br /><br />
                                            <div id="OTPView" class="col-md-12" style="display: none;">
                                            <div class="row">
                                                <label class="col-md-3 col-md-offset-1 control-label" for="Code">Enter OTP</label>
                                                <div class="col-md-6">
                                                    <div class="col-md-8">
                                                        <input class="form-control col-md-6" data-val="true" 
                                                        data-val-required="The Enter OTP field is required." id="Code" name="Code" type="text" 
                                                        maxlength="6" value="">
                                                    </div>
                                                    <div class="col-md-4 ">
                                                        <input id="verifyOTP2" type="button" class="btn btn-info" value="Verify" >
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    
                        

                    <div id="statusmessage_parent" class="col-md-8 col-sm-8 col-md-offset-2 card card-default" style="display:none">
                        <div class="col-md-12 card-body " id="statusmessagediv" style="display:none">
                            <label class="control-label" id="statusmessagelabel"></label>
                        </div>
                    </div>
                    <div id="downloaddiv" style= "display:none;">
                        <div class="form-group col-md-12"><br /><br />
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-md-4 ">
                                        <!-- <img id="imageToSwap" src="../voter_card_data/id.pdf" width = "40px"/> -->
                                        <input id="download" down type="button" class="btn btn-info" value="Download Your 
                                        Voter Card as PDF" >
                                    </div>

                            </div>

                        </div>

                    </div>


                    

                </div>
                <div class="modal" id="epicModal" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Your e-EPIC download facility is blocked for 24 hours due to 3 invalid OTP</h4>
                            </div>
                            <div class="modal-body">

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-info" data-dismiss="modal">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <script src="after_login\home_files\jquery.js.download"></script>
    <script src="before_login\Content\js\jquery.js"></script>

    <!-- <div id="mypdf">
  <div>
    My Pdf Content Here
  </div>
</div
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://html2canvas.hertzen.com/build/html2canvas.js"></script>
<script src="http://mrrio.github.io/jsPDF/dist/jspdf.debug.js"></script> -->
 </section>

        <script>
            let email = "";
            $("#showFormListBtn").click(function(e){
                let epic = document.getElementById("epic").value
                // alert(epic);
                var url = './download_epics/download.php';
                $.ajax({
                    url: url,
                    type : "POST",
                    data : {"epic":epic.toString()},
                    success: function (res) {
                        
                        if (JSON.parse(res).len != 0)
                        {
                            document.getElementById("divdetail").style.display = "block";
                            document.getElementById("isOTPVerification").style.display = "block";
                            email = JSON.parse(res).data;
                            document.getElementById("email_show").innerHTML = email;
                            // document.getElementById("downloaddiv").style.display = "block";

                        }
                        else{
                            document.getElementById("divdetail").style.display = "none";
                            // alert("Epic Not Found");
                            toastr.error("Epic Not Found!")
                        }
                        
                        
                    }
                });
            })
           
            function SendOTP (){
                toastr.success("otp sent to registered email address");
                $.ajax({
                    url: "../otp/otp.php",
                    type : "POST",
                    data : {"id":1,
                    email:email},
                    success: function (res) {
                        // console.log("RESPONSE : ",res)
                        document.getElementById("OTPView").style.display = "block";
                    }
                })
            }
            $("#verifyOTP2").click(function (e) {
                // alert()
                console.log($("#Code").val())
                $.ajax({
                    url: "../otp/otp.php",
                    type : "POST",
                    data : {"id":2,
                    email:email,
                    otp : $("#Code").val()},
                    success: function (res) {
                        res = JSON.parse(res)
                        console.log("RESPONSE : ",res)
                        console.log("RESPONSE : ",typeof(res))
                        // console.log(Json.str)
                        if (res.id == "2")
                        {
                            // 
                            toastr.success("OTP Matched");
                            document.getElementById("OTPView").style.display = "none";
                            document.getElementById("isOTPVerification").style.display = "none";

                            document.getElementById("downloaddiv").style.display = "block";
                        }
                        else if (res.id == "3")
                        {
                            alert("otp doesnot Match We are reloading the page");
                        }
                        else{
                            document.getElementById("OTPView").style.display = "none";

                        }
                    }
                })                
            })
            $("#download").click(function(e) {
                alert("Download success Voter Card");
                window.open("../voter_card_data/id.pdf", '_blank');
                window.location.reload();
                   
            })
        </script>

<footer class="page_footer ds columns_padding_25">
<div class="container-fluid toppadding_20">
<div class="row">
    <div class="col-md-7 col-sm-12">
        <div class="widget widget_text bottommargin_10">
            <a href="/" class="logo top_logo small_logo 0">

                <span class="logo_text">
                    <span class="site-name black">
                        <span class="highlight">Contact</span>
                    </span>
                </span>
            </a>
            <p class="bottommargin_0">
                For details of eligibility criteria or any other additional information related to electoral forms,
                kindly visit <a href="https://eci.gov.in" rel="noopener noreferrer"><b class="link animate">https://eci.gov.in</b></a>
            </p>
            <p class="bottommargin_0">
                For any other technical feedback or issues on the portal kindly send your feedback to

                <a href="mailto:ecitechsupport@eci.gov.in?Help Desk" target="_top" rel="noopener noreferrer">
                    <b class="techlink animate">ECI Technical Support</b>
                </a>
            </p>
            <div>

                <div class="media small-teaser">
                    <div class="media-left">
                        <i class="flaticon-phone-call highlight"></i>
                    </div>
                    <div class="media-body">
                        Toll free Number :1800111950
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-5 col-sm-6">
        <div class="widget widget_popular">

            <span class="logo_text logo">
                <span class="site-name black">
                    <span class="highlight">Other</span> Links
                </span>
            </span>
            <ul class="media-list">
                <li class="media">

                    <div class="media-body">
                        <h4>
                            <a href="http://results.eci.gov.in/" target="_blank" rel="noopener noreferrer">
                                Election Commission of India
                            </a>
                        </h4>
                    </div>
                </li>
                <li class="media">

                    <div class="media-body">
                        <h4>
                            <a href="#">
                                Chief Electoral Officer
                            </a>
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

</div>
</footer>

<section class="ds page_copyright section_padding_15 with_top_border_container">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center text-white">
                <p>National Voter's Service Portal &copy; Copyright 2019. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</section>
</div>
        <!-- eof #box_wrapper -->
</div>

    
                
    
    </body>
    </html