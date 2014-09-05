<?php

/*
Image resize function

$args['image_to_resize'] : full image path or URL of image to resize
$args['image_size']      : image size setting, see /library/cc-image_sizes.php for a list of size

$image_path = cc_image_resize(array(
	'image_to_resize' => $image_year,
	'image_size' => 'left_image_poster'
));
*/
function cc_image_resize($args) {

	// $image_sizes: contains all image size, see /library/eos-image_sizes.php to add/edit image size
	global $image_sizes;

	$upload_dir = wp_upload_dir();

	if (!isset($args['image_to_resize'])) {
		return;
	}

	// set a default image size if no size is passed in $args
	if (!isset($args['image_size'])) {
		$image_size = 'default';
	} else {
		$image_size = $args['image_size'];
	}

	$w = $image_sizes[$image_size]['width'];
	$h = $image_sizes[$image_size]['height'];
	$c = $image_sizes[$image_size]['crop'];


	// test if the image path is an URL
	$image_to_resize = stristr($args['image_to_resize'], site_url());

	if ($image_to_resize !== false) {

		// remove domain
		$image_to_resize_url = substr($image_to_resize, strlen(site_url()));

		// remove folders contained in basedir
		$image_to_resize_url = str_replace('/wp-content/uploads', '', $image_to_resize_url);

		// concatenate the basedir with the image path
		$image_to_resize = $upload_dir['basedir'].$image_to_resize_url;
	}

	// init image editor
	$image = wp_get_image_editor($image_to_resize);

	if ( ! is_wp_error( $image ) ) {

		$image->resize($w, $h, $c);

		$new_file_name = $image->generate_filename( "{$w}x{$h}", $upload_dir["basedir"].IMAGE_CACHE_FOLDER);

		// save image to drive if not rendrered yet
		if (!file_exists($new_file_name)) {
			$new_image = $image->save($new_file_name);
		}

		// return the image file name
		$path = explode('/', $new_file_name);
		return '/wp-content/uploads'.IMAGE_CACHE_FOLDER.end($path);
	} else {
		$error_string = $image->get_error_message();
		echo '<!--<div id="message" class="error"><p>Error: ' . $error_string . '</p></div>-->';
	}
}


add_filter('wp_handle_upload_prefilter', 'custom_upload_filter' );

function custom_upload_filter( $file ){
    $path = ABSPATH.'wp-content/uploads'.IMAGE_CACHE_FOLDER;
    if ($handle = opendir($path)) {

    	/* This is the correct way to loop over the directory. */
    	while (false !== ($entry = readdir($handle))) {
    		if (is_file($path.$entry)) {
    			unlink($path.$entry);
    		}
    	}

    	closedir($handle);
    }
    return $file;
}

?>