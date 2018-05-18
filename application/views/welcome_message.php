<?php
defined('BASEPATH') OR exit('No direct script access allowed');
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
		<div class="container" id="container">
			<div class="row" id="ver-align-item">
				<div class="col-md-12">
					<p id="magane" class="text-center"></p>
				</div>
			</div>
			<!-- <footer>页面执行
				<strong>{elapsed_time}</strong> 秒
			</footer> -->
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bluebird@3/js/browser/bluebird.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/whatwg-fetch@2.0.3/fetch.min.js"></script>
		<!--End-->
		<script>
			fetch('http://127.0.0.1/reality/php/magane/index.php/api/')
				.then(function (res) {
					return res.json();

				})
				.then(function (data) {
					var hitokoto = document.getElementById('magane');
					hitokoto.innerText = data.post_content;
				})
				.catch(function (err) {
					console.error(err);
				})

		</script>
	</body>

	</html>
