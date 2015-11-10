<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$path_url = base_url();
$link_logout = ($this->session->userdata('username')) ? site_url('login/logout_ci') : site_url('login');
$name_logout = ($this->session->userdata('username')) ? 'Cerrar sesión' : 'Acceder';
/*
 * Cambiar <?php echo anchor(base_url() . 'login/logout_ci', 'Cerrar sesión'); ?>
 */
?><html>
  <head>
    <title><?php echo $titulo; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

    <!-- Template general -->
    <link rel="stylesheet" type="text/css" href="<?php echo $path_url; ?>assets/css/style.css">

    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.11.3.min.js'); ?>"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
  </head>
  <body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo site_url(); ?>">Tecleras Virtuales</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class=""><a href="<?php echo site_url(); ?>">Inicio</a></li>
        <?php if($this->session->userdata('profile') == 1) { ?>
          <li><?php echo anchor(base_url() . 'users', 'Usuarios'); ?></li>
        <?php } ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <?php echo anchor(base_url() . ($this->session->userdata('username')) ? 'login/logout_ci' : 'login', ($this->session->userdata('username')) ? 'Cerrar sesión' : 'Acceder'); ?>
        </li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <div class="container">
