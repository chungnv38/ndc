<?php use Cake\Routing\Router; ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8"/>
    <title>NDC | IT SOLUTIONS</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <meta name="MobileOptimized" content="320">

    <?= $this->Html->meta('favicon.ico','/favicon.ico',['type' => 'icon']);?>

    <script>
        var ROOT_URL = '<?php echo Router::url('/', true); ?>'
    </script>
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('font-awesome.min.css') ?>
    <?= $this->Html->css('animate.css') ?>
    <?= $this->Html->css('bootstrap-theme.css') ?>
    <?= $this->Html->css('default.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('templates.css') ?>
    <?= $this->Html->css('flash.css') ?>
    <?= $this->Html->css('style-responsive.css') ?>
    <?= $this->Html->css('simple-line-icons.css') ?>

    <?= $this->Html->script('jquery-1.11.3.min.js') ?>
    <?= $this->Html->script('bootstrap.js') ?>
    <?= $this->Html->script('app.js') ?>
    <?= $this->Html->script('jquery.form.js') ?>
    <?= $this->Html->script('base.js') ?>
    <script>
        jQuery(document).ready(function() {    
           App.init(); // initlayout and core plugins
        });
    </script>
</head>
<body>
    <header>        
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="navigation">
                <div class="container">                 
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-brand">
                            <a href="index.html"><h1><span>Com</span>pany</h1></a>
                        </div>
                    </div>
                    
                    <div class="navbar-collapse collapse">                          
                        <div class="menu">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation"><a href="index.html" class="active">Trang chủ</a></li>
                                <li role="presentation"><a href="about.html">Giới thiệu</a></li>
                                <li role="presentation"><a href="services.html">Dự án</a></li>                               
                                <li role="presentation"><a href="portfolio.html">Liên hệ</a></li>                     
                            </ul>
                        </div>
                    </div>                      
                </div>
            </div>  
        </nav>      
    </header>
    <!-- BEGIN CONTAINER -->
    <!-- <div class="page-container"> -->
        
        <!-- BEGIN CONTENT -->
        <?= $this->Flash->render() ?>
        <div class="page-content-wrapper">
            <div class="page-content">
            <?= $this->fetch('content') ?>
            </div>
        </div>
        <!-- END CONTENT -->
    <!-- </div> -->
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    <div class="footer">
        <div class="container">
            <div class="social-icon">
                <div class="col-md-4">
                    <ul class="social-network">
                        <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
                    </ul>   
                </div>
            </div>
            
            <div class="col-md-4 col-md-offset-4">
                <div class="copyright">
                    &copy; Company Theme. All Rights Reserved.
                    <div class="credits">
                        <!-- 
                            All the links in the footer should remain intact. 
                            You can delete the links only if you purchased the pro version.
                            Licensing information: https://bootstrapmade.com/license/
                            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Company
                        -->
                        <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
            </div>                      
        </div>
        
        <div class="pull-right">
            <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
        </div>  
    </div>
<!-- END FOOTER -->
</body>
</html>