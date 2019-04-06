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
                Programes
            </div>
            <hr>

            <div class="form-inline">
                <div class="col-md-5"><label >Program Choice 1:</label></div>
                <div class="col-md-7">
                    <select class="form-control">
                        <option value="city">Select Program Choice 1</option>
                        <option value="bscs">BSCS</option>
                        <option value="bsse">BSSE</option>
                        <option value="bsit">BSIT</option>
                        <option value="bstn">BSTN</option>
                        <option value="bs_eng">BS ENG</option>
                        <option value="bs_fashion">BS Fashion Designing</option>
                        <option value="e_mechanical">BEEE(Mechanical)</option>
                        <option value="e_electrical">BEEE(Electrical)</option>
                        <option value="e_civil">BEEE(Civil)</option>
                        <option value="pharm_d">Pharm D</option>
                        <option value="dpt">DPT</option>
                        <option value="bs_mlt">BS(MLT)</option>
                        <option value="bs_psychology">BS Psychology</option>
                        <option value="bcom">B com.</option>
                        <option value="bba">BBA</option>
                        <option value="b_civil">B.tech(Civil)</option>
                        <option value="b_electrical">B.tech(Electrical)</option>
                        <option value="b_mechanical">B.tech(Mechanical)</option>
                        <option value="nutrition">BS Human Nutrition and Dietics</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="form-inline">
                <div class="col-md-5"><label >Program Choice 2:</label></div>
                <div class="col-md-7">
                    <select class="form-control">
                        <option value="city">Select Program Choice 2</option>
                        <option value="bscs">BSCS</option>
                        <option value="bsse">BSSE</option>
                        <option value="bsit">BSIT</option>
                        <option value="bstn">BSTN</option>
                        <option value="bs_eng">BS ENG</option>
                        <option value="bs_fashion">BS Fashion Designing</option>
                        <option value="e_mechanical">BEEE(Mechanical)</option>
                        <option value="e_electrical">BEEE(Electrical)</option>
                        <option value="e_civil">BEEE(Civil)</option>
                        <option value="pharm_d">Pharm D</option>
                        <option value="dpt">DPT</option>
                        <option value="bs_mlt">BS(MLT)</option>
                        <option value="bs_psychology">BS Psychology</option>
                        <option value="bcom">B com.</option>
                        <option value="bba">BBA</option>
                        <option value="b_civil">B.tech(Civil)</option>
                        <option value="b_electrical">B.tech(Electrical)</option>
                        <option value="b_mechanical">B.tech(Mechanical)</option>
                        <option value="nutrition">BS Human Nutrition and Dietics</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="form-inline">
                <div class="col-md-5"><label >Program Choice 3:</label></div>
                <div class="col-md-7">
                    <select class="form-control">
                        <option value="city">Select Program Choice 3</option>
                        <option value="bscs">BSCS</option>
                        <option value="bsse">BSSE</option>
                        <option value="bsit">BSIT</option>
                        <option value="bstn">BSTN</option>
                        <option value="bs_eng">BS ENG</option>
                        <option value="bs_fashion">BS Fashion Designing</option>
                        <option value="e_mechanical">BEEE(Mechanical)</option>
                        <option value="e_electrical">BEEE(Electrical)</option>
                        <option value="e_civil">BEEE(Civil)</option>
                        <option value="pharm_d">Pharm D</option>
                        <option value="dpt">DPT</option>
                        <option value="bs_mlt">BS(MLT)</option>
                        <option value="bs_psychology">BS Psychology</option>
                        <option value="bcom">B com.</option>
                        <option value="bba">BBA</option>
                        <option value="b_civil">B.tech(Civil)</option>
                        <option value="b_electrical">B.tech(Electrical)</option>
                        <option value="b_mechanical">B.tech(Mechanical)</option>
                        <option value="nutrition">BS Human Nutrition and Dietics</option>
                    </select>
                </div>
            </div>
            <br>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success "  value="Save and Move Next">
    </div>
    </form>

</div>
<div class="col-md-3">test 3</div>

</div>
</div>
</body>
</html>