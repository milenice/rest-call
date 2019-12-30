<?php
/**
 * Rest Call Configuration
 */
class RestCall_Config {

	/**
	 * Your merchant's server key
	 * @static
	 */
	public static $serverKey;
	/**
	 * Your merchant's client key
	 * @static
	 */
	public static $clientKey;
	/**
	 * true for production
	 * false for sandbox mode
	 * @static
	 */
	public static $isProduction = false;
	/**
	 * Default options for every request
	 * @static
	 */
	public static $curlOptions = array();

	const SANDBOX_BASE_URL = '';
	const PRODUCTION_BASE_URL = '';

	/**
	 * @return string Veritrans API URL, depends on $isProduction
	 */
	public static function getBaseUrl()
	{
		return RestCall_Config::$isProduction ?
				RestCall_Config::PRODUCTION_BASE_URL : RestCall_Config::SANDBOX_BASE_URL;
	}
}
