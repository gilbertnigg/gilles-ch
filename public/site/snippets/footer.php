<?php $kontakt = page('kontakt') ?>

<footer class="pt-8 pb-16 bg-gb-dark text-white">
	<div class="container mx-auto">
		<div class="xl:ml-64">
			<div class="px-4 mb-12 md:flex md:justify-start md:mb-16 [&>div>a]:border-b [&>div>a]:border-gb">
				<div class="mb-4 md:w-1/4">
					Gilbert Nigg<br>
					<a href="<?= $kontakt->map() ?>" target="_blank" rel="noopener noreferrer"><?= $kontakt->adresse() ?></a>
				</div>
				<div class="mb-4 md:w-1/4">
					<?= Html::tel($kontakt->tel()) ?><br>
					<?= Html::email($kontakt->email()) ?><br>
					<a href="/data/Gilbert_Nigg.vcf" target="_blank">Download vCard</a>
				</div>
				<div class="mb-4 md:w-1/4">
					<?php if ($kontakt->map()->isNotEmpty()) : ?>
					<a href="<?= $kontakt->map() ?>" target="_blank" rel="noopener noreferrer">Lageplan</a><br>
					<?php endif ?>
					<?php if ($kontakt->linkedin()->isNotEmpty()) : ?>
					<a href="<?= $kontakt->linkedin() ?>" target="_blank" rel="noopener noreferrer">LinkedIn</a><br>
					<?php endif ?>
					<?php if ($kontakt->twitter()->isNotEmpty()) : ?>
					<a href="<?= $kontakt->twitter() ?>" target="_blank" rel="noopener noreferrer">Twitter</a><br>
					<?php endif ?>
				</div>
				<div class="mb-4 md:w-1/4">
					<a href="https://www.gilles.ch/data/Datenschutzerklaerung.pdf" target="_blank">Datenschutz</a><br>
				</div>
			</div>
		</div>
	</div>
</footer>
