<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Individual charge which contributes to the total base charge for the shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class FreightBaseCharge
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'FreightClass' => 'FreightClassType',
'RatedAsClass' => 'FreightClassType',
'NmfcCode' => 'string',
'Description' => 'string',
'Weight' => 'Weight',
'ChargeRate' => 'Money',
'ChargeBasis' => 'FreightChargeBasisType',
'ExtendedAmount' => 'Money',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'FreightBaseCharge';

        
    /**
     * @var \FedEx\ShipService\SimpleType\FreightClassType|string
     */
    public $FreightClass;

        
    /**
     * @var \FedEx\ShipService\SimpleType\FreightClassType|string
     */
    public $RatedAsClass;

        
    /**
     * @var string
     */
    public $NmfcCode;

        
    /**
     * @var string
     */
    public $Description;

        
    /**
     * @var Weight
     */
    public $Weight;

        
    /**
     * @var Money
     */
    public $ChargeRate;

        
    /**
     * @var \FedEx\ShipService\SimpleType\FreightChargeBasisType|string
     */
    public $ChargeBasis;

        
    /**
     * @var Money
     */
    public $ExtendedAmount;



    /**
     * Freight class for this line item.
     *
     * @param \FedEx\ShipService\SimpleType\FreightClassType|string $freightClass
     * @return FreightBaseCharge
     */
    public function setFreightClass($freightClass)
    {
        $this->__set('FreightClass', $freightClass);
        $this->FreightClass = $freightClass;
        return $this;
    }
    
    /**
     * Returns Freight class for this line item.
     *
     * @return \FedEx\ShipService\SimpleType\FreightClassType|string
     */
    public function getFreightClass()
    {
        return $this->FreightClass;
    }
    
    /**
     * Effective freight class used for rating this line item.
     *
     * @param \FedEx\ShipService\SimpleType\FreightClassType|string $ratedAsClass
     * @return FreightBaseCharge
     */
    public function setRatedAsClass($ratedAsClass)
    {
        $this->__set('RatedAsClass', $ratedAsClass);
        $this->RatedAsClass = $ratedAsClass;
        return $this;
    }
    
    /**
     * Returns Effective freight class used for rating this line item.
     *
     * @return \FedEx\ShipService\SimpleType\FreightClassType|string
     */
    public function getRatedAsClass()
    {
        return $this->RatedAsClass;
    }
    
    /**
     * NMFC Code for commodity.
     *
     * @param string $nmfcCode
     * @return FreightBaseCharge
     */
    public function setNmfcCode($nmfcCode)
    {
        $this->__set('NmfcCode', $nmfcCode);
        $this->NmfcCode = $nmfcCode;
        return $this;
    }
    
    /**
     * Returns NMFC Code for commodity.
     *
     * @return string
     */
    public function getNmfcCode()
    {
        return $this->NmfcCode;
    }
    
    /**
     * Customer-provided description for this commodity or class line.
     *
     * @param string $description
     * @return FreightBaseCharge
     */
    public function setDescription($description)
    {
        $this->__set('Description', $description);
        $this->Description = $description;
        return $this;
    }
    
    /**
     * Returns Customer-provided description for this commodity or class line.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }
    
    /**
     * Weight for this commodity or class line.
     *
     * @param Weight $weight
     * @return FreightBaseCharge
     */
    public function setWeight(Weight $weight)
    {
        $this->__set('Weight', $weight);
        $this->Weight = $weight;
        return $this;
    }
    
    /**
     * Returns Weight for this commodity or class line.
     *
     * @return Weight
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    
    /**
     * Rate or factor applied to this line item.
     *
     * @param Money $chargeRate
     * @return FreightBaseCharge
     */
    public function setChargeRate(Money $chargeRate)
    {
        $this->__set('ChargeRate', $chargeRate);
        $this->ChargeRate = $chargeRate;
        return $this;
    }
    
    /**
     * Returns Rate or factor applied to this line item.
     *
     * @return Money
     */
    public function getChargeRate()
    {
        return $this->ChargeRate;
    }
    
    /**
     * Identifies the manner in which the chargeRate for this line item was applied.
     *
     * @param \FedEx\ShipService\SimpleType\FreightChargeBasisType|string $chargeBasis
     * @return FreightBaseCharge
     */
    public function setChargeBasis($chargeBasis)
    {
        $this->__set('ChargeBasis', $chargeBasis);
        $this->ChargeBasis = $chargeBasis;
        return $this;
    }
    
    /**
     * Returns Identifies the manner in which the chargeRate for this line item was applied.
     *
     * @return \FedEx\ShipService\SimpleType\FreightChargeBasisType|string
     */
    public function getChargeBasis()
    {
        return $this->ChargeBasis;
    }
    
    /**
     * The net or extended charge for this line item.
     *
     * @param Money $extendedAmount
     * @return FreightBaseCharge
     */
    public function setExtendedAmount(Money $extendedAmount)
    {
        $this->__set('ExtendedAmount', $extendedAmount);
        $this->ExtendedAmount = $extendedAmount;
        return $this;
    }
    
    /**
     * Returns The net or extended charge for this line item.
     *
     * @return Money
     */
    public function getExtendedAmount()
    {
        return $this->ExtendedAmount;
    }
    

    
}