<!DOCTYPE html>
<!-- saved from url=(0037)https://www.nvsp.in/Account/MyProfile -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>UserProfile</title>
    

    <link rel="icon" href="https://www.nvsp.in/Content/images/eci-icon.ico" type="image/x-icon">

    
    <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!-- Custome style -->
    
    
    
    

    <link href="./UserProfile_files/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" referrerpolicy="no-referrer">

    
    <link href="./UserProfile_files/bootstrap-flatly.min.css" rel="stylesheet">
    <link href="./UserProfile_files/style.css" rel="stylesheet" type="text/css">

    <!-- Font Awesome -->
    
    
    
<link rel="stylesheet" href="./UserProfile_files/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    
    
    
    
    <link rel="stylesheet" href="./UserProfile_files/fontawesome.min.css" integrity="sha512-xX2rYBFJSj86W54Fyv1de80DWBq7zYLn2z0I9bIhQG+rxIF6XVJUpdGnsNHWRa6AvP89vtFupEPDP8eZAtu9qA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="./UserProfile_files/animations.css" rel="stylesheet">
    <link href="./UserProfile_files/fonts.css" rel="stylesheet">
    <link href="./UserProfile_files/main.css" rel="stylesheet" class="color-switcher-link">

    
    
    
    <script src="./UserProfile_files/jquery.js.download" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    
    
    <script src="./UserProfile_files/bootstrap.bundle.min.js.download" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
      <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <![endif]-->

    



    <style>
        /*.form-control {
          padding: 6px 5px !important;
        }*/
    </style>
</head>
<body>
    <?php session_start();?>
    

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

            <div class="page_header_wrapper header_white" style="height: 102.5px;"><div class="page_header_wrapper header_white" style="height: 102.5px;"><header class="page_header header_white toggler_right">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-5 col-sm-12">
                            <a href="index.html" class="logo top_logo">

                                <img src="./UserProfile_files/logo.png">
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
                                            <a href="About.html">About Us</a>
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
            </header></div></div>



            <section class="ls section-content-min-height toppadding_10">
                <div class="container">
                    <ul class="breadcrumb">
                        
                    </ul>
                </div>
                


    <div class="container toppadding_10">
        <div class="col-md-12 form-group">
        </div>
        <div class="panel">
            <div class="panel-content">

                <div id="divView">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h2>My Profile</h2>
                        </div>
                    </div>
                    <div class="panel-body">

                        <div class="row">
                            <div class="col-md-2 col-sm-12 col-xs-12"></div>
                            <div class="col-md-8 col-sm-12 col-xs-12">
                                <div class="table-responsive">
                                    <table class="table table-condensed table-hover table-striped ">
                                        <tbody><tr>
                                            <td>First Name :</td>
                                            <td> <?php echo $_SESSION['f_name'];?></td>
                                        </tr>
                                        <tr>
                                            <td>Last Name :</td>
                                            <td><?php echo $_SESSION['l_name'];?></td>
                                        </tr>
                                        <tr>
                                            <td>Mobile Number :</td>
                                            <td><?php echo $_SESSION['mobile'];?></td>
                                        </tr>
                                        <tr>
                                            <td>Email Id :</td>
                                            <td><?php echo $_SESSION['email'];?></td>
                                        </tr>
                                        <tr>
                                            <td>EPIC Number :</td>
                                            <td><?php echo $_SESSION['epic'];?></td>
                                        </tr>
                                    </tbody></table>
                                </div>
                            </div>
                            <div class="col-md-2 col-xs-12 col-sm-12"></div>
                        </div>


                        <div class="row">
                            <div class="col-md-12 form-group">
                                <div class="col-md-2 col-md-offset-6 text-right padding_0">
                                    <button id="btn1" type="button" onclick="editProfile()" class="btn  btn-info"><img src='./UserProfile_files/p1.png'>&nbsp;Edit Profile</button>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" onclick="location='ChangePassword.php'" class="btn  btn-primary"><img src='./UserProfile_files/p2.png'>&nbsp;Change Password</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div id="divEdit" style="display:none">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h2>Edit Profile</h2>
                        </div>
                    </div>

                    <div class="panel-body">
<form class="form-horizontal" id="form" method="post" role="form" novalidate="novalidate"><div class="form-group">
                                <div class="col-md-12">
                                    <input type="button" onclick="ViewProfile()" value="View Profile" id="btnView" class="btn  btn-primary col-md-offset-10">
                                </div>
                            </div>
                            <div class="row">



                                <div class="form-group col-md-12">
                                    <div class="col-md-3">
                                        <label class="">First Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group input-group-sm">
                                            <span style="width:5%;float:left;"><img src='./UserProfile_files/p3.png' style="width:25px;height:30px;"></span>
                                            <input style="width:95%;" class="form-control" data-val="true" data-val-regex="Input Data is not valid." data-val-regex-pattern="^[a-zA-Z 0&#39;]*$" id="firstName" name="firstName" placeholder="Enter Username" type="text" value='<?php echo $_SESSION['f_name'];?>' autocomplete="off">
                                        </div>
                                        <div class="text-danger text-center">

                                            <span class="field-validation-valid field-validation-error" data-valmsg-for="firstName" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group col-md-12">
                                    <div class="col-md-3">
                                        <label class="">Last Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group input-group-sm">
                                            <span style="width:5%;float:left;"><img src='./UserProfile_files/p3.png' style="width:25px;height:30px;"></span>
                                            <input style="width:95%;" class="form-control" data-val="true" data-val-regex="Input Data is not valid." data-val-regex-pattern="^[a-zA-Z 0&#39;]*$" id="lastName" name="lastName" placeholder="Enter Username" type="text" value='<?php echo $_SESSION['l_name'];?>' autocomplete="off">
                                        </div>
                                        <div class="text-danger text-center">

                                            <span class="field-validation-valid field-validation-error" data-valmsg-for="lastName" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group col-md-12">
                                    <div class="col-md-3">
                                        <label class="">Email</label>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="input-group input-group-sm">
                                            <span style="width:5%;float:left;"><img src='./UserProfile_files/p4.png' style="width:25px;height:30px;"></span>
                                            <input style="width:95%;" class="form-control" data-val="true" data-val-regex="Please enter valid Email" data-val-regex-pattern="^(([\w-+]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)|[\w]{0})$" id="Email" name="Email" placeholder="Enter Email" type="text" value='<?php echo $_SESSION['email'];?>' autocomplete="off">
                                        </div>
                                        <div class="text-danger text-center">
                                            <span class="field-validation-valid field-validation-error" data-valmsg-for="Email" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                </div>



                                <div class="form-group col-md-12">
                                    <div class="col-md-3">
                                        <label class="">EPIC Number</label>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group input-group-sm">
                                            <span style="width:5%;float:left;"><img src='./UserProfile_files/p5.png' style="width:25px;height:30px;"></span>
                                            <input style="width:95%;" class="form-control" data-val="true" data-val-regex="Please enter valid epic no" data-val-regex-pattern="^[A-Za-z0-9]+[\\/\-]*[A-Za-z0-9\/\-]*$" id="user_epicno" name="Epic_no" placeholder="Enter EPIC No." type="text" value='<?php echo $_SESSION['epic'];?>' autocomplete="off">
                                        </div>
                                        
                                        <div class="text-danger text-center">
                                            <span class="field-validation-valid field-validation-error" data-valmsg-for="Epic_no" data-valmsg-replace="true"></span>
                                        </div>


                                    </div>
                                </div>



                                <div class="form-group col-md-12">
                                    <div class="col-md-3">
                                        <label class="">Mobile Number</label>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="input-group input-group-sm">
                                            <span style="width:5%;float:left;"><img src='./UserProfile_files/p6.png' style="width:25px;height:30px;"></span>
											<input style="width:95%;" class="form-control" data-val="true" data-val-regex="Please enter valid mobile number" data-val-regex-pattern="^([6-9][0-9]{9}|\w{0})$" data-val-required="The Phone Number field is required." id="phonenumber" maxlength="10" min="6000000000" minlength="10" name="PhoneNumber" onkeypress="return isNumber(event)" placeholder="Enter Mobile no." type="text" value='<?php echo $_SESSION['mobile'];?>' autocomplete="off">
                                        </div> 
                                        <div class="text-danger text-center">
                                            <span class="field-validation-valid field-validation-error" data-valmsg-for="PhoneNumber" data-valmsg-replace="true"></span>
                                        </div>
                                        <input data-val="true" data-val-number="The field ac_no must be a number." id="ac_no" name="ac_no" type="hidden" value="">
                                        <input data-val="true" data-val-number="The field PART_NO must be a number." id="part_no" name="PART_NO" type="hidden" value="">
                                    </div>
                                    
                                </div>
                                <div class="form-group col-md-12" id="div_captcha" style="">
                                    <div class="col-md-3 ">
                                        <label>Captcha</label>
										<span id="captcha" style="background-color:lightblue;color:dark;font-size:X-large;"></span>
                                        <img src="./UserProfile_files/reload.jpg" alt="Captcha" id="imgRefresh" style="" aria-hidden="true">
                                    </div>

                                    <div class="col-md-2">
                                        <input class="form-control" id="txtCaptcha" maxlength="5" name="Captcha" type="text" value="" autocomplete="off">
                                        <span class="field-validation-valid" data-valmsg-for="Captcha" data-valmsg-replace="true"></span>
                                    </div>
                                    <div class="col-md-3">
                                        <input id="updatebtn" type="button" style="margin-top: 2px; display: block;" class="btn btn-primary " value="update data">
                                    </div>
                                </div>

                                <div class="col-md-12 form-group text-center">
                                    <input type="button" id="btn_update" class="btn btn-primary  validate" value="Update details" disabled="" style="display: none;">
                                </div>
                            </div>
                            <input type="hidden" id="token" data-value="">
</form>                        <div id="mymodal" class="modal  " role="dialog" style="vertical-align: middle;">
                            <div class="modal-dialog" style="width:75%">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header" style="padding:4px;">
                                        <button type="button" class="close" data-dismiss="modal">
                                            ×
                                        </button>
                                        <div class="modal-title" id="dvmodal_Title" style="font-size:medium;">
                                        </div>
                                    </div>
                                    <div id="dvmodalbody" class="modal-body row row-group" style="vertical-align: middle;">

                                    </div>
                                </div>
                            </div>
                        </div>



            </div></div></div></div></div></section>

            
                <footer class="page_footer ds columns_padding_25">
                    <div class="container-fluid toppadding_20">
                        <div class="row">
                            <div class="col-md-7 col-sm-12">
                                <div class="widget widget_text bottommargin_10">
                                    <a href="index.html" class="logo top_logo small_logo 0">

                                        <span class="logo_text">
                                            <span class="site-name black">
                                                <span class="highlight">Contact</span>
                                            </span>
                                        </span>
                                    </a>
                                    <p class="bottommargin_0">
                                        For details of eligibility criteria or any other additional information related to electoral forms,
                                        kindly visit <a href="#" rel="noopener noreferrer"><b class="link animate">https://eci.gov.in</b></a>
                                    </p>
                                    <p class="bottommargin_0">
                                        For any other technical feedback or issues on the portal kindly send your feedback to

                                        <a href="#" target="_top" rel="noopener noreferrer">
                                            <b class="techlink animate">ECI Technical Support</b>
                                        </a>
                                    </p>
                                    <div>

                                        <div class="media small-teaser">
                                            <div class="media-left">
                                                <img src="./UserProfile_files/i5.png">
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
                                                    <a href="#" target="_blank" rel="noopener noreferrer">
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
                            <p>National Voter's Service Portal © Copyright 2019. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- eof #box_wrapper -->
    </div>

    <!-- jquery-ui -->
    
    
    <script src="./UserProfile_files/jquery-ui.min.js.download" integrity="sha256-hlKLmzaRlE8SCJC1Kw8zoUbU8BxA+8kR3gseuKfMjxA=" crossorigin="anonymous"></script>
    <script src="./UserProfile_files/compressed.js.download" async=""></script>
    <script src="./UserProfile_files/main.js.download"></script>
    

    
    
    
    
    <script src="./UserProfile_files/jquery.validate.min.js.download" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--Toaster-->
    <script src="./UserProfile_files/jquery.toast.min.js.download" integrity="sha512-zlWWyZq71UMApAjih4WkaRpikgY9Bz1oXIW5G0fED4vk14JjGlQ1UmkGM392jEULP8jbNMiwLWdM8Z87Hu88Fw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="./UserProfile_files/jquery.toast.min.css" integrity="sha512-wJgJNTBBkLit7ymC6vvzM1EcSWeM9mmOu+1USHaRBbHkm6W9EgM0HY27+UtUaprntaYQJF75rc8gjxllKs5OIQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
    
    <script src="./UserProfile_files/toasterNotifications.js.download"></script>

    
    
    
    
    

    
    <script src="./UserProfile_files/jquery.validate.js.download"></script>
    <script src="./UserProfile_files/jquery.validate.unobtrusive.js.download"></script>
    <script src="./UserProfile_files/jquery.unobtrusive-ajax.min.js.download"></script>
    <script src="./UserProfile_files/ui.js.download"></script>
    <script src="./UserProfile_files/toastr.js.download"></script>
    <link href="./UserProfile_files/toastr.css" rel="stylesheet">
    <script src="./UserProfile_files/main.js.download"></script>


    <script>
        //function preventBack() {
        //    window.history.forward();
        //}
        //setTimeout("preventBack()", 0);

        setTimeout(function () {
            window.history.forward();
        }, 0);
        window.onunload = function () { null };
    </script>

        <script>


        $(document).ready(function () {
			var url = './UserProfile_files/get_otp.php';
            $.ajax({
				url: url,
				success: function (response) {
					$("#captcha").html(response);
				}
			});
        });

        </script>


<script>
    function toEncoded(stringData) {
        const codeUnits = new Uint16Array(stringData.length);
        for (let i = 0; i < codeUnits.length; i++) {
            codeUnits[i] = stringData.charCodeAt(i);
        }
        const charCodes = new Uint8Array(codeUnits.buffer);
        let result = '';
        for (let i = 0; i < charCodes.byteLength; i++) {
            result += String.fromCharCode(charCodes[i]);
        }
        return btoa(result);
    }
        var user_mobileno;

        var t = $("#t").data('value');

        var data = toEncoded("id=" + new Date().getTime() + "&t=" + t);
        var url = '/Account/GetCaptchaImage' + "?id=" + data;

        $.ajax({
            url: url,
            method: "GET",
            success: function (response) {
                var jsondata = JSON.parse(response);
                $("#imgCaptcha").attr('src', 'data:image/png;base64,' + jsondata.img);
            },
            error: function (error) { }
        });

        $('#imgRefresh').click(function () {
			var url = './UserProfile_files/get_otp.php';
            $.ajax({
				url: url,
				success: function (response) {
					$("#captcha").html(response);
				}
			});
        });
		$('#updatebtn').click(function () {
			var f_name=$('#firstName').val();
			var l_name=$('#lastName').val();
			var mobile=$('#phonenumber').val();
			var email=$('#Email').val();
			var epic=$('#user_epicno').val();
			var captcha=$('#txtCaptcha').val();
            
			if(validateMobileno(mobile)==false){
				alert('please enter mobile number.');
				return false;
			}
			var url = './UserProfile_files/check_otp.php?c='+captcha;
			$.ajax({
				url: url,
				success: function (response) {
					if(response=='true'){
						var url = './UserProfile_files/check_data.php?mobile='+mobile+'&f_name='+f_name+'&l_name='+l_name+'&email='+email+'&epic='+epic;
						$.ajax({
							url: url,
							success: function (response) {
								if(response=='mobile_exist'){
									alert("mobile number already exist!");
									return false;
								}
								else if(response=='epic_exist'){
									alert("epic already exist!");
									return false;
								}
								else if(response=='true'){
									alert("successfully update record");
									document.location="UserProfile.php";
								}
								else{
									alert(response);
									return false;
								}
							}
						});
					}
					else{
						alert("invalid captcha!");
					}
				}
			});
			
        });


    function editProfile() {
       document.getElementById("divEdit").style.display="block";
       document.getElementById("divView").style.display="none";

     }

     function ViewProfile() {
       document.getElementById("divEdit").style.display="none";
       document.getElementById("divView").style.display="block";
     }

     function isNumber(evt) {
         evt = (evt) ? evt : window.event;
         var charCode = (evt.which) ? evt.which : evt.keyCode;
         if (charCode > 31 && (charCode < 48 || charCode > 57)) {
             return false;
         }
         return true;
     }


     function validateMobileno(mobileno) {
         var success = false;
         var len = mobileno.length;
         var mobilepatt = new RegExp("^[6-9][0-9]{9}$");
         if (len > 10)
             success = false;
         else {
             var res = mobilepatt.test(mobileno);
             if (res == true)
                 success = true;
             else
                 success = false;
         }

         return success;
     }
	 
        $("#user_epicno").blur(function () {
            geVoterDetails()
		});

        function geVoterDetails() {

            var epic_no = $("#user_epicno").val();

            if (epic_no != null && epic_no != "" && epic_no != 'undefined') {

            var url = '/Account/GetVoterDetails' + '?epic_no=' + epic_no;

            $.ajax({
                url: url,
                method: "GET",
                async: false,
                success: function (response) {
                    if (response != null && response != "" && response != 'undefined') {
                        $("#dvmodalbody").html(response);
                        $("#mymodal").modal('show');
                        $("#isDuplicateEpic").val("true");
                    }
                    else {
                        $("#isDuplicateEpic").val("false");
                        return false;
                    }

                },
                error: function (error) {

                }
            });
            }
        }


        //Added By Supriya 19-01-2021

       
    $(".validate").click(function () {
        var user_epicno = $("#user_epicno").val();
        var isDuplicate = $("#isDuplicateEpic").val();
        var isRecordSelected = $("#isRecordSelected").val();
        if ($("#Code").val() != '') {

            $("#otp").val($("#Code").val());
        } else {
            showErrorToast("Enter OTP")
            return false
        }

        if (isDuplicate == "true" && isRecordSelected == "false" && (user_epicno != null && user_epicno != "" && user_epicno != 'undefined')) {
            toastr.error("Your EPIC no. is duplicate. Please select the record to confirm that it belongs to you.");
            event.preventDefault();
            geVoterDetails();
            //return false;
        }
      
        $("#form").submit();
    });
</script>


    <script type="text/javascript">

        $(".Datevalidate").change(function () {

            var dateInput = $(this).val();
            if (dateInput.length == 10) {
                var dateReg = /^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{4})$/;
                var data = dateInput.match(dateReg)
                if (!data) {
                    showWarningToast('Please enter valid date.');
                    $(this).val('');
                }
            }
            else {
                showWarningToast('Please enter valid date.');
                $(this).val('');
            }
        });

        $('#btnIncFont').click(function () {
            
            var selectedFont = $('body').css('font-size');
            if (selectedFont != "18px")    /*New code to fix the bug of increase font size Reena Rana 29 Aug 2018*/
                $('body').css('font-size', (parseInt(selectedFont) + 1));
            else {
                console.log("inseide else" + selectedFont);
            }
        });


        $('#btnDecFont').click(function () {
            var selectedFont = $('body').css('font-size');
            if (selectedFont != "10px")  /*New code to fix the bug of decrease font size Reena Rana 29 Aug 2018*/
                $('body').css('font-size', (parseInt(selectedFont) - 1));
            else {
                console.log("inseide else" + selectedFont);
            }
        });
        $(document).ready(function () {
            document.addEventListener('contextmenu', event => event.preventDefault());
        });
    </script>

<a href="#" id="toTop" style="display: none;"><span id="toTopHover"></span><span id="toTopHover"></span>To Top</a><a href="https://www.nvsp.in/Account/MyProfile#" id="toTop">To Top</a></body></html>