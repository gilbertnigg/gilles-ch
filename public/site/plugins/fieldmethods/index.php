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
    ]
]);
