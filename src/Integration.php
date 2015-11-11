<?php

class Pronamic_WP_Pay_Gateways_ING_IDealAdvanced_GatewayIntegration {
	public function __construct() {
		$this->id         = 'ing-ideal-advanced';
		$this->name       = 'ING - iDEAL Advanced';
		$this->provider   = 'ing';
		$this->deprecated = true;
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealAdvanced_ConfigFactory';
	}

	public function get_config_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealAdvanced_Config';
	}

	public function get_gateway_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealAdvanced_Gateway';
	}
}
