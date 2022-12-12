<article id="<?= $article->uid() ?>">
	<header>
		<h2><?= $article->title() ?></h2>
		<h3><?= $article->headline() ?></h3>
	</header>
	<div class="lg:flex">
		<div class="lg:w-3/4 lg:pr-16 [&_a]:underline [&_a]:text-primary [&_a]:decoration-gb-light [&_a:hover]:text-black dark:[&_a]:text-gb-light dark:[&_a]:decoration-white">
			<?= $article->text() ?>
		</div>
		<aside class="mt-8 lg:mt-0 lg:pl-2 lg:w-1/4">
			<h4 class="mt-8 md:mt-0">Leistungen</h4>
			<ul class="tags">
			<?php foreach ($article->service()->split() as $service): ?>
				<li><span><?= $service ?></span></li>
			<?php endforeach ?>
			</ul>
		</aside>
	</div>
</article>

<article class="lg:w-2/3">
	<h4>Lieblingstools</h4>
	<ul class="logos mb-4">
	<?php foreach ($article->lieblingstools()->sortBy('sort', 'asc', 'filename', 'asc')->toFiles() as $lieblingstool): ?>
		<li>
			<a href="<?= $lieblingstool->weblink() ?>" target="_blank" rel="noopener noreferrer" aria-label="<?= $lieblingstool->text() ?>">
				<img src="<?= $lieblingstool->url() ?>"
					alt="<?= $lieblingstool->text() ?>"
					width="<?= $lieblingstool->width() ?>"
					height="<?= $lieblingstool->height() ?>"
					loading="lazy">
			</a>
		</li>
	<?php endforeach ?>
	</ul>
	<h4>Technologien</h4>
	<ul class="logos">
	<?php foreach ($article->technologien()->sortBy('sort', 'asc', 'filename', 'asc')->toFiles() as $technologie): ?>
		<li>
			<a href="<?= $technologie->weblink() ?>" target="_blank" rel="noopener noreferrer" aria-label="<?= $technologie->text() ?>">
				<img src="<?= $technologie->url() ?>"
					alt="<?= $technologie->text() ?>"
					width="<?= $technologie->width() ?>"
					height="<?= $technologie->height() ?>"
					loading="lazy">
			</a>
		</li>
	<?php endforeach ?>
	</ul>
</article>
