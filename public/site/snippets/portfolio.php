<article id="<?= $article->uid() ?>">
	<header>
		<h2><?= $article->title() ?></h2>
		<h3><?= $article->headline() ?></h3>
	</header>
	<div class="flex flex-wrap -mx-1 md:-mx-2">
	<?php foreach (page('works')->children()->listed()->sortBy('date', 'desc') as $work) : ?>
		<?php if (!$img = $work->images()->first()) continue; ?>
		<div class="px-1 mb-2 w-1/2 md:w-1/3 md:px-2 md:mb-4 lg:w-1/4">
			<a href="#<?= $work->uid() ?>" id="<?= $work->uid() ?>" class="portfolio__thumb h-full">
				<figure class="block h-full bg-white">
					<span class="block overflow-hidden aspect-video">
						<img src="<?= $img->thumb(['width'=>384,'height'=>384,'crop'=>'top'])->url() ?>" alt="<?= $work->title() ?>">
					</span>
					<figcaption class="px-3 py-2 text-left text-xs sm:text-sm">
						<strong class="font-medium"><?= $work->title() ?></strong><br>
						<span><?= $work->genre() ?> <?= $work->date()->toDate('Y') ?></span>
					</figcaption>
				</figure>
			</a>
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
			foreach (page('works')->children()->published()->sortBy('kunde', 'asc') as $work) :
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

