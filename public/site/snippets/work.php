<?php if ($img = $work->images()->template('image')->first()) : ?>
<p class="aspect-w-16 aspect-h-9 lg:aspect-none mb-4 sm:px-4">
	<img src="<?= $img->thumb(['width'=>1072])->url() ?>"
		srcset="<?= $img->srcset(['640w' => ['width' => 680], '768w' => ['width' => 808], '1100w' => ['width' => 1600]]) ?>"
		class="object-cover object-top"
		alt="<?= $work->title() ?>"
		width="<?= $img->thumb(['width'=>1072])->width() ?>"
		height="<?= $img->thumb(['width'=>1072])->width() ?>">
</p>
<?php endif ?>

<article class="w-full mb-0 pt-4 pb-48 bg-gb-dark sm:pb-16 md:flex md:flex-wrap md:max-w-screen-lg md:pb-8 lg:absolute lg:bottom-0">

	<div class="link-bright md:w-1/2 md:pr-16 lg:w-2/3">
		<?= $work->text() ?>
		<ul class="list <?= $work->text()->isNotEmpty() ? 'mt-4 ' : '' ?>">
			<?php if ($work->kunde()->isNotEmpty()) : ?>
			<li>Kunde: <?= $work->kunde() ?></li>
			<?php endif ?>
			<?php if ($work->date()->isNotEmpty()) : ?>
			<li>Online seit: <?= $work->date()->toDate('Y') ?></li>
			<?php endif ?>
			<?php if ($work->mediapartner()->isNotEmpty()) : ?>
			<li>Realisiert mit: <?= $work->mediapartner() ?></li>
			<?php endif ?>
		</ul>
	</div>

    <div class="mt-8 md:mt-0 md:pl-2 md:w-1/2 lg:w-1/3">
        <?php if ($work->weblink()->isNotEmpty()) : ?>
        <h4>Website: </h4>
        <p class="mb-8">
            <a href="<?= $work->weblink() ?>" class="bg-white border-b-2 border-gb px-3 py-1.5 rounded-md font-medium uppercase" target="_blank" rel="noopener noreferrer">
	            <span class="text-gb-dark"><?= str_replace(['https://', 'http://', 'www.'], '', $work->weblink()) ?></span>
            </a>
        </p>
        <?php endif ?>

        <?php if ($work->skills()->isNotEmpty()) : ?>
        <h4>Leistungen:</h4>
        <ul class="tags">
            <?php foreach ($work->skills()->split() as $skill) : ?>
            <li><span><?= $skill ?></span></li>
            <?php endforeach ?>
        </ul>
        <?php endif ?>
    </div>

</article>
