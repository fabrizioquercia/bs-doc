<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


include_once ('./assets/libs/config.php');
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
					
					<!--
					<ul class="nav navbar-nav">


						<li class="active">
							<a href="./">Home</a>
						</li>



						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">User guide <b class="caret"></b></a>
							<ul class="dropdown-menu">


								<li >
									<a href="user-guide/configuration/">Configuration</a>
								</li>



								<li >
									<a href="user-guide/deploying-your-docs/">Deploying your docs</a>
								</li>



								<li >
									<a href="user-guide/styling-your-docs/">Styling your docs</a>
								</li>



								<li >
									<a href="user-guide/writing-your-docs/">Writing your docs</a>
								</li>


							</ul>
						</li>



						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">About <b class="caret"></b></a>
							<ul class="dropdown-menu">


								<li >
									<a href="about/contributing/">Contributing</a>
								</li>



								<li >
									<a href="about/license/">License</a>
								</li>



								<li >
									<a href="about/release-notes/">Release notes</a>
								</li>


							</ul>
						</li>
						


					</ul>
-->

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

						<li class="main active"><a href="#mkdocs"><strong><?php echo MAIN_PROJECT_NAME ?></strong></a></li>

						<li><a href="#overview">Overview</a></li>

						<li><a href="#installation">Installation</a></li>

						<li><a href="#getting-started">Getting started</a></li>

						<li><a href="#adding-pages">Adding pages</a></li>

						<li><a href="#theming-our-documentation">Theming our documentation<br />with yout editor</a></li>

						<li><a href="#building-the-site">Building the site</a></li>

						<li><a href="#deploying">Deploying</a></li>

						<li><a href="#getting-help">Getting help</a></li>


					</ul>
				</div>
			</div>




			<div class="col-md-9" role="main">



				<div class="bs-callout bs-callout-success">
					<h4>Success Callout</h4>
					This is a success callout.
				</div>


				<h1 id="mkdocs"><?php echo MAIN_SITE_TITLE ?><a class="headerlink" href="#mkdocs" title="Permanent link"></a></h1>
			<?php if ( MAIN_SITE_SUBTITLE ) { ?>
				<p><?php echo MAIN_SITE_SUBTITLE ?></p>
			<?php } ?>
				
				<hr />




				<h2 id="overview">Overview<a class="headerlink" href="#overview" title="Permanent link"></a></h2>
				<p>MkDocs is a <strong>fast</strong>, <strong>simple</strong> and <strong>downright gorgeous</strong> static site generator that's geared towards building project documentation. Documentation source files are written in Markdown, and configured with a single YAML configuration file.</p>
				<hr />
				<p><strong>MkDocs is currently still in development.</strong></p>
				<p>We're progressing quickly, but the documentation still needs filling in, and there are a few rough edges.  The 1.0 release is planned to arrive in the next few months.</p>
				<hr />
				<h4 id="host-anywhere">Host anywhere.<a class="headerlink" href="#host-anywhere" title="Permanent link"></a></h4>
				<p>Builds completely static HTML sites that you can host on GitHub pages, Amazon S3, or anywhere else you choose.</p>
				<h4 id="great-themes-available">Great themes available.<a class="headerlink" href="#great-themes-available" title="Permanent link"></a></h4>
				<p>There's a stack of good looking themes included by default. Choose from bootstrap, readthedocs, or any of the 12 bootswatch themes.</p>
				<h4 id="preview-your-site-as-you-work">Preview your site as you work.<a class="headerlink" href="#preview-your-site-as-you-work" title="Permanent link"></a></h4>
				<p>The built-in devserver allows you to preview your documentation as you're writing it. It will even auto-reload whenever you save any changes, so all you need to do to see your latest edits is refresh your browser.</p>
				<h4 id="easy-to-customize">Easy to customize.<a class="headerlink" href="#easy-to-customize" title="Permanent link"></a></h4>
				<p>Get your project documentation looking just the way you want it by customizing the theme.</p>
				<hr />
				<h2 id="installation">Installation<a class="headerlink" href="#installation" title="Permanent link"></a></h2>
				<p>In order to install MkDocs you'll need <a href="https://www.python.org/">Python</a> installed on your system, as well as the Python package manager, <a href="http://pip.readthedocs.org/en/latest/installing.html">pip</a>.  You can check if you have these already installed like so:</p>
				<pre><code>$ python --version
Python 2.7.2
$ pip --version
pip 1.5.2
</code></pre>
				<p>MkDocs supports Python 2.6, 2.7, 3.3 and 3.4.</p>
				<p>On Windows we recommend that you install Python and pip with <a href="https://chocolatey.org/">Chocolatey</a>.</p>
				<p>Install the <code>mkdocs</code> package using pip:</p>
				<pre><code>$ pip install mkdocs
</code></pre>
				<p>You should now have the <code>mkdocs</code> command installed on your system.  Run <code>mkdocs help</code> to check that everything worked okay.</p>
				<pre><code>$ mkdocs help
mkdocs [help|new|build|serve|gh-deploy] {options}
</code></pre>
				<hr />
				<h2 id="getting-started">Getting started<a class="headerlink" href="#getting-started" title="Permanent link"></a></h2>
				<p>Getting started is super easy.</p>
				<pre><code>$ mkdocs new my-project
$ cd my-project
</code></pre>
				<p>Let's take a moment to review the initial project that's been created for us.</p>
				<p><img alt="The initial MkDocs layout" src="./img/initial-layout.png" /></p>
				<p>There's a single configuration file named <code>mkdocs.yml</code>, and a folder named <code>docs</code> that will contain our documentation source files.  Right now the <code>docs</code> folder just contains a single documentation page, named <code>index.md</code>.</p>
				<p>MkDocs comes with a built-in webserver that lets you preview your documentation as you work on it. We start the webserver by making sure we're in the same directory as the <code>mkdocs.yml</code> config file, and then running the <code>mkdocs serve</code> command:</p>
				<pre><code>$ mkdocs serve
Running at: http://127.0.0.1:8000/
</code></pre>
				<p>Open up <a href="http://127.0.0.1:8000/">http://127.0.0.1:8000/</a> in your browser, and you'll see the index page being displayed:</p>
				<p><img alt="The MkDocs live server" src="./img/screenshot.png" /></p>
				<p>The webserver also supports auto-reloading, and will rebuild your documentation whenever anything in the configuration file, documentation directory or theme directory changes.</p>
				<p>Go ahead and edit the <code>docs/index.md</code> file now and save the file. Then simply hit reload in the browser and you'll see your updated documentation.</p>
				<p>Now's also a good time to edit the configuration file, <code>mkdocs.yml</code>.  Change the <code>site_name</code> setting to something else and save the file.</p>
				<p><img alt="Editing the config file" src="./img/initial-config.png" /></p>
				<p>Once you hit reload in the browser you'll see your new site name take effect.</p>
				<p><img alt="The site_name setting" src="./img/site-name.png" /></p>
				<h2 id="adding-pages">Adding pages<a class="headerlink" href="#adding-pages" title="Permanent link"></a></h2>
				<p>Go ahead and edit the <code>doc/index.md</code> document, and change the initial heading to <code>MkLorum</code>, then reload the site in your browser, and you should see the change take effect immediately.</p>
				<p>Let's also add a second page to our documentation:</p>
				<pre><code>$ curl 'jaspervdj.be/lorem-markdownum/markdown.txt' &gt; docs/about.md
</code></pre>
				<p>We'd like our documentation site to include some navigation headers, so we'll edit the configuration file and add some information about the order and title to use for out headers:</p>
				<pre><code>site_name: MkLorum
pages:
- Home: index.md
- About: about.md
</code></pre>
				<p>Refresh the browser and you'll now see a navigation bar with <code>Home</code> and <code>About</code> headers.</p>
				<h2 id="theming-our-documentation">Theming our documentation<a class="headerlink" href="#theming-our-documentation" title="Permanent link"></a></h2>
				<p>While we're here can also change the configuration file to alter how the documentation is displayed.  Let's go ahead and change the theme.  Edit the <code>mkdocs.yml</code> file to the following:</p>
				<pre><code>site_name: MkLorum
pages:
- Home: index.md
- About: about.md
theme: readthedocs
</code></pre>
				<p>Refresh the browser again, and you'll now see the ReadTheDocs theme being used.</p>
				<p><img alt="Screenshot" src="./img/readthedocs.png" /></p>
				<h2 id="building-the-site">Building the site<a class="headerlink" href="#building-the-site" title="Permanent link"></a></h2>
				<p>That's looking good.  We're ready to deploy the first pass of our <code>MkLorum</code> documentation now.  Let's build the documentation.</p>
				<pre><code>$ mkdocs build
</code></pre>
				<p>This will create a new directory, named <code>site</code>.  Let's take a look inside the directory:</p>
				<pre><code>$ ls site
about css fonts img index.html js
</code></pre>
				<p>Notice that our source documentation has been output as two HTML files named <code>index.html</code> and <code>about/index.html</code>.  We also have various other media that's been copied into the <code>site</code> directory as part of the documentation theme.</p>
				<p>If you're using source code control such as <code>git</code> you probably don't want to check your documentation builds into the repository.  Add a line containing <code>site/</code> to your <code>.gitignore</code> file.</p>
				<pre><code>$ echo "site/" &gt;&gt; .gitignore
</code></pre>
				<p>If you're using another source code control you'll want to check it's documentation on how to ignore specific directories.</p>
				<p>After some time, files may be removed from the documentation but they will still reside in the <code>site</code> directory. To remove those stale files, just run mkdocs with the <code>--clean</code> switch.</p>
				<pre><code>$ mkdocs build --clean
</code></pre>
				<h2 id="deploying">Deploying<a class="headerlink" href="#deploying" title="Permanent link"></a></h2>
				<p>The documentation site that we've just built only uses static files so you'll be
					able to host it from pretty much anywhere. <a href="https://help.github.com/articles/creating-project-pages-manually">GitHub project pages</a> and <a href="http://docs.aws.amazon.com/AmazonS3/latest/dev/WebsiteHosting.html">Amazon
						S3</a> are good hosting options. Upload the contents of the entire <code>site</code> directory
					to wherever you're hosting your website from and you're done. For specific instructions
					for a number of common hosts, see the <a href="./user-guide/deploying-your-docs/">Deploying your Docs</a> page.</p>
				<h2 id="getting-help">Getting help<a class="headerlink" href="#getting-help" title="Permanent link"></a></h2>
				<p>To get help with MkDocs, please use the <a href="https://groups.google.com/forum/#!forum/mkdocs">discussion group</a>, <a href="https://github.com/mkdocs/mkdocs/issues">GitHub issues</a> or the MkDocs IRC channel <code>#mkdocs</code> on freenode.</p></div>

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