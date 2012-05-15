<?php

function getPagenator( $currentPage, $totalPages ){
	if( $totalPages < 2 ) return;
	$tpl = 'Страницы: {pages}';
	$itemTpl = '<a href="/index.php?page={page}">{page}</a>';
	$activeItemTpl = '<strong>{page}</strong>';
	$ret = '';
	$step = 1;
	$offset = 0;
	$to = $currentPage;
	for( $i = 1; $i <= $to; $i = $i + $step ){
		$min = $i - $offset;
		$diff = min( $min, ( $to - $i + 1) );
		
		if( 0 ):
		elseif( $diff > 10000 ):
			$step = 10000;
			$separator = '........ ';
		elseif( $diff > 1000 ):
			$step = 1000;
			$separator = '...... ';
		elseif( $diff > 100 ):
			$step = 100;
			$separator = '.... ';
		elseif(  $diff > 10 ):
			$step = 10;
			$separator = '.. ';
		else:
			$step = 1;
			$separator = ' ';
		endif;
		
		$ret .= strtr( $i == $currentPage ? $activeItemTpl : $itemTpl, array( '{page}' => $i, '{diff}' => $min ) );
		$ret .= $separator;
		if( $i >= $currentPage && !$offset ){
			$to = $totalPages;
			$offset = $i;
		}
	}
	return strtr( $tpl, array( '{pages}' => $ret ) );
}

echo getPagenator( 5000, 10000 );

/*
$a = 5
if(5 < 10 < 15) 1;


*/