<?php
	Class HtmlWrappers {
		// Structure wrappers

		public function MainWrapper($options = array()) {
			$options = array_merge(array(
				'id' => 'page',
				'class' => 'hfeed site'
			), $options);

			$this -> _returnID($options['id'], $options['class']);
		}

		public function MainSite($options = array()) {
			$options = array_merge(array(
				'id' => 'main',
				'class' => 'site-main'
			), $options);

			$this -> _returnID($options['id'], $options['class']);
		}

		public function MainContent($options = array()) {
			$options = array_merge(array(
				'id' => 'main-content',
				'class' => 'main-content'
			), $options);

			$this -> _returnID($options['id'], $options['class']);
		}

		// Section wrappers

		public function PrimarySection($options = array()) {
			$options = array_merge(array(
				'id' => 'primary',
				'class' => 'content-area'
			), $options);

			$this -> _returnID($options['id'], $options['class']);
		}

		// Sections contents

		public function SiteContent($options = array()) {
			$options = array_merge(array(
				'id' => 'content',
				'class' => 'site-content'
			), $options);

			$this -> _returnID($options['id'], $options['class']);
		}


		private function _returnID($id, $class) {
			echo 'id="'.$id.'" class="'.$class.'"';
		}
	}

	$HtmlWrappers = new HtmlWrappers;
?>