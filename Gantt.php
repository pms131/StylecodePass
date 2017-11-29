<?php
    session_start();
    $email = $_SESSION['email'];
?>

<html lang="en" style="overflow: hidden;">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="Dashboard">
<meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
<title>DASHGUM - Bootstrap Admin Template</title>
<!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.css" rel="stylesheet">
<!--external css-->
<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/style-responsive.css" rel="stylesheet">
<script src="assets/js/chart-master/Chart.js"></script>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
.jqstooltip { position: absolute;left: 0px;top: 0px;display: block;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;padding: 5px 5px 8px 5px;font: 10px arial, san serif;text-align: left;}
</style>
<style type="text/css">
.jqstooltip { position: absolute;left: 0px;top: 0px;display: block;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;padding: 5px 5px 8px 5px;font: 10px arial, san serif;text-align: left;}
</style>
<style type="text/css">
.jqstooltip { position: absolute;left: 0px;top: 0px;display: block;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;padding: 5px 5px 8px 5px;font: 10px arial, san serif;text-align: left;}
</style>
	<script src='contents_gantt/common/dhtmlxSuite/dhtmlx.js'></script>
<script src="contents_gantt/codebase/dhtmlxgantt.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="contents_gantt/codebase/dhtmlxgantt.css" type="text/css" media="screen" title="no title" charset="utf-8">
<link rel='stylesheet' type='text/css' href='contents_gantt/common/dhtmlxSuite/skins/skyblue/dhtmlx.css' />
<script src="contents_gantt/codebase/ext/dhtmlxgantt_tooltip.js" type="text/javascript" charset="utf-8"></script>
<script src="contents_gantt/codebase/ext/dhtmlxgantt_marker.js" type="text/javascript" charset="utf-8"></script>
<script src="contents_gantt/common/testdata.js" type="text/javascript" charset="utf-8"></script>
<script src='contents_gantt/codebase/ext/dhtmlxgantt_multiselect.js' type='text/javascript' charset='utf-8'></script>
<script src="contents_gantt/codebase/ext/dhtmlxgantt_undo.js" type="text/javascript" charset="utf-8"></script>
<script src="contents_gantt/codebase/ext/dhtmlxgantt_keyboard_navigation.js" type="text/javascript" charset="UTF-8"></script>
<script src="https://export.dhtmlx.com/gantt/api.js" type="text/javascript" charset="utf-8"></script>

<style type="text/css">
    html,
    body {
        height: 100%;
        padding: 0px;
        margin: 0px;
        overflow: hidden;
    }
    
    .red .gantt_cell,
    .odd.red .gantt_cell,
    .red .gantt_task_cell,
    .odd.red .gantt_task_cell {
        background-color: #FDE0E0;
    }
    
    .green .gantt_cell,
    .odd.green .gantt_cell,
    .green .gantt_task_cell,
    .odd.green .gantt_task_cell {
        background-color: #BEE4BE;
    }
    
    .gantt_task_progress {
        text-align: left;
        padding-left: 10px;
        box-sizing: border-box;
        color: white;
        font-weight: bold;
    }
    
    .child_preview {
        box-sizing: border-box;
        margin-top: 2px;
        position: absolute;
        z-index: 1;
        color: white;
        text-align: center;
        font-size: 12px;
    }
    
    .gantt_task_line.task-collapsed {
        height: 4px;
        opacity: 0.25;
    }
    
    .gantt_task_line.gantt_project.task-collapsed .gantt_task_content {
        display: none;
    }
    
    .gantt_row.task-parent {
        font-weight: bold;
    }

</style>

</head>
<body onload='doOnLoad();' style="">

<header class="header black-bg">
<div class="sidebar-toggle-box">
	<div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation">
	</div>
</div>
<div class="top-menu">
	<ul class="nav pull-right top-menu">
		<li><a class="logout" href="LogOut.php">Logout</a></li>
	</ul>
</div>
</header>
<!-- js placed at the end of the document so the pages load faster -->
<!--<section class="sidebar-closed" id="container">-->
<!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
<!--header start-->
     <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="Dashboard.php" class="logo"><b>StyledCode</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 4 pending tasks</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">DashGum Admin Panel</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Database Update</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Product Development</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Payments Sent</div>
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                            <span class="sr-only">70% Complete (Important)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-zac.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Zac Snider</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hi mate, how is everything?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-divya.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Divya Manian</span>
                                    <span class="time">40 mins.</span>
                                    </span>
                                    <span class="message">
                                     Hi, I need your help with this.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-danro.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dan Rogers</span>
                                    <span class="time">2 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Love your new Dashboard.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-sherman.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dj Sherman</span>
                                    <span class="time">4 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Please, answer asap.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.html">Logout</a></li>
            	</ul>
            </div>
        </header>
<!--header end-->
<!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
<!--sidebar start-->
<aside>
            <div id="sidebar"  class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                    <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                    <h5 class="centered"><?=$email?></h5>
                          
                    <li class="mt">
                        <a class="active" href="Dashboard.php">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
  
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-desktop"></i>
                            <span>Code</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-bar-chart"></i>
                            <span>Coding Convention</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="form_component.html">Rule Setting</a></li>
                            <li><a  href="advanced_form_components.html">Rule Docs</a></li>
                            <li><a  href="coderesult.php">Report from Sonar</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-file-code-o"></i>
                            <span>Code Review</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-users"></i>
                            <span>Account & Team</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="blank.html">Edit profile</a></li>
                            <li><a  href="login.html">Team setting</a></li>
                            <li><a  href="lock_screen.html">Message</a></li>
                            <li><a  href="lock_screen.html">Chat Room</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-cogs"></i>
                            <span>Agile Setting</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="dropzone.html">Issue</a></li>
                            <li><a  href="sprint-plan.html">Sprint Plan</a></li>
                            <li><a  href="Schedular.php">Calendar</a></li>
                        </ul>
                    </li>
					<li class="sub-menu">
			<a href="ManageProject.php">
				<i class="fa fa-desktop"></i>
				<span>ManageProject</span>
			</a>
		</li>
		<li class="sub-menu">
			<a href="lobby.html">
				<i class="fa fa-comments-o"></i>
				<span>Chat Room</span>
			</a>
		</li>
		<li class="sub-menu">
			<a href="Gantt.php">
				<i class="fa fa-tasks"></i>
				<span>Scheduler</span>
			</a>
		</li>
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
<!--sidebar end-->
<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
<section class="wrapper site-min-height">
<h3><i class="fa fa-angle-right"></i>Gantt</h3>
<div class="row mt" style="overflow:auto;  padding-top:93px;">
	<!--<div class="col-lg-12">-->
		<!-- -- 1st ROW OF PANELS ---->
		<!--<div class="row">-->
			<!-- TWITTER PANEL -->
			
    <!--</div>-->
<div id="gantt_here"  style="width:100%; height:100%; padding-top:93px;"></div>
<!-- --/col-md-4 ---->
</div>
</section>
<!-- --/wrapper ---->
</section>
<!-- /MAIN CONTENT -->
<!--main content end-->
<!--footer start-->
<!--footer end-->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script class="include" src="assets/js/jquery.dcjqaccordion.2.7.js" type="text/javascript"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="assets/js/jquery.sparkline.js"></script>
<!--common script for all pages-->
<script src="assets/js/common-scripts.js"></script>
<div id="ascrail2000" class="nicescroll-rails" style="width: 6px; z-index: 1000; background: rgb(64, 64, 64); cursor: default; position: fixed; top: 0px; height: 100%; right: 0px; display: none;">
<div style="position: relative; top: 0px; float: right; width: 6px; height: 0px; background-color: rgb(78, 205, 196); background-clip: padding-box; border-radius: 10px;">
</div>
</div>
<div id="ascrail2000-hr" class="nicescroll-rails" style="height: 6px; z-index: 1000; background: rgb(64, 64, 64); position: fixed; left: 0px; width: 100%; bottom: 0px; cursor: default; display: none;">
<div style="position: relative; top: 0px; height: 6px; width: 0px; background-color: rgb(78, 205, 196); background-clip: padding-box; border-radius: 10px;">
</div>
</div>
<div id="ascrail2000" class="nicescroll-rails" style="width: 6px; z-index: 1000; background: rgb(64, 64, 64); cursor: default; position: fixed; top: 0px; height: 100%; right: 0px; display: none;">
<div style="position: relative; top: 0px; float: right; width: 6px; height: 0px; background-color: rgb(78, 205, 196); background-clip: padding-box; border-radius: 10px;">
</div>
</div>
<div id="ascrail2000-hr" class="nicescroll-rails" style="height: 6px; z-index: 1000; background: rgb(64, 64, 64); position: fixed; left: 0px; width: 100%; bottom: 0px; cursor: default; display: none;">
<div style="position: relative; top: 0px; height: 6px; width: 0px; background-color: rgb(78, 205, 196); background-clip: padding-box; border-radius: 10px;">
</div>
</div>
<div class="nicescroll-rails" id="ascrail2000-hr" style="background: rgb(64, 64, 64); width: 207px; height: 3px; display: none; position: fixed; z-index: auto; cursor: default; opacity: 0;">
<div style="border-radius: 10px; top: 0px; width: 210px; height: 3px; position: relative; background-clip: padding-box; background-color: rgb(78, 205, 196);">
</div>
</div>
<div class="nicescroll-rails" id="ascrail2001" style="background: rgb(64, 64, 64); top: 0px; width: 6px; height: 100%; right: 0px; position: fixed; z-index: 1000; cursor: default; opacity: 0; -ms-touch-action: none;">
<div style="border-radius: 10px; top: 14px; width: 6px; height: 71px; float: right; position: relative; -ms-touch-action: none; background-clip: padding-box; background-color: rgb(78, 205, 196);">
</div>
</div>
<div class="nicescroll-rails" id="ascrail2001-hr" style="background: rgb(64, 64, 64); left: 0px; width: 100%; height: 6px; bottom: 0px; display: none; position: fixed; z-index: 1000; cursor: default; opacity: 0;">
<div style="border-radius: 10px; top: 0px; width: 1024px; height: 6px; position: relative; background-clip: padding-box; background-color: rgb(78, 205, 196);">
</div>
</div>
<!--script for this page-->
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="assets/js/sparkline-chart.js"></script>
<script>
      //custom select box
      $(function(){
          $('select.styled').customSelect();
      });
  </script>
    <script type="text/javascript">
        gantt.config.grid_width = 380;
        gantt.config.add_column = false;

        gantt.locale.labels.section_period = "Time period";
        gantt.locale.labels["section_parent"] = "Parent task";
        gantt.locale.labels["section_priority"] = "Priority";

        gantt.templates.leftside_text = function(start, end, task) {
            return task.duration + " days";
        };


        gantt.templates.grid_row_class = function(item) {
            if (item.progress == 0) return "red";
            if (item.progress >= 1) return "green";
        };
        gantt.templates.task_row_class = function(start_date, end_date, item) {
            if (item.progress == 0) return "red";
            if (item.progress >= 1) return "green";
        };
        /******************************dynamic_scales****************************************/
        function setScaleConfig(value) {
            switch (value) {
                case "Day Scale":
                    gantt.config.scale_unit = "day";
                    gantt.config.step = 1;
                    gantt.config.date_scale = "%d %M";
                    gantt.config.subscales = [];
                    gantt.config.scale_height = 27;
                    gantt.templates.date_scale = null;
                    break;
                case "Week Scale":
                    var weekScaleTemplate = function(date) {
                        var dateToStr = gantt.date.date_to_str("%d %M");
                        var endDate = gantt.date.add(gantt.date.add(date, 1, "week"), -1, "day");
                        return dateToStr(date) + " - " + dateToStr(endDate);
                    };

                    gantt.config.scale_unit = "week";
                    gantt.config.step = 1;
                    gantt.templates.date_scale = weekScaleTemplate;
                    gantt.config.subscales = [{
                        unit: "day",
                        step: 1,
                        date: "%D"
                    }];
                    gantt.config.scale_height = 50;
                    break;
                case "Month Scale":
                    gantt.config.scale_unit = "month";
                    gantt.config.date_scale = "%F, %Y";
                    gantt.config.subscales = [{
                        unit: "day",
                        step: 1,
                        date: "%j, %D"
                    }];
                    gantt.config.scale_height = 50;
                    gantt.templates.date_scale = null;
                    break;
                case "Year Scale":
                    gantt.config.scale_unit = "year";
                    gantt.config.step = 1;
                    gantt.config.date_scale = "%Y";
                    gantt.config.min_column_width = 50;

                    gantt.config.scale_height = 90;
                    gantt.templates.date_scale = null;


                    gantt.config.subscales = [{
                        unit: "month",
                        step: 1,
                        date: "%M"
                    }];
                    break;
            }
        }


        /******************************today_line********************************************/

        var d = new Date();
        var date_to_str = gantt.date.date_to_str(gantt.config.task_date);
        var today = new Date(d.getFullYear(), d.getMonth() + 1, d.getDay()); //Today's day configuration, month+1 해줘야 함
        gantt.addMarker({
            start_date: today,
            css: "today",
            text: "Today",
            title: "Today: " + date_to_str(today)
        });

        /*
        var start = new Date(2013, 2, 31); //task start day configuration
        gantt.addMarker({
            start_date: start,
            css: "status_line",
            text: "Start project",
            title: "Start project: " + date_to_str(start)
        });*/


        gantt.config.scale_unit = "month";
        gantt.config.date_scale = "%F, %Y";

        gantt.config.scale_height = 50;

        gantt.config.subscales = [{
            unit: "day",
            step: 1,
            date: "%j, %D"
        }];

        /******************************multi_selection********************************************/

        var myLayout, myToolbar;

        function doOnLoad() {

            myLayout = new dhtmlXLayoutObject({
                parent: document.body,
                pattern: '2E'
            });
            myLayout.cells('a').fixSize(true, true);
            myLayout.cells('a').hideHeader();
            myLayout.cells('a').setHeight(32);
            myLayout.cells('b').hideHeader();

            initGantt(gantt);
            myLayout.cells('b').attachObject('gantt_here');

            myToolbar = myLayout.cells('a').attachToolbar();
            initToolbar(myToolbar);
        }

        function initGantt(gantt) {

            gantt.config.xml_date = "%d-%m-%Y";
            gantt.config.autosize = true;
            gantt.config.lightbox.sections = [{
                    name: "description",
                    height: 70,
                    map_to: "text",
                    type: "textarea",
                    focus: true
                },
                {
                    name: "priority",
                    height: 22,
                    map_to: "priority",
                    type: "select",
                    options: [{
                        key: "High",
                        label: "High"
                    }, {
                        key: "Normal",
                        label: "Normal"
                    }, {
                        key: "Low",
                        label: "Low"
                    }]
                },
                {
                    name: "parent",
                    type: "parent",
                    allow_root: "true",
                    root_label: "No parent",
                    filter: function(id, task) {
                        /*	if(task.$level > 1){
                        		return false;
                        	}else{
                        		return true;
                        	}*/
                        return true;
                    }
                },
                {
                    name: "period",
                    type: "time",
                    map_to: "auto"
                },

            ];
            gantt.config.scale_unit = "month";
            gantt.config.date_scale = "%F, %Y";
            gantt.config.scale_height = 50;
            gantt.config.subscales = [{
                unit: "day",
                step: 1,
                date: "%j, %D"
            }];

            gantt.templates.task_class = gantt.templates.grid_row_class = gantt.templates.task_row_class = function(start, end, task) {
                if (gantt.isSelectedTask(task.id))
                    return "gantt_selected";
            };

            /*************************************subtasks_displaying******************************************/


            function createBox(sizes, class_name) {
                var box = document.createElement('div');
                box.style.cssText = [
                    "height:" + sizes.height + "px",
                    "line-height:" + sizes.height + "px",
                    "width:" + sizes.width + "px",
                    "top:" + sizes.top + 'px',
                    "left:" + sizes.left + "px",
                    "position:absolute"
                ].join(";");
                box.className = class_name;
                return box;
            }

            gantt.templates.grid_row_class = gantt.templates.task_class = function(start, end, task) {
                var css = [];
                if (gantt.hasChild(task.id)) {
                    css.push("task-parent");
                }
                if (!task.$open && gantt.hasChild(task.id)) {
                    css.push("task-collapsed");
                }

                return css.join(" ");
            };

            gantt.addTaskLayer(function show_hidden(task) {
                if (!task.$open && gantt.hasChild(task.id)) {
                    var sub_height = gantt.config.row_height - 5,
                        el = document.createElement('div'),
                        sizes = gantt.getTaskPosition(task);

                    var sub_tasks = gantt.getChildren(task.id);

                    var child_el;

                    for (var i = 0; i < sub_tasks.length; i++) {
                        var child = gantt.getTask(sub_tasks[i]);
                        var child_sizes = gantt.getTaskPosition(child);

                        child_el = createBox({
                            height: sub_height,
                            top: sizes.top,
                            left: child_sizes.left,
                            width: child_sizes.width
                        }, "child_preview gantt_task_line");
                        child_el.innerHTML = child.text;
                        el.appendChild(child_el);
                    }
                    return el;
                }
                return false;
            });



        }


        // indent-outdent implementation
        (function() {

            function shiftTask(task_id, direction) {
                var task = gantt.getTask(task_id);
                task.start_date = gantt.date.add(task.start_date, direction, "day");
                task.end_date = gantt.calculateEndDate(task.start_date, task.duration);
                gantt.updateTask(task.id);
            }

            var actions = {
                "indent": function indent(task_id) {
                    var prev_id = gantt.getPrevSibling(task_id);
                    while (gantt.isSelectedTask(prev_id)) {
                        var prev = gantt.getPrevSibling(prev_id);
                        if (!prev) break;
                        prev_id = prev;
                    }
                    if (prev_id) {
                        var new_parent = gantt.getTask(prev_id);
                        gantt.moveTask(task_id, gantt.getChildren(new_parent.id).length, new_parent.id);
                        new_parent.type = gantt.config.types.project;
                        new_parent.$open = true;
                        gantt.updateTask(task_id);
                        gantt.updateTask(new_parent.id);
                        return task_id;
                    }
                    return null;
                },
                "outdent": function outdent(task_id) {
                    var cur_task = gantt.getTask(task_id);
                    var old_parent = cur_task.parent;
                    if (gantt.isTaskExists(old_parent) && old_parent != gantt.config.root_id) {
                        gantt.moveTask(task_id, gantt.getTaskIndex(old_parent) + 1 + gantt.getTaskIndex(task_id), gantt.getParent(cur_task.parent));
                        if (!gantt.hasChild(old_parent))
                            gantt.getTask(old_parent).type = gantt.config.types.task;
                        gantt.updateTask(task_id);
                        gantt.updateTask(old_parent);
                        return task_id;
                    }
                    return null;
                },
                "del": function(task_id) {
                    gantt.deleteTask(task_id);
                    return task_id;
                },
                "moveForward": function(task_id) {
                    shiftTask(task_id, 1);
                },
                "moveBackward": function(task_id) {
                    shiftTask(task_id, -1);
                }
            };
            var cascadeAction = {
                "indent": true,
                "outdent": true,
                "del": true
            };

            gantt.performAction = function(actionName) {
                gantt.templates.task_class = function(st, end, item) {
                    return item.$level == 0 ? "gantt_project" : ""
                };

                if (actionName == "Day Scale") {
                    setScaleConfig(actionName);
                    gantt.render();
                } else if (actionName == "Week Scale") {
                    setScaleConfig(actionName);
                    gantt.render();
                } else if (actionName == "Month Scale") {
                    setScaleConfig(actionName);
                    gantt.render();
                } else if (actionName == "Year Scale") {
                    setScaleConfig(actionName);
                    gantt.render();
                } else if (actionName == "Sort By Priority") {
                    sortByPriority();
                    gantt.render();
                } else if (actionName == "Sort By Name") {
                    sortByName();
                    gantt.render();
                } else if (actionName == "Export to XML") {
                    gantt.exportToExcel();
                    gantt.render();
                } else if (actionName == "Save") {
                    var dp = new gantt.dataProcessor("ganttdata.php");
                    dp.init(gantt);

                    dp.setTransactionMode("REST");

                } else {
                    var action = actions[actionName];
                    if (!action)
                        return;

                    gantt.batchUpdate(function() {
                        var updated = {};
                        gantt.eachSelectedTask(function(task_id) {

                            if (cascadeAction[actionName]) {
                                if (!updated[gantt.getParent(task_id)]) {
                                    var updated_id = action(task_id);
                                    updated[updated_id] = true;
                                } else {
                                    updated[task_id] = true;
                                }
                            } else {
                                action(task_id);
                            }
                        });
                    });
                };
            }

        })();


        function initToolbar(toolbar) {

            toolbar.addButton("indent", 1, "Indent");
            toolbar.setItemToolTip("indent", "Indent selected tasks");
            toolbar.addButton("outdent", 2, "Outdent");
            toolbar.setItemToolTip("outdent", "Outdent selected tasks");
            toolbar.addButton("del", 3, "Delete");
            toolbar.setItemToolTip("del", "Delete selected tasks");
            toolbar.addButton("moveForward", 4, "Move Forward");
            toolbar.setItemToolTip("moveForward", "Move selected tasks one day forward");
            toolbar.addButton("moveBackward", 5, "Move Backward");
            toolbar.setItemToolTip("moveBackward", "Move selected tasks one day backward");
            toolbar.addButton("Day Scale", 6, "Day Scale");
            toolbar.addButton("Week Scale", 7, "Week Scale");
            toolbar.addButton("Month Scale", 8, "Month Scale");
            toolbar.addButton("Year Scale", 9, "Year Scale");

            toolbar.addButton("Sort By Priority", 10, "Sort By Priority");
            toolbar.addButton("Sort By Name", 11, "Sort By Name");


            toolbar.addButton("Export to XML", 12, "Export to XML");
            toolbar.addButton("Save", 13, "Save");

            toolbar.attachEvent("onClick", function(id) {
                gantt.performAction(id)
                 gantt.config.xml_date = "%Y-%m-%d %H:%i";

        gantt.init("gantt_here");
        var dp = new gantt.dataProcessor("./data.php");
        dp.init(gantt);
        dp.setTransactionMode("REST");
            });
        }

        /******************************sort_api*************************************************/


        var p_direction = false;
        var n_direction = false;

        function sortByPriority() {
            if (p_direction) {
                gantt.sort("priority", false);
            } else {
                gantt.sort("priority", true);
            }
            p_direction = !p_direction;
        };

        function sortByName() {
            if (n_direction) {
                gantt.sort("text", false);
            } else {
                gantt.sort("text", true);
            }
            n_direction = !n_direction;
        };

        /******************************export_message*******************************************/


        function show_result(info) {
            if (!info)
                gantt.message({
                    text: "Server error",
                    type: "error",
                    expire: -1
                });
            else
                gantt.message({
                    text: "Stored at <a href='" + info.url + "'>export.dhtlmx.com</a>",
                    expire: -1
                });
        }
        gantt.templates.task_text = function(s, e, task) {
            return task.text;
        }
        gantt.config.columns[0].template = function(obj) {
            return obj.text + " -";
        }



        /******************************progress_text********************************************/
        gantt.templates.progress_text = function(start, end, task) {
            return "<span style='text-align:left;'>" + Math.round(task.progress * 100) + "% </span>";
        };

        gantt.config.columns = [{
                name: "text",
                label: "Task name",
                tree: true,
                align: "center",
                width: 150
            },
            {
                name: "start_date",
                label: "Start time",
                align: "center"
            },
            {
                name: "priority",
                label: "Priority",
                align: "center",
                template: function(obj) {
                    if (obj.priority == 1) return "High";
                    if (obj.priority == 2) return "Normal";
                    return "Low";
                }
            },

            {
                name: "duration",
                label: "Duration",
                align: "center"
            },
            {
                name: "add",
                label: "",
                width: 30
            }
        ];

        gantt.config.xml_date = "%Y-%m-%d %H:%i";

        gantt.init("gantt_here");
        gantt.load('./ganttdata.php');
        
        var dp = new gantt.dataProcessor("./ganttdata.php");
        dp.init(gantt);
        console.log("A");
        dp.setTransactionMode("REST");
        //gantt.parse(users_data);

        gantt.config.wide_form = 1;
        gantt.templates.task_class = function(st, end, item) {
            return item.$level == 0 ? "gantt_project" : ""
        };
        gantt.templates.leftside_text = function(start, end, task) {
            return task.duration + " days";
        };
        gantt.templates.rightside_text = function(start, end, task) {
            if (task.type == gantt.config.types.milestone) {
                return task.text;
            }
            return "";
        };

    </script>
</body>
</html>