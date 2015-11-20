<?php

/**
 * Title: ING - iDEAL Advanced config
 * Description:
 * Copyright: Copyright (c) 2005 - 2015
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_ING_IDealAdvanced_Config extends Pronamic_WP_Pay_Gateways_IDealAdvanced_Config {
	public function get_payment_server_url() {
		return 'https://ideal.secure-ing.com/ideal/iDeal';
	}

	public function get_certificates() {
		return array(
			dirname( __FILE__ ) . '/../certificates/ingbank.cer',
			dirname( __FILE__ ) . '/../certificates/ingbank-0.cer',
		);
	}
}
