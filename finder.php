<?php

return \StubsGenerator\Finder::create()
    ->in(
        [
            'polylang-wc',
        ]
    )
    ->path(
        [
            '#^src/#',
            '#^dependencies/#',
            '#^polylang-wc\.php$#',
        ]
    )
    ->notPath(
        [
            '#^src/plugins/#',
        ]
    )
    ->sortByName();