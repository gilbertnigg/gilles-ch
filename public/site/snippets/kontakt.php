<article id="<?= $article->uid() ?>" class="bg-gb-dark text-white sm:bg-transparent sm:text-gb-dark mb-0">
	<header>
		<h2><?= $article->title() ?></h2>
		<h3><?= $article->headline() ?></h3>
	</header>
	<div id="map" class="w-full h-64 bg-gb-dark lg:h-96"></div>
</article>
