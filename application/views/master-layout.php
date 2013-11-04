<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang=en>
	<head>
		<meta charset=utf-8>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title><?=$title?></title>
        <link rel="stylesheet" href="<?=base_url('content/css/bootstrap.min.css')?>" />
        <style>
        	.container { padding-top: 20px; }
        	.content { min-height: 200px; }
        </style>
	</head>

	<body class="container">
		<header class="well">
			<h2><?=$header?></h2>
		</header>
		<div class="content well">
			<h3><?=$content?></h3>
		</div>
		<footer class="well well-sm">
			<h5>My Website footer.</h5>
		</footer>
	</body>
</html>