<?php

class nl_dsrotterdam_plugin extends research_base_plugin {

	static function getName() {
		return 'NL | Digitale Stamboom Rotterdam';
	}

	static function create_link($fullname, $givn, $first, $middle, $prefix, $surn, $surname) {
		return $link = 'http://rotterdam.digitalestamboom.nl/search.aspx?lang=nl&verder=' . $givn . urlencode('||') . $prefix . urlencode('|') . $surn;
	}

	static function encode_plus() {
		return true;
	}

}
