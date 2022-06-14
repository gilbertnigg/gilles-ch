<article id="<?= $article->uid() ?>">
	<header>
		<h2><?= $article->title() ?></h2>
		<h3><?= $article->headline() ?></h3>
	</header>
	<h5 class="font-light text-gb-dark text-xl md:font-thin md:text-2xl lg:text-3xl">
		Willkommen bei Ihrem Partner für die Um&shy;setzung unter&shy;schied&shy;lichster Web&shy;lösungen.
		Für Agenturen als auch für Direkt&shy;kunden – von der Kon&shy;zeption bis zur erfolg&shy;reichen
		Online-Schaltung und Be&shy;treu&shy;ung. <span class="text-gb">Schön, sind Sie hier.</span>
	</h5>
	<ul class="tags mt-8">
		<li>
			<a href="mailto:<?= Str::encode(page('kontakt')->email()) ?>">
				<svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"> </path></svg>
				<?= Str::encode(page('kontakt')->email()) ?>
			</a>
		</li>
		<li>
			<a href="tel:<?= Str::replace(page('kontakt')->tel(), ' ', '') ?>">
				<svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
				<?= page('kontakt')->tel() ?>
			</a>
		</li>
	</ul>
</article>
