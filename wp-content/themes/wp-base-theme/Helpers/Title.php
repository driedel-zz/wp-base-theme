<?php
	Class Title {
		public function Site($options = array()) {
			$options = array_merge(array(
				'title' => null,
				'link' => null,
				'id' => null,
				'class' => 'site-title',
				'tag' => 'h1',
				'rel' => 'home'
			), $options);

			if ($options['title'] == null) {
				echo '<h1>Title missing on Title &gt; Site helper</h1>';
				return;
			}

			$this->_constructTitle($options);
		}

		public function Main($options = array()) {
			$options = array_merge(array(
				'title' => null,
				'link' => null,
				'id' => null,
				'class' => 'entry-title',
				'tag' => 'h1',
				'rel' => null
			), $options);

			if ($options['title'] == null) {
				echo '<h1>Title missing on Title &gt; Main helper</h1>';
				return;
			}

			$this->_constructTitle($options);
		}

		public function Secondary($options = array()) {
			$options = array_merge(array(
				'title' => null,
				'link' => null,
				'id' => null,
				'class' => 'entry-sub-title',
				'tag' => 'h2',
				'rel' => null
			), $options);

			if ($options['title'] == null) {
				echo '<h1>Title missing on Title &gt; Secondary helper</h1>';
				return;
			}

			$this->_constructTitle($options);
		}

		public function Page($options = array()) {
			$options = array_merge(array(
				'title' => null,
				'link' => null,
				'id' => null,
				'class' => 'page-title',
				'tag' => 'h1',
				'rel' => null
			), $options);

			if ($options['title'] == null) {
				echo '<h1>Title missing on Title &gt; Page helper</h1>';
				return;
			}

			$this->_constructTitle($options);
		}

		public function Category($options = array()) {
			$options['title'] = sprintf( __( 'Category Archives: %s', 'twentyfourteen' ), $options['title'] );

			$options = array_merge(array(
				'title' => null,
				'link' => null,
				'id' => null,
				'class' => 'category-title',
				'tag' => 'h1',
				'rel' => null
			), $options);

			if ($options['title'] == null) {
				echo '<h1>Title missing on Title &gt; Page helper</h1>';
				return;
			}

			$this->_constructTitle($options);
		}

		public function Tag($options = array()) {
			$options['title'] = sprintf( __( 'Tag Archives: %s', 'twentyfourteen' ), $options['title'] );

			$options = array_merge(array(
				'title' => null,
				'link' => null,
				'id' => null,
				'class' => 'tag-title',
				'tag' => 'h1',
				'rel' => null
			), $options);

			if ($options['title'] == null) {
				echo '<h1>Title missing on Title &gt; Tag helper</h1>';
				return;
			}

			$this->_constructTitle($options);
		}

		public function Author($options = array()) {
			$options['title'] = sprintf( __( 'All posts by %s', 'twentyfourteen' ), $options['title'] );

			$options = array_merge(array(
				'title' => null,
				'link' => null,
				'id' => null,
				'class' => 'author-title',
				'tag' => 'h1',
				'rel' => null
			), $options);

			if ($options['title'] == null) {
				echo '<h1>Title missing on Title &gt; Author helper</h1>';
				return;
			}

			$this->_constructTitle($options);
		}

		public function SiteDescription($options = array()) {
			$options = array_merge(array(
				'title' => null,
				'link' => null,
				'id' => null,
				'class' => 'site-description',
				'tag' => 'h2',
				'rel' => null
			), $options);

			if ($options['title'] == null) {
				echo '<h1>Title missing on Title &gt; SiteDescription helper</h1>';
				return;
			}

			$this->_constructTitle($options);
		}

		private function _constructTitle($options) {
			$titleValues = (array)$options;

			$options = array_merge(array(
				'title' => null,
				'link' => null,
				'id' => null,
				'class' => 'site-title',
				'tag' => 'h1',
				'rel' => null
			), $titleValues);

			$output =	'<'.$options['tag']. ' class="'.$options['class'].'"'
							.($options['id'] != null ? ' id="'.$options['id'].'" >' : '>')
								.($options['link'] != null ? '<a href="'.$options['link'].'" ' : '')
								.($options['rel'] != null ? 'rel="'.$options['rel'].'">' : $options['link'] != null ? '>' : '')
									.$options['title']
								.($options['link'] != null ? '</a>' : '')
						.'</'.$options['tag'].'>';

			echo $output;
		}
	}

	$Title = new Title;
?>