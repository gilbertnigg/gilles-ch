<?php

Kirby::plugin('gilles/fieldextensions', [
    'fieldMethods' => [
        'toTitles' => function ($field) {
            $out = [];
			foreach ($field->split(',') as $item) {
				$out[] = page($item)->title();
			}
			$out = implode(', ', $out);
            return $out;
        },
        'toUrl' => function ($field) {
            $out = str_replace(['http://', 'https://', 'www.'], '', $field);
            return $out;
        }
    ]
]);
