<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class Weight
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Units' => 'WeightUnits',
'Value' => 'decimal',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Weight';

        
    /**
     * @var \FedEx\TrackService\SimpleType\WeightUnits|string
     */
    public $Units;

        
    /**
     * @var decimal
     */
    public $Value;



    /**
     * Identifies the unit of measure associated with a weight value.
     *
     * @param \FedEx\TrackService\SimpleType\WeightUnits|string $units
     * @return Weight
     */
    public function setUnits($units)
    {
        $this->__set('Units', $units);
        $this->Units = $units;
        return $this;
    }
    
    /**
     * Returns Identifies the unit of measure associated with a weight value.
     *
     * @return \FedEx\TrackService\SimpleType\WeightUnits|string
     */
    public function getUnits()
    {
        return $this->Units;
    }
    
    /**
     * Identifies the weight value of a package/shipment.
     *
     * @param decimal $value
     * @return Weight
     */
    public function setValue($value)
    {
        $this->__set('Value', $value);
        $this->Value = $value;
        return $this;
    }
    
    /**
     * Returns Identifies the weight value of a package/shipment.
     *
     * @return decimal
     */
    public function getValue()
    {
        return $this->Value;
    }
    

    
}