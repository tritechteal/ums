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
     <div class="col-md-3">test 1</div>
     <div class="col-md-6">
          
         <div class="row">

             <div class="col-md-8">sub div of 2</div>
             <div class="col-md-4">sub dic of 2</div>

         </div>

     </div>
     <div class="col-md-3">test 3</div>

 </div>
</div>
</body>
</html>