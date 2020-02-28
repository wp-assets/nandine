<?php
/**
Collection Of Walker Classes
*/
	/*

		wp_nav_menu()

		<div class="menu-container">
			<ul> // start_lvl()
				<li><a href="Home"><span>// start_el()

				</a></span>

				<ul>

				</li> // end_el()

				<li><a href="About"></a></li>
				<li><a href="Home"></a></li>
				<li><a href="Home"></a></li>

			</ul> //end_lvl()
		</div>
	*/

	class Walker_Nav_Primary extends Walker_Nav_menu{

		function start_lvl( &$output, $depth ){ //ul
			$indent  = str_repeat("\t",$depth);
			$submenu = ($depth > 0) ? 'sub-menu' : '';
			$output .="\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\">\n";
		}


		function start_el(){//li a span

		}
/*
		function end_el(){//closing li a span

		}

		function end_lvl(){//closing ul

		}*/
	}