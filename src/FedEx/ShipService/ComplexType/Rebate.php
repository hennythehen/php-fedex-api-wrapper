<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Rebate
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class Rebate
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'RebateType' => 'RebateType',
'Description' => 'string',
'Amount' => 'Money',
'Percent' => 'decimal',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Rebate';

        
    /**
     * @var \FedEx\ShipService\SimpleType\RebateType|string
     */
    public $RebateType;

        
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
     * Set RebateType
     *
     * @param \FedEx\ShipService\SimpleType\RebateType|string $rebateType
     * @return Rebate
     */
    public function setRebateType($rebateType)
    {
        $this->__set('RebateType', $rebateType);
        $this->RebateType = $rebateType;
        return $this;
    }
    
    /**
     * Returns Set RebateType
     *
     * @return \FedEx\ShipService\SimpleType\RebateType|string
     */
    public function getRebateType()
    {
        return $this->RebateType;
    }
    
    /**
     * Set Description
     *
     * @param string $description
     * @return Rebate
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
     * @return Rebate
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
     * @return Rebate
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