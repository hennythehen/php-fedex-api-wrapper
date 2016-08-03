<?php
namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * RateDiscount
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
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
     * @var \FedEx\SimpleType\RateDiscountType|string
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
     * Set RateDiscountType
     *
     * @param \FedEx\SimpleType\RateDiscountType|string $rateDiscountType
     * @return RateDiscount
     */
    public function setRateDiscountType($rateDiscountType)
    {
        $this->__set('RateDiscountType', $rateDiscountType);
        $this->RateDiscountType = $rateDiscountType;
        return $this;
    }
    
    /**
     * Returns Set RateDiscountType
     *
     * @return \FedEx\SimpleType\RateDiscountType|string
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
     * Set Amount
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
     * Returns Set Amount
     *
     * @return Money
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    
    /**
     * Set Percent
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
     * Returns Set Percent
     *
     * @return decimal
     */
    public function getPercent()
    {
        return $this->Percent;
    }
    

    
}