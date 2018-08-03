<?php

get_header();

// load all 'category' terms for the post
$terms = get_the_terms( get_the_ID(), 'category');

// we will use the first term to load ACF data from
if( !empty($terms) ) {

    $term = array_pop($terms);
}
?>
testtesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttest
