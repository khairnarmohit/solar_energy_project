<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <
  <link rel="stylesheet" href="<?= base_url('assets/css/navbar.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/footer.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/about.css'); ?>">
  
  <script src="<?php echo base_url('assets/js/about.js'); ?>" defer></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<head>
<body>
<header class="ms-navbar">
  <div class="ms-container">
<div class="ms-toggle">
  <span></span>
  <span></span>
  <span></span>
</div>

    <!-- Logo -->
    <div class="ms-logo">
      <span>Maha</span>Solar
    </div>

    <!-- Menu -->
    <nav class="ms-menu">
 <a href="<?= base_url('user/index') ?>" class="active">Home</a>
<a href="<?= base_url('user/about') ?>">About</a>


      <div class="ms-dropdown">
        <a href="<?= base_url('user/products') ?>">Products</a>
        <div class="ms-dropdown-menu">
          <a href="<?= base_url('user/solar_water_heater') ?>">Solar Water Heater</a>
          <a href="<?= base_url('user/solar_pumps') ?>">Solar Pumps</a>
          <a href="<?= base_url('user/on_grid_solar') ?>">On Grid Solar</a>
          <a href="<?= base_url('user/street_light') ?>">Street Light</a>
        </div>
      </div>



        
        <li class="dropdown">
          <a href="#">Products ▾</a>
          <ul class="dropdown-menu">
            <li><a href="#">Solar Water Heater</a></li>
            <li><a href="#">Solar Water Pumps</a></li>
            <li><a href="#">On Grid Solar</a></li>
            <li><a href="#">Solar Street Light</a></li>
          </ul>
        </li>
      <div class="ms-dropdown">
        <a href="<?= base_url('user/services') ?>">Services</a>
        <div class="ms-dropdown-menu">
          <a href="<?= base_url('user/residential') ?>">Residential</a>
          <a href="<?= base_url('user/industrial') ?>">Industrial</a>
          <a href="<?= base_url('user/commercial') ?>">Commercial</a>
        </div>
      </div>

        <li class="dropdown">
  <a href="<?=base_url()?>user/product" class="dropdown-toggle">
    Products ▾
  </a>

  <ul class="dropdown-menu">
    <li><a href="<?=base_url()?>user/product/solar_water_heater">Solar Water Heater</a></li>
    <li><a href="<?=base_url()?>user/product/solar_water_pump">Solar Water Pumps</a></li>
    <li><a href="<?=base_url()?>user/product/on_grid_solar">On Grid Solar</a></li>
    <li><a href="<?=base_url()?>user/product/solar_street_light">Solar Street Light</a></li>
  </ul>
</li>



      <a href="<?= base_url('user/blogs') ?>">Blogs</a>
      <a href="<?= base_url('user/contact') ?>">Contact</a>

      <a href="#" class="ms-btn">Get Quote</a>
    </nav>

  </div>
</header>
