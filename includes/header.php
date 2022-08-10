<?php
@header('Content-Type: text/html; charset=UTF-8');
?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title?></title>
  <meta name="keywords" content="<?php echo $conf['keywords']?>">
  <meta name="description" content="<?php echo $conf['description']?>">
  <!-- Mobile support -->
  <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="format-detection" content="telephone=no">
  <!-- Bootstrap Material Design -->
  <link href="//cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="//cdn.staticfile.org/twitter-bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="//cdn.staticfile.org/bootstrap-material-design/0.5.10/css/bootstrap-material-design.min.css" rel="stylesheet">
  <link href="//cdn.staticfile.org/bootstrap-material-design/0.5.10/css/ripples.min.css" rel="stylesheet">
  <?php if($is_file){?><link rel="stylesheet" href="//cdn.staticfile.org/aplayer/1.10.1/APlayer.min.css"><?php }?>
  <link href="assets/css/style.css?v=1001" rel="stylesheet">
  <script type="text/javascript" src="//cdn.staticfile.org/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>

  <div class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./"><?php echo $conf['title']?></a>
        </div>
        <div class="navbar-collapse collapse navbar-responsive-collapse">
          <ul class="nav navbar-nav">
            <li class="<?php echo checkIfActive('index,')?>"><a href="./"><i class="fa fa-folder-open" aria-hidden="true"></i> 文件列表</a></li>
            <li class="<?php echo checkIfActive('upload')?>"><a href="./upload.php"><i class="fa fa-upload" aria-hidden="true"></i> 上传文件</a></li>
            <?php if($is_file){?>
            <li class="<?php echo checkIfActive('file')?>"><a href=""><i class="fa fa-file" aria-hidden="true"></i> 文件查看</a></li>
            <?php }?>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <li class="<?php echo checkIfActive('myfile')?>"><a href="./myfile.php"><i class="fa fa-user" aria-hidden="true"></i> 我的文件</a></li>
        </ul>
      </div>
    </div>
  </div>