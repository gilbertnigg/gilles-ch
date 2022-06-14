<article id="<?= $article->uid() ?>" class="bg-gb-dark text-white sm:bg-transparent sm:text-gb-dark">
	<header>
		<h2><?= $article->title() ?></h2>
		<h3><?= $article->headline() ?></h3>
	</header>
	<iframe src="<?= page('kontakt')->url() ?>" class="w-full h-56 sm:h-64 lg:h-96" title="Karte" loading="lazy"></iframe>
</article>
