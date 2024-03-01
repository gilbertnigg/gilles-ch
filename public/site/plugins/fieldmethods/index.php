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
            $out = stri_replace(['http://', 'https://', 'www.'], '', $field->value);
            return $out;
        }
    ]
]);
