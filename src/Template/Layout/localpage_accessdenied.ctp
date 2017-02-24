<?php use Cake\Routing\Router; ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8"/>
    <title>Local Page</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <meta name="MobileOptimized" content="320">

    <?= $this->Html->meta('favicon.ico','/favicon.ico',['type' => 'icon']);?>

    <script>
        var ROOT_URL = '<?php echo Router::url('/', true); ?>'
    </script>
    <?= $this->Html->css('bootstrap-theme.css') ?>
    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('default.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('templates.css') ?>
    <?= $this->Html->css('flash.css') ?>
    <?= $this->Html->css('style-responsive.css') ?>
    <?= $this->Html->css('font-awesome.css') ?>
    <?= $this->Html->css('simple-line-icons.css') ?>

    <?= $this->Html->script('jquery-1.11.3.min.js') ?>
    <?= $this->Html->script('bootstrap.js') ?>
    <?= $this->Html->script('app.js') ?>
    <script>
        jQuery(document).ready(function() {    
           App.init(); // initlayout and core plugins
        });
    </script>
</head>
<body class="page-header-fixed">
    <div class="header navbar navbar-fixed-top">
        <!-- BEGIN TOP NAVIGATION BAR -->
        <div class="header-inner">
            <div class="page-logo">
                <a href="index.html">
                	<?= $this->Html->image('cake.power.gif') ?>
                </a>
            </div>
            <div class="btn-group user-login mar-t5">
                <a href="javascript:void(0)" class="btn btn-default"><i class="fa fa-user"></i>
                    <span><?php echo $userSession['user_login_name'];?></span>
                </a>
                <?php 
                    echo $this->Html->getCrumbs(' > ', array(
                        'text' => '<i class="fa fa-sign-out"></i><span class="title">Logout</span>',
                        'url' => array('controller' => 'Auth', 'action' => 'logout'),
                        'class' => 'btn btn-danger',
                        'escape' => false
                    ));
                ?>
            </div>
        </div>
        <!-- END TOP NAVIGATION BAR -->
    </div>
    <!-- END HEADER -->
    <div class="clearfix">
    </div>
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <div class="page-content-wrapper">
            <?= $this->fetch('content') ?>
        </div>
        <!-- END CONTENT -->
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    <div class="footer">
    </div>
<!-- END FOOTER -->
</body>
</html>