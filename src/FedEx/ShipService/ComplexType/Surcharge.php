<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Identifies each surcharge applied to the shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class Surcharge
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'SurchargeType' => 'SurchargeType',
'Level' => 'SurchargeLevelType',
'Description' => 'string',
'Amount' => 'Money',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Surcharge';

        
    /**
     * @var \FedEx\ShipService\SimpleType\SurchargeType|string
     */
    public $SurchargeType;

        
    /**
     * @var \FedEx\ShipService\SimpleType\SurchargeLevelType|string
     */
    public $Level;

        
    /**
     * @var string
     */
    public $Description;

        
    /**
     * @var Money
     */
    public $Amount;



    /**
     * The type of surcharge applied to the shipment.
     *
     * @param \FedEx\ShipService\SimpleType\SurchargeType|string $surchargeType
     * @return Surcharge
     */
    public function setSurchargeType($surchargeType)
    {
        $this->__set('SurchargeType', $surchargeType);
        $this->SurchargeType = $surchargeType;
        return $this;
    }
    
    /**
     * Returns The type of surcharge applied to the shipment.
     *
     * @return \FedEx\ShipService\SimpleType\SurchargeType|string
     */
    public function getSurchargeType()
    {
        return $this->SurchargeType;
    }
    
    /**
     * Set Level
     *
     * @param \FedEx\ShipService\SimpleType\SurchargeLevelType|string $level
     * @return Surcharge
     */
    public function setLevel($level)
    {
        $this->__set('Level', $level);
        $this->Level = $level;
        return $this;
    }
    
    /**
     * Returns Set Level
     *
     * @return \FedEx\ShipService\SimpleType\SurchargeLevelType|string
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
     * The amount of the surcharge applied to the shipment.
     *
     * @param Money $amount
     * @return Surcharge
     */
    public function setAmount(Money $amount)
    {
        $this->__set('Amount', $amount);
        $this->Amount = $amount;
        return $this;
    }
    
    /**
     * Returns The amount of the surcharge applied to the shipment.
     *
     * @return Money
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    

    
}