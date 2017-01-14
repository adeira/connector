<?php declare(strict_types = 1);

namespace Adeira\Connector\Devices\DomainModel\WeatherStation;

use Adeira\Connector\Authentication\DomainModel\User\User;

/**
 * This is entity without mapping. Mapping is infrastructure detail.
 *
 * @see Infrastructure/Persistence/Doctrine/Mapping/Adeira.Connector.Devices.DomainModel.WeatherStation.WeatherStation.dcm.xml
 */
class WeatherStation
{

	/**
	 * @var WeatherStationId
	 */
	private $id;

	/**
	 * @var string
	 */
	private $owner;

	/**
	 * @var string
	 */
	private $deviceName;

	/**
	 * TODO: maybe instead of User use actual Owner to prevent bypasing Owner check
	 */
	public function __construct(WeatherStationId $id, User $owner, string $deviceName)
	{
		$this->id = $id;
		$this->owner = $owner->id();
		$this->deviceName = $deviceName;
	}

	public function id(): WeatherStationId
	{
		return $this->id;
	}

	public function owner(): string
	{
		return $this->owner;
	}

	public function deviceName(): string
	{
		return $this->deviceName;
	}

	public function makeWeatherStationRecord(WeatherStationRecordId $weatherStationRecordId, array $recordData): WeatherStationRecord
	{
		return new WeatherStationRecord(
			$weatherStationRecordId,
			$this->id,
			$recordData
		);
	}

}
