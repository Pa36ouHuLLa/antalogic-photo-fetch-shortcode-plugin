<?php
/*
Plugin Name: Antalogic Photo Fetch
Description: Add shortcode for fetch photos from "https://jsonplaceholder.typicode.com/"
*/
function antalogic_fetch_photo(){
    wp_enqueue_script('fetch-js');
    wp_enqueue_script('spinner-loading');
    return
        "<div style='text-align: center'>
            <p>PHOTOS</p>
            <div>
                <div class='albums'>
                    <a id='all'>All</a>
                    <a class='album-select'>Album 1</a>
                    <a class='album-select'>Album 2</a>
                    <a class='album-select'>Album 3</a>
                    <a class='album-select'>Album 4</a>
                    <a class='album-select'>Album 5</a>
                </div>
                <div id='photos-container'>     
                </div>
                <div id='loaderImage' hidden style='margin: 0 auto'>
                </div>
            </div>    
         </div>";
}

add_shortcode('photos','antalogic_fetch_photo');

function antalogic_fetch_script () {
    wp_register_script( 'fetch-js', plugins_url( '/js/fetch.js' , __FILE__ ), array('jquery'), '1.0.0', true );
    wp_register_script( 'spinner-loading', plugins_url( '/js/spinner-loading.js' , __FILE__ ), array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'antalogic_fetch_script');