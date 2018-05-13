<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="utf-8">
	<title>Magane / 微小的语句，也具有巨大的力量</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	body,html{
		height: 100%;
	}
	#container {
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>
    <div class="container col-md-3  d-flex h-100" id="container">
        <div class="row justify-content-center align-self-center">
            <h3 class="text-center">Welcome to Control Center!</h3>
        <div id="body">
            <?php echo validation_errors(); ?>
            <?php echo form_open('admin/login'); ?>
                <div class="form-group">
                    <h5 class="">登录名</h5>
                    <input class="form-control " type="text" name="username" value="" size="50" />
                </div>
                <div class="form-group">
                    <h5>口令</h5>
                    <input class="form-control" type="text" name="password" value="" size="50" />
                </div>
                <div>
                    <input class="btn btn-primary mx-auto" type="submit" value="LinkStart!" />
                </div>
            </form>
        </div>
            <p class="footer"><span id="hitokoto" style="float:left;"></span>页面执行 <strong>{elapsed_time}</strong> 秒</p>
        </div>
    </div>
	<script src="https://cdn.jsdelivr.net/npm/bluebird@3/js/browser/bluebird.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/whatwg-fetch@2.0.3/fetch.min.js"></script>
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.slim.min.js"></script>
    <script>
    fetch('http://127.0.0.1/reality/php/magane/index.php/api/')
        .then(function (res){
        return res.json();
        
        })
        .then(function (data) {
        var hitokoto = document.getElementById('hitokoto');
        hitokoto.innerText = data.post_content; 
        })
        .catch(function (err) {
        console.error(err);
        })
    </script>
</body>
</html>
