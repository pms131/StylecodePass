
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
<!--Diagram includes-->
<script type="text/javascript" src="contents_diagram/diagram.js"></script>
<link rel="stylesheet" href="contents_diagram/diagram.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">

<link rel="stylesheet" href="contents_diagram/dhx_samples.css">
<script type="text/javascript" src="contents_diagram/data.js"></script>

<!-- end Diagram includes-->
<style type="text/css">
.jqstooltip { position: absolute;left: 0px;top: 0px;display: block;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;padding: 5px 5px 8px 5px;font: 10px arial, san serif;text-align: left;}
</style>
<style type="text/css">
.jqstooltip { position: absolute;left: 0px;top: 0px;display: block;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;padding: 5px 5px 8px 5px;font: 10px arial, san serif;text-align: left;}
</style>
<style type="text/css">
.jqstooltip { position: absolute;left: 0px;top: 0px;display: block;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;padding: 5px 5px 8px 5px;font: 10px arial, san serif;text-align: left;}
</style>
</head>
<body style="">

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
                          phpphpd
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
			<a href="ManageProject.html">
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
			<a href="Gantt.html">
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
<h3><i class="fa fa-angle-right"></i>Project List</h3>
<div class="row mt" style="overflow:scroll;">
	<!--<div class="col-lg-12">-->
		<!-- -- 1st ROW OF PANELS ---->
		<!--<div class="row">-->
			<!-- TWITTER PANEL -->
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
				<div class="darkblue-panel pn">
					<!--	<i class="fa fa-twitter fa-4x"></i> -->
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<a href="CreateProject.html"><button type="button" class="btn btn-round btn-primary" width="35">+</button></a>
				</div>
			</div>
    <!--</div>-->
<?php
$host = "styledcode.postgres.database.azure.com";
$port = "5432";
$database = "postgres";
$user = "pms131@styledcode";
$pw = "a12345678!";

$con = pg_connect("host=$host port=$port dbname=$database user=$user password=$pw") or die ("Could not connect to server\n");

$query = "SELECT * FROM userprojects,projects WHERE userprojects.email = '" . $email . "' AND userprojects.projectnum = projects.seq";
$result = pg_query($con, $query);
while($row = pg_fetch_array($result))
{
    echo '	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">' .
				'<div class="steps pn">' .
					'<input id="op" name="op1" type="checkbox"/>' .
					'<label for="op1">Project Name : ' . $row[4] . '</label>' .
					'<input id="op2" name="op2" type="checkbox" aria-hidden="true" data-toggle="modal" data-target="#diagramModal"/>' .
					'<label for="op2">Project Participants</label>' .
					'<input id="op3" name="op3" type="checkbox" aria-hidden="true" data-toggle="modal" data-target="#myModal"/>' .
					'<label for="op3">Deletion</label>' .
					'<input type="submit" value="Load Project" id="submit" onclick="location.href="ReadProject.html";"/>' .
				'</div><br><br>' .
				
				'<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">' .
					'<div class="modal-dialog">' .
						'<div class="modal-content">' .
							'<div class="modal-header">' .
								'<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>' .
								'<h4 class="modal-title" id="myModalLabel">Project Deletion</h4>' .
							'</div>' .
							'<div class="modal-body">' .
								'프로젝트를 삭제하시겠습니까?' .
							'</div>' .
							'<div class="modal-footer">' .
								'<button type="button" class="btn btn-default" data-dismiss="modal">Delete</button>' .
								'<button type="button" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Cancel</button>' .
							'</div>' .
						'</div>' .
					'</div>' .
				'</div>' .
				'<div class="modal fade" id="diagramModal" tabindex="-1" rold="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">' .
					'<div class="modal-dialog">' .
						'<div class="modal-content"">' .
							'<div class="modal-header">' .
								'<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>' .
								'<h4 class="modal-title" id="myModalLabel">Project Participants</h4>' .
							'</div>' .
							'<div class="modal-body">' .
								'<div id="diagram_container"></div>' .
							'</div>' .
						'</div>' .
					'</div>' .
				'</div>' .
			'</div>';
}
?>
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
  <script>
  var smallOrganogramData = [
	{
		id: "1",
		text: "참여도 : 5",
		title: "DSA",
		img: "contents_diagram/img/ui-sam.jpg"
	},
	{
		id: "2",
		text: "참여도 : 5",
		title: "Mildred Kim",
		img: "contents_diagram/img/avatar-2.png"
	},
	{
		id: "3",
		text: "참여도 : 8",
		title: "Jerry Wagner",
		img: "contents_diagram/img/avatar-3.png"
	},
	{
		id: "2.1",
		text: "참여도 : 2",
		title: "Charles Little",
		img: "contents_diagram/img/avatar-4.png"
	},
	{
		id: "3.1",
		text: "참여도 : 12 ",
		title: "Jonathan Lane",
		img: "contents_diagram/img/avatar-5.png"
	},
	{ id: "1-2", from: "1", to: "2", type: "line" },
	{ id: "1-3", from: "1", to: "3", type: "line" },
	{ id: "2-2.1", from: "2", to: "2.1", type: "line" },
	{ id: "3-3.1", from: "3", to: "3.1", type: "line" },
];
		var diagram = new dhx.Diagram("diagram_container", { type: "org", defaultShapeType: "img-card" });
		diagram.parse(smallOrganogramData);
	</script>
    
</body>
</html>