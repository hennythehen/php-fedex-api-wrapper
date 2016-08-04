<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data for taxpayer identification information.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class TaxpayerIdentification
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'TinType' => 'TinType',
'Number' => 'string',
'Usage' => 'string',
'EffectiveDate' => 'dateTime',
'ExpirationDate' => 'dateTime',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'TaxpayerIdentification';

        
    /**
     * @var \FedEx\ShipService\SimpleType\TinType|string
     */
    public $TinType;

        
    /**
     * @var string
     */
    public $Number;

        
    /**
     * @var string
     */
    public $Usage;

        
    /**
     * @var dateTime
     */
    public $EffectiveDate;

        
    /**
     * @var dateTime
     */
    public $ExpirationDate;



    /**
     * Identifies the category of the taxpayer identification number. See TinType for the list of values.
     *
     * @param \FedEx\ShipService\SimpleType\TinType|string $tinType
     * @return TaxpayerIdentification
     */
    public function setTinType($tinType)
    {
        $this->__set('TinType', $tinType);
        $this->TinType = $tinType;
        return $this;
    }
    
    /**
     * Returns Identifies the category of the taxpayer identification number. See TinType for the list of values.
     *
     * @return \FedEx\ShipService\SimpleType\TinType|string
     */
    public function getTinType()
    {
        return $this->TinType;
    }
    
    /**
     * Identifies the taxpayer identification number.
     *
     * @param string $number
     * @return TaxpayerIdentification
     */
    public function setNumber($number)
    {
        $this->__set('Number', $number);
        $this->Number = $number;
        return $this;
    }
    
    /**
     * Returns Identifies the taxpayer identification number.
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->Number;
    }
    
    /**
     * Identifies the usage of Tax Identification Number in Shipment processing
     *
     * @param string $usage
     * @return TaxpayerIdentification
     */
    public function setUsage($usage)
    {
        $this->__set('Usage', $usage);
        $this->Usage = $usage;
        return $this;
    }
    
    /**
     * Returns Identifies the usage of Tax Identification Number in Shipment processing
     *
     * @return string
     */
    public function getUsage()
    {
        return $this->Usage;
    }
    
    /**
     * Set EffectiveDate
     *
     * @param dateTime $effectiveDate
     * @return TaxpayerIdentification
     */
    public function setEffectiveDate($effectiveDate)
    {
        $this->__set('EffectiveDate', $effectiveDate);
        $this->EffectiveDate = $effectiveDate;
        return $this;
    }
    
    /**
     * Returns Set EffectiveDate
     *
     * @return dateTime
     */
    public function getEffectiveDate()
    {
        return $this->EffectiveDate;
    }
    
    /**
     * Set ExpirationDate
     *
     * @param dateTime $expirationDate
     * @return TaxpayerIdentification
     */
    public function setExpirationDate($expirationDate)
    {
        $this->__set('ExpirationDate', $expirationDate);
        $this->ExpirationDate = $expirationDate;
        return $this;
    }
    
    /**
     * Returns Set ExpirationDate
     *
     * @return dateTime
     */
    public function getExpirationDate()
    {
        return $this->ExpirationDate;
    }
    

    
}