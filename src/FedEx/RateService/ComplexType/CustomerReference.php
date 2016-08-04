<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CustomerReference
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class CustomerReference
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'CustomerReferenceType' => 'CustomerReferenceType',
'Value' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CustomerReference';

        
    /**
     * @var \FedEx\RateService\SimpleType\CustomerReferenceType|string
     */
    public $CustomerReferenceType;

        
    /**
     * @var string
     */
    public $Value;



    /**
     * Set CustomerReferenceType
     *
     * @param \FedEx\RateService\SimpleType\CustomerReferenceType|string $customerReferenceType
     * @return CustomerReference
     */
    public function setCustomerReferenceType($customerReferenceType)
    {
        $this->__set('CustomerReferenceType', $customerReferenceType);
        $this->CustomerReferenceType = $customerReferenceType;
        return $this;
    }
    
    /**
     * Returns Set CustomerReferenceType
     *
     * @return \FedEx\RateService\SimpleType\CustomerReferenceType|string
     */
    public function getCustomerReferenceType()
    {
        return $this->CustomerReferenceType;
    }
    
    /**
     * Set Value
     *
     * @param string $value
     * @return CustomerReference
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
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }
    

    
}