<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sarv upchar </title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login-style.css">
    <link rel="stylesheet" href="signup-style.css">
    <link rel="stylesheet" href="about-style.css">

    <link rel="stylesheet" href="angimate.css">



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">









    <style>
        img {
            box-shadow: #a51782;
        }



        nav,
        #dev {

            /* background-image: linear-gradient(135deg, #FEC163 10%, #DE4313 100%); */
            /* background-color: #0cbaba; */
            /* background-color: #fff; */
            background-image: linear-gradient(to right, blue, #a51782);
            /* background-image: linear-gradient(315deg, #0cbaba 0%, #380036 74%); */
            background-color: rgb(20, 20, 73);

        }

        li a {
            color: rgb(217, 217, 217) !important;

            text-transform: capitalize;
            font-family: poppins;
            cursor: pointer;

        }


        li:hover a {
            color: rgb(255, 255, 255) !important;
        }

        ul {
            list-style: none;
        }

        .col-md-4 p {
            padding: 10px;
        }

        .carousel-inner img {
            width: 100%;
            /* height:600px; */
        }

        #registerModal {

            z-index: 2000;
        }

        .subscribe {
            width: 400px;
        }

        @media(max-width:576px) {

            .follow {
                margin-top: 30px;
                ;
            }

            .subscribe {
                width: 340px;



            }
        }
    </style>
</head>

<body>
    <!-- start modal -->



    <nav class="navbar navbar-expand-md wow swing">
        <a href="#" class="navbar-brand text-light">
            <img src="logo1.png" alt="" width="50" class="logo">
        </a>
        <i class="fa fa-bars navbar-toggler text-light" data-toggle="collapse" data-target="#open-menu"></i>
        <div class="collapse navbar-collapse" id="open-menu">
            <ul class="navbar-nav  ml-auto">
                <li class="nav-item"><a class="nav-link" href="#" style="margin-top: 7px;">home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.html" style="margin-top: 7px;">dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.html" style="margin-top: 7px;">about us</a></li>
                <li class="nav-item"><a class="nav-link" href="#" style="margin-top: 7px;">services</a></li>
                <li class="nav-item"><a class="nav-link" href="about.html" style="margin-top: 7px;">online appointment</a></li>

                <li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#loginModal"> <button class="btn btn-primary text-light">LOGIN</button></a>
                </li>
                <li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#registerModal"><button class="btn btn-warning text-light" style="background-color: deeppink;">Register</button></a></li>


            </ul>
        </div>

    </nav>



    <!--section code start-->
    <div class="container-fluid" style="padding: 0 !important;">
        <div class="carousel slide" data-ride="carousel" id="slider">
            <ol class="carousel-indicators">
                <!-- <li data-target="#slider" data-slide-to="0" class="active"></li>
        <li data-target="#slider" data-slide-to="1"></li> -->
                <li class="active" id="one"></li>
                <li id="two"></li>
            </ol>
            <div class="carousel-inner ">
                <div class="carousel-item active">
                    <img src="images/1.jpg" alt="">
                    <div class="carousel-caption">
                        <h1 class="text-center text-dark"></h1>
                    </div>
                </div>
                <div class="carousel-item animated  ">
                    <img src="images/2.jpg" alt="">
                    <div class="carousel-caption">
                        <h1 class="text-center text-warning"></h1>
                    </div>
                </div>
                <div class="carousel-item animated  ">
                    <img src="images/3.jpeg" alt="">
                    <div class="carousel-caption">
                        <h1 class="text-center text-warning"></h1>
                    </div>
                </div>

                <div class="carousel-item animated  ">
                    <img src="images/4.webp" alt="">
                    <div class="carousel-caption">
                        <h1 class="text-center text-warning"></h1>
                    </div>
                </div>
                <div class="carousel-item animated  ">
                    <img src="images/5.jpg" alt="">
                    <div class="carousel-caption">
                        <h1 class="text-center text-warning"></h1>
                    </div>
                </div>



            </div>
            <a href="#slider" class="carousel-control-prev " data-slide="prev">
                <i class="fa fa-chevron-left" style="font-size: 50px; color: rgb(223, 248, 0);"></i>
            </a>
            <a href="#slider" class="carousel-control-next  " data-slide="next">
                <i class="fa fa-chevron-right" style="font-size: 50px; color: rgb(223, 248, 0);"></i>
            </a>
        </div>
    </div>

    <!--section code end-->







    <!-- //footer -->
    <div class="container-fluid">



        <h2>Updates & Important Links</h2>
        <div style="margin-left: 10px;">
            <a href="skldfhsdkfds">Availability of beds in AIIMS Delhi</a><br>
            <a href="jasashk">Medicines and Dispensary regulation</a><br>
            <a href="https://delhi.gov.in/">Govt of NCT of Delhi Portal</a> <br>
            <a href="jsbd">Strike in Safdarganj hospital</a>
        </div>

        <div class="container-fluid" style="background-color: #296F89; color:white">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="my-3 jost ">GET IN TOUCH</h2>
                    <div class="input-group subscribe " style="">
                        <input type="text " name="" id="" class="form-control " placeholder="enter email id to subscribe">
                        <div class="input-group-append">
                            <span class="input-group-text bg-danger text-light">subscribe</span>
                        </div>
                    </div>



                </div>
                <div class="col-md-3 ">

                    <h2 class="jost">SCHEDULE</h2>
                    <div style="font-size:18px;line-height:35px">
                        Monday - Sunday <br>
                        time: 9am-11pm <br>
                        24*7 Availability <br> <br>
                        <h2 class="jost">ADDRESS</h2>
                        Nalanda college of enginnering <br>
                        chandi (Nalanda)<br>
                    </div>

                </div>
                <div class="col-md-3 ">
                    <h2 class="jost follow">FOLLOW US</h2>
                    <div style="font-size:18px;line-height:35px">
                        <a href="#" class="text-light">Facebook</a><br>
                        <a href="#" class="text-light">Instagram</a><br>
                        <a href="#" class="text-light">twitter</a><br>

                    </div>
                    <br><br>
                    <h2 class="jost">CONTACT</h2>
                    <div style="font-size:18px;line-height:35px">
                        T: +91 9608519031 <br>
                        E: mishrabadal988@gmail.com

                    </div>
                </div>
            </div>
        </div>

        <p align="center" class="bg-dark" style="color:white">@sih 2024 template all right reserved</p>






        <!-- modal coding start -->
        <div id="registerModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header d-flex justify-content-between align-items-center">
                        <h1 class="text-center mx-auto signup-message">Registration Form</h1>
                        <buttons type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-12">
                            <form>


                                <!-- Name Field -->
                                <label for="name">Full Name</label>
                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    placeholder="Enter your full name"
                                    required />

                                <!-- category -->
                                <div class="form-group"><label for="name">choose category</label>
                                    <select name="" id="category" class="form-control">
                                        <option value="doctor">Doctor</option>
                                        <option value="patient">patient</option>
                                        <option value="staff">staff</option>
                                    </select>
                                </div>









                                <!-- Gender Field -->

                                <div class="radio-group form-group">
                                    <label>Gender</label>
                                    <label class="radio-container">Male
                                        <input type="radio" name="gender" value="male" id="gender" required />
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-container">Female
                                        <input type="radio" name="gender" value="female" id="gender" required />
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <!-- Aadhaar Number Field -->
                                <label for="aadhaar">Aadhaar Number</label>
                                <input
                                    type="text"
                                    id="aadhar"
                                    name="aadhaar"
                                    placeholder="Enter your Aadhaar number"
                                    required
                                    pattern="[0-9]{12}"
                                    title="Aadhaar number must be 12 digits" />
                                <label for="dob">Date of birth</label>
                                <input
                                    type="date"
                                    id="dob"
                                    name="dob"
                                    placeholder="Date of birth"
                                    required
                                    pattern="[0-9]{12}"
                                    title="Aadhaar number must be 12 digits" />

                                <!-- Phone Number Field -->
                                <label for="phone">Phone Number</label>
                                <input
                                    type="tel"
                                    id="phone"
                                    name="phone"
                                    placeholder="Enter your phone number"
                                    required
                                    pattern="[0-9]{10}"
                                    title="Phone number must be 10 digits" />

                                <!-- Email Field -->
                                <label for="email">Email ID</label>
                                <input
                                    type="email"
                                    id="reg-email"
                                    name="email"
                                    placeholder="Enter your email ID"
                                    required />

                                <!-- password Field -->
                                <label for="Enter password">Enter password</label>
                                <input
                                    type="password"
                                    id="psw"
                                    name="password"
                                    required
                                    pattern="[0-9]{10}"
                                    title="Enter password" />
                                <label for="Confirm password">Confirm password</label>
                                <input
                                    type="password"
                                    id="c-psw"
                                    name="password"
                                    required
                                    pattern="[0-9]{10}"
                                    title="Confirm password" />
                                <!-- Submit Button -->
                                <button type="submit" id="form-submit">Register</button>
                            </form>

                        </div>



                    </div>

                </div>

            </div>
        </div>












        <!-- //login modal -->
        <div id="loginModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header d-flex justify-content-between align-items-center">
                        <h1 class="text-center mx-auto">Login</h1>
                        <buttons type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-12">
                            <form>
                                <div class="input-group">
                                    <label for="username">Username*:</label>
                                    <input type="text" id="login-email" name="username" required>
                                </div>
                                <div class="form-group"><label for="name">choose category</label>
                                    <select name="" id="login-category" class="form-control">
                                        <option value="doctor">Doctor</option>
                                        <option value="patient">patient</option>
                                        <option value="staff">staff</option>
                                    </select>
                                </div>


                                <div class="input-group">
                                    <label for="password">Password*:</label>
                                    <input type="password" id="login-psw" name="password" required>
                                </div>
                                <button type="submit" class="login-btn">Login</button>
                                <p class="register-text">Do not have any account? <a data-toggle="modal" data-target="#registerModal" class="btn">Register</a></p>
                            </form>
                        </div>



                    </div>

                </div>

            </div>
        </div>

        <!-- end login modal coding start -->

        <script>

            //signup data saving
            $(document).ready(() => {
                $("#form-submit").click(

                    function(e) {
                        var ele = document.getElementsByName('gender');
                        var gender;
                        gender = "male";
                        for (i = 0; i < ele.length; i++) {
                            if (ele[i].checked)
                                gender = ele[i].value;
                        }

                        e.preventDefault();
                        $.ajax({
                            type: "POST",
                            url: "signup.php",
                            data: {
                                name: $("#name").val(),
                                category: $("#category").val(),
                                gender: gender,
                                aadhar: $("#aadhar").val(),
                                dob: $("#dob").val(),
                                phone: $("#phone").val(),
                                reg_email: $("#reg-email").val(),
                                psw: $("#psw").val()
                            },
                            beforeSend: function() {
                                $(".signup-message").html("wait.. we are saving your data");
                                $("#registerModal .modal-body").css("display", "none");
                            },
                            success: function(response) {
                                //document.write(response);
                                $(".signup-message").html("thanks for signup");


                                $("#registerModal .modal-body").css("display", "none");
                                setTimeout(function() {
                                    $("#signup-form").trigger('reset');
                                    $(".signup-message").html("registration form");
                                    $("#registerModal .modal-body").css("display", "block");
                                }, 2000);
                                //alert(response.trim());
                            }

                        });

                    }
                );
            });

            //login data
           $(document).ready(()=>{
                $(".login-btn").click(function(e){
                        e.preventDefault();
                    var page_url;
                    if($("#login-category").val()=="patient"){
                            page_url ="http://localhost/hospital_mangement/appointment_dashboard.php"; 
                    }
                    else if($("#login-category").val()=="doctor"){
                        page_url ="http://localhost/hospital_mangement/doctor_dashboard.php";
                    }
                    else{
                        page_url ="http://localhost/hospital_mangement/staff_dashboard.php";
                    }

                        $.ajax({
                            type: "POST",
                            url: "login.php",
                            data: {
                                category: $("#login-category").val(),
                                reg_email: $("#login-email").val(),
                                psw: $("#login-psw").val()
                            },
                            beforeSend: function() {
                                // $(".signup-message").html("wait.. we are saving your data");
                                // $("#registerModal .modal-body").css("display", "none");
                            },
                            success: function(response) {
                           if(response.trim() =="user found"){
                            window.location=page_url;
                           }
                           else{
                            alert(response);
                           }
                                // $(".signup-message").html("thanks for signup");


                                // $("#registerModal .modal-body").css("display", "none");
                                // setTimeout(function() {
                                //     $("#signup-form").trigger('reset');
                                //     $(".signup-message").html("registration form");
                                //     $("#registerModal .modal-body").css("display", "block");
                                // }, 2000);
                                //alert(response.trim());
                            }

                        });




                });
            });
        </script>















</body>

</html>