<!DOCTYPE html>
<html lang="de" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="canonical" href="https://www.gilles.ch">
	<link rel="preload" href="<?= asset('assets/fonts/RingsideNarrow-Medium_Web.woff2') ?>" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?= asset('assets/fonts/RingsideNarrow-Thin_Web.woff2') ?>" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?= asset('assets/fonts/RingsideNarrow-Light_Web.woff2') ?>" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?= asset('assets/fonts/RingsideNarrow-Book_Web.woff2') ?>" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?= asset('assets/fonts/RingsideNarrow-Bold_Web.woff2') ?>" as="font" type="font/woff2" crossorigin>
	<title><?= $site->seo_title() ?></title>
	<meta name="description" content="<?= $site->seo_description() ?>">
	<script type="module">
		document.documentElement.classList.remove('no-js');
		document.documentElement.classList.add('js');
	</script>
	<meta property="og:title" content="<?= $site->seo_title() ?>">
	<meta property="og:description" content="<?= $site->seo_description() ?>">
	<meta property="og:url" content="<?= $site->homePage()->url() ?>">
	<meta property="og:type" content="website">
	<meta property="twitter:title" content="<?= $site->seo_title() ?>">
	<meta property="twitter:description" content="<?= $site->seo_description() ?>">
	<meta name="theme-color" content="#2D3F49">
	<?php if ($seoIcon = $site->files()->template('seo-icon')->first()) : ?>
		<link rel="icon" type="<?= $seoIcon->mime() ?>" href="<?= $seoIcon->crop(32, 32)->url() ?>" sizes="32x32">
		<link rel="icon" type="<?= $seoIcon->mime() ?>" href="<?= $seoIcon->crop(48, 48)->url() ?>" sizes="48x48">
		<link rel="icon" type="<?= $seoIcon->mime() ?>" href="<?= $seoIcon->crop(96, 96)->url() ?>" sizes="96x96">
		<link rel="apple-touch-icon" href="<?= $seoIcon->crop(1500, 1500)->url() ?>">
		<link rel="image_src" href="<?= $seoIcon->crop(1500, 1500)->url() ?>">
		<meta property="og:image" content="<?= $seoIcon->crop(1500, 1500)->url() ?>">
		<meta property="twitter:image" content="<?= $seoIcon->crop(1500, 1500)->url() ?>">
	<?php endif ?>
	<?= mix('css/app.css') ?>
</head>
