<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="sign_up.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
    <body class="row">
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


            <div class="col-md-3">
            <button  data-toggle="modal" data-target="#myModal">test button</button>

            </div>













        </div>
        <div class="modal fade" id="myModal" role="dialog" style="display: none;">
            < div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" id="forgetinfo"><b id="fgcol">Matric / O - Level</b>
                    <button type="button" class="close" data-dismiss="modal">×</button>

                </div>
                <div class="modal-body">





                    <div class="form-group">
                        <label class="col-sm-3 control-label"><span class="asterisk_input"></span>Degree:</label>
                        <div class="col-sm-6">
                            <select class="form-control input-sm" name="mtrdeg" size="1" required="">
                                <option value="">Select Degree</option>
                                <option value="Matric">Matric</option>
                                <option value="O-Level">O-Level</option>
                            </select>
                            <span style="color:red;"></span>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-3 control-label"><span class="asterisk_input"></span>Year of Passing:</label>
                        <div class="col-sm-4">
                            <select class="form-control input-sm" name="mtryr" size="1" required="">
                                <option value="">----</option>

                                <option value="2025">2025</option>
                                <option value="2024">2024</option>
                                <option value="2023">2023</option>
                                <option value="2022">2022</option>
                                <option value="2021">2021</option>
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                            </select>
                            <span style="color:red;"></span>
                        </div>
                    </div>



                    <div class="form-group">
                        <label class="col-sm-3 control-label"><span class="asterisk_input"></span>Board:</label>
                        <div class="col-sm-8">
                            <select class="form-control input-sm" name="mtrbod" size="1" required="">
                                <option value="">Select Board</option>
                                <option value="AIOU Islamabad">AIOU Islamabad</option>
                                <option value="IBCC Islamabad">IBCC Islamabad</option>
                                <option value="FBISE Islamabad">FBISE Islamabad</option>
                                <option value="BISE Bahawalpur">BISE Bahawalpur</option>
                                <option value="BISE DG Khan">BISE DG Khan</option>
                                <option value="BISE Faisalabad">BISE Faisalabad</option>
                                <option value="BISE Gujranwala">BISE Gujranwala</option>
                                <option value="BISE Lahore">BISE Lahore</option>
                                <option value="BISE Multan">BISE Multan</option>
                                <option value="BISE Rawalpindi">BISE Rawalpindi</option>
                                <option value="BISE Sahiwal">BISE Sahiwal</option>
                                <option value="BISE Sargodha">BISE Sargodha</option>
                                <option value="BISE Abbottabad">BISE Abbottabad</option>
                                <option value="BISE Bannu">BISE Bannu</option>
                                <option value="BISE Dera Ismail Khan">BISE Dera Ismail Khan</option>
                                <option value="BISE Kohat">BISE Kohat</option>
                                <option value="BISE Malakand">BISE Malakand</option>
                                <option value="BISE Mardan">BISE Mardan</option>
                                <option value="BISE Peshawar">BISE Peshawar</option>
                                <option value="BISE Swat">BISE Swat</option>
                                <option value="BISE Karachi">BISE Karachi</option>
                                <option value="BISE Hyderabad">BISE Hyderabad</option>
                                <option value="BISE Larkana">BISE Larkana</option>
                                <option value="BISE Sukkur">BISE Sukkur</option>
                                <option value="BISE Mirpur">BISE Mirpur</option>
                                <option value="BISE Quetta">BISE Quetta</option>
                                <option value="BISE Turbat">BISE Turbat</option>
                                <option value="BISE Zhob">BISE Zhob</option>
                                <option value="Aga Khan Educational Board, Karachi">Aga Khan Educational Board, Karachi</option>
                                <option value="KPK Board of Technical Education, Peshawar">KPK Board of Technical Education, Peshawar</option>
                                <option value="Punjab Board of Technical Education, Lahore">Punjab Board of Technical Education, Lahore</option>
                                <option value="Sindh Board of Technical Education, Karachi">Sindh Board of Technical Education, Karachi</option>
                                <option value="Other">Other</option>
                            </select>
                            <span style="color:red;"></span>
                        </div>
                    </div>



                    <div class="form-group">
                        <label class="col-sm-3 control-label"><span class="asterisk_input"></span>Subjects:</label>
                        <div class="col-sm-6">
                            <select class="form-control input-sm" name="mtrsub" size="1" required="">
                                <option value="">Select Subject</option>
                                <option value="Science">Science</option>
                                <option value="Arts">Arts</option>
                                <option value="General Science">General Science</option>
                                <option value="Other">Other</option>
                            </select>
                            <span style="color:red;"></span>
                        </div>
                    </div>





                    <div class="form-group">
                        <label class="col-sm-3 control-label"><span class="asterisk_input"></span>Total Marks:</label>
                        <div class="col-sm-3">
                            <input type="text" name="mtrtono" size="1" class="form-control input-sm" maxlength="4" value="" required="">
                            <span style="color:red;"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label"><span class="asterisk_input"></span>Obtained Marks:</label>
                        <div class="col-sm-3">
                            <input type="text" name="mtrobno" size="1" class="form-control input-sm" maxlength="4" value="" required="">
                            <span style="color:#ff86c1;"></span>
                            <span style="color:red;"></span>
                        </div>
                    </div>



                    <hr>


                    <button style="text-align: right" id="sty" type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button style="text-align: right" id="sty" class="btn btn-primary" name="submit1" type="submit" value="matric">Save</button>
                    <br>
                    <br>
                    <br>





                </div>




            </div>

        </div>
    </body>
</html>