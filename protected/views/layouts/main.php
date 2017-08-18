<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>

        <!-- Bootstrap -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

        <!-- bootstrap-progressbar -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
        <!-- JQVMap -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
        <!-- bootstrap-daterangepicker -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom.min.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/creative.css" rel="stylesheet">
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="<?php echo Yii::app()->baseUrl; ?>" class="site_title"><i class="fa fa-gift" aria-hidden="true"></i> <span>Assistec Sorteios</span></a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile clearfix">
                            <!--<div class="profile_pic">
                                <img src="<?php //echo Yii::app()->user->avatar; ?>" alt="..." class="img-circle profile_img">
                            </div>-->
                            <div class="profile_info">
                                <span>Bem Vindo,</span>
                                <h2><?php echo !Yii::app()->user->isGuest?Yii::app()->user->Nome:'Visitante'; ?></h2>
                            </div>
                        </div>
                        <!-- /menu profile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3>Menu</h3>
                                <?php $this->widget('zii.widgets.CMenu',array(
                                    'items'=>array(
                                            array('label'=>'<i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard', 
                                                  'url'=>array('/site/index')),
                                        
                                            array('label'=>'<i class="fa fa-gift"></i> Brindes<span class="fa fa-chevron-down">', 
                                                'url'=>'javascript:void(0);', 
                                                'items' =>array(
                                                    array('label'=>'Novo Brinde', 
                                                          'url'=>array('brindes/create')),
                                                    array('label'=>'Lista de Brindes', 
                                                          'url'=>array('brindes/admin')),
                                                ),
                                            ),
                                        
                                            array('label'=>'<i class="fa fa-truck"></i> Fornecedores<span class="fa fa-chevron-down">', 
                                                'url'=>'javascript:void(0);', 
                                                'items' =>array(
                                                    array('label'=>'Novo Fornecedor', 
                                                          'url'=>array('fornecedores/create')),
                                                    array('label'=>'Lista de Fornecedores', 
                                                          'url'=>array('fornecedores/admin')),
                                                ),
                                            ),
                                        
                                            array('label'=>'<i class="fa fa-star" aria-hidden="true"></i> Sorteios',
                                                  'url'=>array('sorteios/admin')),
                                        
                                            array('label'=>'<i class="fa fa-money" aria-hidden="true"></i> Vendas',
                                                  'url'=>array('vendas/admin')), 
                                        
                                            array('label'=>'<i class="fa fa-users" aria-hidden="true"></i> Clientes',
                                                  'url'=>array('clientes/admin')), 
                                        
                                            array('label'=>'<i class="fa fa-user"></i> Usuários<span class="fa fa-chevron-down">', 
                                                'url'=>'javascript:void(0);', 
                                                'items' =>array(
                                                    array('label'=>'Novo Usuário', 
                                                          'url'=>array('usuarios/create')),
                                                    array('label'=>'Lista de Usuários', 
                                                          'url'=>array('usuarios/admin')),
                                                ),
                                            ),
                                                                                        
                                            /*array('label'=>'<i class="fa fa-building" aria-hidden="true"></i> Cidades Atendidas',
                                                  'url'=>array('/fran_cidades/cidades'),
                                                  'visible'=> !Yii::app()->user->isAdmin),*/                                          
                                        
                                            array('label'=>'<i class="fa fa-sign-in" aria-hidden="true"></i> Login', 
                                                  'url'=>array('/site/login'), 
                                                  'visible'=>Yii::app()->user->isGuest),
                                            array('label'=>'<i class="fa fa-sign-out" aria-hidden="true"></i> Logout', 
                                                  'url'=>array('/site/logout'), 
                                                  'visible'=>!Yii::app()->user->isGuest)
                                    ),
                                    'htmlOptions'=>array('class'=>'nav side-menu'),
                                    'submenuHtmlOptions' => array(
                                        'class' => 'nav child_menu',
                                    ),
                                    'encodeLabel' => false,
                            )); ?>
                            </div>

                        </div>
                        <!-- /sidebar menu -->

                        <!-- /menu footer buttons -->
                        <div class="sidebar-footer hidden-small">
                            <!--<a data-toggle="tooltip" data-placement="top" title="Settings">
                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                            </a>-->
                            <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo Yii::app()->createUrl('site/logout'); ?>">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            </a>
                        </div>
                        <!-- /menu footer buttons -->
                    </div>
                </div>

                <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <nav>
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>

                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <img src="<?php //echo Yii::app()->user->avatar; ?>" alt=""><?php echo !Yii::app()->user->isGuest?Yii::app()->user->Nome:'Visitante'; ?>
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <!--<li><a href="javascript:;"> Perfil</a></li>
                                        <li>
                                            <a href="javascript:;">
                                                <span>Configurações</span>
                                            </a>
                                        </li>
                                        <li><a href="javascript:;">Help</a></li>-->
                                        <li><a href="<?php echo Yii::app()->createUrl('site/logout'); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                    </ul>
                                </li>

                                <li role="presentation" class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-envelope-o"></i>
                                        <span class="badge bg-green">0</span>
                                    </a>
                                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                        <!--<li>
                                            <a>
                                                <span class="image"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/img.jpg" alt="Profile Image" /></span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span class="image"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/img.jpg" alt="Profile Image" /></span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span class="image"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/img.jpg" alt="Profile Image" /></span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span class="image"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/img.jpg" alt="Profile Image" /></span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>-->
                                        <li>
                                            <div class="text-center">
                                                <a>
                                                    <strong>Nenhuma Notificação</strong>
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">

                    <?php echo $content; ?>

                </div>
                <!-- /page content -->

                <!-- footer content -->
                <footer>
                    <div class="pull-right">
                        Assistec Sorteios - Powered by <a href="http://solucoesquefacilitam.com.br/">Creative Solutions</a>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
        </div>

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/franquia.js"></script>	
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.maskedinput.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendors/jquery/dist/jquery.min.js"></script>        
        <!-- Bootstrap -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendors/nprogress/nprogress.js"></script>
        <!-- Chart.js -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendors/Chart.js/dist/Chart.min.js"></script>
        <!-- gauge.js -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendors/gauge.js/dist/gauge.min.js"></script>
        <!-- iCheck -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendors/iCheck/icheck.min.js"></script>
        <!-- Skycons -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendors/skycons/skycons.js"></script>
        <!-- Flot -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendors/Flot/jquery.flot.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendors/Flot/jquery.flot.pie.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendors/Flot/jquery.flot.time.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendors/Flot/jquery.flot.stack.js"></script>
        <!-- Flot plugins -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendors/flot.curvedlines/curvedLines.js"></script>
        <!-- DateJS -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendors/DateJS/build/date.js"></script>
        <!-- JQVMap -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendors/jqvmap/dist/jquery.vmap.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendors/moment/min/moment.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/custom.min.js"></script>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
        <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
        <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.css"/>
        <script type="text/javascript">
            $(function() {
                $(".chzn-select").chosen();
            });
        </script>
    </body>
</html>

