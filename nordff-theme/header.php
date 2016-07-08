<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><? bloginfo('name') ?> | <? bloginfo('description'); ?></title>

    <!-- Critical Path CSS -->
    <style>body{color: #202020;}</style>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="<? bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css">
    <link rel="alternate" type="application/rss+xml" title="<? bloginfo('name') ?>" href="<? bloginfo('stylesheet_directory'); ?>/feed" />

    <!-- Custom CSS -->
    <link href="<? echo get_stylesheet_uri(); ?>" rel="stylesheet">
    
    <!-- Custom Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://use.typekit.net/sia8orp.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

    
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

        <!-- jQuery -->
    <script src="<? bloginfo('stylesheet_directory'); ?>/js/jquery.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav center-nav">
                    <? wp_list_pages('exclude=56&title_li='); ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="spacer" style="margin-top:50px;"></div>

    <div class="container">
        <!-- /.intro-header -->
        <div class="intro-header call-to-action">
            <div class="row">
                <div class="col-lg-12 logo-header">
                    <div class="col-md-6 col-md-offset-3">
                        <img src="http://www.nordff.architects.agency/wp-content/uploads/2016/06/170-Nord-Logo.svg" alt="nff logo" height="215">
                        <span id="subnav"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>     <!-- CONTAINER -->