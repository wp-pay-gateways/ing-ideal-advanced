<?php

/**
 * Title: ING - iDEAL Advanced config test
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_ING_IDealAdvanced_TestConfig extends Pronamic_WP_Pay_Gateways_ING_IDealAdvanced_Config {
	public function get_payment_server_url() {
		return 'https://idealtest.secure-ing.com/ideal/iDeal';
	}
}
