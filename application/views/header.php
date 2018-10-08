<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
<script type= text/javascript src= "<?php echo base_url('assets/js/bootstrap.js');?>"> </script>
<script type= text/javascript src= "<?php echo base_url('assets/js/jquery-3.3.1.js');?>"> </script>
<link rel="stylesheet"  type= "text/css" href= "<?php echo base_url('assets/css/bootstrap.css');?>"> 
<link rel="stylesheet"  type= "text/css" href= "<?php echo base_url('css/welcome.css');?>"> 
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Acount Management</a>
    <ul class="navbar-nav mr-auto">
    </ul>
   
  <?php echo anchor('welcome/reset', 'Reset Amount',['class'=>'btn btn-secondary my-2 my-sm-0']);?>
</nav>
