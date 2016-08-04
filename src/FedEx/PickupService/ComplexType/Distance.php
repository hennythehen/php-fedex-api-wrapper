<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Driving or other transportation distances, distinct from dimension measurements.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class Distance
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Value' => 'decimal',
'Units' => 'DistanceUnits',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Distance';

        
    /**
     * @var decimal
     */
    public $Value;

        
    /**
     * @var \FedEx\PickupService\SimpleType\DistanceUnits|string
     */
    public $Units;



    /**
     * Identifies the distance quantity.
     *
     * @param decimal $value
     * @return Distance
     */
    public function setValue($value)
    {
        $this->__set('Value', $value);
        $this->Value = $value;
        return $this;
    }
    
    /**
     * Returns Identifies the distance quantity.
     *
     * @return decimal
     */
    public function getValue()
    {
        return $this->Value;
    }
    
    /**
     * Identifies the unit of measure for the distance value.
     *
     * @param \FedEx\PickupService\SimpleType\DistanceUnits|string $units
     * @return Distance
     */
    public function setUnits($units)
    {
        $this->__set('Units', $units);
        $this->Units = $units;
        return $this;
    }
    
    /**
     * Returns Identifies the unit of measure for the distance value.
     *
     * @return \FedEx\PickupService\SimpleType\DistanceUnits|string
     */
    public function getUnits()
    {
        return $this->Units;
    }
    

    
}