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
<html>
<body>

<div class="container" style="margin-top: 10px">
    <div class="row">
        <div class="col-md-3">
            <ul class="list-unstyled">
                <li><a href="personal_information.php" class="list-group-item  bg-active"><i class="fa fa-angle-double-right"></i> Personal Information <span class="badge"></span> </a></li>
                <li><a href="address_details.php" class="list-group-item"><i class="fa fa-angle-double-right"></i> Address Details</a> </li>
                <li><a href="educational_details.php" class="list-group-item"><i class="fa fa-angle-double-right"></i> Educational Details</a> </li>
                <li><a href="nts_details.php" class="list-group-item"><i class="fa fa-angle-double-right"></i> NTS Details</a> </li>
                <li><a href="program_choices.php" class="list-group-item"><i class="fa fa-angle-double-right"></i> Program Choices</a> </li>
                <li><a href="other_details.php" class="list-group-item"><i class="fa fa-angle-double-right"></i> Other Details</a> </li>
                <li><a href="change-password.html" class="list-group-item"><i class="fa fa-angle-double-right"></i> Change Password</a> </li>
                <li><a href="logout.html" class="list-group-item"><i class="fa fa-angle-double-right"></i> Log Out</a> </li>
            </ul>
        </div>
        <div class="col-md-6">

            <div class="row">
                <form class="signup" action="#" method="post">
                    <div>
                        Permanent Address
                    </div>
                    <hr>

                    <div class="form-inline">
                        <div class="col-md-4"><label>Address:</label></div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <br>
                    <div class="form-inline">
                        <div class="col-md-4"><label>City:</label></div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <br>
                    <div class="form-inline">
                        <div class="col-md-4"><label>Phone:</label></div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <br>
                    <div>   Mailing Address
                    </div>
                    <hr>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Same as above.
                            </label>
                        </div>
                    </div>
                    <div class="form-inline">
                        <div class="col-md-4"><label>Address:</label></div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <br>
                    <div class="form-inline">
                        <div class="col-md-4"><label>City:</label></div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <br>
                    <div class="form-inline">
                        <div class="col-md-4"><label>Phone:</label></div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <br>
                    <div>   Father/ Gaurdian Address
                    </div>
                    <hr>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Same as above.
                            </label>
                        </div>
                    </div>
                    <div class="form-inline">
                        <div class="col-md-4"><label>Address:</label></div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <br>
                    <div class="form-inline">
                        <div class="col-md-4"><label>City:</label></div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <br>
                    <div class="form-inline">
                        <div class="col-md-4"><label>Phone:</label></div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <br>

                    <div class="form-inline">
                        <div class="col-md-4"><label>Mobile:</label></div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
            <p align="right">Enter Your Father or guardian mobile no. here.</p>
                    <br>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Please accept the terms and conditions to proceed with your request.
                            </label>
                        </div>
                    </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success "  value="SUBMIT">
            </div>
            </form>
        </div>
        <div class="col-md-4">sub dic of 2</div>

    </div>

</div>
<div class="col-md-3">test 3</div>

</div>
</div>
</body>
</html>