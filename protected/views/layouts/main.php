<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.10.2.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .green {
            color: green;
        }

        .red {
            color: red;
        }

        .yellow {
            color: orange;
        }

        .loader {
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #3498db;
            width: 120px;
            height: 120px;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
            position: fixed;
            margin: auto;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
          }
          
          .loading {
              position: fixed;
                z-index: 999999;
                height: 2em;
                width: 2em;
                overflow: show;
                margin: auto;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
          }

          .loading:before {
            content: '';
            display: block;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255,255,255,0.5);
        }

        /* :not(:required) hides these rules from IE9 and below */
        .loading:not(:required) {
            /* hide "loading..." text */
            font: 0/0 a;
            color: transparent;
            text-shadow: none;
            background-color: transparent;
            border: 0;
        }
          
          @-webkit-keyframes spin {
            0% { -webkit-transform: rotate(0deg); }
            100% { -webkit-transform: rotate(360deg); }
          }

          @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
          }
    </style>
</head>

<body>
    <div class="loading" id="loading" style="display: none">
        <div class="loader"></div>
     </div>
    <div id="wrapper">
        
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo Yii::app()->request->baseUrl; ?>"><i class="fa fa-cogs" style="color: #f3f3f3; font-size: 30px" aria-hidden="true"></i> <?php echo CHtml::encode(Yii::app()->name); ?></a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <!--<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>-->
                <?php if(!Yii::app()->user->isGuest) : ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo Yii::app()->user->Nome; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo Yii::app()->createUrl('usuarios/view', array('id'=>  Yii::app()->user->userId)); ?>"><i class="fa fa-fw fa-user"></i> Perfil</a>
                        </li>
                        <li>
                            <a href="<?php echo Yii::app()->createUrl('usuarios/changepass', array('id'=>  Yii::app()->user->userId)); ?>"><i class="fa fa-fw fa-gear"></i> Trocar Senha</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo Yii::app()->createUrl('/site/logout'); ?>"><i class="fa fa-fw fa-power-off"></i> Sair</a>
                        </li>
                    </ul>
                </li>
            </ul>
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
                                //Dashboard
				array('label'=>'<i class="fa fa-fw fa-dashboard"></i> Dashboard', 'url'=>array('/site/index')),
                                //Orçementos
                                array('label'=>'<i class="fa fa-fw fa-university"></i> Orçamentos', 
                                                  'url'=>'javascript:void(0);', 
                                                  'items' =>array(
                                                        array('label'=>'<i class="fa fa-list-ul" aria-hidden="true"></i> Todos os Orçamentos', 
                                                              'url'=>array('/orcamentos/admin')),
                                                        array('label'=>'<i class="fa fa-plus-square-o" aria-hidden="true"></i> Novo Orçamento', 
                                                              'url'=>array('/orcamentos/create')),      
                                                  ),
                                                  'linkOptions'=> array(
                                                        'data-target' => '#orc',
                                                        'data-toggle' => 'collapse',
                                                        ),
                                                  'submenuOptions'=>array('id'=>'orc', 
                                                                          'class'=>'collapse')),   
                                //Materiais                                          
                                 array('label'=>'<i class="fa fa-fw fa-cogs"></i> Materiais', 
                                                  'url'=>'javascript:void(0);', 
                                                  'items' =>array(
                                                        array('label'=>'<i class="fa fa-list-ul" aria-hidden="true"></i> Todos Materiais', 
                                                              'url'=>array('/materiais/admin')),
                                                        array('label'=>'<i class="fa fa-plus-square-o" aria-hidden="true"></i> Novo Material', 
                                                              'url'=>array('/materiais/create')),
                                                  ),
                                                  'linkOptions'=> array(
                                                        'data-target' => '#materiais',
                                                        'data-toggle' => 'collapse',
                                                        ),
                                                  'submenuOptions'=>array('id'=>'materiais', 
                                                                          'class'=>'collapse')),  
                                //Clientes                                          
                                 array('label'=>'<i class="fa fa-fw fa-cogs"></i> Clientes', 
                                                  'url'=>'javascript:void(0);', 
                                                  'items' =>array(
                                                        array('label'=>'<i class="fa fa-list-ul" aria-hidden="true"></i> Todos Clientes', 
                                                              'url'=>array('/clientes/admin')),
                                                        array('label'=>'<i class="fa fa-plus-square-o" aria-hidden="true"></i> Novo Cliente', 
                                                              'url'=>array('/clientes/create')),
                                                  ),
                                                  'linkOptions'=> array(
                                                        'data-target' => '#clientes',
                                                        'data-toggle' => 'collapse',
                                                        ),
                                                  'submenuOptions'=>array('id'=>'clientes', 
                                                                          'class'=>'collapse')),  
                                //usuarios                                          
                                array('label'=>'<i class="fa fa-fw fa-users"></i> Usuários', 
                                                  'url'=>'javascript:void(0);', 
                                                  'items' =>array(
                                                        array('label'=>'<i class="fa fa-list-ul" aria-hidden="true"></i> Todos Usuários', 
                                                              'url'=>array('/usuarios/admin')),
                                                        array('label'=>'<i class="fa fa-plus-square-o" aria-hidden="true"></i> Novo Usuário', 
                                                              'url'=>array('/usuarios/create')),
                                                  ),
                                                  'linkOptions'=> array(
                                                        'data-target' => '#usuarios',
                                                        'data-toggle' => 'collapse',
                                                        ),
                                                  'submenuOptions'=>array('id'=>'usuarios', 
                                                                          'class'=>'collapse')), 
                                //Login/Logout
				array('label'=>'<i class="fa fa-user"></i> Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'<i class="fa fa-sign-out"></i> Logout ('.Yii::app()->user->Nome.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
                        'htmlOptions'=>array('class'=>'nav navbar-nav side-nav'),
                        'encodeLabel' => false,
		)); ?>
            </div>
            <!-- /.navbar-collapse -->
            <?php endif; ?>
        </nav>
        
        <div id="page-wrapper">

            <div class="container-fluid">
            
            <?php echo $content; ?>
        
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/plugins/morris/morris.min.js"></script>
    
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.mask.min.js"></script>
    <script type="text/javascript">
        $('.money').mask("####0.00", {reverse: true});
    </script>
    
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jquery.maskedinput.min.js"></script>
    
    <script type="text/javascript">
        jQuery( function($){

             $(".data").mask("99/99/9999");
             $(".tel").mask("(99) 9999-9999");
             $(".cel").mask("(99) 99999-9999");
             $(".cpf").mask("999.999.999-99");
             $(".cnpj").mask("99.999.999/9999-99");
             $(".cep").mask("99999-999");

        });
        
        jQuery.browser = {};
        (function () {
            jQuery.browser.msie = false;
            jQuery.browser.version = 0;
            if (navigator.userAgent.match(/MSIE ([0-9]+)\./)) {
                jQuery.browser.msie = true;
                jQuery.browser.version = RegExp.$1;
            }
        })();
    </script>
    
    <script type="text/javascript">
        var altura = ($(document).height() - 60) + 'px';
        document.getElementById("page-wrapper").style.minHeight = altura;
    </script>
    
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-migrate-1.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.ba-bbq/1.2.1/jquery.ba-bbq.min.js"></script>

</body>

</html>