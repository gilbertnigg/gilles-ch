
<div id="header" class="fixed z-40 inset-x-0 top-0 bg-gb-dark text-white">
	<div class="container flex justify-items-stretch items-end mx-auto px-4">
		<div class="hidden flex-initial pb-4 xl:block xl:w-64">
			<a href="#intro" aria-label="Home">
				<?= svg('assets/img/logo-g.svg') ?>
			</a>
		</div>
		<header class="overflow-hidden relative flex-1">
			<h1 class="truncate ... mr-2"><?= page('intro')->title() ?></h1>
			<h3><?= page('intro')->headline() ?></h3>
		</header>
		<div class="flex flex-row items-end pb-5 md:pb-4">
			<a href="#intro" class="xl:hidden" aria-label="Home">
				<?= svg('assets/img/logo-g.svg') ?>
			</a>
		</div>
	</div>
</div>
