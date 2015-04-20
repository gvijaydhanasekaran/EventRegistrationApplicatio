<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootsrtap Free Admin Template - SIMINTA | Admin Dashboad Template</title>
    <!-- Core CSS - Include with every page -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/file/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/file/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/file/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/file/css/style.css" rel="stylesheet" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/file/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/file/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/file/css/cutomStyle.css" rel="stylesheet" />
   </head>
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                	<button class="btn btn-danger btn-circle btn-lg" type="button"><i class="fa fa-heart"></i>
                            </button> <span style="color:#D2322D">Name</span>
                </a>
            </div>
            <!-- end navbar-header -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section logoutBox">
                            <div class="user-section-inner">
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/file/img/user.jpg" alt="">
                            </div>
                            <div class="user-info">
                                <div>
                                	<?php echo Yii::app()->user->username;?>
                                	<a href="<?php echo Yii::app()->createUrl('site/logout'); ?>">
	                                	<button class="btn btn-success btn-circle" type="button">
	                                		<i class="fa fa-heart"></i>
	                            		</button>
                            		</a>
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!--end search section-->
                    </li>
                    <li class="selected">
                        <a href="index.html"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-user fa-fw"></i>User<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('user/create'); ?>"><i class="fa  fa-pencil"></i>&nbsp;Add New User</a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('user/admin'); ?>"><i class="fa fa-search"></i>&nbsp;All USers</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <!-- Course Link-->
					<li>
                        <a href="#"><i class="fa fa-flask fa-fw"></i>Courses<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('course/create'); ?>"><i class="fa  fa-pencil"></i>&nbsp;Add New Course</a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('course/admin'); ?>"><i class="fa fa-search"></i>&nbsp;All Courses</a>
                            </li>
                        </ul>
                    </li>   
                    <!-- Course Link End-->  
                    <!-- Institute Link-->
					<li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i>Institutes<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('institute/create'); ?>"><i class="fa  fa-pencil"></i>&nbsp;Add New Institute</a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('institute/admin'); ?>"><i class="fa fa-search"></i>&nbsp;All Institutes</a>
                            </li>
                        </ul>
                    </li>   
                    <!-- Institute Link End-->

                    <!-- Event Link-->
					<li>
                        <a href="#"><i class="fa fa-bell fa-fw"></i>Events<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('event/create'); ?>"><i class="fa  fa-pencil"></i>&nbsp;Add New Event</a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('event/admin'); ?>"><i class="fa fa-search"></i>&nbsp;All Events</a>
                            </li>
                        </ul>
                    </li>   
                    <!-- Event Link End-->

                    <!-- Participants Link-->
					<li>
                        <a href="#"><i class="fa fa-thumbs-up fa-fw"></i>Participants<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('student/create'); ?>"><i class="fa  fa-pencil"></i>Add New Participant</a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('student/admin'); ?>"><i class="fa fa-search"></i>All Participants</a>
                            </li>
                        </ul>
                    </li>   
                    <!-- Participants Link End-->

                     
                </ullamcorper>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper <div id="page-wrapper"> -->
        <div id="page-wrapper">
        	<?php echo $content; ?>
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/css/file/plugins/jquery-1.10.2.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/css/file/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/css/file/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/css/file/plugins/pace/pace.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/css/file/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/css/file/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/css/file/plugins/morris/morris.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/css/file/scripts/dashboard-demo.js"></script>

</body>

</html>
