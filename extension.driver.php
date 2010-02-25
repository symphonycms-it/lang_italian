<?php

	Class extension_lang_italian extends Extension {

		/**
		 * Extension information
		 */

		public function about() {
			return array(
				'name' => 'Language: Italiano',
				'type' => 'Localisation',
				'version' => '1.1',
				'release-date' => '2010-02-25',
				'author' => array(
					'name' => 'Simone Economo',
					'website' => 'http://lineheight.net',
					'email' => 'my.ekoes@gmail.com'
				),
				'description' => 'Official Italian translation for the Symphony backend',
				'compatibility' => array(
					'2.0.0' => false,
					'2.0.1' => false,
					'2.0.2' => false,
					'2.0.3' => true,
					'2.0.4' => true,
					'2.0.5' => true,
					'2.0.6' => true,
					'2.0.7' => true
				)
			);
		}

	}
	
