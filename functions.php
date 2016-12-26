//Add meta revised tag for updating the Google search result dates
function wp_last_modified_meta() {
	$date = '';
	if(is_single() || is_page() && !(is_front_page())) {
		$date = get_the_modified_date('l, F j, Y, g:i a');
		$meta = '<meta name="revised" content="%s" />' . "\n";
		if($date)
			$stuff = sprintf($meta, $date);
		else
			$stuff = '';
	}
	echo $stuff;
}

add_action('wp_head', 'wp_last_modified_meta', 0);
