<?php declare(strict_types = 1);

namespace Adeira\Connector\Tests\Inbound\DomainModel\DataSource;

use Adeira\Connector\Inbound\DomainModel\DataSource\DataSourceId;
use Tester\Assert;

require getenv('BOOTSTRAP');

/**
 * @testCase
 */
class DataSourceIdTest extends \Adeira\Connector\Tests\TestCase
{

	public function testThatConstructorIsPrivate()
	{
		Assert::exception(function () {
			new DataSourceId;
		}, \Error::class, 'Call to private ' . DataSourceId::class . '::__construct() from context%a%');
	}

}

(new DataSourceIdTest)->run();