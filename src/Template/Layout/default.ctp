<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Mecadon - Golf Admin</title>

  <!-- Vendor stylesheet files. REQUIRED -->
  <!-- BEGIN: Vendor  -->
  <?= $this->Html->css('../assets/css/vendor.css') ?>
  <?= $this->Html->css('../assets/vendor/jqvmap/jqvmap.css') ?>
  <?= $this->Html->css('../assets/vendor/dragula/dragula.css') ?>
  <?= $this->Html->css('../assets/vendor/perfect-scrollbar/perfect-scrollbar.css') ?>
  <?= $this->Html->css('../assets/css/chl.css') ?>
  <?= $this->Html->css('../assets/css/theme-peter-river.css') ?>
  <?= $this->Html->css('../assets/vendor/pace/themes/blue/pace-theme-minimal.css') ?>

  <?= $this->Html->script('../assets/vendor/pace/pace.js') ?>
 
</head>

<body>
  <!-- begin .app -->
  <div class="app">
    <!-- begin .app-wrap -->
    <div class="app-wrap">
      <!-- begin .app-heading -->
      <header class="app-heading">
        <header class="canvas is-fixed is-top bg-white p-v-15 shadow-4dp" id="top-search">

          <div class="container-fluid">
            <div class="input-group input-group-lg icon-before-input">
              <input type="text" class="form-control input-lg b-0" placeholder="Search for...">
              <div class="icon z-3">
                <i class="fa fa-fw fa-lg fa-search"></i>
              </div>
              <span class="input-group-btn">
                <button data-target="#top-search" data-toggle="canvas" class="btn btn-danger btn-line b-0">
                  <i class="fa fa-fw fa-lg fa-times"></i>
                </button>
              </span>
            </div>
            <!-- /input-group -->
          </div>

        </header>
        <!-- begin .navbar -->
        <nav class="navbar navbar-default navbar-static-top shadow-2dp">
          <!-- begin .navbar-header -->
          <div class="navbar-header">
            <!-- begin .navbar-header-left with image -->
            <div class="navbar-header-left b-r">
              <!--begin logo-->
              <a class="logo" href="/">
                <span class="logo-xs visible-xs">
                    <?= $this->Html->image("../images/logo.jpg", ['fullBase' => true]); ?>
                 
                </span>
                <span class="logo-lg hidden-xs">
                <?= $this->Html->image("../images/logo.jpg", ['fullBase' => true]); ?>
                
                </span>
              </a>
              <!--end logo-->
            </div>
            <!-- END: .navbar-header-left with image -->
         

            <ul class="nav navbar-header-nav m-l-a">
              <li class="visible-xs b-l">
                <a href="#top-search" data-toggle="canvas">
                  <i class="fa fa-fw fa-search"></i>
                </a>
              </li>
              <li class="dropdown b-l">
                <a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">

                  <span class="b-wisteria fa fa-fw fa-envelope-o u-posRelative"></span>

                  <span class="label label-primary b-orange">8
                    <span class="waves"></span>
                  </span>
                </a>
                <ul class="dropdown-menu animated fadeInDown w-sm pull-right">
                  <li class="b-b">
                    <div class="media">
                      <div class="media-left">
                        <a class="profile-pic" href="#">
                          <img class="media-object" src="../assets/img/w2.svg" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        <h5 class="media-heading">
                          <small class="pull-right">12 hours ago</small>
                          <b>Leanne Graham</b>
                        </h5>
                        started following
                        <strong>Ervin Howell </strong>
                        <p class="text-muted">3 days ago at 7:12 pm - 10.12.2016</p>
                      </div>
                    </div>
                  </li>
                  <li class="b-b">
                    <div class="media">
                      <div class="media-left">
                        <a class="profile-pic" href="#">
                          <img class="media-object" src="../assets/img/m2.svg" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        <h5 class="media-heading">
                          <small class="pull-right">12 hours ago</small>
                          <b>Leanne Graham</b>
                        </h5>
                        started following
                        <strong>Ervin Howell </strong>
                        <p class="text-muted">3 days ago at 7:12 pm - 10.12.2016</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <a class="text-center u-block text-asbestos" href="app-mail-inbox.html">
                      <i class="fa fa-envelope"></i> Read All Messages
                    </a>
                  </li>
                </ul>
              </li>
              <li class="dropdown b-l">
                <a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-fw fa-bell"></i>
                  <span class="point bg-carrot b-peter-river">
                    <span class="waves"></span>
                  </span>
                </a>
                <ul class="dropdown-menu pull-right w-sm animated fadeInUp">

                  <li class="p-a-15">
                    <a href="app-mail-inbox.html">
                      <div class="clearfix">
                        <span class="pull-right text-muted small">4 minutes ago</span>
                        <i class="fa fa-envelope fa-fw"></i>
                        <small>12 messages</small>
                      </div>
                    </a>
                  </li>
                  <li class="p-a-15">
                    <a href="app-mail-inbox.html">
                      <div class="clearfix">
                        <span class="pull-right text-muted small">3 minutes ago</span>
                        <i class="fa fa-twitter fa-fw"></i>
                        <small>4 follower</small>
                      </div>
                    </a>
                  </li>
                  <li role="separator" class="divider"></li>
                  <li class="text-right">
                    <a class="text-wisteria" href="#">
                      See all notification
                    </a>
                  </li>
                </ul>
              </li>

              <li class="dropdown b-l">
                <a class="dropdown-toggle profile-pic" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                 
                  <b class="hidden-xs hidden-sm">Administrator</b>
                </a>
                <ul class="dropdown-menu animated flipInY pull-right">
                  <li>
                    <a href="#">Profile</a>
                  </li>
                  <li>
                    <a href="#">Contacts</a>
                  </li>
                  <li>
                    <a href="#">Mail Box</a>
                  </li>
                  <li role="separator" class="divider"></li>
                  <li>
                    <a href="/users/logout">
                      <i class="fa fa-fw fa-sign-out"></i>
                      Logout
                    </a>
                  </li>
                </ul>
              </li>
        
            </ul>
          </div>
          <!-- END: .navbar-header -->
        </nav>
        <!-- END: .navbar -->
      </header>
      <!-- END:  .app-heading -->

      <!-- begin .app-container -->
      <div class="app-container">

        <!-- begin .app-side -->
        <aside class="app-side">
          <!-- begin .side-content -->
          <div class="side-content">
            <!-- begin user-panel -->
         
            <!-- END: user-panel -->
            <!-- begin .side-nav -->
            <nav class="side-nav">
              <!-- BEGIN: nav-content -->
              <ul class="metismenu nav nav-inverse nav-bordered nav-stacked" data-plugin="metismenu">


                <li>
                  <a  href="/">
                    <span class="nav-icon">
                      <i class="fa fa-fw fa-cogs"></i>
                    </span>
                    <span class="nav-title">Dashboard</span>
                  </a>
                </li>

                <li class="nav-divider"></li>

                <!-- BEGIN: chart -->
                <li>
                  <a href="/MainCategories">
                    <span class="nav-icon">
                      <i class="fa fa-fw fa-snowflake-o"></i>
                    </span>
                    <span class="nav-title">Main Categories</span>
                    <span class="nav-tools">
                    </span>
                  </a>
                
                </li>
             
                <li>
                  <a href="/SubCategories">
                    <span class="nav-icon">
                      <i class="fa fa-fw fa-ravelry"></i>
                    </span>
                    <span class="nav-title">Sub Categories</span>
                    <span class="nav-tools">
                    </span>
                  </a>
               
                </li>

                <li>
                  <a href="/Products">
                    <span class="nav-icon">
                      <i class="fa fa-fw fa-cart-plus"></i>
                    </span>
                    <span class="nav-title">Products</span>
                    <span class="nav-tools">
                    </span>
                  </a>
               
                </li>
             
                <li>
                  <a href="/Brands">

                    <span class="nav-icon">
                      <i class="fa fa-fw fa-asl-interpreting"></i>
                    </span>
                    <span class="nav-title">Brands</span>
                    <span class="nav-tools">
                    </span>
                  </a>
               
                </li>
                <!-- END: ui -->

                <!-- BEGIN: forms -->
                <li>
                  <a href="/Colors">
                    <span class="nav-icon">
                      <i class="fa fa-fw fa-edit"></i>
                    </span>
                    <span class="nav-title">Colors</span>
                    <span class="nav-tools">
                    </span>
                  </a>
              
                </li>
                <!-- END: forms -->

                <!-- BEGIN: table -->
                <li>
                  <a href="/Hands">
                    <span class="nav-icon">
                      <i class="fa fa-fw fa-table"></i>
                    </span>
                    <span class="nav-title">Hands</span>
                    <span class="nav-tools">
                    </span>
                  </a>
               
                </li>
                <!-- END: table -->

                <!-- BEGIN: apps -->
                <li>
                  <a href="/Images">
                    <span class="nav-icon">
                      <i class="fa fa-fw fa-pagelines"></i>
                    </span>
                    <span class="nav-title">Product Images</span>
                    <span class="nav-tools">
                    </span>
                  </a>
                
                </li>
                <!-- BEGIN: apps -->

                <!-- BEGIN: blank pages -->
                <li>
                  <a href="/Lengths">
                    <span class="nav-icon">
                      <i class="fa fa-fw fa-hand-spock-o"></i>
                    </span>
                    <span class="nav-title">Lengths</span>
                    <span class="nav-tools">
                    </span>
                  </a>
            
                </li>
                <li>
                  <a href="/Sizes">
                    <span class="nav-icon">
                      <i class="fa fa-fw fa-reddit-alien"></i>
                    </span>
                    <span class="nav-title">Sizes</span>
                    <span class="nav-tools">
                    </span>
                  </a>
            
                </li>
             

            
           
                <li class="nav-divider"></li>

                <li>
                  <a href="/Orders">
                    <span class="nav-icon">
                      <i class="fa fa-fw  fa-truck"></i>
                    </span>
                    <span class="nav-title">Orders</span>
                    <span class="nav-tools">
                    </span>
                  </a>
            
                </li>


               
              </ul>
              <!-- END: nav-content -->
            </nav>
            <!-- END: .side-nav -->
          </div>
          <!-- END: .side-content -->
          <!-- begin .side-footer -->
          <footer class="side-footer p-h-15 p-t-15 p-b-10">
            <div class="progress is-xs">
              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                <span class="sr-only">60% Complete</span>
              </div>
            </div>
            <div class="progress is-xs">
              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                <span class="sr-only">40% Complete</span>
              </div>
            </div>
          </footer>
          <!-- END: .side-footer -->
        </aside>
        <!-- END: .app-side -->

        <!-- begin side-collapse-visible bar -->
        <div class="side-visible-line hidden-xs" data-side="collapse">
          <i class="fa fa-caret-left"></i>
        </div>
        <!-- begin side-collapse-visible bar -->

        <!-- begin .app-main -->
        <div class="app-main">

          <!-- begin .main-heading -->
          <header class="main-heading shadow-2dp">
           
          </header>
          <!-- END: .main-heading -->

          <!-- begin .main-content -->
          <div class="main-content bg-clouds">

            <!-- begin .container-fluid -->
            <div class="container-fluid p-t-15">
            

              <?= $this->fetch('content') ?>
           

            </div>
            <!-- END: .container-fluid -->

          </div>
          <!-- END: .main-content -->

          <!-- begin .main-footer -->
          <footer class="main-footer bg-white p-a-5">
           
          </footer>
          <!-- END: .main-footer -->

        </div>
        <!-- END: .app-main -->
      </div>
      <!-- END: .app-container -->

      <!-- begin .app-footer -->
      <footer class="app-footer p-t-10 text-white">
        <div class="container-fluid">
          <p class="text-center small">
            Copyright mecadon Golf &copy; 2018
          </p>
        </div>
      </footer>
      <!-- END: .app-footer -->

    </div>
    <!-- END: .app-wrap -->
  </div>
  <!-- END: .app -->

  <span class="fa fa-angle-up" id="totop" data-plugin="totop"></span>

  <?= $this->Html->script('../assets/js/vendor.js') ?>
  <?= $this->Html->script('../assets/vendor/waypoints/jquery.waypoints.js') ?>
  <?= $this->Html->script('../assets/vendor/counterup/jquery.counterup.js') ?>
  <?= $this->Html->script('../assets/vendor/jqvmap/jquery.vmap.js') ?>
  <?= $this->Html->script('../assets/vendor/jqvmap/jquery.vmap.sampledata.js') ?>
  <?= $this->Html->script('../assets/vendor/jqvmap/maps/jquery.vmap.usa.js') ?>
  <?= $this->Html->script('../assets/vendor/perfect-scrollbar/perfect-scrollbar.jquery.js') ?>
  <?= $this->Html->script('../assets/vendor/dragula/dragula.js') ?>
  <?= $this->Html->script('../assets/vendor/chart.js/Chart.js') ?>
  <?= $this->Html->script('../assets/vendor/tablesorter/js/jquery.tablesorter.js') ?>
  <?= $this->Html->script('../assets/js/chl.js') ?>
  <?= $this->Html->script('../assets/js/chl-demo.js') ?>




</body>

</html>
