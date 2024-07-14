<?php

namespace Hexlet\Php\Runner;

function run() {
	$collection = collect( array( 'taylor', 'abigail', 'ivan' ) )->map(
		function ( $name ) {
			return strtoupper( $name );
		}
	);

	return $collection;
}
