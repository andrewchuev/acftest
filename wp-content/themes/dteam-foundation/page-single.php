<?php
/**
 * Template name: Single
 */

get_header();

ep( [
	get_field( 'title' ),
	get_field( 'subtitle' ),
	get_field( 'description' ),
	get_field( 'url' ),
	get_field( 'image' ),
] );

get_footer();
