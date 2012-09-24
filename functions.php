<?php
	add_theme_support( 'post-thumbnails' );
	
	function wp_list_categories_remove_title_attributes($output) {
		$output = preg_replace('` title="(.+)"`', '', $output);
		return $output;
	}
	add_filter('wp_list_categories', 'wp_list_categories_remove_title_attributes');
	
	function lang($fr_str, $en_str)
	{
	
	//
	//		le 1er paramètre est la version FRANCAISE du texte.
	//		Le 2nd paramètre est la version ANGLAISE du texte.
	//		
	//		On affiche selon la langue du navigateur la version ANGLAISE ou FRANCAISE
	//

		// On détecte
		$langue_user = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
		$langue_user = $langue_user{0}.$langue_user{1};
		
		if($langue_user == 'fr')
		{
			return $fr_str;
		}
		elseif($langue_user == 'en')
		{
			return $en_str;
		}
		else
		{
			// On affiche en Anglais par défaut
			
			return $en_str;
			
		}
	}
?>