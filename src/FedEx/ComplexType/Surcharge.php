<?php
namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Surcharge
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class Surcharge
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Surcharge';

    /**
     * Set SurchargeType
     *
     * @param \FedEx\SimpleType\SurchargeType|string $surchargeType
     * @return Surcharge
     */
    public function setSurchargeType($surchargeType)
    {
        $this->SurchargeType = $surchargeType;
        return $this;
    }
    
    /**
     * Returns Set SurchargeType
     *
     * @return \FedEx\SimpleType\SurchargeType|string
     */
    public function getSurchargeType()
    {
        return $this->SurchargeType;
    }
    
    /**
     * Set Level
     *
     * @param \FedEx\SimpleType\SurchargeLevelType|string $level
     * @return Surcharge
     */
    public function setLevel($level)
    {
        $this->Level = $level;
        return $this;
    }
    
    /**
     * Returns Set Level
     *
     * @return \FedEx\SimpleType\SurchargeLevelType|string
     */
    public function getLevel()
    {
        return $this->Level;
    }
    
    /**
     * Set Description
     *
     * @param string $description
     * @return Surcharge
     */
    public function setDescription($description)
    {
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
     * @return Surcharge
     */
    public function setAmount(Money $amount)
    {
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
    

    
}