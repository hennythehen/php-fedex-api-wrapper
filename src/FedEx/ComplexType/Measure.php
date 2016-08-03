<?php
namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Measure
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class Measure
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Quantity' => 'decimal',
'Units' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Measure';

        
    /**
     * @var decimal
     */
    public $Quantity;

        
    /**
     * @var string
     */
    public $Units;



    /**
     * Set Quantity
     *
     * @param decimal $quantity
     * @return Measure
     */
    public function setQuantity($quantity)
    {
        $this->__set('Quantity', $quantity);
        $this->Quantity = $quantity;
        return $this;
    }
    
    /**
     * Returns Set Quantity
     *
     * @return decimal
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    
    /**
     * Set Units
     *
     * @param string $units
     * @return Measure
     */
    public function setUnits($units)
    {
        $this->__set('Units', $units);
        $this->Units = $units;
        return $this;
    }
    
    /**
     * Returns Set Units
     *
     * @return string
     */
    public function getUnits()
    {
        return $this->Units;
    }
    

    
}