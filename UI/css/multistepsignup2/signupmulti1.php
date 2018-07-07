<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Career Portal Sign Up</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/signupstyle.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/signupjquery-ui.min.js"></script>
    <script src="js/jquery.validate.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

</head>
<body>

<?php
include "db.php";
$flag_error = 0;
$flag_refresh = 0;
$emailid = $_POST['emailid'];
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
    if ($view == -1) {
        ?>
        <div class="container">
            <br><br>
            <form role="form" id="signup_academic" name="signup_academic" action="signupmulti2.php"
                  class="form-horizontal form"
                  method="post">
                <div class="col-md-8 col-md-offset-2">
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <div class="box row-fluid">
                        <br>
                        <div class="step">
                            <div class="form-group">
                                <label for="first_name" class="col-sm-2 control-label">First Name</label>
                                <div class="col-sm-10">
                                    <input type="text" id="first_name" name="first_name" class="form-control"
                                           placeholder="First Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="middle_name" class="col-sm-2 control-label">Middle Name</label>
                                <div class="col-sm-10">
                                    <input type="text" id="middle_name" name="middle_name" class="form-control"
                                           placeholder="Middle Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="last_name" class="col-sm-2 control-label">Last Name</label>
                                <div class="col-sm-10">
                                    <input type="text" id="last_name" name="last_name" class="form-control"
                                           placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="gender" class="col-sm-2 control-label">Gender</label>
                                <div class="col-sm-10">
                                    <input type="radio" id="gender" name="gender" id="name" value="Male">&nbsp;Male&nbsp;
                                    <input type="radio" id="gender" name="gender" id="name" value="Female">&nbsp;Female&nbsp;
                                    <input type="radio" id="gender" name="gender" id="name" value="Other">&nbsp;Other&nbsp;
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
                                    <input type="text" id="mob_no" name="alt_no" class="form-control"
                                           placeholder="Alternate Mobile Number">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="quota" class="col-sm-2 control-label">Mode of Admission</label>
                                <div class="col-sm-10">
                                    <div class="col-sm-10">
                                        <input type="radio" id="quota" name="quota" value="CET">CET&nbsp;
                                        <input type="radio" id="quota" name="quota" value="COMEDK">&nbsp;COMEDK&nbsp;
                                        <input type="radio" id="quota" name="quota" value="MANAGEMENT">&nbsp;MANAGEMENT&nbsp;
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="usn" class="col-sm-2 control-label">USN</label>
                                <div class="col-sm-10">
                                    <input type="text" id="usn" name="usn" class="form-control" placeholder="USN">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="department" class="col-sm-2 control-label">Department</label>
                                <div class="col-sm-10">
                                    <?php
                                    $query = "SELECT dept_name FROM department order by dept_name";
                                    $acquireValues = mysql_query($query);
                                    echo '
      <select class="form-control" name="department" >';
                                    while ($values = mysql_fetch_array($acquireValues)) {
                                        echo '<option value="' . $values[0] . '" >' . $values[0] . '</option>';
                                    }
                                    echo '
      </select>
      
      </div>'; ?>
                                </div>
                                <input name="emailid" type="hidden" value="'.$emailid.'">
                                <input name="password" type="hidden" value="'.$password.'">
                            </div>
                            <div id="addwebsite1"></div>
                            <div class="form-group">
                                <input class="btn btn-default" type="button" value="Add website +"
                                       onclick="addwebsite()"/>
                            </div>
                            <br>
                        </div>
                        <!--2nd page of sign up, Academic details-->
                        <div class="step">
                            <div class="form-group">
                                <label for="board_10" class="col-sm-2 control-label">10th Board</label>
                                <div class="col-sm-10">
                                    <input type="text" name="board_10" class="form-control" id="board_10"
                                           placeholder="Enter Examination Board">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tenth_percentage" class="col-sm-2 control-label">10th Percentage</label>
                                <div class="col-sm-10">
                                    <input type="text" name="tenth_percentage" class="form-control"
                                           id="tenth_percentage"
                                           placeholder="10th Percentage">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="board_12" class="col-sm-2 control-label">12th Board</label>
                                <div class="col-sm-10">
                                    <input type="text" name="board_12" class="form-control" id="board_12"
                                           placeholder="Enter Examination Board">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="twelth_percentage" class="col-sm-2 control-label">12th Percentage</label>
                                <div class="col-sm-10">
                                    <input type="text" name="twelth_percentage" class="form-control"
                                           id="twelth_percentage"
                                           placeholder="12th Percentage">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="diploma_percentage" class="col-sm-2 control-label">12th Percentage</label>
                                <div class="col-sm-10">
                                    <input type="text" name="diploma_percentage" class="form-control"
                                           id="twelth_percentage"
                                           placeholder="Enter Diploma Percentage">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="degree" class="col-sm-2 control-label">Type of Degree Pursued</label>
                                <div class="col-sm-10">
                                    <div class="col-sm-10">
                                        <input type="radio" id="degree" name="degree" value="BACHELOR OF ENGINEERING">&nbsp;BACHELOR
                                        OF ENGINEERING&nbsp;
                                        <input type="radio" id="degree" name="degree"
                                               value="MASTER OF COMPUTER APPLICATION">&nbsp;MASTER
                                        OF COMPUTER APPLICATION&nbsp;
                                        <input type="radio" id="degree" name="degree" value="MASTER OF TECHNOLOGY">&nbsp;MASTER
                                        OF TECHNOLOGY&nbsp;
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="grad_year" class="col-sm-2 control-label">Graduation Year</label>
                                <div class="col-sm-10">
                                    <input type="text" name="grad_year" class="form-control" id="grad_year"
                                           placeholder="Enter Graduation Year">
                                </div>
                            </div>

                            <div id="addbacklog1"></div>
                            <div class="form-group">
                                <input class="btn btn-default" type="button" value="Add backlog details+"
                                       onclick="addbacklog()"/>
                            </div>
                            <br>
                            <div id="addentranceexam1"></div>
                            <div class="form-group">
                                <input class="btn btn-default" type="button" value="Add entrance exam details+"
                                       onclick="addentranceexam()"/>
                            </div>
                            <br>
                        </div>
                        <!-- Cocurricular Details Sign up step-->
                        <div class="step">
                            <div class="form-group">
                                <label for="be_sem_1" class="col-sm-2 control-label">B.E Sem 1 SGPA</label>
                                <div class="col-sm-10">
                                    <input type="text" name="be_sem_1" class="form-control" id="be_sem_1"
                                           placeholder="Enter sem 1 sgpa">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="be_sem_2" class="col-sm-2 control-label">B.E Sem 2 SGPA</label>
                                <div class="col-sm-10">
                                    <input type="text" name="be_sem_2" class="form-control" id="be_sem_2"
                                           placeholder="Enter sem 2 sgpa">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="be_sem_3" class="col-sm-2 control-label">B.E Sem 3 SGPA</label>
                                <div class="col-sm-10">
                                    <input type="text" name="be_sem_3" class="form-control" id="be_sem_3"
                                           placeholder="Enter sem 3 sgpa">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="be_sem_4" class="col-sm-2 control-label">B.E Sem 4 SGPA</label>
                                <div class="col-sm-10">
                                    <input type="text" name="be_sem_4" class="form-control" id="be_sem_4"
                                           placeholder="Enter sem 4 sgpa">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="be_sem_5" class="col-sm-2 control-label">B.E Sem 5 SGPA</label>
                                <div class="col-sm-10">
                                    <input type="text" name="be_sem_5" class="form-control" id="be_sem_5"
                                           placeholder="Enter sem 5 sgpa">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="be_sem_6" class="col-sm-2 control-label">B.E Sem 6 SGPA</label>
                                <div class="col-sm-10">
                                    <input type="text" name="be_sem_6" class="form-control" id="be_sem_6"
                                           placeholder="Enter sem 6 sgpa">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="be_sem_7" class="col-sm-2 control-label">B.E Sem 7 SGPA</label>
                                <div class="col-sm-10">
                                    <input type="text" name="be_sem_7" class="form-control" id="be_sem_7"
                                           placeholder="Enter sem 7 sgpa. If not complete enter 0">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="be_sem_8" class="col-sm-2 control-label">B.E CGPA</label>
                                <div class="col-sm-10">
                                    <input type="text" name="be_sem_8" class="form-control" id="be_sem_8"
                                           placeholder="Enter CGPA">
                                </div>
                            </div>
                            <div id="addinternship1"></div>
                            <div class="form-group">
                                <input class="btn btn-default" type="button" value="Add internship details+"
                                       onclick="addinternship()"/>
                            </div>
                            <br>
                            <div id="addpaper1"></div>
                            <div class="form-group">
                                <input class="btn btn-default" type="button" value="Add paper presentation details+"
                                       onclick="addpaper()"/>
                            </div>
                            <br>
                            <div id="addproject1"></div>
                            <div class="form-group">
                                <input class="btn btn-default" type="button" value="Add project details+"
                                       onclick="addproject()"/>
                            </div>
                            <br>
                            <!--<input name="emailid" type="hidden" value="'.$emailid.'">-->
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="pull-right">
                                    <button type="button" class="action btn-sky text-capitalize back btn">Back</button>
                                    <button type="button" name="next" id="next"
                                            class="action btn-sky text-capitalize next btn">
                                        Next
                                    </button>
                                    <button type="button" class="action btn-hot text-capitalize submit btn">Submit
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </form>
        </div>
    <?php }
}
?>


<!--
<h4>Upload Profile Pic for the Career Portal(Images of low resolution only)</h4>
<div class="form-group">
    <label for="photo" class="col-sm-2 control-label">Upload Profile Pic</label>
    <div class="col-sm-10">
        <input type="file" name="photo" class="form-control" id="photo" accept="image/*">
    </div>
</div>
-->

</body>
</html>
<script type="text/javascript">
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
            ignore: ":not(:visible)",
            rules: {
                name: "required",
                email: {required: true, email: true},
                country: "required",
                username: "required",
                password: "required",
                rpassword: {required: true, equalTo: "#password"},
            },
        });

    });

    // Change progress bar action
    setProgress = function (currstep) {
        var percent = parseFloat(100 / widget.length) * currstep;
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
<script type="text/javascript">
    /*Add professional websites*/
    var count = 0;
    var divi = "addwebsite";
    function addwebsite() {
        count = count + 1;
        next = count + 1;
        document.getElementById(divi + count).innerHTML = document.getElementById(divi + count).innerHTML + '<div class="form-group"><label for="website" class="col-sm-2 control-label">Website</label><div class="col-sm-10"><input type="text" name="website[]" class="form-control" placeholder="Website"></div></div>' + '<div id="' + divi + next + '"></div>';
    }
</script>
<?php
$ee = '<div class="form-group"><label for="exam_name" class="col-sm-2 control-label"> Examination Name : </label><div class="col-sm-10"><input type="text" id="exam_name" class="form-control" name="exam_name[]" ></div></div><div class="form-group"><label for="score" class="col-sm-2 control-label"> Score/Rank </label><div class="col-sm-10"><input class="form-control" type="text" id="score" name="score[]" ></div></div>';
$bl1 = '<div class="form-group"><label for="sub_code" class="col-sm-2 control-label"> Subject Code </label><div class="col-sm-10"><input type="text" class="form-control" id="sub_code" name="sub_code[]" ></div></div>';
$bl2 = '<div class="form-group"><label for="sub_name" class="col-sm-2 control-label"> Subject Name </label><div class="col-sm-10"><input type="text" class="form-control" id="sub_name" name="sub_name[]" ></div></div>';
$bl3 = '<div class="form-group"><label for="no_attempt" class="col-sm-2 control-label"> No Of Attempts Made </label><div class="col-sm-10"><input type="text" class="form-control" id="no_attempt" name="no_attempt[]"  ></div></div>';
$bl4 = '<div class="form-group"><label for="cleared[]" class="col-sm-2 control-label"> Cleared </label><div class="col-sm-10"><select class="form-control" name="cleared[]" >';
$bl5 = '<option></option><option>YES</option><option>NO</option></select></div></div><div class="form-group"><label for="year" class="col-sm-2 control-label"> Year When Cleared </label><div class="col-sm-10"><input type="text" class="form-control" id="year" name="year[]" ></div></div>';
?>
<script type="text/javascript">
    /*Add entrance exam and backlog*/
    var countbl = 0;
    var countee = 0;
    var backlog = "addbacklog";
    var entexam = "addentranceexam";
    function addbacklog() {
        countbl = countbl + 1;
        next = countbl + 1;

        document.getElementById(backlog + countbl).innerHTML = document.getElementById(backlog + countbl).innerHTML + '<?php echo $bl1 . $bl2 . $bl3 . $bl4 . $bl5; ?>' + '<div id="' + backlog + next + '"></div>';
    }

    function addentranceexam() {
        countee = countee + 1;
        next = countee + 1;

        document.getElementById(entexam + countee).innerHTML = document.getElementById(entexam + countee).innerHTML + '<?php echo $ee; ?>' + '<div id="' + entexam + next + '"></div>';
    }
</script>
<?php
$internship1 = '<div class="form-group">';
$internship2 = '<label for="company" class="col-sm-2 control-label">Company </label><div class="col-sm-10"><input type="text" id="company" name="company[]" class="form-control"></div></div>';
$internship3 = '<div class="form-group"><label for="duration" class="col-sm-2 control-label">Duration(in weeks) </label><div class="col-sm-10"><input class="form-control" type="text" id="duration" name="duration[]" ></div></div>';
$internship4 = '<div class="form-group"><label class="col-sm-2 control-label" for="report[]">Report </label><div class="col-sm-10"><textarea name="report[]" class="form-control" rows="5"></textarea></div></div>';

$paper1 = '<div class="form-group">';
$paper2 = '<label class="col-sm-2 control-label" for="paper_title">Paper Title </label><div class="col-sm-10"><input class="form-control" type="text" id="paper_title" name="paper_title[]" ></div></div>';
$paper3 = '<div class="form-group"><label class="col-sm-2 control-label" for="paper_synopsis[]">Synopsis </label><div class="col-sm-10"><textarea class="form-control" name="paper_synopsis[]"  rows="5"></textarea></div></div>';

$project1 = '<div class="form-group">';
$project2 = '<label class="col-sm-2 control-label" for="project">Project Title </label><div class="col-sm-10"><input class="form-control" type="text" id="project" name="project[]" ></div></div>';
$project3 = '<div class="form-group"><label class="col-sm-2 control-label" for="project_synopsis[]">Synopsis </label><div class="col-sm-10"><textarea class="form-control" name="project_synopsis[]" rows="5"></textarea></div></div>';
?>
<script type="text/javascript">
    /*Add internships, projects and paper details*/
    var counti = 0;
    var countpp = 0;
    var countp = 0;
    var internship = "addinternship";
    var paper = "addpaper";
    var project = "addproject";
    function addinternship() {
        counti = counti + 1;
        next = counti + 1;

        document.getElementById(internship + counti).innerHTML = document.getElementById(internship + counti).innerHTML + '<?php echo $internship1 . $internship2 . $internship3 . $internship4; ?>' + '<div id="' + internship + next + '"></div>';
    }

    function addpaper() {
        countpp = countpp + 1;
        next = countpp + 1;

        document.getElementById(paper + countpp).innerHTML = document.getElementById(paper + countpp).innerHTML + '<?php echo $paper1 . $paper2 . $paper3; ?>' + '<div id="' + paper + next + '"></div>';
    }

    function addproject() {
        countp = countp + 1;
        next = countp + 1;

        document.getElementById(project + countp).innerHTML = document.getElementById(project + countp).innerHTML + '<?php echo $project1 . $project2 . $project3; ?>' + '<div id="' + project + next + '"></div>';
    }
</script>
