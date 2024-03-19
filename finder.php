<?php

return \StubsGenerator\Finder::create()
	->in(
		[
			'polylang-wc',
		]
	)
	->notPath(
		[
			'bin',
			'css',
			'js',
			'tests',
			'node_modules',
			'tmp',
			'vendor/composer',
		]
	)
	->sortByName();
