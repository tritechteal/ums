<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="sign_up.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php
include 'connection.php';
$db_conn = new db_connection();
session_start();
if( isset( $_POST['sign_up'] ) )
{

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $campus = $_POST['campus'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $program = $_POST['program'];

    $qurey="INSERT INTO `sign_up` (first_name,last_name,campus,password,gender,email,phone,program) 
    VALUES('$first_name','$last_name','$campus','$password','$gender','$email','$phone','$program')";
    $result = $db_conn->insertData($qurey);
    //var_dump($first_name, $last_name, $campus, $password, $gender, $email, $phone, $program);
    //();
}
?>
<div class="container register">
    <form method="post">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
            <h3>Welcome</h3>
            <p>AUIC Online Registration Form!</p>
            <button type="submit" formaction="log_in.php" class="btn-default">Log In</button><br/>
        </div>
    <div class="col-md-9 register-right">

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">SignUp for Admission</h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name *" name="first_name" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last Name *" name="last_name" />
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="campus">
                                    <option class="hidden"   selected disabled>Choose Campus</option>
                                    <option value="islamabad">Islambad Campus</option>
                                    <option value="peshawer">Peshawer Campus</option>
                                    <option value="uae">UAE Campus</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password *"  id="Password"/>
                            </div>

                            <div class="form-group">
                                <div class="maxl">
                                    <label class="radio inline">
                                        <input type="radio" name="gender" value="male" checked>
                                        <span> Male </span>
                                    </label>
                                    <label class="radio inline">
                                        <input type="radio" name="gender" value="female">
                                        <span>Female </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Your Email *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" minlength="10" maxlength="15" name="phone" class="form-control" placeholder="Your Phone *" value="" />
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="program">
                                    <option class="hidden"  selected disabled>Choose Program</option>
                                    <option name="undergraduate">Undergraduate</option>
                                    <option name="graduate">Graduate</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control"  placeholder="Confirm Password *"  id="Confirm_Password" />
                                <span id='message'></span>
                            </div>
                            <input type="submit" class="btnRegister" name="sign_up"  id="sign_up" value="Register"/>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </form>
</div>
