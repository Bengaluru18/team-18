<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Placement functionalities</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="../dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<?php
if($view==2)
{?>
    <!--
    <table class="container">
        <thead>
            <tr>
                <th><h1>FUNCTIONALITIES</h1></th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="registered_list.php">REGISTERED STUDENTS LIST</a></td>
            </tr>
            <tr>
                <td><a href="add_company.php">ADD COMPANY</a></td>

            </tr>
            <tr>
                <td><a href="add_shortlist.php">ADD SHORTLIST</a></td>
            </tr>
        <tr>
                <td><a href="add_recruited.php">ADD RECRUITED</a></td>
            </tr>
        <tr>
                <td><a href="register_students.php">REGISTER STUDENTS FOR A COMPANY</a></td>
            </tr>
        <tr>
                <td><a href="add_stud_pc.php">ADD STUDENT COORDINATOR</a></td>
            </tr>
            <tr>
                <td><a href="del_stud_pc.php">DELETE STUDENT COORDINATOR</a></td>
            </tr>
            <tr>
                <td><a href="edit_company.php">EDIT COMPANY DETAILS</a></td>
            </tr>
            <tr>
                <td><a href="view_companies.php">VIEW COMPANIES</a></td>

            </tr>
            <tr>
                <td><a href="view_student_pc.php">VIEW STUDENT COORDINATORS</a></td>
            </tr>
        <tr>
                <td><a href="view_recruited.php">VIEW RECRUITED LIST</a></td>
            </tr>
        <tr>
                <td><a href="delete_company.php">DELETE COMPANY</a></td>
            </tr>
        <tr>
                <td><a href="delete_shortlist.php">DELETE SHORTLIST</a></td>
            </tr>
            </tr>
        <tr>
                <td><a href="delete_recruited.php">DELETE RECRUITED</a></td>
            </tr>
            </tr>
        <tr>
                <td><a href="list_unauthorized_acc_coll.php">DELETE UNAUTHORISED ACCOUNTS</a></td>
            </tr>
        </tbody>
    </table>-->
    <section class="content">
        <h4>
            Companies For internships and Placements

        </h4>
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <a href="view_companies.php" class="small-box bg-aqua">
                    <div class="inner">
                        <h3>View</h3>
                        <p>Companies</p>
                    </div>
                    <div class="icon" style="margin-top: 20px;">
                        <i class="fa fa-sitemap"></i>
                    </div>
                    <div class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </a>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <a href="add_company.php" class="small-box bg-green">
                    <div class="inner">
                        <h3>Add</h3>
                        <p>New Company</p>
                    </div>
                    <div class="icon" style="margin-top: 20px;">
                        <i class="fa fa-briefcase"></i>
                    </div>
                    <div class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </a>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <a href="edit_company.php" class="small-box bg-yellow">
                    <div class="inner">
                        <h3>Edit</h3>
                        <p>Company</p>
                    </div>
                    <div class="icon" style="margin-top: 20px;">
                        <i class="fa fa-edit"></i>
                    </div>
                    <div class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </a>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <a href="delete_company.php" class="small-box bg-red">
                    <div class="inner">
                        <h3>Delete</h3>
                        <p>Company</p>
                    </div>
                    <div class="icon" style="margin-top: 20px;">
                        <i class="fa fa-exclamation-circle"></i>
                    </div>
                    <div class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </a>
            </div><!-- ./col -->
        </div>
        <h4>
            Student Registrations For internships and Placements

        </h4>
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <a href="registered_list.php" class="small-box bg-aqua">
                    <div class="inner">
                        <h3>View</h3>
                        <p>Registered Students</p>
                    </div>
                    <div class="icon" style="margin-top: 20px;">
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </a>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <a href="register_students.php" class="small-box bg-green">
                    <div class="inner">
                        <h3>Register</h3>
                        <p>Students for Companies</p>
                    </div>
                    <div class="icon" style="margin-top: 20px;">
                        <i class="fa fa-ticket"></i>
                    </div>
                    <div class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </a>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <a href="deregister_students.php" class="small-box bg-aqua">
                    <div class="inner">
                        <h3>De-Register</h3>
                        <p>Students from companies</p>
                    </div>
                    <div class="icon" style="margin-top: 20px;">
                        <i class="fa fa-warning"></i>
                    </div>
                    <div class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </a>
            </div><!-- ./col -->
        </div>
        <h4>
            Student Shortlisted For internships and Placements

        </h4>
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <a href="view_shortlisted.php" class="small-box bg-aqua">
                    <div class="inner">
                        <h3>View</h3>
                        <p>Shortlisted Students</p>
                    </div>
                    <div class="icon" style="margin-top: 20px;">
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </a>
            </div><!-- ./col -->


            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <a href="add_shortlist.php" class="small-box bg-green">
                    <div class="inner">
                        <h3>Add</h3>
                        <p>Shortlisted Students</p>
                    </div>
                    <div class="icon" style="margin-top: 20px;">
                        <i class="fa fa-plus-square"></i>
                    </div>
                    <div class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </a>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <a href="delete_shortlist.php" class="small-box bg-red">
                    <div class="inner">
                        <h3>Delete</h3>
                        <p>Shortlisted Students</p>
                    </div>
                    <div class="icon" style="margin-top: 20px;">
                        <i class="fa fa-warning"></i>
                    </div>
                    <div class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </a>
            </div><!-- ./col -->
        </div>
        <h4>
            Student Recruited For internships and Placements

        </h4>
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <a href="view_recruited.php" class="small-box bg-aqua">
                    <div class="inner">
                        <h3>View</h3>
                        <p>Recruited Students</p>
                    </div>
                    <div class="icon" style="margin-top: 20px;">
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </a>
            </div><!-- ./col -->
            

            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <a href="add_recruited.php" class="small-box bg-green">
                    <div class="inner">
                        <h3>Add</h3>
                        <p>Recruited Students</p>
                    </div>
                    <div class="icon" style="margin-top: 20px;">
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <div class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </a>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <a href="delete_recruited.php" class="small-box bg-red">
                    <div class="inner">
                        <h3>Delete</h3>
                        <p>Recruited Students</p>
                    </div>
                    <div class="icon" style="margin-top: 20px;">
                        <i class="fa fa-star-o"></i>
                    </div>
                    <div class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </a>
            </div><!-- ./col -->
        </div>
        <h4>
            Edit Student Placement Coordinators

        </h4>

        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <a href="view_student_pc.php" class="small-box bg-aqua">
                    <div class="inner">
                        <h3>View</h3>
                        <p>SPC's</p>
                    </div>
                    <div class="icon" style="margin-top: 20px;">
                        <i class="fa fa-smile-o"></i>
                    </div>
                    <div class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </a>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <a href="add_stud_pc.php" class="small-box bg-green">
                    <div class="inner">
                        <h3>Add</h3>
                        <p>SPC</p>
                    </div>
                    <div class="icon" style="margin-top: 20px;">
                        <i class="fa fa-thumbs-up"></i>
                    </div>
                    <div class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </a>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <a href="del_stud_pc.php" class="small-box bg-red">
                    <div class="inner">
                        <h3>Delete</h3>
                        <p>SPC's</p>
                    </div>
                    <div class="icon" style="margin-top: 20px;">
                        <i class="fa fa-thumbs-down"></i>
                    </div>
                    <div class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </a>
            </div><!-- ./col -->


        </div>
        <h4>
            Group mails

        </h4>
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <a href="groupmail.php" class="small-box bg-green">
                    <div class="inner">
                        <h3>Add/Update</h3>
                        <p>Add/Update group mails</p>
                    </div>
                    <div class="icon" style="margin-top: 20px;">
                        <i class="fa fa-thumbs-up"></i>
                    </div>
                    <div class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </a>
            </div><!-- ./col -->

        </div><h4>
            Placement Statistics

        </h4>


        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <a href="graph_interface.php" class="small-box bg-yellow">
                    <div class="inner">
                        <h3>View</h3>
                        <p>Analysis Details</p>
                    </div>
                    <div class="icon" style="margin-top: 20px;">
                        <i class="fa fa-bar-chart"></i>
                    </div>
                    <div class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </a>
            </div><!-- ./col -->

        </div>

        <h4>
            Unauthorized Accounts

        </h4>

        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <a href="list_unauthorized_acc_coll.php" class="small-box bg-red">
                    <div class="inner">
                        <h3>Delete</h3>
                        <p>Accounts</p>
                    </div>
                    <div class="icon" style="margin-top: 20px;">
                        <i class="fa fa-warning"></i>
                    </div>
                    <div class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </a>
            </div><!-- ./col -->

        </div>






    </section>








    <?php
    $query = "SELECT year from default_year where email_id='$username'";
    $result = mysql_query($query);
    $info = mysql_fetch_array($result);
    if(mysql_affected_rows()==1)
    {
        echo '<b>Default year is set to : '.$info['year'].'</b><BR>';
    }
    echo '<form action="default_year_set.php" method="POST">
<b>Set the default year here:
<select name="batch" size="1">
<option></option>';
    $query = "Select DISTINCT grad_year from academic order by grad_year";
    $result = mysql_query($query);
    while($info = mysql_fetch_array($result))
    {
        echo '<option>'.$info['grad_year'].'</option>';
    }

    echo '
  </select>
<input type="submit" name="submit"/>
</form><BR>
';

    echo '<font size=1><BR>(*setting the default year enables you to check/update the placement/student details regarding to that batch)<BR></font>';


}

else if($view==1)
{?>
    <!--
    <table class="container">
        <thead>
            <tr>
                <th><h1>Functionalities</h1></th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="view_companies.php">VIEW COMPANIES</a></td>
            </tr>
            <tr>
                <td><a href="view_dept_companies.php">VIEW ELIGIBLE COMPANIES</a></td>

            </tr>
            <tr>
                <td><a href="reg_stud_dept.php">REGISTERED STUDENTS</a></td>
            </tr>
        <tr>
                <td><a href="edit_stud_dept.php">EDIT STUDENT DETAILS</a></td>
            </tr>
            <tr>
                <td><a href="add_stud_pc_list.php">ADD STUDENT COORDINATORS</a></td>
            </tr>
            <tr>
                <td><a href="del_stud_pc_list.php">DELETE STUDENT COORDINATORS</a></td>
            </tr>
        <tr>
                <td><a href="view_student_pc.php">VIEW STUDENT COORDINATORS</a></td>
            </tr>
        <tr>
                <td><a href="list_unauthorized_acc_dept.php">DELETE UNAUTHORISED ACCOUNTS</a></td>
            </tr>
        </tbody>
    </table>-->
    <section class="content">
        <h4>
            Companies For internships and Placements

        </h4>
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <a href="view_companies.php" class="small-box bg-aqua">
                    <div class="inner">
                        <h3>View</h3>
                        <p>Companies</p>
                    </div>
                    <div class="icon" style="margin-top: 20px;">
                        <i class="fa fa-briefcase"></i>
                    </div>
                    <div class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </a>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <a href="view_dept_companies.php" class="small-box bg-green">
                    <div class="inner">
                        <h3>Department</h3>
                        <p>Eligible Companies</p>
                    </div>
                    <div class="icon" style="margin-top: 20px;">
                        <i class="fa fa-globe"></i>
                    </div>
                    <div class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </a>
            </div><!-- ./col -->
        </div>

        <h4>
            Students Details For internships and Placements

        </h4>

        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <a href="reg_stud_dept.php" class="small-box bg-aqua">
                    <div class="inner">
                        <h3>View</h3>
                        <p>Registered Students</p>
                    </div>
                    <div class="icon" style="margin-top: 20px;">
                        <i class="fa fa-group"></i>
                    </div>
                    <div class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </a>
            </div><!-- ./col -->

            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <a href="register_students.php" class="small-box bg-green">
                    <div class="inner">
                        <h3>Register</h3>
                        <p>Students for Companies</p>
                    </div>
                    <div class="icon" style="margin-top: 20px;">
                        <i class="fa fa-ticket"></i>
                    </div>
                    <div class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </a>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <a href="deregister_students.php" class="small-box bg-aqua">
                    <div class="inner">
                        <h3>De-Register</h3>
                        <p>Students from companies</p>
                    </div>
                    <div class="icon" style="margin-top: 20px;">
                        <i class="fa fa-warning"></i>
                    </div>
                    <div class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </a>
            </div><!-- ./col -->











        </div>







        <h4>
            Verify and Edit Student Details

        </h4>

        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <a href="edit_stud_dept.php" class="small-box bg-yellow">
                    <div class="inner">
                        <h3>Edit</h3>
                        <p>Student Details</p>
                    </div>
                    <div class="icon" style="margin-top: 20px;">
                        <i class="fa fa-edit"></i>
                    </div>
                    <div class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </a>
            </div><!-- ./col -->

        </div>
        <h4>
            Edit Student Placement Coordinators

        </h4>

        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <a href="view_student_pc.php" class="small-box bg-aqua">
                    <div class="inner">
                        <h3>View</h3>
                        <p>SPC's</p>
                    </div>
                    <div class="icon" style="margin-top: 20px;">
                        <i class="fa fa-smile-o"></i>
                    </div>
                    <div class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </a>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <a href="add_stud_pc_list.php" class="small-box bg-green">
                    <div class="inner">
                        <h3>Add</h3>
                        <p>SPC</p>
                    </div>
                    <div class="icon" style="margin-top: 20px;">
                        <i class="fa  fa-thumbs-up"></i>
                    </div>
                    <div class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </a>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <a href="del_stud_pc_list.php" class="small-box bg-red">
                    <div class="inner">
                        <h3>Delete</h3>
                        <p>SPC's</p>
                    </div>
                    <div class="icon" style="margin-top: 20px;">
                        <i class="fa fa-thumbs-down"></i>
                    </div>
                    <div class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </a>
            </div><!-- ./col -->


        </div>
        <h4>
            Unauthorized Accounts

        </h4>

        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <a href="list_unauthorized_acc_dept.php" class="small-box bg-red">
                    <div class="inner">
                        <h3>Delete</h3>
                        <p>Accounts</p>
                    </div>
                    <div class="icon" style="margin-top: 20px;">
                        <i class="fa fa-warning"></i>
                    </div>
                    <div class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </a>
            </div><!-- ./col -->

        </div>


    </section>








    <?php
    $query = "SELECT year from default_year where email_id='$username'";
    $result = mysql_query($query);
    $info = mysql_fetch_array($result);
    if(mysql_affected_rows()==1)
    {
        echo '<b>Default year is set to : '.$info['year'].'</b><BR>';
    }
    echo '<form action="default_year_set.php" method="POST">
<b>Set the default year here:
<select name="batch" size="1">
<option></option>';
    $query = "Select DISTINCT grad_year from academic order by grad_year";
    $result = mysql_query($query);
    while($info = mysql_fetch_array($result))
    {
        echo '<option>'.$info['grad_year'].'</option>';
    }

    echo '
  </select>
 </select>
<input type="submit" name="submit"/>
</form><BR>
';

    echo '<font size=1><BR>(*setting the default year enables you to check/update the placement/student details regarding to that batch)<BR></font>';



}

else if($view==-1)
{?>

    <?php

    $check_if_spc= "select * from student,placement_coordinators where student.emailID='$username' and student.usn=placement_coordinators.usn ";
    $spc_res=mysql_query($check_if_spc);
    $spc_num = mysql_num_rows($spc_res );




    ?>






    <!--
    <table class="container">
        <thead>
            <tr>
                <th><h1>Functionalities</h1></th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="view_companies.php">VIEW COMPANIES (irrespective of eligibility criteria)</a></td>
            </tr>
            <tr>
                <td><a href="view_eligible_companies.php">VIEW ELIGIBLE COMPANIES (based on eligibility criteria)</a></td>

            </tr>
            <tr>
                <td><a href="recruited_company.php">RECRUITED COMPANIES</a></td>
            </tr>
        <tr>
                <td><a href="reg_stud_comp.php">COMPANY REGISTRATION</a></td>
            </tr>
        <tr>
                <td><a href="student_registered_company.php">MY REGISTERED COMPANIES</a></td>
            </tr>
        <tr>
                <td><a href="view_student_pc.php">VIEW STUDENT COORDINATORS</a></td>
            </tr>
        </tbody>
    </table> -->

    <!-- Content Header (Page header) -->

    <section class="content">
        <h4>
            Companies For internships and Placements

        </h4>
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <a href="view_companies.php" class="small-box bg-aqua">
                    <div class="inner">
                        <h3>View</h3>
                        <p>Companies</p>
                    </div>
                    <div class="icon" style="margin-top: 20px;">
                        <i class="fa fa-briefcase"></i>
                    </div>
                    <div class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </a>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <a href="view_eligible_companies.php" class="small-box bg-green">
                    <div class="inner">
                        <h3>View</h3>
                        <p>Eligible Companies</p>
                    </div>
                    <div class="icon" style="margin-top: 20px;">
                        <i class="fa fa-globe"></i>
                    </div>
                    <div class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </a>
            </div><!-- ./col -->
        </div>

        <h4>
            Registration For internships and Placements

        </h4>

        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <a href="reg_stud_comp.php" class="small-box bg-green">
                    <div class="inner">
                        <h3>Register</h3>
                        <p>For Company</p>
                    </div>
                    <div class="icon" style="margin-top: 20px;">
                        <i class="fa fa-pencil"></i>
                    </div>
                    <div class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </a>
            </div><!-- ./col -->
        </div>

        <?php
        if ($spc_num !=0)
        {
            ?>


            <h4>
                Exclusive Privileges for SPC :

            </h4>
            <div class="row">

                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <a href="reg_stud_dept.php" class="small-box bg-aqua">
                        <div class="inner">
                            <h3>View</h3>
                            <p>Registered Students</p>
                        </div>
                        <div class="icon" style="margin-top: 20px;">
                            <i class="fa fa-group"></i>
                        </div>
                        <div class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </div>
                    </a>
                </div><!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <a href="register_students.php" class="small-box bg-green">
                        <div class="inner">
                            <h3>Register</h3>
                            <p>Students for Companies</p>
                        </div>
                        <div class="icon" style="margin-top: 20px;">
                            <i class="fa fa-ticket"></i>
                        </div>
                        <div class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </div>
                    </a>
                </div><!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <a href="deregister_students.php" class="small-box bg-aqua">
                        <div class="inner">
                            <h3>De-Register</h3>
                            <p>Students from companies</p>
                        </div>
                        <div class="icon" style="margin-top: 20px;">
                            <i class="fa fa-warning"></i>
                        </div>
                        <div class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </div>
                    </a>
                </div><!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <a href="change_eligibility.php" class="small-box bg-green">
                        <div class="inner">
                            <h3>Eligibility</h3>
                            <p>Change student eligibility</p>
                        </div>
                        <div class="icon" style="margin-top: 20px;">
                            <i class="fa fa-ticket"></i>
                        </div>
                        <div class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </div>
                    </a>
                </div><!-- ./col -->


                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <a href="view_recruited.php" class="small-box bg-aqua">
                        <div class="inner">
                            <h3>View</h3>
                            <p>Recruited Students</p>
                        </div>
                        <div class="icon" style="margin-top: 20px;">
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </div>
                    </a>
                </div><!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <a href="add_recruited.php" class="small-box bg-green">
                        <div class="inner">
                            <h3>Add</h3>
                            <p>Recruited Students</p>
                        </div>
                        <div class="icon" style="margin-top: 20px;">
                            <i class="fa fa-star-half-o"></i>
                        </div>
                        <div class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </div>
                    </a>
                </div><!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <a href="delete_recruited.php" class="small-box bg-red">
                        <div class="inner">
                            <h3>Delete</h3>
                            <p>Recruited Students</p>
                        </div>
                        <div class="icon" style="margin-top: 20px;">
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </div>
                    </a>
                </div><!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <a href="graph_interface.php" class="small-box bg-red">
                        <div class="inner">
                            <h3>Analytics</h3>
                            <h4>Graphs</h4>

                        </div>
                        <div class="icon" style="margin-top: 20px;">
                            <i class="fa fa-bar-chart"></i>
                        </div>
                        <div class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </div>
                    </a>
                </div><!-- ./col -->


            </div>
        <?php } ?>

        <h4>
            My internships and Placements

        </h4>
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <a href="student_registered_company.php" class="small-box bg-red">
                    <div class="inner">
                        <h3>My</h3>
                        <p>Registered Companies</p>
                    </div>
                    <div class="icon" style="margin-top: 20px;">
                        <i class="fa fa-thumbs-up"></i>
                    </div>
                    <div class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </a>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <a href="recruited_company.php" class="small-box bg-green">
                    <div class="inner">
                        <h3>My</h3>
                        <p>Recruited Companies</p>
                    </div>
                    <div class="icon" style="margin-top: 20px;">
                        <i class="fa fa-gift"></i>
                    </div>
                    <div class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </a>
            </div><!-- ./col -->
        </div>
        <h4>
            Know your Student Placement Co-ordiantors

        </h4>

        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <a href="view_student_pc.php" class="small-box bg-yellow">
                    <div class="inner">
                        <h3>View</h3>
                        <p>SPC's</p>
                    </div>
                    <div class="icon" style="margin-top: 20px;">
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </a>
            </div><!-- ./col -->
        </div>




    </section>
<!--else if condition added on 6/3/18 -->


<?php }?>


<!-- jQuery 2.1.3 -->
<script src="../plugins/jQuery/jQuery-2.1.3.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- Slimscroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- FastClick -->
<script src='../plugins/fastclick/fastclick.min.js'></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js" type="text/javascript"></script>

</body>
</html>
