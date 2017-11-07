<!DOCTYPE html>
<html>
	<head>
		<title>CItest</title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <script src="http://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>

	</head>
	<body>
  <div class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
      <div class="container">
      <a class="navbar-brand" href="#">CI Test</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

 <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>products">Products</a>
      </li>
      <?php if($this->session->userdata('user_id') == 1 ):?>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>products/create">Create Products</a></li>
      <?php endif; ?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
      </li>
    </ul>

    <ul class="nav navbar-nav ml-auto navbar-right">
            <?php if(!$this->session->userdata('logged_in')) : ?>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>users/login">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>users/register">Register</a></li>
          <?php endif; ?>
          <?php if($this->session->userdata('logged_in')) : ?>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>users/logout">Logout</a></li>
          <?php endif; ?>
     </ul>
  </div>
</div>
</div>

<div class="container">
      <!-- Flash messages -->
      <?php if($this->session->flashdata('user_registered')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('login_failed')): ?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('user_loggedout')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('product_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('product_created').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('product_updated')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('product_updated').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('product_deleted')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('product_deleted').'</p>'; ?>
      <?php endif; ?>