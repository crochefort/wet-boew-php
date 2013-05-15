<?php

	/* 
	 * Set only non-language specific variables in this file 
	 */
		
	//$_ROOT_SERVER_DIR is set in a parent config file.
	
	/*
	 * Define the path to the wet core distribution folder. For development from
	 * github the deploy folder is /wet-boew-dist and the php deploy folder is 
	 * /wet-boew-php. 
	 *
	 * For deployment from a zip file where the demos-php, dist-php and dist
	 * folders are copied into a directory at the root of the webserver Comment 
	 * out or remove these lines.
	 */
	//$_DEPLOY_FOLDER_DIST_ = "-dist";
	//$_DEPLOY_FOLDER_PHP_ = "-php";
	
	$_SITE['wb_core_dist_folder'] = $_SITE['wb_core_root'] . "/dist";
	
	//define the path to the wet php distribution folder
	//for development the deploy folder is /wet-boew-php
	$_SITE['wb_php_dist_folder'] = $_SITE['wb_php_root'] . "/dist-php";
	
	//define the locations of the demo menus
	$_MENU_LOCATION_ = $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_root'] . "/demos-php/menu";

	//modify to point to your sites search implementation
	$_SITE['wb_search_file'] = $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/search.php";
	
	//modify to point to yours sites bread crumb implementation
	$_SITE['wb_bcrumb_file'] = $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/bt_fa.php"; 

	//if $_PAGE['lang1'] is set assume the user set the languages
	//before including the config file. If so add only the required
	//configration files.
	if( isset($_PAGE['lang1']) ) {
		for( $i=1; isset($_PAGE['lang'.$i]); $i++ ) {
			include_once "config-" . $_PAGE['lang'.$i] .".php";
		}
	}
		
?>