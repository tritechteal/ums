<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="sign_up.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php
include 'connection.php';
$db_conn = new db_connection();
session_start();
if( isset( $_POST['personel_info'] ) )
{

    $full_name = $_POST['full_name'];
    $father_name = $_POST['father_name'];
    $dob = $_POST['date'];
    $gender = $_POST['gender'];
    $citizen = $_POST['citizen'];
    $d_city = $_POST['d_city'];
    $cnic = $_POST['cnic'];

    $qurey="INSERT INTO `personel_info` (full_name,father_name,date,gender,citizen,d_city,cnic) 
    VALUES('$full_name','$father_name','$dob','$gender','$citizen','$d_city','$cnic')";
    $result = $db_conn->insertData($qurey);
   var_dump($full_name, $father_name, $dob, $gender, $citizen, $d_city, $cnic);

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
                         <input type="text" class="form-control" placeholder="Name" name="full_name">
                     </div>
                     <div class="form-group">
                         <input type="text" class="form-control" placeholder="Father Name" name="father_name">
                         <div class="row">
                     </div>
                         <br>
                     <div class="form-inline">

                         <div class="col-md-4"><label>DoB:</label></div>
                         <div class="col-md-8"><input type="date" class="form-control" placeholder="DOB" name="date"></div>

                     </div>
                         <br>
                     <div class="form-inline">
                         <div class="col-md-4"><label>Gender:</label></div>
                         <div class="col-md-8">
                         <select class="form-control" name="gender">
                             <option value="gender">Select Gender</option>
                             <option value="male" name="male">Male</option>
                             <option value="female" name="female">Female</option>
                             <option value="other" name="other">Others</option>
                         </select>
                         </div>
                     </div>
                         <br>

                         <div class="form-inline">
                             <div class="col-md-4" name="citizen"><label >Citizen:</label></div>
                             <div class="col-md-8">
                                 <select class="form-control" name="citizen">
                                     <option value="city">Select Your City</option>
                                     <option value="isb" name="islamabad">islamabad</option>
                                     <option value="rwp" name="rawalpindi">rawalpindi</option>
                                     <option value="jhelum" name="jhelum">jhelum</option>
                                 </select>
                             </div>
                         </div>
                         <br>
                         <div class="form-inline">
                             <div class="col-md-4"><label >Domicile:</label></div>
                             <div class="col-md-8">
                                 <select class="form-control" name="d_city"  >
                                     <option value="city" name="">Select Domicile</option>
                                     <option value="ajk" name="ajk">AJK</option>
                                     <option value="fata" name="fata">FATA</option>
                                     <option value="isb" name="isb">Islamabad</option>
                                     <option value="panjab" name="panjab">Panjab</option>
                                     <option value="sindh" name="sindh">Sindh</option>
                                     <option value="gilgit" name="gilgit">Gilgit Baltistan</option>
                                     <option value="kpk" name="kpk">Khayber Pakhton Khawa</option>
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
                     </div>
                     <div class="form-group">
                         <input type="submit" class="btn btn-success " name="personel_info"  id="personel_info" value="Save and Move Next">
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