<?php declare (strict_types=1);

Namespace EmmetBlueMiddleware;

class Middleware
{
	public static function processor(array $options = [], string $pluginsNamespace)
	{
		$processor = new Middleware\ProcessorMiddleware($options, $pluginsNamespace);

		return $processor->getStandardResponse();
	}

	public static function permissionGateway()
	{
		$gateway = new Middleware\PermissionGatewayMiddleware();

		return $gateway->getStandardResponse();
	}

	public static function validateRequest()
	{
		$validator = new Middleware\RequestValidatorMiddleware();

		return $validator->getStandardResponse();
	}
}