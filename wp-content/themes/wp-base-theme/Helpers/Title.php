<?php
	Class Title {
		public function Site($title, $link = false) {
			echo '<h1 class="site-title"><a href="'.$link.'" rel="home">'.$title.'</a></h1>';
		}

		public function Main($title, $link = false) {
			echo '<h1 class="entry-title">'.$this->_returnTitle($title, $link).'</h1>';
		}

		public function Secondary($title, $link = false) {
			echo '<h2 class="entry-sub-title">'.$this->_returnTitle($title, $link).'</h2>';
		}

		public function Page($title, $link = false) {
			echo '<h1 class="page-title">'.$this->_returnTitle($title, $link).'</h1>';
		}

		public function Category($title) {
			echo '<h1 class="category-title">'.sprintf( __( 'Category Archives: %s', 'twentyfourteen' ), $title ).'</h1>';
		}

		public function Tag($title) {
			echo '<h1 class="tag-title">'.sprintf( __( 'Tag Archives: %s', 'twentyfourteen' ), $title ).'</h1>';
		}

		public function Author($title) {
			echo '<h1 class="author-title">'.sprintf( __( 'All posts by %s', 'twentyfourteen' ), $title ).'</h1>';
		}

		public function SiteDescription($title) {
			echo '<h2 class="site-description">'.$title.'</h2>';
		}

		private function _returnTitle($title, $link = false) {
			$output	=	($link != false ? '<a href="'.$link.'" rel="bookmark">' : '')
						.$title
						.($link != false ? '</a>' : '');

			return $output;
		}
	}

	$Title = new Title;
?>