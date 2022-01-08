<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Penjualan</title>
	<link href="./main.css" rel="stylesheet">
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <!--<div class="logo-src"></div>-->
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    <div class="app-header__content">
                <div class="app-header-left">
                    <ul class="header-menu nav">
						<li class="nav-item">
                            <a href="index.php?p=home" class="nav-link">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?p=list_jenis" class="nav-link">
                                Jenis Barang
                            </a>
                        </li>
                        <li class="btn-group nav-item">
                            <a href="index.php?p=list_supplier" class="nav-link">
                                Supplier
                            </a>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="index.php?p=list_barang" class="nav-link">
                                Barang
                            </a>
                        </li>
                    </ul>        </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <!--<img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">-->
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        Teten Dan Edo
                                    </div>
                                    <div class="widget-subheading">
											
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>        
				</div>
            </div>
        </div>        
		        
		<div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    
					<div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Dashboards</li>
                                <li>
                                    <a href="index.php?p=home" class="mm-active">
                                        <i class="metismenu-icon pe-7s-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="app-sidebar__heading" >Data</li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-box2"></i>
                                        Jenis
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="index.php?p=list_jenis">
                                                <i class="metismenu-icon"></i>
                                                Lihat Data
                                            </a>
                                        </li>
                                        <li>
                                           <a href="index.php?p=add_jenis">
                                                <i class="metismenu-icon">
                                                </i>Tambah Data
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-users"></i>
                                        Supplier
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="index.php?p=list_supplier">
                                                <i class="metismenu-icon">
                                                </i>Lihat Data
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index.php?p=add_supplier">
                                                <i class="metismenu-icon">
                                                </i>Tambah Data
                                            </a>
                                        </li>
                                    </ul>
                                </li>
								 <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-shopbag"></i>
                                        Barang
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="index.php?p=list_barang">
                                                <i class="metismenu-icon">
                                                </i>Lihat Data
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index.php?p=add_barang">
                                                <i class="metismenu-icon">
                                                </i>Tambah Data
                                            </a>
                                        </li>
                                    </ul>
                                </li>
								
                            </ul>
                        </div>
                    </div>
                </div>
				
				<div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="row">
							<?php
								 $pages_dir = 'pages'; //pages merupakan nama folder
								if(!empty($_GET['p'])){ //kondisi apakan ada parameter p didalam url
								$pages = scandir($pages_dir, 0);
								unset($pages[0], $pages[1]);
													
								$p = $_GET['p'];
								if(in_array($p.'.php', $pages)){
								  include($pages_dir.'/'.$p.'.php');
								} else {
								  echo "Halaman tidak ditemukan!";       
								  }
								} else {
								  include($pages_dir.'/home.php');
								}
							?>
							
						</div>
						<br><br><br><br>
                    </div>
                    <div class="fixed-bottom">
                        <div class="app-footer" >
                            <div class="app-footer__inner" >
                                <div class="app-footer-right" >
									Copyright &copy; 2022 Teten dan Edo
                                </div>
                            </div>
                        </div>
                    </div>   
					
				</div>
        </div>
    </div>
<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>

