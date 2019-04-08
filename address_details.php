<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="sign_up.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php
include 'connection.php';
$db_conn = new db_connection();
session_start();
if( isset( $_POST['permanent_address'] ) ) {
    $p_address = $_POST['p_address'];
    $p_city = $_POST['p_city'];
    $p_phone = $_POST['p_phone'];


    $qurey="INSERT INTO `permanent_address` (p_address,p_city,p_phone) 
    VALUES('$p_address','$p_city','$p_phone')";
    $result = $db_conn->insertData($qurey);

    var_dump($p_address, $p_city, $p_phone);

    if (isset($_POST['m_ad'])) {
        $p_address = $_POST['p_address'];
        $p_city = $_POST['p_city'];
        $p_phone = $_POST['p_phone'];


        $qurey="INSERT INTO `mailling_address` (m_address,m_city,m_phone) 
    VALUES('$p_address','$p_city','$p_phone')";
        $result = $db_conn->insertData($qurey);
        //var_dump($p_address, $p_city, $p_phone);
    } else {
        $m_address = $_POST['m_address'];
        $m_city = $_POST['m_city'];
        $m_phone = $_POST['m_phone'];


        $qurey="INSERT INTO `mailling_address` (m_address,m_city,m_phone) 
    VALUES('$m_address','$m_city','$m_phone')";
        $result = $db_conn->insertData($qurey);
        var_dump($m_address, $m_city, $m_phone);
    }
    if (isset($_POST['m_add'])) {
        $p_address = $_POST['p_address'];
        $p_city = $_POST['p_city'];
        $p_phone = $_POST['p_phone'];



        $qurey="INSERT INTO `guardian_address` (g_address,g_city,g_phone) 
    VALUES('$p_address','$p_city','$p_phone')";
        $result = $db_conn->insertData($qurey);
        var_dump($p_address, $p_city, $p_phone);
    } else {
        $g_address = $_POST['g_address'];
        $g_city = $_POST['g_city'];
        $g_phone = $_POST['g_phone'];
        $g_mobile = $_POST['g_mobile'];


        $qurey="INSERT INTO `guardian_address` (g_address,g_city,g_phone,g_mobile) 
    VALUES('$g_address','$g_city','$g_phone','$g_mobile')";
        $result = $db_conn->insertData($qurey);
        var_dump($g_address, $g_city, $g_phone, $g_mobile);
    }
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
                            <input type="text" name="p_address" class="form-control" placeholder="">
                        </div>
                    </div>
                    <br>
                    <div class="form-inline">
                        <div class="col-md-4"><label>City:</label></div>
                        <div class="col-md-8">
                            <input type="text" name="p_city" class="form-control" placeholder="">
                        </div>
                    </div>
                    <br>
                    <div class="form-inline">
                        <div class="col-md-4"><label>Phone:</label></div>
                        <div class="col-md-8">
                            <input type="text" name="p_phone" class="form-control" placeholder="">
                        </div>
                    </div>
                    <br>
                    <div>   Mailing Address
                    </div>
                    <hr>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="m_ad"> Same as above.
                            </label>
                        </div>
                    </div>
                    <div class="form-inline">
                        <div class="col-md-4"><label>Address:</label></div>
                        <div class="col-md-8">
                            <input type="text" name="m_address" class="form-control" placeholder="">
                        </div>
                    </div>
                    <br>
                    <div class="form-inline">
                        <div class="col-md-4"><label>City:</label></div>
                        <div class="col-md-8">
                            <input type="text" name="m_city" class="form-control" placeholder="">
                        </div>
                    </div>
                    <br>
                    <div class="form-inline">
                        <div class="col-md-4"><label>Phone:</label></div>
                        <div class="col-md-8">
                            <input type="text" name="m_phone" class="form-control" placeholder="">
                        </div>
                    </div>
                    <br>
                    <div>   Father/ Gaurdian Address
                    </div>
                    <hr>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="m_add"> Same as above.
                            </label>
                        </div>
                    </div>
                    <div class="form-inline">
                        <div class="col-md-4"><label>Address:</label></div>
                        <div class="col-md-8">
                            <input type="text" name="g_address" class="form-control" placeholder="">
                        </div>
                    </div>
                    <br>
                    <div class="form-inline">
                        <div class="col-md-4"><label>City:</label></div>
                        <div class="col-md-8">
                            <input type="text" name="g_city" class="form-control" placeholder="">
                        </div>
                    </div>
                    <br>
                    <div class="form-inline">
                        <div class="col-md-4"><label>Phone:</label></div>
                        <div class="col-md-8">
                            <input type="text" name="g_phone" class="form-control" placeholder="">
                        </div>
                    </div>
                    <br>

                    <div class="form-inline">
                        <div class="col-md-4"><label>Mobile:</label></div>
                        <div class="col-md-8">
                            <input type="text" name="g_mobile" class="form-control" placeholder="">
                        </div>
                    </div>
            <p align="right">Enter Your Father or guardian mobile no. here</p>
                    <br>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success " name="permanent_address" id="permanent_address" value="Save and Move Next">
            </div>
            </form>

</div>
<div class="col-md-3">test 3</div>

</div>
</div>
</body>
</html>