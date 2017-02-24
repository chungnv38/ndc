<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <meta name="MobileOptimized" content="320">

    <?= $this->Html->meta('favicon.ico','/favicon.ico',['type' => 'icon']);?>

    <?= $this->Html->css('bootstrap-theme.css') ?>
    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('login.css') ?>
    <?= $this->Html->css('style-responsive.css') ?>
    <?= $this->Html->css('font-awesome.css') ?>
    <?= $this->Html->css('simple-line-icons.css') ?>

    <?= $this->Html->script('jquery-1.11.3.min.js') ?>
    <?= $this->Html->script('bootstrap.js') ?>
</head>
<body class="login">
    <div class="logo">
        <a href="index.html">
        <img src="" alt=""/>
        </a>
    </div>
    <div class="content">
    <?= $this->fetch('content') ?>
    </div>
</body>
</html>