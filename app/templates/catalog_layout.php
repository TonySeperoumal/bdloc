<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>BDLoc :: <?= $this->e($title) ?></title>
	<script type="text/javascript" src="<?= $this->assetUrl('js/jQuery.min.js') ?>"></script>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/reset.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
</head>
<body>
	<div class="container">
		<header>
			<h1>BDLoc :: <?= $this->e($title) ?></h1>
			<h2><?= $w_user['username'] ?></h2>
			<a href="<?= $this->url('logout')?>">Se déconnecter</a>
			<nav>
				<a href="<?php echo $this->url('catalog');?>">Catalogue</a>
				<a href="<?php echo $this->url('account');?>">Mon Compte</a>
				<a href="#">Panier</a>
			</nav>
		</header>


		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
		</footer>
		
		<div id='shadow'>
			<div id="showDetail" data-ajax-catalog-detail-path="<?php echo $this->url('ajax_catalog_detail'); ?>"></div>
		</div>

		<script type="text/javascript" src="<?= $this->assetUrl('js/catalog.js') ?>"></script>
	</div>
</body>
</html>