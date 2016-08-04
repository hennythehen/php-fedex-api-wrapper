<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Identifies a discount applied to the shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class RateDiscount
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'RateDiscountType' => 'RateDiscountType',
'Description' => 'string',
'Amount' => 'Money',
'Percent' => 'decimal',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'RateDiscount';

        
    /**
     * @var \FedEx\ShipService\SimpleType\RateDiscountType|string
     */
    public $RateDiscountType;

        
    /**
     * @var string
     */
    public $Description;

        
    /**
     * @var Money
     */
    public $Amount;

        
    /**
     * @var decimal
     */
    public $Percent;



    /**
     * Identifies the type of discount applied to the shipment.
     *
     * @param \FedEx\ShipService\SimpleType\RateDiscountType|string $rateDiscountType
     * @return RateDiscount
     */
    public function setRateDiscountType($rateDiscountType)
    {
        $this->__set('RateDiscountType', $rateDiscountType);
        $this->RateDiscountType = $rateDiscountType;
        return $this;
    }
    
    /**
     * Returns Identifies the type of discount applied to the shipment.
     *
     * @return \FedEx\ShipService\SimpleType\RateDiscountType|string
     */
    public function getRateDiscountType()
    {
        return $this->RateDiscountType;
    }
    
    /**
     * Set Description
     *
     * @param string $description
     * @return RateDiscount
     */
    public function setDescription($description)
    {
        $this->__set('Description', $description);
        $this->Description = $description;
        return $this;
    }
    
    /**
     * Returns Set Description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }
    
    /**
     * The amount of the discount applied to the shipment.
     *
     * @param Money $amount
     * @return RateDiscount
     */
    public function setAmount(Money $amount)
    {
        $this->__set('Amount', $amount);
        $this->Amount = $amount;
        return $this;
    }
    
    /**
     * Returns The amount of the discount applied to the shipment.
     *
     * @return Money
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    
    /**
     * The percentage of the discount applied to the shipment.
     *
     * @param decimal $percent
     * @return RateDiscount
     */
    public function setPercent($percent)
    {
        $this->__set('Percent', $percent);
        $this->Percent = $percent;
        return $this;
    }
    
    /**
     * Returns The percentage of the discount applied to the shipment.
     *
     * @return decimal
     */
    public function getPercent()
    {
        return $this->Percent;
    }
    

    
}