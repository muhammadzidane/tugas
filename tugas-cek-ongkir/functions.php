<?php 
function get_curl($url) {
	$curl 	= curl_init();

	curl_setopt_array($curl, 
		array(
			CURLOPT_URL 	=> $url,
			CURLOPT_RETURNTRANSFER => true
		)
	);

	$result 	= curl_exec($curl);
	return json_decode($result, true);

	curl_close($curl);
}



?>