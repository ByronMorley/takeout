<?php
class MenuModelAdmin extends ModelAdmin
{

	private static $menu_title = "Menu Templates";

	private static $url_segment = "menu-templates";

	private static $managed_models = array(
		'MenuTemplate'
	);
}