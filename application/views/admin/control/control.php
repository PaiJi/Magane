<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
	<!DOCTYPE html>
	<html lang="zh-cn">

	<head>
		<meta charset="utf-8">
		<title>Welcome to Control! / Magane</title>
		<link href="<?php echo base_url();?>/sources/stylesheet/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url();?>/sources/stylesheet/css/common.css" rel="stylesheet">
	</head>

	<body>
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<h1 class="display-4">Magane Control Bored</h1>
				<p class="lead" id="hitokoto">What have you see?</p>
			</div>
		</div>
		<div class="container">
		<hr class="my-4">
			<div class="row">
				<div class="col-md-4">
					<div class="card" style="">
						<div class="card-body text-center">
							<h5 class="card-title">今日新增</h5>
							<p class="card-text">0</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card" style="">
						<div class="card-body text-center">
							<h5 class="card-title">今日调用次数</h5>
							<p class="card-text">0</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card" style="">
						<div class="card-body text-center">
							<h5 class="card-title">数据总数</h5>
							<p class="card-text">0</p>
						</div>
					</div>
				</div>
			</div>
			<hr class="my-4">
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
