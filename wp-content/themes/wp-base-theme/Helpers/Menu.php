<?php
	Class Menu {
		public function Nav($options = array()) {

			$options = array_merge(array(
				'class' => 'nav-menu',
				'id' => ''
			), $options);

			$this -> _returnMenu('primary', $options['id'], $options['class']);
		}

		public function Sidebar($options = array()) {
			$options = array_merge(array(
				'class' => 'sidebar-menu',
				'id' => ''
			), $options);

			$this -> _returnMenu('secondary', $options['id'], $options['class']);
		}

		public function Footer($options = array()) {
			$options = array_merge(array(
				'class' => 'footer-menu',
				'id' => ''
			), $options);

			$this -> _returnMenu('tertiary', $options['id'], $options['class']);
		}

		private function _returnMenu($position, $id, $class) {
			return wp_nav_menu( array( 'theme_location' => $position, 'menu_id' => $id, 'menu_class' => $class ) );
		}

	}

	$Menu = new Menu;

?>