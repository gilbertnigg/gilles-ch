<article id="<?= $article->uid() ?>">
	<header>
		<h2><?= $article->title() ?></h2>
		<h3><?= $article->headline() ?></h3>
	</header>
	<div class="lg:flex">
		<div class="lg:w-3/4 lg:pr-16">
			<p>Bei vielen Projekten, die an mich herangetragen werden, geht es um die Realisierung Websites mit Content Management System (CMS) für ein selbständiges Bearbeiten der Inhalte. Erfolgt die Anfrage über eine Agentur für einen ihrer Kunden, ist ein Designvorschlag oder eine Konzeption in der Regel schon vorhanden. In diesem Fall setze ich in Zusammenarbeit mit den Gestaltern den Entwurf in eine moderne Webseite um. Als CMS verwende ich die Open-Source-Projekte <a href="https://www.processwire.com" class="border-b border-secondary" target="_blank" rel="noopener noreferrer">Processwire</a> oder <a href="https://www.getkirby.com" class="border-b border-secondary" target="_blank" rel="noopener noreferrer">Kirby</a>. Bei Direktkunden entwickle ich bei Bedarf auch das Design, wenn erforderlich im Team mit ausgewählten Grafikerinnen und Grafikern aus meinem langjährigen Netzwerk.</p>
			<p>Für detaillierte Informationen oder spezifische Bedürfnisse, zögern Sie nicht, mich zu <a href="#kontakt" class="scrollto border-b border-secondary">kontaktieren</a>.</p>
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
			<a href="<?= $lieblingstool->weblink() ?>" class="block p-2 bg-white" target="_blank" rel="noopener noreferrer">
				<img src="<?= $lieblingstool->url() ?>" alt="<?= $lieblingstool->text() ?>">
			</a>
		</li>
	<?php endforeach ?>
	</ul>
	<h4>Technologien</h4>
	<ul class="logos">
	<?php foreach ($article->technologien()->sortBy('sort', 'asc', 'filename', 'asc')->toFiles() as $technologie): ?>
		<li>
			<a href="<?= $technologie->weblink() ?>" class="block p-2 bg-white" target="_blank" rel="noopener noreferrer">
				<img src="<?= $technologie->url() ?>" alt="<?= $technologie->text() ?>">
			</a>
		</li>
	<?php endforeach ?>
	</ul>
</article>
