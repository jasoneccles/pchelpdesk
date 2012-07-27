<?php

/*




 _____   _____   _    _      _         _____            _    
|  __ \ / ____| | |  | |    | |       |  __ \          | |   
| |__) | |      | |__| | ___| |_ __   | |  | | ___  ___| | __
|  ___/| |      |  __  |/ _ \ | '_ \  | |  | |/ _ \/ __| |/ /
| |    | |____  | |  | |  __/ | |_) | | |__| |  __/\__ \   < 
|_|     \_____| |_|  |_|\___|_| .__/  |_____/ \___||___/_|\_\
                              | |                            
                              |_|                           
							  
							by 
		
       __                          ______          __         
      / /___ __________  ____     / ____/_________/ /__  _____
 __  / / __ `/ ___/ __ \/ __ \   / __/ / ___/ ___/ / _ \/ ___/
/ /_/ / /_/ (__  ) /_/ / / / /  / /___/ /__/ /__/ /  __(__  ) 
\____/\__,_/____/\____/_/ /_/  /_____/\___/\___/_/\___/____/  
                                                                                                                 
		(c) 2012 Jason Eccles
		
		
		
		
		
		
		
		

*/
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>PC HelpDesk - More than just a buildsheet</title>
	<meta name="description" content="The PC Helpdesk is there to help computer technicians get on with their real job.">
	<meta name="author" content="Jason Eccles">

	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="css/style.css">

	<script src="js/libs/modernizr-2.5.3.min.js"></script>
</head>
<body class="loading">
<header>
	<div class="menubar">
		<div class="menubar-inner">
			<div class="header-pchd">
				<div class="pchd-topbar left">
					<ul class="align-left">
						<li class="action li-settings" style="display: block; ">
							<a class="settings" title="Preferences">
								<span class="icon">Preferences</span>
								<span class="left"></span>
								<span class="right"></span>
							</a>
							<div class="count-badge"></div>
						</li>	
						<li class="action li-notifications" style="display: block; ">
							<a class="notifications" title="Notifications">
								<span class="icon">Notifications</span>
								<span class="left"></span>
								<span class="right"></span>
							</a>
							<div class="count-badge" style="display: none; ">0</div>
						</li>
					</ul>
					<ul class="align-right">
						<li class="action li-new_task" style="display: block; ">
							<a class="new_task" title="Create a New Job">
								<span class="icon">New Job</span>
								<span class="left"></span>
								<span class="right"></span>
							</a>
							<div class="count-badge"></div>
						</li>
					</ul>
				</div>
			  
				<div class="pchd-topbar center">
					<ul class="align-left"></ul>        
					<ul class="align-right"></ul>
				</div>
			  
			  <!-- search bar -->
				<div class="pchd-topbar right">
					<ul class="align-left">
					  <li class="search">
						<input type="text" class="query" placeholder="Search all jobs..." />
						<a class="clear-search" title="Clear search query" ><ins></ins></a>
					  </li>
					</ul>
					<ul class="align-right"></ul>
				</div>
			</div><!-- .header-pchd -->
		</div><!-- .menubar-inner -->
	</div><!-- .menubar -->
</header>

<div role="main" class="page">
<!-- sidebar -->
	<nav class="app-west">
		<div class="app-west-inner">
			<div class="sidebar" style="height: 581px; ">
				<div class="sidebar-inner">
					<!-- start Task Menu Section -->
					<div class="primary-boxes-wrap">
						<div class="sidebar-primary-boxes">
							<h3>Tasks</h3>
							<ul class="primary-boxes">
								<li class="box inbox droppable ui-droppable active current"> <a href="#/inbox"> <span>Inbox</span> <b class="badge inbox-badge" style="">3</b> </a> </li>
								<li class="box upcoming"> <a href="#/upcoming"> <span>Upcoming</span> <b class="badge upcoming-badge" style="display: none; "></b> </a> </li>
								<li class="box flagged"> <a href="#/flagged"> <span>Flagged</span> <b class="badge flagged-badge" style="">1</b> </a> </li>
								<li class="box all-tasks"> <a href="#/tasks"> <span>Overdue</span> <b class="badge all-tasks-badge" style="">18</b> </a> </li>
							</ul>
						</div>
					</div>
					<div class="action-bar-wrap">
						<!-- start Job Action bar -->
						<!-- add Job -->
						<!-- list jobs in categories -->
						<div class="side-action-bar">
							<div class="actions">
								<div class="action toggle-lists up"><a><ins class="toggle alt"></ins></a></div>
								<div class="action new-action"><a><ins class="add"></ins></a></div>
							</div>
							<div class="status">4 Jobs</div>
						</div>
					</div>
					<div class="panes-wrap">
						<div class="panes-wrap-inner">
							<ul class="sidebar-tabs tabs project-tags-collaborators">
								<li class="projects active ui-droppable" data-pane="projects">My Jobs</li>
								<li class="collaborators ui-droppable" data-pane="collaborators">Reserved</li>
							</ul>
							<div class="main-sidebar-panes sidebar-panes">
								<div class="pane projects active">
									<div class="pane-root">
										<div class="filter projects">
											<input type="text" placeholder="Search my jobs...">
											<a class="clear-search" title="clear search"><ins></ins></a> 
										</div>
										<div class="pane-inner jspScrollable jspScrollableV" style="overflow: hidden; padding: 0px; height: 254px; ">
											<div class="jspContainer" style="height: 356px; ">
												<div class="jspPane" style="left: 0px; top: 0px; width: 220px; ">
													<ul class="project-list items-list flow-tree ui-sortable">
														<li class="project list-item sortable my-project ui-droppable" data-id="479559" data-cid="c10"> 
														<ins></ins> 
														<a class="project-link link"> 
														<ins></ins>
														<div class="settings"><ins></ins></div>
														<div class="fadeout"></div>
														</a>
														</li>
													</ul>
													<div class="no-results" style="display: none; ">No jobs found.</div>
												</div>
												<div class="jspVerticalBar">
													<div class="jspTrack" style="height: 21px; ">
														<div class="jspDrag" style="display: block; height: 5.074999999999999px; top: 0px; ">
															<div class="jspDragTop"></div>
															<div class="jspDragBottom"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="secondary-boxes-wrap">
						<div class="sidebar-secondary-boxes">
							<h3>Job Categories</h3>
							<div class="pane">
								<ul class="links">
									<li class="link all-tasks"><a href="#/tasks/all"><ins></ins><span>All Jobs</span></a></li>
									<li class="link followed-tasks"><a href="#/following"><ins></ins><span>Waiting on parts</span></a></li>
									<li class="link completed-tasks"><a href="#/complete"><ins></ins><span>Waiting on customer</span></a></li>
									<li class="link completed-tasks"><a href="#/overdue"><ins></ins><span>Jobs that are late</span></a></li>
								</ul>
							</div>
						</div>
					</div>		
				</div>
			</div>
		</div>
	</nav>
	
	<div id="app-root-view" class="content">
<?php 
require('./Slim/Slim.php');
$app = new Slim();

	//POST route
	$app->post('/post', function () {
		echo "<section><p>This is a POST route</p></section>";
	});
	
	$app->post('/hello/:name', function ($name) {
		echo "<section><p>Hello, $name!</p></section>";
	});
	
	$app->get('/', function () {
		echo "
		<section>
		<p>this is the content section. I wonder if I can just type all the words and it will sort itself out.??</p>
		</section>
		<aside>
		<p>this is the aside and it is long enough to wrap.</p>
		</aside>";
	});
?>
	</div>
	
	
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.2.min.js"><\/script>')</script>
<script src="js/libs/underscore.js"></script>
<script src="js/libs/backbone.js"></script>
<!-- quick inline script to help with loading -->
<script type="text/javascript">$(function() {
	$body = $(document.body); 
	$(window).load(function(){
	  if ($body.hasClass("loading")){
		$body.removeClass("loading").addClass("loaded");
	  }
	});
	setTimeout(function(){  //BACKUP incase the above load doesnt fire  
	  if ($body.hasClass("loading")){
		$body.removeClass("loading").addClass("loaded");
	  } 
	}, 10000);   
  });</script>
<!-- scripts concatenated and minified via ant build script-->
<script src="js/plugins.js"></script>
<script src="js/script.js"></script>
<!-- end scripts-->

<script>
	var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPagePageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));
</script>


<?php $app->run(); ?>

</body>
</html>
