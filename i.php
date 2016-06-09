<?php 
	define( 'WP_USE_THEMES', false );  
	require_once('wp-blog-header.php');


$image = $_GET["image"];
// echo $image;
$sizeh = $_GET["h"];
$sizew = $_GET["w"];
$crop = $_GET["c"];
$qual = $_GET["q"];
$flip = $_GET["f"];
 print_r($_GET);

$editor = wp_get_image_editor( $image );

if(isset($_GET["h"]) AND isset($_GET["w"]) ){
$editor->resize( $sizew,$sizew, $crop  );
}

if(isset($qual)){
	$editor->set_quality( $qual );
}
if(isset($flip)){
	if($flip == 'horz'){
		$editor->flip( false,true );
	}
	if($flip == 'vert'){
		$editor->flip( true,false );
	}
}
$new_image_info = $editor->stream();
 ?>
<!-- <img src='img.jpg' alt=""> -->