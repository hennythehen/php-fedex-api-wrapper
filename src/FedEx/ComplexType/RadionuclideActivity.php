<?php
namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * RadionuclideActivity
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class RadionuclideActivity
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Value' => 'decimal',
'UnitOfMeasure' => 'RadioactivityUnitOfMeasure',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'RadionuclideActivity';

        
    /**
     * @var decimal
     */
    public $Value;

        
    /**
     * @var \FedEx\SimpleType\RadioactivityUnitOfMeasure|string
     */
    public $UnitOfMeasure;



    /**
     * Set Value
     *
     * @param decimal $value
     * @return RadionuclideActivity
     */
    public function setValue($value)
    {
        $this->__set('Value', $value);
        $this->Value = $value;
        return $this;
    }
    
    /**
     * Returns Set Value
     *
     * @return decimal
     */
    public function getValue()
    {
        return $this->Value;
    }
    
    /**
     * Set UnitOfMeasure
     *
     * @param \FedEx\SimpleType\RadioactivityUnitOfMeasure|string $unitOfMeasure
     * @return RadionuclideActivity
     */
    public function setUnitOfMeasure($unitOfMeasure)
    {
        $this->__set('UnitOfMeasure', $unitOfMeasure);
        $this->UnitOfMeasure = $unitOfMeasure;
        return $this;
    }
    
    /**
     * Returns Set UnitOfMeasure
     *
     * @return \FedEx\SimpleType\RadioactivityUnitOfMeasure|string
     */
    public function getUnitOfMeasure()
    {
        return $this->UnitOfMeasure;
    }
    

    
}