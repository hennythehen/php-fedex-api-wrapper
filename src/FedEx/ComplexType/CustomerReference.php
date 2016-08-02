<?php
namespace FedEx\ComplexType;

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

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CustomerReference';

    /**
     * Set CustomerReferenceType
     *
     * @param \FedEx\SimpleType\CustomerReferenceType|string $customerReferenceType
     * @return CustomerReference
     */
    public function setCustomerReferenceType($customerReferenceType)
    {
        $this->CustomerReferenceType = $customerReferenceType;
        return $this;
    }
    
    /**
     * Returns Set CustomerReferenceType
     *
     * @return \FedEx\SimpleType\CustomerReferenceType|string
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