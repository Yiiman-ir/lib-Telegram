<?php

namespace system\lib\telegram\Types;

use system\lib\telegram\BaseType;
use system\lib\telegram\InvalidArgumentException;
use system\lib\telegram\TypeInterface;

/**
 * Class Location
 * This object represents a point on the map.
 *
 * @package system\lib\telegram\Types
 */
class Location extends BaseType implements TypeInterface
{
    /**
     * {@inheritdoc}
     *
     * @var array
     */
    static protected $requiredParams = ['latitude', 'longitude'];

    /**
     * {@inheritdoc}
     *
     * @var array
     */
    static protected $map = [
        'latitude' => true,
        'longitude' => true
    ];

    /**
     * Longitude as defined by sender
     *
     * @var float
     */
    protected $longitude;

    /**
     * Latitude as defined by sender
     *
     * @var float
     */
    protected $latitude;

    /**
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     *
     * @throws InvalidArgumentException
     */
    public function setLatitude($latitude)
    {
        if (is_float($latitude)) {
            $this->latitude = $latitude;
        } else {
            throw new InvalidArgumentException();
        }
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     *
     * @throws InvalidArgumentException
     */
    public function setLongitude($longitude)
    {
        if (is_float($longitude)) {
            $this->longitude = $longitude;
        } else {
            throw new InvalidArgumentException();
        }
    }
}