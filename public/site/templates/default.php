
<?php snippet('head') ?>

<body class="bg-gray-200 text-gb-dark text-base antialiased">

<?php snippet('navicon') ?>
<?php snippet('header') ?>

<div class="container mx-auto xl:flex" >
	<?php snippet('nav') ?>
	<main class="block w-full xl:ml-64">
	<?php foreach ($site->children()->listed() as $article) : ?>
		<?php snippet($article->intendedTemplate(), compact('article')) ?>
	<?php endforeach ?>
	</main>
</div>

<?php snippet('footer') ?>

<?php snippet('overlay') ?>

</body>

</html>
