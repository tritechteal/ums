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
         <div class="row">

             <div class="col-md-8">

                 <form class="signup" action="#" method="post">
                     <div class="form-group">
                         <input type="text" class="form-control" placeholder="Name">
                     </div>
                     <div class="form-group">
                         <input type="email" class="form-control" placeholder="Father Name">
                         <div class="row">
                     </div>
                         <br>
                     <div class="form-inline">

                         <div class="col-md-4"><label>DoB:</label></div>
                         <div class="col-md-8"><input type="date" class="form-control" placeholder="DOB"></div>

                     </div>
                         <br>
                     <div class="form-inline">
                         <div class="col-md-4"><label>Gender:</label></div>
                         <div class="col-md-8">
                         <select class="form-control">
                             <option value="gender">Select Gender</option>
                             <option value="male">Male</option>
                             <option value="female">Female</option>
                             <option value="other">Others</option>
                         </select>
                         </div>
                     </div>
                         <br>

                         <div class="form-inline">
                             <div class="col-md-4"><label >Citizen:</label></div>
                             <div class="col-md-8">
                                 <select class="form-control">
                                     <option value="city">Select Your City</option>
                                     <option value="isb">islamabad</option>
                                     <option value="rwp">rawalpindi</option>
                                     <option value="jhelum">jhelum</option>
                                 </select>
                             </div>
                         </div>
                         <br>
                         <div class="form-inline">
                             <div class="col-md-4"><label >Domicile:</label></div>
                             <div class="col-md-8">
                                 <select class="form-control">
                                     <option value="city">Select Domicile</option>
                                     <option value="isb">AJK</option>
                                     <option value="rwp">FATA</option>
                                     <option value="jhelum">Islamabad</option>
                                     <option value="jhelum">Panjab</option>
                                     <option value="jhelum">Sindh</option>
                                     <option value="jhelum">Gilgit Baltistan</option>
                                     <option value="jhelum">Khayber Pakhton Khawa</option>
                                 </select>
                             </div>
                         </div>
                         <br>
                         <div class="form-inline">

                             <div class="col-md-4"><label >CNIC:</label></div>
                             <div class="col-md-8">
                                 <input type="text" class="form-control"   placeholder="XXXXX-XXXXXXX-X"  name="cnic" required="" >
                             </div>

                         </div>
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