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
            $link = str_replace(['http://', 'https://', 'www.'], '', $field);
            $out = '<a href="'.$field->value.'" target="_blank" rel="noopener noreferrer">'.$link.'</a>';
            return $out;
        }
    ]
]);
