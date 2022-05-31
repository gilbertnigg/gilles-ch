<nav class="fixed z-40 left-0 top-28 pb-12 w-full bg-gb text-white xl:left-auto xl:w-64 xl:bg-transparent xl:text-gb-dark">
	<ul class="container mx-auto mt-8 px-4 text-3xl font-light md:font-thin">
	<?php foreach ($site->children()->notTemplate('intro')->listed() as $article) : ?>
		<li>
			<a href="#<?= $article->uid() ?>" id="nav-<?= $article->uid() ?>">
				<?= $article->title() ?>
			</a>
		</li>
	<?php endforeach ?>
	</ul>
</nav>
