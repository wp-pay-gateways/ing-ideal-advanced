<?php

class Pronamic_WP_Pay_Gateways_ING_IDealAdvanced_Integration extends Pronamic_WP_Pay_Gateways_IDealAdvanced_AbstractIntegration {
	public function __construct() {
		$this->id         = 'ing-ideal-advanced';
		$this->name       = 'ING - iDEAL Advanced';
		$this->provider   = 'ing';
		$this->deprecated = true;
	}
}
