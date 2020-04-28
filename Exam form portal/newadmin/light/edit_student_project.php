<?php
//$conn = mysqli_connect("localhost","root","");
//mysqli_select_db($conn,"db_online_exam_form_portal");
include('dbconnection.php');
include('prevention_opening_page.php');
?>

<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>Online Exam form Portal</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="../assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="../assets/css/material_style.css">
	<!-- Theme Styles -->
    <link href="../assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />	
    <link href="../assets/css/theme/light/style.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/pages/formlayout.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- Date Time item CSS -->
    <link rel="stylesheet" href="../assets/plugins/material-datetimepicker/bootstrap-material-datetimepicker.css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="http://radixtouch.in/templates/admin/smart/source/assets/img/favicon.ico" />  
 </head>
 <!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-dark dark-sidebar-color">
    <div class="page-wrapper">
        <!-- start header -->
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner">
                <!-- logo start -->
                <div class="page-logo">
                    <a href="index.html">
                    <span class="logo-icon material-icons fa-rotate-45">school</span>
                    <span class="logo-default" >Admin</span> </a>
                </div>
                <!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>
                 <form class="search-form-opened" action="#" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." name="query">
                        <span class="input-group-btn">
                          <a href="javascript:;" class="btn submit">
                             <i class="icon-magnifier"></i>
                           </a>
                        </span>
                    </div>
                </form>
                <!-- start mobile menu -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
               <!-- end mobile menu -->
                <!-- start header menu -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                    	<li><a href="javascript:;" class="fullscreen-btn"><i class="fa fa-arrows-alt"></i></a></li>
                    	
 						<!-- start manage user dropdown -->
 						<li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle " src="" />
								<!-- src="../assets/img/dp.jpg"-->
                                <span class="username username-hide-on-mobile"> Admin </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                              
								<li>
										<a href="adminchangepassword.php">
											<i class="icon-lock"></i> change password
										</a>
                                </li>
                                <li>
                                    <a href="adminlogout.php">
                                        <i class="icon-logout"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                        <!-- end manage user dropdown -->
                      
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- start page container -->
        <div class="page-container">
 			<!-- start sidebar menu -->
 			<div class="sidebar-container">
 				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
	                <div id="remove-scroll" class="left-sidemenu">
	                    <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
	                        <li class="sidebar-toggler-wrapper hide">
	                            <div class="sidebar-toggler">
	                                <span></span>
	                            </div>
	                        </li>
	                        <li class="sidebar-user-panel">
	                             <div class="user-panel">
	                               <!-- <div class="pull-left image">
	                                    <img src="../assets/img/dp.jpg" class="img-circle user-img-circle" alt="User Image" />
										 
	                                </div>-->
									<?php
											$college_id= $_SESSION['admin_id'];
											$c= mysqli_query($conn,"select college from admin_registration where id= '$college_id'");
											$data= mysqli_fetch_array($c);
											?>
	                                <div class="pull-left info">
	                                    <p><?php echo $data['college']?></p>
	                                    <a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline"> Online</span></a>
	                                </div>
	                            </div>
	                        </li>
	                        <li class="nav-item start active open">
	                            <a href="#" class="nav-link nav-toggle">
	                                <i class="material-icons">dashboard</i>
	                                <span class="title">Dashboard</span>
                                	<span class="selected"></span>
                                	<span class="arrow open"></span>
	                            </a>
							</li>	
	                           
	                        <li class="nav-item">
	                            <a href="all_department_project.php" class="nav-link nav-toggle"> <i class="material-icons">business</i>
	                                <span class="title">Departments</span> <span class="arrow"></span>
	                            </a>
	                      
	                        </li>
							<li class="nav-item">
	                            <a href="all_semester_project.php" class="nav-link nav-toggle"> <i class="material-icons">business</i>
	                                <span class="title">Semester</span> <span class="arrow"></span>
	                            </a>
	                      
	                        </li>
							<li class="nav-item">
	                            <a href="all_session_project.php" class="nav-link nav-toggle"> <i class="material-icons">business</i>
	                                <span class="title">Session</span> <span class="arrow"></span>
	                            </a>
	                         
	                        </li>
							<li class="nav-item">
	                            <a href="all_courses_project.php" class="nav-link nav-toggle"> <i class="material-icons">school</i>
	                                <span class="title">Courses</span> <span class="arrow"></span>
	                               
	                            </a>
	                       
	                        </li>
							<li class="nav-item active">
	                            <a href="all_students_project.php" class="nav-link nav-toggle"><i class="material-icons">group</i>
	                            <span class="title">Students</span><span class="arrow"></span></a>
	                         
	                        </li>
							<li class="nav-item">
	                            <a href="exam_form_date.php" class="nav-link nav-toggle"><i class="material-icons">group</i>
	                            <span class="title">Exam form date</span><span class="arrow"></span></a>
	                         
	                        </li>
	                        <li class="nav-item">
	                            <a href="all_examination_project.php" class="nav-link nav-toggle"> <i class="material-icons">school</i>
	                                <span class="title">Examinations</span> <span class="arrow"></span>
	                                <!--<span class="label label-rouded label-menu label-success">new</span> -->
	                            </a>
	                    
	                        </li>
							<li class="nav-item">
									<a href="add_result_csv_project.php" class="nav-link nav-toggle"> <i class="material-icons">school</i>
									<span class="title">Results</span> <span class="arrow"></span>
									<!--<span class="label label-rouded label-menu label-success">new</span> -->
									</a>
							
								</li>
								
								<li class="nav-item">
									<a href="#" class="nav-link nav-toggle"> <i class="material-icons">monetization_on</i>
										<span class="title">Payment Collection</span> <span class="arrow"></span>
									</a>   
								</li>
	                    </ul>
	                </div>
                </div>
            </div>
            <!-- end sidebar menu --> 
			
			
			<!-- start page content php code -->

<!DOCTYPE php>
<?php
$college_id= $_SESSION['admin_id'];
error_reporting(1);
$s_name= $_POST['student_name'];
$r_id= $_POST['registration_id'];
$s_email= $_POST['email'];
$s_pass= $_POST['password'];
$s_gender= $_POST['gender'];
$s_dob=$_POST['dob'];
$s_category=$_POST['category'];
$s_blood_group= $_POST['blood_group'];
$s_program_name= $_POST['program_name'];
$s_session= $_POST['session'];
$s_department= $_POST['department'];
$s_semester= $_POST['semester'];
$s_section= $_POST['section'];
$s_mobile= $_POST['mobile'];
$s_parents_name= $_POST['parents_name'];
$s_parents_number= $_POST['parents_number'];
$s_registration_date= $_POST['registration_date'];
$s_address= $_POST['address'];
$s_profile_pic= $_POST['profile_pic'];



$e = $_POST['email'];
if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
  if(isset($_POST['update']))
  {
   if(trim($_POST['password'])== trim($_POST['cpassword']))
    {
				
				$targ = "upload/".basename($_FILES['profile_pic']['name']);
				move_uploaded_file($_FILES['profile_pic']['tmp_name'], $targ);
				
				mysqli_query($conn,"UPDATE student_registration set name='$s_name',registration_id='$r_id',email='$s_email',password='$s_pass',gender='$s_gender',dob='$s_dob',category='$s_category',blood_group='$s_blood_group',program_name='$s_program_name',session='$s_session',department='$s_department',semester='$s_semester',section='$s_section',mobile='$s_mobile',parents_name='$s_parents_name',parents_number='$s_parents_number',registration_date='$s_registration_date',address='$s_address',profile_pic='$targ' where id=".$_GET['edit']);
			
                echo '<script language="javascript">';
                echo 'alert("Student has been Edited/Updated succefully")';
                echo '</script>';

        
    }else{
           echo '<script language="javascript">';
           echo 'alert("password and confirm password did not match")';
           echo '</script>';
         }
  }
}

$getdata=mysqli_query($conn,"select * from student_registration where id= ".$_GET['edit']);
$data1= mysqli_fetch_array($getdata);
?>				
			<!-- End page content php code -->
			

			<!-- start page content HTML code -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Edit Student</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Student</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Edit Student</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Edit Student</header>
                                     
                                </div>
                                <div class="card-body" id="bar-parent">
                                    <form action="" method="POST" id="" class="form-horizontal" enctype="multipart/form-data">
                                        <div class="form-body">
											<div class="form-group row">
                                                <label class="control-label col-md-3">Student Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="student_name" placeholder="enter name of student" class="form-control input-height" value="<?php echo $data1['name'] ?>" required> </div>
                                            </div>
                                           
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Registration No
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="registration_id" placeholder="enter registration number" class="form-control input-height" value="<?php echo $data1['registration_id'] ?>" required/> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Email
                                                </label>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                                <i class="fa fa-envelope"></i>
                                                            </span>
                                                        <input type="email" class="form-control input-height" name="email" placeholder="Email Address" value="<?php echo $data1['email'] ?>" required> 
													</div>
                                                </div>
                                            </div>
											<div class="form-group row">
                                                <label class="control-label col-md-3">Password
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="password" placeholder="enter password" class="form-control input-height" value="<?php echo $data1['password'] ?>" required/> </div>
                                            </div>
											<div class="form-group row">
                                                <label class="control-label col-md-3">Confirm Password
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="cpassword" placeholder="enter password" class="form-control input-height" value="<?php echo $data1['password'] ?>" required/> </div>
                                            </div>
											
											<div class="form-group row">
                                                <label class="control-label col-md-3">Gender
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <select class="form-control input-height" name="gender" required>
                                                        <option><?php echo $data1['gender'] ?></option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                </div>
                                            </div>
								
											<div class="form-group row">
                                                <label class="control-label col-md-3">Date Of Birth
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    
                                                <input class="form-control input-height" size="16" placeholder="date of Birth" type="text" id = "dateOfBirth" value="<?php echo $data1['dob'] ?>" name="dob" required>
												</div>
                                            </div>
											<div class="form-group row">
													<label class="control-label col-md-3">Category
														<span class="required"> * </span>
													</label>
													<div class="col-md-5">
														<select class="form-control input-height" name="category" required>
															<option><?php echo $data1['category'] ?></option>
															<option value="open">OPEN</option>
															<option value="obc">OBC</option>
															<option value="st/sc">ST/SC</option>
														</select>
													</div>
											</div>
											<div class="form-group row">
                                                <label class="control-label col-md-3">Blood Group
                                                    
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="blood_group" placeholder="enter Blood group" class="form-control input-height" value="<?php echo $data1['blood_group'] ?>"  /> </div>
                                            </div>
											<div class="form-group row">
													<label class="control-label col-md-3">program name
														<span class="required"> * </span>
													</label>
													<div class="col-md-5">
														<select class="form-control input-height" name="program_name" required>
															<option><?php echo $data1['program_name']?></option>
															<option value="B.E">B.E.</option>
															<option value="M.Tech">M.Tech</option>
														</select>
													</div>
											</div>
											<?php
											$d= mysqli_query($conn,"select Session from Session where college_id= '$college_id'");
											?>
											<div class="form-group row">
													<label class="control-label col-md-3">Session
														<span class="required"> * </span>
													</label>
													<div class="col-md-5">
														<select class="form-control input-height" name="session" required>
															<option><?php echo $data1['session']?></option>
                                                        <?php while($data= mysqli_fetch_array($d)):; ?>
															<option><?php echo $data[0]; ?></option>
															<?php endwhile; ?>
														</select>
													</div>
											</div>
                                            <?php
											$college_id= $_SESSION['admin_id'];
											$d= mysqli_query($conn,"select department_name from department where college_id= '$college_id'");
											?>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Branch
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <select class="form-control input-height" name="department" required>
                                                        <option><?php echo $data1['department']?></option>
                                                        <?php while($data= mysqli_fetch_array($d)):; ?>
															<option><?php echo $data[0]; ?></option>
															<?php endwhile; ?>
														
										<!--	<option value="Computer Technology">Information 	Technology</option>
                                                        <option value="Information Technology">Computer Technology</option>
														<option value="Electronic">Electronic</option>
														<option value="Electronic And Telicommunication">Electronic And Telicommunication</option>
                                                        <option value="Civil">Civil</option>
														<option value="Mechanical">Mechanical</option>
                                                        -->
                                                    </select>
                                                </div>
                                            </div>
											<?php
											$s= mysqli_query($conn,"select semester_name from semester where college_id= '$college_id'");
											?>
											<div class="form-group row">
                                                <label class="control-label col-md-3">Semester
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <select class="form-control input-height" name="semester" required>
                                                        <option><?php echo $data1['semester']?></option>
														<?php while($data= mysqli_fetch_array($s)):; ?>
															<option><?php echo $data[0]; ?></option>
															<?php endwhile; ?>
                                                   <!--     <option value="First">First</option>
                                                        <option value="Second">Second</option>
														<option value="Third">Third</option>
														<option value="Fourth">Fourth</option>
                                                        <option value="Fifth">Fifth</option>
														<option value="Sixth">Sixth</option>
														<option value="Seventh">Seventh</option>
														<option value="Eight">Eight</option>-->
                                                    </select>
                                                </div>
                                            </div>
											<div class="form-group row">
                                                <label class="control-label col-md-3">Section
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="section" placeholder="enter class section" class="form-control input-height" value="<?php echo $data1['section'] ?>" required/> </div>
                                            </div>
											
                                            
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Mobile No.
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input name="mobile" type="text" placeholder="mobile number" class="form-control input-height" value="<?php echo $data1['mobile'] ?>" required /> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Parents Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="parents_name"  placeholder="enter parents name" class="form-control input-height" value="<?php echo $data1['parents_name'] ?>" required/> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Parents Mobile No.
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input name="parents_number" type="text" placeholder="parents mobile number" class="form-control input-height" value="<?php echo $data1['parents_number'] ?>" required /> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Registration Date
                                                    <span class="required"> * </span>
                                                </label>
                                               <div class="col-md-5">     
                                                <input class="form-control input-height" size="16" placeholder="Registration Date" id = "date" type="text" name= "registration_date" value="<?php echo $data1['registration_date'] ?>" required>
                                                
                                              </div>
												<input type="hidden" id="dtp_input2" value="" />
                                            </div>
                                            
                                        	 <div class="form-group row">
                                                <label class="control-label col-md-3">Address
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <textarea name="address" placeholder="address" class="form-control-textarea" rows="5" value="<?php echo $data1['address'] ?>" ><?php echo $data1['address'] ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Profile Picture
                                                </label>
                                                <div class="compose-editor">
													<input type="file" name= "profile_pic">
                                        <!--    <input type="file" class="default" name= "profile_pic" value="<?php// echo $data1['profile_pic'] ?>" multiple>--->
                                              </div>
                                            </div>
											<div class="form-actions">
											 <div class="row">
                                                <div class="offset-md-3 col-md-9">
													<input type= "submit" name="update" value="Update" class="btn btn-info">
                                                    <input type="button" value="cancel" class="btn" onClick="document.location.href='http://localhost/newadmin/light/all_students_project.php';" />
                                                </div>
                                             </div>
                                       		</div>
										</div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
					
            <!-- end page content -->
           
         
        </div>
        <!-- end page container -->
        <!-- start footer -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2018 @College Online Examination Form With Online Payment</a>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- end footer -->
    </div> 
    <!-- start js include path -->
    <script src="../assets/plugins/jquery/jquery.min.js" ></script>
    <script src="../assets/plugins/popper/popper.js" ></script>
    <script src="../assets/plugins/jquery-blockui/jquery.blockui.min.js" ></script>
    <script src="../assets/plugins/jquery-validation/js/jquery.validate.min.js" ></script>
    <script src="../assets/plugins/jquery-validation/js/additional-methods.min.js" ></script>
    <script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- bootstrap -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js" ></script>
    <script src="../assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js" ></script>
    <script src="../assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"  charset="UTF-8"></script>
    <script src="../assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker-init.js"  charset="UTF-8"></script>
    <!-- Common js-->
	<script src="../assets/js/app.js" ></script>
    <script src="../assets/js/pages/validation/form-validation.js" ></script>
    <script src="../assets/js/layout.js" ></script>
	<script src="../assets/js/theme-color.js" ></script>
	<!-- Material -->
	<script src="../assets/plugins/material/material.min.js"></script>
	<!--calender under material-->
	<script src="../assets/js/pages/material-select/getmdl-select.js" ></script>
    <script  src="../assets/plugins/material-datetimepicker/moment-with-locales.min.js"></script>
	<script  src="../assets/plugins/material-datetimepicker/bootstrap-material-datetimepicker.js"></script>
	<script  src="../assets/plugins/material-datetimepicker/datetimepicker.js"></script>
	
     <!-- end js include path -->
	 
	
  </body>


</html>