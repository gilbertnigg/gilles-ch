<!DOCTYPE html>
<html lang="de" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $site->title() ?></title>
	<script type="module">
		document.documentElement.classList.remove('no-js');
		document.documentElement.classList.add('js');
	</script>
	<?= css('assets/css/app.css') ?>
	<?= js('assets/js/app.js', ['defer' => true, 'type' => 'module']) ?>
</head>
