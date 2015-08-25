<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>BDLoc :: <?= $this->e($title) ?></title>
	<script type="text/javascript" src="<?= $this->assetUrl('js/jQuery.min.js') ?>"></script>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/reset.css') ?>">
</head>
<body>
	<div class="container">
		<header>
			<h1>BDLoc :: <?= $this->e($title) ?></h1>
		</header>

		<nav>
			<a href="<?php echo $this->url('catalog');?>">Catalogue</a>
			<a href="<?php echo $this->url('account');?>">Mon Compte</a>
			<a href="#">Panier</a>
		</nav>

		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
		</footer>
		<script type="text/javascript" src="<?= $this->assetUrl('js/catalog.js') ?>"></script>
	</div>
</body>
</html>