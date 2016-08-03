<?php
namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Tax
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class Tax
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'TaxType' => 'TaxType',
'Description' => 'string',
'Amount' => 'Money',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Tax';

        
    /**
     * @var \FedEx\SimpleType\TaxType|string
     */
    public $TaxType;

        
    /**
     * @var string
     */
    public $Description;

        
    /**
     * @var Money
     */
    public $Amount;



    /**
     * Set TaxType
     *
     * @param \FedEx\SimpleType\TaxType|string $taxType
     * @return Tax
     */
    public function setTaxType($taxType)
    {
        $this->__set('TaxType', $taxType);
        $this->TaxType = $taxType;
        return $this;
    }
    
    /**
     * Returns Set TaxType
     *
     * @return \FedEx\SimpleType\TaxType|string
     */
    public function getTaxType()
    {
        return $this->TaxType;
    }
    
    /**
     * Set Description
     *
     * @param string $description
     * @return Tax
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
     * @return Tax
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
    

    
}