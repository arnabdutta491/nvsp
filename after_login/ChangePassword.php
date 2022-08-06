<!DOCTYPE html>
<!-- saved from url=(0042)https://www.nvsp.in/Account/ChangePassword -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>ChangePassword</title>
    

    <link rel="icon" href="https://www.nvsp.in/Content/images/eci-icon.ico" type="image/x-icon">

    
    <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!-- Custome style -->
    
    
    
    

    <link href="./ChangePassword_files/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" referrerpolicy="no-referrer">

    
    <link href="./ChangePassword_files/bootstrap-flatly.min.css" rel="stylesheet">
    <link href="./ChangePassword_files/style.css" rel="stylesheet" type="text/css">

    <!-- Font Awesome -->
    
    
    
<link rel="stylesheet" href="./ChangePassword_files/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    
    
    
    
    <link rel="stylesheet" href="./ChangePassword_files/fontawesome.min.css" integrity="sha512-xX2rYBFJSj86W54Fyv1de80DWBq7zYLn2z0I9bIhQG+rxIF6XVJUpdGnsNHWRa6AvP89vtFupEPDP8eZAtu9qA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="./ChangePassword_files/animations.css" rel="stylesheet">
    <link href="./ChangePassword_files/fonts.css" rel="stylesheet">
    <link href="./ChangePassword_files/main.css" rel="stylesheet" class="color-switcher-link">

    
    
    
    <script src="./ChangePassword_files/jquery.js.download" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    
    
    <script src="./ChangePassword_files/bootstrap.bundle.min.js.download" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

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

                                <img src="./ChangePassword_files/logo.png">
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
            </header></div>



            <section class="ls section-content-min-height toppadding_10">
                <div class="container">
                    <ul class="breadcrumb">
                        
                    </ul>
                </div>
                

    <div>

        
    </div>
    <div class="container">
        <div class="row main">

<form class="form-horizontal" method="post" role="form"> <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-12">
                    <div class="panel panel-primary" style="border-style:solid;box-shadow: 0 3px 8px 0 #ccc !important;">
                        <div class="panel-heading easternblue">
                            <div class="panel-title text-center">Change Password</div>
                        </div>
                        <div class="panel-body" style="padding-bottom:0;padding-top: 2px ;padding-left:10px;padding-right:10px">

                            <span>* NOTE - Password must contain minimum 6 characters at least 1 Uppercase Alphabet, 1 digit and 1 Special Character </span>

                            <div class="col-md-12 col-sm-12 form-group">
                                <div class="input-group col-sm-offset-1 col-sm-10 col-md-10" style="margin-top:6%">
                                    <span style="width:7%;float:left;"><img src='./ChangePassword_files/p8.png' style="width:30px;height:30px;"></span>
                                    <input style="width:93%;" autocomplete="off" class="form-control" data-val="true" data-val-regex="Please match password pattern" data-val-regex-pattern="^(?=.*[A-Z])(?=.*\d)(?=.*[^\da-zA-Z]).{6,15}$" data-val-required="The old_Password field is required." id="oldPassword" name="old_Password" placeholder="Old Password" type="password">
                                </div>
                                <div style="color:Red;margin-bottom:0px;text-align:center">
                                    <span class="field-validation-valid field-validation-error" data-valmsg-for="old_Password" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 form-group">
                                <div class="input-group col-sm-offset-1 col-sm-10 col-md-10" style="margin-top:6%">
                                    <span style="width:7%;float:left;"><img src='./ChangePassword_files/p8.png' style="width:30px;height:30px;"></span>
                                    <input style="width:93%;" autocomplete="off" class="form-control" data-val="true" data-val-regex="Please match password pattern" data-val-regex-pattern="^(?=.*[A-Z])(?=.*\d)(?=.*[^\da-zA-Z]).{6,15}$" data-val-required="The Password field is required." id="NewPassword" name="Password" placeholder="New Password" type="password">
                                </div>
                                <div style="color:Red;margin-bottom:0px;text-align:center">
                                    <span class="field-validation-valid field-validation-error" data-valmsg-for="Password" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 form-group">
                                <div class="input-group col-sm-offset-1 col-sm-10 col-md-10" style="margin-top:6%">
                                    <span style="width:7%;float:left;"><img src='./ChangePassword_files/p8.png' style="width:30px;height:30px;"></span>
                                    <input style="width:93%;" autocomplete="off" class="form-control" data-val="true" data-val-equalto="The password and confirmation password do not match." data-val-equalto-other="*.Password" data-val-required="The Confirm password field is required." id="ConfirmPassword" name="ConfirmPassword" placeholder="Confirm New Password" type="password">
                                </div>
                                <div style="color:Red;margin-bottom:0px;text-align:center">
                                    <span class="field-validation-valid field-validation-error" data-valmsg-for="ConfirmPassword" data-valmsg-replace="true"></span>
                                </div>
                            </div>

                            <div class="col-sm-11 col-md-11 controls" style="margin-bottom:10px">
                                <button id='chg_psd' class="btn btn-primary pull-right"><img src='./ChangePassword_files/p2.png'> Change Password</button>
                            </div>



                        </div>
                    </div>
                </div>
</form>
        </div>
    </div>
            </section>
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
                                                <img src="./ChangePassword_files/i5.png">
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
    </div>
    <script src="./ChangePassword_files/jquery-ui.min.js.download" integrity="sha256-hlKLmzaRlE8SCJC1Kw8zoUbU8BxA+8kR3gseuKfMjxA=" crossorigin="anonymous"></script>
    <script src="./ChangePassword_files/compressed.js.download" async=""></script>
    <script src="./ChangePassword_files/main.js.download"></script>
    <script src="./ChangePassword_files/jquery.validate.min.js.download" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--Toaster-->
    <script src="./ChangePassword_files/jquery.toast.min.js.download" integrity="sha512-zlWWyZq71UMApAjih4WkaRpikgY9Bz1oXIW5G0fED4vk14JjGlQ1UmkGM392jEULP8jbNMiwLWdM8Z87Hu88Fw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="./ChangePassword_files/jquery.toast.min.css" integrity="sha512-wJgJNTBBkLit7ymC6vvzM1EcSWeM9mmOu+1USHaRBbHkm6W9EgM0HY27+UtUaprntaYQJF75rc8gjxllKs5OIQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="./ChangePassword_files/toasterNotifications.js.download"></script>
    <script src="./ChangePassword_files/sha512.min.js.download"></script>
    <script>
        setTimeout(function () {
            window.history.forward();
        }, 0);
        window.onunload = function () { null };
    </script>

<script type="text/javascript">
        function Validate() {
            if ($("#oldPassword").val() == "" || $("#NewPassword").val() == ""
                || $("#ConfirmPassword").val() == "") {
                alert('Please enter Password');
                return false;
				//event.preventDefault();
            }
            else if ($("#oldPassword").val() != "" || $("#NewPassword").val() != ""
                || $("#ConfirmPassword").val() != "") {

                var regex = new RegExp("^(?=.*[A-Z])(?=.*\\d)(?=.*[^\\da-zA-Z]).{6,15}$");
                var res_opass = regex.test($("#oldPassword").val());
                var res_pass = regex.test($("#NewPassword").val());
                var res_cpass = regex.test($("#ConfirmPassword").val());
                if (res_opass && res_pass && res_cpass)
                    return true;
                else {
                    toastr.error("Password does not match password pattern.");
					return false;
                    //event.preventDefault();
                }
            }
        }
             function SubmitsEncry() {
                 var txtoldpassword = document.getElementById("oldPassword").value.trim();
                 var txtpassword = document.getElementById("NewPassword").value.trim();
                 var txtconfirmpassword = document.getElementById("ConfirmPassword").value.trim();

                 var hashedoldpassword = sha512(txtoldpassword);
                 var hashedpassword = sha512(txtpassword);
                 var hashedconfirmpassword = sha512(txtconfirmpassword);
                               

                 document.getElementById("oldPassword").value = hashedoldpassword;
                 document.getElementById("NewPassword").value = hashedpassword;
                 document.getElementById("ConfirmPassword").value = hashedconfirmpassword;

                 if ($("#oldPassword").val() != "" && $("#NewPassword").val() != ""
                     && $("#ConfirmPassword").val() != "") {
                     $("#ResetPassword").submit();
                 }
                 else
                     event.preventDefault();
            }
			$('#chg_psd').click(function(){
				var txtoldpassword = document.getElementById("oldPassword").value.trim();
				var txtpassword = document.getElementById("NewPassword").value.trim();
				var txtconfirmpassword = document.getElementById("ConfirmPassword").value.trim();
				if(Validate()==false){
					return false;
				}
				else{
					if(txtpassword!=txtconfirmpassword){
						alert("confirm password doesn't match the new password!");
						return false;
					}
					else{
						var url='./ChangePassword_files/Check_Password.php?old='+txtoldpassword+'&new='+txtpassword;
						$.ajax({
							url:url,
							success:function(response){
								if(response=='true'){
									alert('password changed successfully');
									document.location='UserProfile.php';
								}
								else if(response=="false"){
									alert('incorrect old password!');
								}
								else{
									alert(response);
								}
							}
						});
					}
				}
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

<a href="#" id="toTop" style="display: none;"><span id="toTopHover"></span>To Top</a></body></html>