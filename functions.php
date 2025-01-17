<?php

// Code to allow Rankmath fields to be presented through Wordpress REST API
add_action( 'rest_api_init', 'register_cpt_meta_fields');
function register_cpt_meta_fields(){

    register_meta( 'post', 'rank_math_description', array(
        'auth_callback' => '__return_true',
		'type' => 'string',
        'description' => 'rank_math_description',
        'single' => true,
        'show_in_rest' => true
    ));

    register_meta( 'post', 'rank_math_title', array(
        'auth_callback' => '__return_true',
		'type' => 'string',
        'description' => 'rank_math_title',
        'single' => true,
        'show_in_rest' => true
    ));

    register_meta( 'post', 'rank_math_focus_keyword', array(
        'auth_callback' => '__return_true',
		'type' => 'string',
        'description' => 'rank_math_focus_keyword',
        'single' => true,
        'show_in_rest' => true
    ));

}
