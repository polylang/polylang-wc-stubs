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
		]
	)
	->sortByName();
