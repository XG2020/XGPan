<?php
include("./includes/common.php");

$title = '上传文件 - '.$conf['title'];
include SYSTEM_ROOT.'header.php';

$maxfilesize=ini_get('upload_max_filesize');

$csrf_token = md5(mt_rand(0,999).time());
$_SESSION['csrf_token'] = $csrf_token;
?>
<div class="container">
    <div class="row">
    
      <div class="col-sm-9">
        <div class="well infobox" align="center" >
        <div id="progressBar" style="min-height:50px;">
        </div>

         <br><br>
         <h1 style="color:#404040;">选择一个文件开始上传</h1>

         <input type="hidden" id="csrf_token" name="csrf_token" value="<?php echo $csrf_token?>">
         <div id="upload_block"></div>
         

         <div id="upload_frame">
         <button id="uploadFile" class="btn btn-raised btn-primary" style="height:50px;font-size:20px;"><i class="fa fa-upload"></i> 立即上传<div class="ripple-container"></div></button>
<div class="form-group">
<div class="checkbox">
<label>
<input type="checkbox" id="show" value="1" checked> 在首页文件列表显示
</label>
</div>
</div>
<div class="form-group">
<div class="checkbox">
<label>
<input type="checkbox" id="ispwd" value="1"> 设定密码
</label>
</div>
</div>
<div class="form-group" style="max-width:220px;display:none;" id="pwd_frame">
<input type="text" class="form-control" id="pwd" placeholder="请输入密码" autocomplete="off">
<p class="help-block">密码只能为字母或数字</p>
</div>
         </div>
         
        <br><br><br><br>
        </div>
      </div>
      <div class="col-sm-3">
      <div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title"><i class="fa fa-exclamation-circle"></i> 上传提示</h3>
</div>
<div class="list-group-item">
**您的IP是<?php echo $clientip?>，请不要上传违规文件！
</div>
<div class="list-group-item">**上传无格式限制，当前服务器单个文件上传最大支持<b><?php echo $maxfilesize?></b>！
</div>
<?php if($conf['videoreview']==1){?>
<div class="list-group-item">**当前网站已开启视频文件审核，如果上传的是视频文件，需要等待审核通过后才能下载和播放。
</div>
<?php }?>
</div>
      </div>
    </div>
  </div>
  <script src="assets/js/upload.js?v=1001"></script>
<?php include SYSTEM_ROOT.'footer.php';?>