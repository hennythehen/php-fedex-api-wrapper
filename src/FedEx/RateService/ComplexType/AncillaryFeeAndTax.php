<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * AncillaryFeeAndTax
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class AncillaryFeeAndTax
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Type' => 'AncillaryFeeAndTaxType',
'Description' => 'string',
'Amount' => 'Money',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'AncillaryFeeAndTax';

        
    /**
     * @var \FedEx\RateService\SimpleType\AncillaryFeeAndTaxType|string
     */
    public $Type;

        
    /**
     * @var string
     */
    public $Description;

        
    /**
     * @var Money
     */
    public $Amount;



    /**
     * Set Type
     *
     * @param \FedEx\RateService\SimpleType\AncillaryFeeAndTaxType|string $type
     * @return AncillaryFeeAndTax
     */
    public function setType($type)
    {
        $this->__set('Type', $type);
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Returns Set Type
     *
     * @return \FedEx\RateService\SimpleType\AncillaryFeeAndTaxType|string
     */
    public function getType()
    {
        return $this->Type;
    }
    
    /**
     * Set Description
     *
     * @param string $description
     * @return AncillaryFeeAndTax
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
     * @return AncillaryFeeAndTax
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