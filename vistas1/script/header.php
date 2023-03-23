<?php
if (strlen(session_id()) < 1) 
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Comercial Pamela</title>
  <script src="../dist/js/bootbox.min.js"></script> 

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">

  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body class="hold-transition  sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="../dist/img/LogoPamela.png" alt="AdminLTELogo" height="35%" width="35%">
  </div>

  <!-- Navbar -->
  
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <br>
      <img src="../dist/img/LogoPamela.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8; height:80px">
      <br><br><h3 style="color:white;" >Comercial Pamela</h3>
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      
      </div>

    <!-- Sidebar -->
   
      <!-- Sidebar user panel (optional) -->
    

      <!-- SidebarSearch Form -->
     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
         
          
              <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="./index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inicio</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="productos.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Productos</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="./contacto.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contacto</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="./Mision y Vision.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mision y Vision</p>
                </a>
              </li>
              
              <li class="nav-item">

                <a href="producto.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Producto</p>
                </a>
    
              </li>
          <br>

          <li class="nav-item">
                <a href="../login.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cerrar Sesion</p>
                </a>
              </li>


      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>