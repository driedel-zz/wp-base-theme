<?php
	class Acessibility {
		public function Content($text, $anchor) {
			echo '<div class="content-toggle screen-reader-text skip-link">'.$this -> _returnLink($text, $anchor).'<div>';
		}

		public function Search($text, $anchor) {
			echo '<div class="search-toggle screen-reader-text skip-link">'.$this -> _returnLink($text, $anchor).'</div>';
		}

		public function Menu($text, $anchor, $class = '') {
			echo '<div class="menu-toggle screen-reader-text skip-link '.$class.'">'.$this -> _returnLink($text, $anchor).'</div>';
		}

		private function _returnLink($text, $anchor) {
			return '<a href="'.$anchor.'">'.$text.'</a>';
		}
	}

	$Acessibility = new Acessibility;
?>