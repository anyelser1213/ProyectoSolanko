<?php 
if ( ! function_exists('menu_anchor'))
{
	function menu_anchor($uri = '')
	{

		$site_url = ( ! preg_match('!^\w+://! i', $uri)) ? site_url($uri) : $uri;
		$current_url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
		if(strpos($current_url, $site_url) !== false)
			$attributes =  " active show ";
		else 
			$attributes =  "";


		return $attributes;
	}
}