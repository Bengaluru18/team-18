<?php
include('db.php');
$email=$_SESSION['username'];
$pwd=$_SESSION['password'];
$view=$_SESSION["view"];
$spc_num =0;
if($_SESSION['view'] == -1 or $_SESSION['view']==10) {
    $query = "SELECT first_name, last_name, Initials, photo , dept_id FROM student where emailID='$username'";

    $data = mysql_query($query) or die(mysql_error());
    $info = mysql_fetch_array($data);
    $pic = $info['photo'];
    $name= $info['first_name']." ".$info['last_name']." ".$info['Initials'];
    $dept=$info['dept_id'];


}
else {
    $query = "SELECT first_name, last_name, Initials, photo, dept_id FROM staff where emailID='$username'";

    $data = mysql_query($query) or die(mysql_error());
    $info = mysql_fetch_array($data);
    $pic = $info['photo'];
    $name= $info['first_name']." ".$info['last_name']." ".$info['Initials'];
    $dept=$info['dept_id'];
}


if($view == -1 or $view == 10 ) 
{

    $check_if_spc = "select * from student,placement_coordinators where student.emailID='$email' and student.usn=placement_coordinators.usn ";
    $spc_res = mysql_query($check_if_spc);
    $spc_num = mysql_num_rows($spc_res);

}


?>
<html>
<head>
<script type="text/javascript"> 
function display_c(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct()',refresh)
}

function display_ct() {
var strcount;
var x = new Date().toString();
var y=x.split("GMT");
document.getElementById('ct').innerHTML = y[0];
//document.getElementById('t1').value = x;
tt=display_c();
}
</script>
 
  </head>
  <body class="skin-blue" onLoad="display_ct();">
    
<!-- Sidebar user panel -->
<div class="user-panel">
    <div class="pull-left image">
        <img src="<?php echo $pic;?>" class="img-circle" alt="User Image" />
    </div>
    <div class="pull-left info">
        <p><?php echo $name;?></p>

        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
</div>
<!-- search form -->
<form action="#" method="get" class="sidebar-form">
    <div class="input-group">
       <div >
              
              <span id="ct" style="color:#FFFFFF"></span>
              
            </div>
    </div>
</form>
<!-- /.search form -->
<!-- sidebar menu: : style can be found in sidebar.less -->
<!-- sidebar menu: : style can be found in sidebar.less -->
<?php
if(($_SESSION['view'] != -1 && $_SESSION['view'] != 10)  || $spc_num!=0 )
    include "approval.php";
?>

<ul class="sidebar-menu">
    <li class="active treeview">
        <a href="home.php">
            <i class="fa fa-dashboard"></i> <span>Home</span> </i>
        </a>
    </li>


      <?php if($_SESSION['view']!=2){ ?>
    <li class="active treeview"><a href="view_recruited.php"><i class="fa fa-user"></i>Placed Students</a></li>
   <?php }?>

     <?php if($_SESSION['view']==-1 or $_SESSION['view']==2){ ?>
     <li class="active"><a href="register.php"><i class="fa fa-sign-out text-info"></i>Dashboard</a></li>
     <?php }?>

    <?php if($_SESSION['view']==10 or $_SESSION['view']==2){ ?>
     <li class="active"><a href="register_intern.php"><i class="fa fa-sign-out text-info"></i>Dashboard-intern</a></li>
    <?php }?>
    
    <?php if($dept =='ISE'){?>
    <li class="active treeview">
        <a href="forum.php">
            <i class="fa fa-user"></i> <span>Interview Experiences</span>
        </a>
    </li>
    <?php } ?>

    
    <li class="active treeview">
        <a href="#">
            <i class="fa fa-files-o"></i>My Account <i class="fa fa-arrow-circle-down"></i>
        </a>
        <ul class="treeview-menu">
            <!--<li>
                <a href="#">
                    <i class="fa fa-user"></i> <span>Profile</span> <i class="fa-caret-square-o-down"></i>
                </a></li>
                <!--<ul class="treeview-menu">-->
                    <li><a href="basic_info.php"><i class="fa fa-user"></i> View Basic Info</a></li>
                    <?php
                    if($view==-1 or $view==10) {?>
                        <li><a href="academic_info.php"><i class="fa fa-table"></i> View Academic Info</a></li>
                        <li><a href="extra_cur_info.php"><i class="fa fa-table"></i> View Extra-curricular Info</a></li>
                        <?php
                    }?>
                    <li><a href="edit_basic_info.php"><i class="fa fa- fa-clipboard"></i> Update Basic Info</a></li>
                <!--</ul>-->
            
           
            <li><a href="account_setting.php"><i class="fa fa-key"></i>Change password</a></li>
        </ul>
    </li>


    <?php if($view==1) { ?>
        <li class="active treeview"><a href = "./attendance.php" ><i class="fa fa-sign-out text-info" ></i >Attendance Sheet </a ></li >
    <?php }
    ?>

    <?php if($view == -1 or $view == 10 )
    {

        $check_if_spc= "select * from student,placement_coordinators where student.emailID='$email' and student.usn=placement_coordinators.usn ";
        $spc_res=mysql_query($check_if_spc);
        $spc_num = mysql_num_rows($spc_res );

        if($spc_num!=0){

        ?>
        <li class="active treeview">
            <a href="#">
                <i class="fa fa-user"></i> <span>SPC Corner</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="edit_stud_dept.php"><i class="fa fa-user"></i>Edit student</a></li>
                <li class="active"><a href="register_intern.php"><i class="fa fa-sign-out text-info"></i>Dashboard-intern</a></li>

                    <li><a href="attendance.php"><i class="fa fa-table"></i> Attendance Sheet Generation</a></li>

                     <li><a href="stats_graphs.php"><i class="fa fa-table"></i> stats</a></li>
            </ul>
        </li>
<?php } }?>




    <li class="active"><a href="./logout.php"><i class="fa fa-sign-out text-info"></i> Logout</a></li>
  <?php if($view!=-1 && $view!=10){
    $query = "SELECT year from default_year where email_id='$username'";
    $result = mysql_query($query);
    $info = mysql_fetch_array($result);
    $_SESSION['batch']=$info['grad_year'];
    $iyear=$info['year']+1;
    if(mysql_affected_rows()==1)
    {
        echo '<li><h4 style="color:#FFFFFF">Grad year placement : '.$info['year'].'</h3></li><BR>';
        echo '<li><h4 style="color:#FFFFFF">Grad year internship : '.$iyear.'</h3></li><BR>';
    }
    echo '<form action="default_year_set.php" method="POST">
<li><h5 style="color:#FFFFFF">Set Grad year for placement</h5></li>
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
';}

    ?>




</ul>
