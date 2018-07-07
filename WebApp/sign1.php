<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Admin Sign Up</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/signupstyle.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/signupjquery-ui.min.js"></script>
    <script src="js/jquery.validate.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="scripts/md5-min.js"></script>
    <script type="text/javascript" src="scripts/myscript.js"></script>
    <link rel="shortcut icon" href="images/ISAP.gif">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">

</head>
<body>

<?php

if ($_SESSION['username'] != "") {

    //User not logged in, redirect to login page
    header("Location:home.php");

}
?>

<?php
include "db.php";
//header("Location: http://www.example.com/");
/*
$flag_error = 0;
$flag_refresh = 0;
$emailid = $_POST['emailid'];
echo $emailid;
$password = $_POST['passwordhash'];
$designation = $_POST['designation'];
$degree == "BACHELOR OF ENGINEERING";
$view = -1;
if ($designation == 'Staff')
    $view = 1;
if ($designation == 'Student')
    $view = -1;
if ($designation == 'CPO')
    $view = 2;
$code = $_POST['code'];
$sql = "delete from login where email_id = '$emailid' AND password = '$password' AND verification_code = '$code'";
mysql_query($sql);
if ($flag_refresh == 0) {

    $sql = "INSERT INTO login(email_id, view , password, verification_code) VALUES ('$emailid', '$view', '$password', '$code')";
    if (!mysql_query($sql)) {
        echo "<br><Font size=3>Error: Username already taken!</font><br><BR>Try again with different email id by navigating back<br>";
        $flag_error = 1;
    }
}

if ($flag_error == 0) {
    if ($view == -1) {*/
//Commenting out for now
?>
<div class="container">
<center><a href="/" class="btn btn-default">Go back to ISAP homepage</a></center>
    <br><br>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 text">
            <center><h1 style="color: MediumSeaGreen"><strong style="color:Green">ADMIN SIGN UP PORTAL</strong> <br> Sign Up Form
                </h1></center>
            <div class="description">
                <center>
                    <p><h5>
                        Hi! Welcome to the Administrator registration portal. Along the next couple of pages are important fields that need to be filled by You.<br> Once done with that, you will have unrestricted access to the portal.<br> Get set to have a smooth administration process :)
                    </h5></p></center>
            </div>
        </div>
    </div>
    <form role="form" id="signup_multi" name="signup_multi" action="signupmulti2.php"
          class="form-horizontal form" method="post">
        <div class="col-md-8 col-md-offset-2">
            <div class="progress">
                <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"
                     aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <div class="box row-fluid">
                <br>
                <!-- Signup elements put here-->
                <div class="step">
                    <h4>Please Enter the Login Credentials</h4>
                    <div class="form-group">
                        <label for="emailid" class="col-sm-2 control-label">Email ID</label>
                        <div class="col-sm-10">
                            <input type="text" id="emailid" name="emailid" class="form-control"
                                   placeholder="Enter a valid email ID">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" id="password" name="password" class="form-control"
                                   placeholder="Password must be more than 6 characters">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="repassword" class="col-sm-2 control-label">Re-Type Password</label>
                        <div class="col-sm-10">
                            <input type="password" id="repassword" name="repassword" class="form-control"
                                   placeholder="Enter same password">
                        </div>
                    </div>
                    <input name="passwordhash" id="passwordhash" type="hidden"/>
                    <?php
                    //$code = uniqid();
                    //generate otp
                    $characters = 'abcdefghjkmnopqrstuvwxyz23456789ABCDEFGHJKMNPQRSTUVWXYZ23456789';
                    $code = '';
                    $size = 6;
                    for ($i = 0; $i < $size; $i++) {
                        $code .= $characters[rand(0, strlen($characters) - 1)];
                    }
                    echo '<input name="code" type="hidden" value=' . $code . '>';
                    ?>
                </div>
                <br>
                <!-- Sign up basic info here-->
                <div class="step">
                    <h4>Please Enter Personal Profile Details</h4>
                    <div class="form-group">
                        <label for="first_name" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-10">
                            <input type="text" id="first_name" name="first_name" class="form-control"
                                   placeholder="First Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="last_name" class="col-sm-2 control-label">Middle Name</label>
                        <div class="col-sm-10">
                            <input type="text" id="last_name" name="last_name" class="form-control"
                                   placeholder="Middle Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="intials" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-10">
                            <input type="text" id="intials" name="initials" class="form-control"
                                   placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="gender" class="col-sm-2 control-label">Gender</label>
                        <div class="col-sm-10">
                            <p class="container1">
                                <input type="radio" id="gender" name="gender" id="name" value="Male">&nbsp;Male&nbsp;
                                <input type="radio" id="gender" name="gender" id="name" value="Female">&nbsp;Female&nbsp;
                                <input type="radio" id="gender" name="gender" id="name" value="Other">&nbsp;Other&nbsp;
                            </p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dob" class="col-sm-2 control-label">Date of Birth</label>
                        <div class="col-sm-10">
                            <input type="date" id="dob" name="dob" class="form-control" min="1980-12-31"
                                   max="today">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="street" class="col-sm-2 control-label">Address(House No., Street)</label>
                        <div class="col-sm-10">
                                <textarea id="street" name="street" class="form-control"
                                          placeholder="Address"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="city" class="col-sm-2 control-label">City</label>
                        <div class="col-sm-10">
                            <input type="text" id="city" name="city" class="form-control" placeholder="City">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="state" class="col-sm-2 control-label">State</label>
                        <div class="col-sm-10">
                            <input type="text" id="state" name="state" class="form-control" placeholder="State">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pincode" class="col-sm-2 control-label">PinCode</label>
                        <div class="col-sm-10">
                            <input type="text" id="pincode" name="pincode" class="form-control"
                                   placeholder="PinCode">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mob_no" class="col-sm-2 control-label">Mobile Number</label>
                        <div class="col-sm-10">
                            <input type="text" id="mob_no" name="mob_no" class="form-control"
                                   placeholder="Mobile Number">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alt_no" class="col-sm-2 control-label">Alternate Mobile Number</label>
                        <div class="col-sm-10">
                            <input type="text" id="alt_no" name="alt_no" class="form-control"
                                   placeholder="Alternate Mobile Number">
                        </div>
                    </div>
                     <div class="box row-fluid">
                        <br>
                        <div class="step">
                            <h4>Please Upload your picture</h4>
                            <div class="form-group">
                                <label for="photo" class="col-sm-2 control-label">Upload picture</label>
                                <div class="col-sm-10">
                                    <input type="file" id="photo" name="photo" class="form-control"
                                           accept=".jpg">
                                    <br/>(only .jpg format can be uploaded)<br/>
                                </div>
                            </div>
                            <?php echo '<input name="usn" type ="hidden" value ="' . $usn . '">'; ?>

                        </div>
                    <br>
                </div>
                <!--2nd page of sign up, LandRecord Details-->

                    <br>
                    <!--<input name="emailid" type="hidden" value="'.$emailid.'">-->
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="pull-right">
                            
                            <button type="submit" onclick="submitform()"
                                    class="action btn-hot text-capitalize submit btn">Submit
                            </button>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </form>
    <!-- Modal -->
</div>
<?php //}
//}
?>





</body>
</html>
<script type="text/javascript">
    //Alphabet verification method
    jQuery.validator.addMethod("lettersonly", function (value, element) {
        return this.optional(element) || /^[a-z. ]+$/i.test(value);
    }, "Letters and spaces only please");
    

    $(document).ready(function () {
        var current = 1;

        widget = $(".step");
        btnnext = $(".next");
        btnback = $(".back");
        btnsubmit = $(".submit");

        // Init buttons and UI
        widget.not(':eq(0)').hide();
        hideButtons(current);
        setProgress(current);

        // Next button click action
        btnnext.click(function () {
            if (current < widget.length) {
                // Check validation
                if ($(".form").valid()) {
                    widget.show();
                    widget.not(':eq(' + (current++) + ')').hide();
                    setProgress(current);
                }
            }
            hideButtons(current);
        })

        // Back button click action
        btnback.click(function () {
            if (current > 1) {
                current = current - 2;
                if (current < widget.length) {
                     widget.show();
                    widget.not(':eq(' + (current++) + ')').hide();
                    setProgress(current);
                }
            }
            hideButtons(current);
        })

        $('.form').validate({ // initialize plugin

            //this is for the invisible fields which will be present when mulitple logins are present
            ignore: ":not(:visible)",
            rules: {
                emailid: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 6
                },
                repassword: {
                    required: true,
                    equalTo: "#password"
                },
                designation: "required",
                agree: "required",
                first_name: {
                    lettersonly: true,
                    required: true
                },
                last_name: {
                    lettersonly: true,
                    //required: true
                },
                initials: {
                    lettersonly: true,
                    required: true
                },
                gender: "required",
                dob: "required",
                street: "required",
                city: {
                    lettersonly: true,
                    required: true
                },
                state: {
                    lettersonly: true,
                    required: true
                },
                pincode: {
                    required: true,
                    number: true,
                    minlength: 6,
                    maxlength: 6,
                },
                mob_no: {
                    required: true,
                    number: true,
                    minlength: 10,
                    maxlength: 10,
                },
                alt_no: {
                    required: true,
                    number: true,
                    minlength: 10,
                    maxlength: 10,
                },
              
               
            messages: {
                email: "Please enter a valid email address",
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 6 characters long"
                },
                repassword: {
                    required: "Please provide a password",
                    //minlength: "Your password must be at least 6 characters long",
                    equalsTo: "Please ensure that it is same as above"
                },
                agree: "Please accept the user agreement after reading the terms",
                firstname: {
                    required: "Please provide a password",
                    lettersonly: "Please type in only alphabets and . "
                },
                lastname: {
                    //required: "Please provide a password",
                    lettersonly: "Please type in only alphabets and . "
                },
                initials: {
                    required: "Please provide a password",
                    lettersonly: "Please type in only alphabets and . "
                },
                gender: {
                    required: "Please select a gender"
                },
                street: {
                    required: "Please enter your address",
                    //lettersonly: "Please type in only alphabets and . "
                },
                city: {
                    required: "Please provide a password",
                    lettersonly: "Please type in only alphabets and . "
                },
                state: {
                    required: "Please provide a password",
                    lettersonly: "Please type in only alphabets and . "
                },
                pincode: {
                    required: "Enter your pincode for your address",
                    minlength: "It should be 6 characters long",
                    maxlength: "It should be 6 characters long",
                },
            },
            errorPlacement: function (error, element) {
                if (element.is(":radio") || element.is(":checkbox")) {
                    error.appendTo(element.parents('.container1'));
                }
                else { // This is the default behavior
                    error.insertAfter(element);
                }
            }
        });

    });

    // Change progress bar action
    setProgress = function (currstep) {
        var percent = parseFloat(100 / widget.length) * (currstep - 1);
        percent = percent.toFixed();
        $(".progress-bar").css("width", percent + "%").html(percent + "%");
    }

    // Hide buttons according to the current step
    hideButtons = function (current) {
        var limit = parseInt(widget.length);

        $(".action").hide();

        if (current < limit) btnnext.show();
        if (current > 1) btnback.show();
        if (current == limit) {
            // Show entered values
            $(".display label:not(.control-label)").each(function () {
                console.log($(this).find("label:not(.control-label)").html($("#" + $(this).data("id")).val()));
            });
            btnnext.hide();
            btnsubmit.show();
        }
    }
</script>
<script>
    /*Date restriction upto today*/
    $(function () {
        var dtToday = new Date();

        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();
        if (month < 10)
            month = '0' + month.toString();
        if (day < 10)
            day = '0' + day.toString();

        var maxDate = year + '-' + month + '-' + day;
        //alert(maxDate);
        $('#dob').attr('max', maxDate);
    });
</script>

<?php
$ee = '<div class="form-group"><label for="exam_name" class="col-sm-2 control-label"> Examination Name : </label><div class="col-sm-10"><input type="text" id="exam_name" class="form-control" name="exam_name[]" ></div></div><div class="form-group"><label for="score" class="col-sm-2 control-label"> Score/Rank </label><div class="col-sm-10"><input class="form-control" type="text" id="score" name="score[]" ></div></div>';
$bl1 = '<div class="form-group"><label for="sub_code" class="col-sm-2 control-label"> Subject Code </label><div class="col-sm-10"><input type="text" class="form-control" id="sub_code" name="sub_code[]" ></div></div>';
$bl2 = '<div class="form-group"><label for="sub_name" class="col-sm-2 control-label"> Subject Name </label><div class="col-sm-10"><input type="text" class="form-control" id="sub_name" name="sub_name[]" ></div></div>';
$bl3 = '<div class="form-group"><label for="no_attempt" class="col-sm-2 control-label"> No Of Attempts Made </label><div class="col-sm-10"><input type="text" class="form-control" id="no_attempt" name="no_attempt[]"  ></div></div>';
$bl4 = '<div class="form-group"><label for="cleared[]" class="col-sm-2 control-label"> Cleared </label><div class="col-sm-10"><select class="form-control" name="cleared[]" >';
$bl5 = '<option></option><option>YES</option><option>NO</option></select></div></div><div class="form-group"><label for="year" class="col-sm-2 control-label"> Year When Cleared </label><div class="col-sm-10"><input type="text" class="form-control" id="year" name="year[]" ></div></div>';
?>

