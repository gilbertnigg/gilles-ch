<article id="<?= $article->uid() ?>">
	<header>
		<h2><?= $article->title() ?></h2>
		<h3><?= $article->headline() ?></h3>
	</header>
	<div>
		<?php if ($img = $article->image()) : ?>
		<aside class="block float-left w-1/3 mr-4 md:w-1/4 lg:float-right lg:ml-16">
			<p class="mt-1 mb-2 lg:pl-2">
				<img src="<?= $img->thumb(['width'=>390])->url() ?>" alt="<?= $site->title() ?>" class="-scale-x-100 lg:scale-x-100">
			</p>
		</aside>
		<?php endif ?>
		<?= $article->text() ?>
		<h4 class="mt-8">Mein Netzwerk für ein gutes Arbeiten</h4>
		<ul class="tags">
			<?php foreach ($article->netzwerk()->toStructure() as $netzwek): ?>
			<li><a href="<?= $netzwek->weblink() ?>" target="_blank" rel="noopener noreferrer"><strong><?= $netzwek->text() ?></strong> <i><?= $netzwek->art() ?></i></a></li>
			<?php endforeach ?>
		</ul>
	</div>
</article>
