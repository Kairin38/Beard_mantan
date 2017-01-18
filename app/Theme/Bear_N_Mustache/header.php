<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Beauty Blog</title>
        <meta charset="UTF-8"/>
        <meta property="fb:app_id" content="1547649635529410">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="<?php echo $urlThemeActive;?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $urlThemeActive;?>css/bootstrap-theme.min.css">
        <script src="<?php echo $urlThemeActive;?>js/jquery.min.js"></script>        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://use.fontawesome.com/98653c9a14.js"></script>
        <link rel="stylesheet" href="<?php echo $urlThemeActive;?>css/style.css" type="text/css"/>
        <script src="<?php echo $urlThemeActive;?>js/script.js"></script>
		<?php mantan_header(); ?>
    </head>
    <body onclick="exitMenu">        
        <div class="top-page">
            <div class="link-contain">                
                <div class="container">
                    <div class="row">
<!-- mang xa hoi -->
					   <div class="col-sm-6 col-xs-9">						
                            <ul class="list-inline list-unstyled">
                                <li><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="https://plus.google.com/u/0/108945203184223930013"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="https://twitter.com/BeardenMustache"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.youtube.com/"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                <li><a href="http://beardnmustache.tumblr.com/"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.pinterest.com/beardnmustache/"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.instagram.com/beardnmustache.mag/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
<!-- end mang xa hoi -->
<!-- search -->
                       <div class="col-sm-6">
                            <form class="search" action="/notices/search">
                                <input type="text" id="input-search" name="key"class="hidden-xs"/>
                                <button id="btn-search" class="glyphicon glyphicon-search"></button>
                            </form>
                        </div>
<!-- search -->
                    </div>
                </div>
            </div>
<!-- menu -->

            <div class="container-fluid nav-contain" data-spy="affix" data-offset-top="40">
                <div class="row">
                    <div class="col-sm-3 col-xs-6"><a href="index.php"><img src="<?php echo $urlThemeActive;?>images/logo.jpg" class="img-thumbnail"/></a></div>
                    <div class="col-sm-9 col-xs-6">
                        <ul class="list-inline list-unstyled hidden-sm hidden-xs" id="nav-list">
                            <?php
                                    $menus = getMenusDefault();
                                    if (!empty($menus)) {
                                        foreach ($menus as $categoryMenu) {
                                            if (isset($categoryMenu['sub']) && count($categoryMenu['sub'] > 0)) {
                                                echo '<li class="dropdown">
                                           <a class="dropdown-toggle " data-toggle="dropdown" role="button" href="' . $categoryMenu['url'] . '">' . $categoryMenu['name'] . '<span class="caret"></span></a>
                                              <ul class="dropdown-menu" class="dropdown-menu">';
                                                foreach ($categoryMenu['sub'] as $subMenu) {
                                                    echo '<li><a href="' . $subMenu['url'] . '">' . $subMenu['name'] . '</a></li>';
                                                }
                                                echo '</ul>
                                              </li>  ';
                                            } else {
                                                echo '<li>
                                                         <a  href="' . $categoryMenu['url'] . '">' . $categoryMenu['name'] . '</a>
                                                     </li> ';
                                            }
                                        }
                                    }
                                    ?>
                        </ul>
                        <div class="mobi-menu" >
                            <div class="mobi-menu-icon" onclick="openMenu()" id="mobi-menu-icon">                    
                                <span class="fa fa-bars"></span>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
<!-- end menu -->
           
            </div>
        </div>
