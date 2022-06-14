<article id="<?= $article->uid() ?>">
	<header>
		<h2><?= $article->title() ?></h2>
		<h3><?= $article->headline() ?></h3>
	</header>
	<div>
		<?php if ($img = $article->image()) : ?>
		<aside class="block float-left w-1/3 mr-4 md:w-1/4 lg:float-right lg:ml-16 lg:mr-0">
			<p class="mt-1 mb-2 lg:pl-2">
				<picture>
					<source srcset="<?= $img->thumb(['width'=>384, 'format'=>'webp'])->url() ?>" type="image/webp">
					<img src="<?= $img->thumb(['width'=>390])->url() ?>"
						class="-scale-x-100 lg:scale-x-100"
						alt="<?= $site->title() ?>"
						width="<?= $img->thumb(['width'=>390])->width() ?>"
						height="<?= $img->thumb(['width'=>390])->height() ?>"
						loading="lazy">
				</picture>
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
