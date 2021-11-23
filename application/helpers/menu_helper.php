<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('menu_helper')) {
	function fetch_menu($data){
		
		$show = '';
		$menu1 = "";
		$anchor = '';

		foreach($data as $mn => $menu){

			if (!empty($menu->sub)) {
				
				$anchor = '<li class="dropdown">
								<a class="nav-link menu-title " href="javascript:void(0)">
									<i data-feather="'.$menu->menu_icon.'"></i>
									<span>'.$menu->menu_name.'</span>
								</a>';

			}else{
				$anchor = '<li>
								<a class="nav-link menu-title link-nav " href="'.base_url($menu->menu_link).'">
									<i data-feather="'.$menu->menu_icon.'"></i>
									<span>'.$menu->menu_name.'</span>
								</a>';
			}

			$menu1 .= $anchor;

			if(!empty($menu->sub)){

				$menu1 .= '<ul class="nav-submenu menu-content">';

				$menu1 .= fetch_sub_menu($menu->sub);

				$menu1 .= '</ul>';
			}
			$menu1 .= '</li>';
		}
		return $menu1;
	}

	function fetch_sub_menu($sub_menu){
	
		$sub = "";

		foreach($sub_menu as $menu){
			
			$anchor = '<li><a href="'.$menu->menu_link.'">'.$menu->menu_name.'</a></li>';
			$sub .= $anchor;
		}
		return $sub;
	}

}
?>