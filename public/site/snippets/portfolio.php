<article id="<?= $article->uid() ?>">
	<header>
		<h2><?= $article->title() ?></h2>
		<h3><?= $article->headline() ?></h3>
	</header>
	<div class="flex flex-wrap -mx-1 md:-mx-2">
	<?php foreach ($article->children()->listed()->sortBy('date', 'desc') as $work) : ?>
		<?php if (!$img = $work->images()->template('image')->first()) continue; ?>
		<div class="px-1 mb-2 w-1/2 md:w-1/3 md:px-2 md:mb-4 lg:w-1/4">
			<figure class="portfolio__thumb relative"
				data-title="<?= $work->title() ?>"
				data-headline="<?= $work->genre() ?>"
				data-work="<?= $work->uid() ?>">
				<span class="block overflow-hidden aspect-w-16 aspect-h-12">
					<picture>
						<source srcset="<?= $img->thumb(['width'=>384, 'format'=>'webp'])->url() ?>" type="image/webp">
						<img src="<?= $img->thumb(['width'=>384])->url() ?>"
							alt="<?= $work->title() ?>"
							width="<?= $img->thumb(['width'=>384])->width() ?>"
							height="<?= $img->thumb(['width'=>384])->height() ?>"
							loading="lazy">
					</picture>
				</span>
				<figcaption class="absolute bottom-0 inset-x-0 px-3 py-2 text-left text-xs bg-white sm:text-sm">
					<strong class="font-medium text-gb-dark"><?= $work->title() ?></strong><br>
					<span class="text-gb"><?= $work->genre() ?> <?= $work->date()->toDate('Y') ?></span>
				</figcaption>
			</figure>
      	</div>
      <?php endforeach ?>
    </div>
</article>

<article>
	<h3>Auszug aus meiner Kundenliste</h3>
	<div class="flex mt-4">
		<div class="lg:w-3/4 md:pr-2">
			<ul class="tags">
			<?php $a_kunden = [];
			foreach ($article->children()->published()->sortBy('kunde', 'asc') as $work) :
			if (in_array($work->kunde()->toString(), $a_kunden)) {
				continue; // Prevent duplicates
			} else {
				$a_kunden[] = $work->kunde()->toString();
			} ?>
				<li><span><?= $work->kunde()->toString() ?></span></li>
			<?php endforeach ?>
			</ul>
		</div>
	</div>
</article>

