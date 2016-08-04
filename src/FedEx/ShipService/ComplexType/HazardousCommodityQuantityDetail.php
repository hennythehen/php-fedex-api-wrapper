<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Identifies amount and units for quantity of hazardous commodities.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class HazardousCommodityQuantityDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Amount' => 'decimal',
'Units' => 'string',
'QuantityType' => 'HazardousCommodityQuantityType',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'HazardousCommodityQuantityDetail';

        
    /**
     * @var decimal
     */
    public $Amount;

        
    /**
     * @var string
     */
    public $Units;

        
    /**
     * @var \FedEx\ShipService\SimpleType\HazardousCommodityQuantityType|string
     */
    public $QuantityType;



    /**
     * Number of units of the type below.
     *
     * @param decimal $amount
     * @return HazardousCommodityQuantityDetail
     */
    public function setAmount($amount)
    {
        $this->__set('Amount', $amount);
        $this->Amount = $amount;
        return $this;
    }
    
    /**
     * Returns Number of units of the type below.
     *
     * @return decimal
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    
    /**
     * Units by which the hazardous commodity is measured. For IATA commodity, the units values are restricted based on regulation type.
     *
     * @param string $units
     * @return HazardousCommodityQuantityDetail
     */
    public function setUnits($units)
    {
        $this->__set('Units', $units);
        $this->Units = $units;
        return $this;
    }
    
    /**
     * Returns Units by which the hazardous commodity is measured. For IATA commodity, the units values are restricted based on regulation type.
     *
     * @return string
     */
    public function getUnits()
    {
        return $this->Units;
    }
    
    /**
     * Specifies which measure of quantity is to be validated.
     *
     * @param \FedEx\ShipService\SimpleType\HazardousCommodityQuantityType|string $quantityType
     * @return HazardousCommodityQuantityDetail
     */
    public function setQuantityType($quantityType)
    {
        $this->__set('QuantityType', $quantityType);
        $this->QuantityType = $quantityType;
        return $this;
    }
    
    /**
     * Returns Specifies which measure of quantity is to be validated.
     *
     * @return \FedEx\ShipService\SimpleType\HazardousCommodityQuantityType|string
     */
    public function getQuantityType()
    {
        return $this->QuantityType;
    }
    

    
}