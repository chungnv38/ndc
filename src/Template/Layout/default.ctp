<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    
    <?= $this->Html->css('bootstrap-theme.css') ?>
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('font-awesome.min.css') ?>
    <?= $this->Html->css('animate.css') ?>
    <?= $this->Html->css('style.css') ?>
    
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
                            <a href="index.html"><img style="width:120px;" src="<?php echo $webroot;?>images/logo.jpg"></a>
                        </div>
                    </div>
                    
                    <div class="navbar-collapse collapse">                          
                        <div class="menu">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation"><a href="#" class="active">Trang chủ</a></li>
                                <li role="presentation"><a href="#">Giới thiệu</a></li>
                                <li role="presentation"><a href="#">Dự án</a></li>                               
                                <li role="presentation"><a href="#">Liên hệ</a></li>                     
                            </ul>
                        </div>
                    </div>                      
                </div>
            </div>  
        </nav>      
    </header>
    <?= $this->Flash->render() ?>
    
        <?= $this->fetch('content') ?>
    <footer>
        <div class="footer">
            <div class="container">
                <div class="social-icon">
<!--                     <div class="col-md-4">
                        <ul class="social-network">
                            <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>   
                    </div> -->
                </div>
                
                <div class="col-md-8 col-md-offset-4">
                    <div class="copyright">
                        &copy; Công ty CP Phát Triển Công Nghệ - Đầu Tư Tài Chính
                        <div class="credits">
                            <!-- 
                                All the links in the footer should remain intact. 
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Company
                            -->
                            Địa chỉ: Tầng 4, Toà nhà Thành Công, 57 Láng Hạ, Ba Đình, Hà Nội <br />
                            SĐT : 04.35373203
                        </div>
                    </div>
                </div>                      
            </div>
            
            <div class="pull-right">
                <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
            </div>      
        </div>
    </footer>
</body>
</html>
