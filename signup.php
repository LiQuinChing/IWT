
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="vhstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    
    <!-- <link rel="icon" href="imgs/signuplogo.png"> -->
</head>

<body class="main-body"  >
<?php 
        include 'headervh.php';
    ?>   
    

    <div class="container-fluid vh-100 d-flex justify-content-center mt-0">
        <div class="row align-content-center">

            <!-- header -->
            <div class="col-12 mt-0 mb-0">
                <div class="row">
                    <a href="index.php">
                        <div class="col-12 logo"></div>
                    </a>
                    <div class="col-12">
                        <p class="text-center title01 fw-bolder">Hi, Welcome </p>
                    </div>
                </div>
            </div>

            <!-- header -->

            <!-- content -->
            <form action="register.php" method="POST">
            <div class="col-12 p-3">
                <div class="row">

                    <div class="col-6 d-none d-lg-block background"></div>
                    <!-- signupbox -->

                    <div class="col-12 col-lg-6" id="signUpBox">
                        <div class="row g-1">

                            <div class="col-12">
                                <p class="title02 ">Create New Account</p>
                            </div>

                            <div class="col-12 d-none" >
                                <div class="alert alert-danger" role="alert" id="msg">

                                </div>
                            </div>

                            <div class="col-6">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" placeholder="First Name" id="fname" name="firstname" required />
                            </div>

                            <div class="col-6">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" placeholder="Last Name" id="lname" name="lastname" required />
                            </div>

                            <div class="col-12">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="example@gmail.com" id="email" name="email" required />
                            </div>

                            <div class="col-12">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="ex:- **********" id="password" name="password" required/>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" placeholder="ex:- **********" id="password" />
                            </div>

                            <div class="col-6">
                                <label class="form-label">Mobile</label>
                                <input type="tel" class="form-control" placeholder="ex:- 0700000000" id="mobile" name="mobilenumber" required/>
                            </div>

                            <div class="col-6">
                                <label class="form-label">Gender</label>
                                <select class="form-control" id="gender">

                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>

                                </select>
                            </div>

                            <div class="col-6">
                                <label class="form-label">Country</label>
                                <input type="text" class="form-control" id="country" name="country" required/>
                            </div><br/><br/>
                        <div class="regs">
                            <div class="col-12 col-lg-6 d-grid mt-2 ">
                                <button type = "submit" name = "Submit" class=" btn btn-primary" > Sign Up</button>
                            </div>

                            <div class="col-12 col-lg-6 d-grid mt-2  ">
                            
                                    <button class="btn btn-secondary">  <a href="login.php" class="text-white text-decoration-none"> Already have an account? Sign In</a></button>
                               
                            </div>
</div>
                        </div>
                    </div>

                    <!-- signupbox -->


                </div>
            </div></form>

            <br/><br/><br/>
             <!-- <footer>
            <div class="col-12 fixed-bottom d-none d-lg-block">
                <p class="text-center fw-bold">&copy; 2023  All Rights Reserved</p>
            </div>
            </footer> -->

        </div>

    </div> 
    <?php 
         include 'footervh.php';
    ?>
</body>
</html>
