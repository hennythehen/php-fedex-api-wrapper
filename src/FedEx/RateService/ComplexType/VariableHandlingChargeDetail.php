<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This definition of variable handling charge detail is intended for use in Jan 2011 corp load.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class VariableHandlingChargeDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'FixedValue' => 'Money',
'PercentValue' => 'decimal',
'RateElementBasis' => 'RateElementBasisType',
'RateTypeBasis' => 'RateTypeBasisType',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'VariableHandlingChargeDetail';

        
    /**
     * @var Money
     */
    public $FixedValue;

        
    /**
     * @var decimal
     */
    public $PercentValue;

        
    /**
     * @var \FedEx\RateService\SimpleType\RateElementBasisType|string
     */
    public $RateElementBasis;

        
    /**
     * @var \FedEx\RateService\SimpleType\RateTypeBasisType|string
     */
    public $RateTypeBasis;



    /**
     * Set FixedValue
     *
     * @param Money $fixedValue
     * @return VariableHandlingChargeDetail
     */
    public function setFixedValue(Money $fixedValue)
    {
        $this->__set('FixedValue', $fixedValue);
        $this->FixedValue = $fixedValue;
        return $this;
    }
    
    /**
     * Returns Set FixedValue
     *
     * @return Money
     */
    public function getFixedValue()
    {
        return $this->FixedValue;
    }
    
    /**
     * Actual percentage (10 means 10%, which is a mutiplier of 0.1)
     *
     * @param decimal $percentValue
     * @return VariableHandlingChargeDetail
     */
    public function setPercentValue($percentValue)
    {
        $this->__set('PercentValue', $percentValue);
        $this->PercentValue = $percentValue;
        return $this;
    }
    
    /**
     * Returns Actual percentage (10 means 10%, which is a mutiplier of 0.1)
     *
     * @return decimal
     */
    public function getPercentValue()
    {
        return $this->PercentValue;
    }
    
    /**
     * Select the value from a set of rate data to which the percentage is applied.
     *
     * @param \FedEx\RateService\SimpleType\RateElementBasisType|string $rateElementBasis
     * @return VariableHandlingChargeDetail
     */
    public function setRateElementBasis($rateElementBasis)
    {
        $this->__set('RateElementBasis', $rateElementBasis);
        $this->RateElementBasis = $rateElementBasis;
        return $this;
    }
    
    /**
     * Returns Select the value from a set of rate data to which the percentage is applied.
     *
     * @return \FedEx\RateService\SimpleType\RateElementBasisType|string
     */
    public function getRateElementBasis()
    {
        return $this->RateElementBasis;
    }
    
    /**
     * Select the type of rate from which the element is to be selected.
     *
     * @param \FedEx\RateService\SimpleType\RateTypeBasisType|string $rateTypeBasis
     * @return VariableHandlingChargeDetail
     */
    public function setRateTypeBasis($rateTypeBasis)
    {
        $this->__set('RateTypeBasis', $rateTypeBasis);
        $this->RateTypeBasis = $rateTypeBasis;
        return $this;
    }
    
    /**
     * Returns Select the type of rate from which the element is to be selected.
     *
     * @return \FedEx\RateService\SimpleType\RateTypeBasisType|string
     */
    public function getRateTypeBasis()
    {
        return $this->RateTypeBasis;
    }
    

    
}