<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
	<!DOCTYPE html>
	<html lang="zh-cn">
	<head>
		<meta charset="utf-8">
		<title>Magane / 微小的语句，也具有巨大的力量</title>
		<link href="<?php echo base_url();?>/sources/stylesheet/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url();?>/sources/stylesheet/css/common.css" rel="stylesheet">
	</head>
	<body>
		<div class="container col-md-3  d-flex h-100" id="container">
			<div class="row justify-content-center align-self-center">
				<h3 class="login-box-title text-center">Welcome to Control Center!</h3>
				<div id="body">
					<?php echo validation_errors(); ?>
					<?php echo form_open('admin/login'); ?>
					<div class="form-group ">
						<span class="">Token</span>
						<input class="form-control " type="text" name="username" value="" size="50" />
					</div>
					<div class="form-group">
						<span>Auth</span>
						<input class="form-control" type="password" name="password" value="" size="50" />
					</div>
					<div class="text-center">
						<input class="btn btn-primary mx-auto" type="submit" value="Link Start!" />
					</div>
					</form>
				</div>
				<p class="footer">
					<span id="hitokoto" style="float:left;"></span>页面执行
					<strong>{elapsed_time}</strong> 秒</p>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bluebird@3/js/browser/bluebird.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/whatwg-fetch@2.0.3/fetch.min.js"></script>
		<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.slim.min.js"></script>
		<script>
			fetch('http://127.0.0.1/reality/php/magane/index.php/api/')
				.then(function (res) {
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
