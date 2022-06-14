<article id="<?= $article->uid() ?>">
	<header>
		<h2><?= $article->title() ?></h2>
		<h3><?= $article->headline() ?></h3>
	</header>
	<div class="lg:flex">
		<div class="lg:w-3/4 lg:pr-16">
			<?= $article->text() ?>
			<p>Für detaillierte Informationen oder spezifische Bedürfnisse, zögern Sie nicht, mich zu <a href="#kontakt" class="scrollto" data-anchor="kontakt">kontaktieren</a>.</p>
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
			<a href="<?= $lieblingstool->weblink() ?>" target="_blank" rel="noopener noreferrer">
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
			<a href="<?= $technologie->weblink() ?>" target="_blank" rel="noopener noreferrer">
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
