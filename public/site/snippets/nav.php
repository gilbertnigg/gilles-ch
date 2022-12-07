<nav class="fixed z-40 left-0 top-28 w-full bg-logo text-white xl:left-auto xl:w-64 xl:bg-transparent xl:text-gb-dark">
	<ul class="container mx-auto py-8 px-4 text-3xl font-light md:font-thin">
	<?php foreach ($site->children()->notTemplate('intro')->listed() as $article) : ?>
		<li>
			<a href="#<?= $article->uid() ?>" id="nav-<?= $article->uid() ?>" data-anchor="<?= $article->uid() ?>">
				<?= $article->title() ?>
			</a>
		</li>
	<?php endforeach ?>
	</ul>
</nav>
