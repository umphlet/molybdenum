<!doctype html>
<html>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width">
     <link href="https://fonts.googleapis.com/css?family=Fira+Mono|Lato|Roboto+Slab" rel="stylesheet"> 
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet">
    <link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" type="text/javascript"></script>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
		<![endif]-->
		<?php wp_head(); ?>
</head>
<body>
    <header>
        <h1>[<span class="yellow">su</span><span class="red">@</span><span class="green"><a href="/">umphlet.com</a></span>:<span class="blue">~</span>]<span class="green">$</span> _</h1>
    </header>
    <nav class="navbar navbar-default navbar-top">
        <div class="container">
            <div class="navbar-header">
                <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" type="button" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <!--<a href="#home" class="navbar-brand scroll">su</a>-->
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <!-- <li class="active"><a href="#">Home</a></li>-->
                    <li><a href="#about" class="scroll">About</a></li>
                    <li><a href="#portfolio" class="scroll">Portfolio</a></li>
                    <li><a href="#contact" class="scroll">Contact</a></li>
                    <li class="dropdown"><a aria-expanded="false" aria-haspopup="true" data-toggle="dropdown" href="#" role="button" class="dropdown-toggle">Extras<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">On This Site</li>
                            <li><a href="/blog/">Personal Blog</a></li>
                            <li><a href="/music/">Music Reviews</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Off This Site</li>
                            <li><a href="#">My Resume</a></li>
                            <li><a href="#">Cheese!</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="https://github.com/umphlet"><i class="fa fa-github fa-fw"></i><span class="hidden-sm hidden-md hidden-lg">Github</span></a></li>
                    <li><a href="https://www.linkedin.com/in/umphlet"><i class="fa fa-linkedin fa-fw"></i><span class="hidden-sm hidden-md hidden-lg">LinkedIn</span></a></li>
                    <li><a href="https://facebook.com/umphlet"><i class="fa fa-facebook fa-fw"></i><span class="hidden-sm hidden-md hidden-lg">Facebook</span></a></li>
                    <li><a href="https://twitter.com/sumphlet"><i class="fa fa-twitter fa-fw"></i><span class="hidden-sm hidden-md hidden-lg">Twitter</span></a></li>
                    <li><a href="https://plus.google.com/u/0/+SeanUmphlet"><i class="fa fa-google-plus fa-fw"></i><span class="hidden-sm hidden-md hidden-lg">Google+</span></a></li>
                    <li><a href="http://telegram.me/umphlet"><i class="fa fa-send fa-fw"></i><span class="hidden-sm hidden-md hidden-lg">Telegram Me</span></a></li>
                    <li><a href="http://freecodecamp.com/umphlet"><i class="fa fa-fire fa-fw"></i><span class="hidden-sm hidden-md hidden-lg">Free Code Camp</span></a></li>
                </ul>
            </div>
            <!-- /.nav-collapse-->
        </div>
    </nav>