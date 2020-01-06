<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


include_once ('./assets/libs/config.php');
include_once ('./assets/libs/main.php');

// Commento di esempio per provare SOurceTree e Git
// ... che non sembra fottersene granchè ...
//


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Project documentation with Markdown.">
		<title><?php echo MAIN_SITE_TITLE ?></title>

		<link rel="stylesheet" href="<?php echo PATH_ASSETS_CSS ?>bootstrap-flatly.css">
		<link rel="stylesheet" href="<?php echo PATH_ASSETS_CSS ?>base.css">
		<link rel="stylesheet" href="<?php echo PATH_ASSETS_CSS ?>highlight.css">
		<link rel="stylesheet" href="<?php echo PATH_ASSETS_CSS ?>extra.css">

		<!-- FontAwesome icons -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->


		<!-- Stylesheet for BS Callouts -->
		<style>
			.bs-callout {
				padding: 20px;
				margin: 20px 0;
				border: 1px solid #eee;
				border-left-width: 5px;
				border-radius: 3px;
				background-color:#fff;
			}
			.bs-callout h4 {
				margin-top: 0;
				margin-bottom: 5px;
			}
			.bs-callout p:last-child {
				margin-bottom: 0;
			}
			.bs-callout code {
				border-radius: 3px;
			}
			.bs-callout+.bs-callout {
				margin-top: -5px;
			}
			.bs-callout-default {
				border-left-color: #777;
			}
			.bs-callout-default h4 {
				color: #777;
			}
			.bs-callout-primary {
				border-left-color: #428bca;
			}
			.bs-callout-primary h4 {
				color: #428bca;
			}
			.bs-callout-success {
				border-left-color: #5cb85c;
			}
			.bs-callout-success h4 {
				color: #5cb85c;
			}
			.bs-callout-danger {
				border-left-color: #d9534f;
			}
			.bs-callout-danger h4 {
				color: #d9534f;
			}
			.bs-callout-warning {
				border-left-color: #f0ad4e;
			}
			.bs-callout-warning h4 {
				color: #f0ad4e;
			}
			.bs-callout-info {
				border-left-color: #5bc0de;
			}
			.bs-callout-info h4 {
				color: #5bc0de;
			}
			
			/* Overriding bootstrap style */
			.navbar-text {
				color: #a0a0a0 !important;
			}
			
			.body_color {
				background-color:#f7f7f7;
			}
		</style>

	</head>

    <body class="homepage body_color">

        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">

				<!-- Collapsed navigation -->
				<div class="navbar-header">

					<!-- Expander button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>


					<!-- Main title -->
					<a class="navbar-brand" href=".">
						<i class="fa <?php echo MAIN_SITE_TITLE_FA_ICON ?>"></i>&nbsp;&nbsp;&nbsp;<?php echo MAIN_PROJECT_NAME ?>
					</a>
				
				<?php if ( MAIN_SITE_TITLE_VERSION ) { ?>
					<p class="navbar-text"><?php echo MAIN_SITE_TITLE_VERSION ?></p>
				<?php } ?>
					
				</div>

				<!-- Expanded navigation -->
				<div class="navbar-collapse collapse">
					<!-- Main navigation -->
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a target="_blank" href="https://github.com/fabrizioquercia/bs-doc/">
								<i class="fa fa-github"></i>&nbsp;&nbsp;Follow on GitHub
							</a>
						</li>
						<li>
							<a target="_blank" href="https://www.linkedin.com/in/fabrizioquercia">
								<i class="fa fa-user"></i>&nbsp;&nbsp;Author Homepage
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

        <div class="container">

			<div class="col-md-3"><div class="bs-sidebar hidden-print affix well" role="complementary">
					<ul class="nav bs-sidenav">
						<li class="main active"><a href="#start"><strong><?php echo MAIN_PROJECT_NAME ?></strong></a></li>
						
					<?php 
					
						for ($index = 0; $index < count($array_pages); $index++ )
						{
						
							$array_filename = explode("_", $array_pages[$index] );
							$slug = $array_filename[1];
							$title = $array_filename[2];
							$title = str_replace("-", " ", $title);
							$title = str_replace(".html", "", $title);
							$title = str_replace(".htm", "", $title);
							$title = str_replace(".php", "", $title);
							
					?>
						<li><a href="#<?php echo $slug ?>"><?php echo $title ?></a></li>
						
					<?php
						}
					
					?>
						
					</ul>
				</div>
			</div>

			<div class="col-md-9" role="main">

				<h1 id="start">
					<?php echo MAIN_SITE_TITLE ?>
					<a class="headerlink" href="#start" title="Permanent link"></a>
				</h1>
			
			<?php if ( MAIN_SITE_SUBTITLE ) { ?>
				<p><?php echo MAIN_SITE_SUBTITLE ?></p>
			<?php } ?>
				
				<hr />
				
			<!-- Starting pages -->
			
			<?php
			
				foreach ($array_pages as $page)
				{
					$array_page = explode("_", $page);
					$slug = $array_page[1];
					$title = $array_page[2];
					$title = str_replace("-", " ", $title);
					$title = str_replace(".html", "", $title);
					$title = str_replace(".htm", "", $title);
					$title = str_replace(".php", "", $title);
			?>
				
				<h2 id="<?php echo $slug ?>">
					<i class="fa fa-book"></i>
					<?php echo $title; ?>
					<a class="headerlink" href="#<?php echo $slug; ?>" title="Permanent link"></a>
				</h2>
				
				
			
			<?php
					
					include_once($pages_folder . $page);
				}
			
			?>
			
			</div>
        </div>

        <footer class="col-md-12">
            <hr style="color:#ccc;background-color:#ccc;">

			<p>Copyright &copy; 2014, <a href="https://twitter.com/_tomchristie">Tom Christie</a>. Maintenance and development by <a href="http://www.dougalmatthews.com/">Dougal Matthews</a></p>

            <p>Documentation built with <a href="http://www.mkdocs.org/">MkDocs</a>.</p>
        </footer>

        <script src="<?php echo PATH_ASSETS_JS ?>jquery-1.10.2.min.js"></script>
        <script src="<?php echo PATH_ASSETS_JS ?>bootstrap-3.0.3.min.js"></script>
        <script src="<?php echo PATH_ASSETS_JS ?>highlight.pack.js"></script>


        <script src="<?php echo PATH_ASSETS_JS ?>base.js"></script>

        
    </body>
</html>