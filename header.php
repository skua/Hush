<?php
/**
* The Header for our theme.
*
* Displays all of the <head> section and everything up till <div id="main">
  *
  * @package WordPress
  * @subpackage Twenty_Eleven
  * @since Android 1.0
  */
  ?><!DOCTYPE html>
  <html lang="zh-cn">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <meta name="apple-mobile-web-app-capable" content="yes" />
      <title><?php bloginfo(’name’); ?></title>
      <!-- Bootstrap -->
      <link href="http://55u.me/wp-content/themes/Android/css/bootstrap.min.css" rel="stylesheet">
   <!--    <link href="http://55u.me/wp-content/themes/Android/css/main.css?v=1" rel="stylesheet"> -->
      <link href="/css/main.css?v=1" rel="stylesheet">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://55u.me">{ME:55u}</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="/about-me-html">ReadMe</a></li>
              
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Other<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="/refactoring">Coding</a></li>
                  <li><a href="/useful">Useful</a></li>
                
                </ul>
              </li>
            </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
        <div class="container">
          <div class="row">
