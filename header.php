<!DOCTYPE html>
<html <?php  language_attributes();?>>
<head>
    <meta charset="<?php     bloginfo("charset") ;?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|',true,"right"); bloginfo("name");?></title>
    <?php wp_head(); ?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark text-white">
  <a class="navbar-brand text-white" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse bg-dark" id="navbarSupportedContent">
  <?php add_bootstrap_menu();?>
    
  
  </div>
</nav>

    
