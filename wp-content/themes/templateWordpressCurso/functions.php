<?php

add_theme_support('post-thumbnails');

add_filter('excerpt_length', function($length){
	return 10;
});