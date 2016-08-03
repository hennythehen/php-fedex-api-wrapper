<?php
namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Rate data specific to FedEx Freight or FedEx National Freight services.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class FreightRateDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'QuoteNumber' => 'string',
'QuoteType' => 'FreightRateQuoteType',
'BaseChargeCalculation' => 'FreightBaseChargeCalculationType',
'BaseCharges' => 'FreightBaseCharge',
'Notations' => 'FreightRateNotation',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'FreightRateDetail';

        
    /**
     * @var string
     */
    public $QuoteNumber;

        
    /**
     * @var \FedEx\SimpleType\FreightRateQuoteType|string
     */
    public $QuoteType;

        
    /**
     * @var \FedEx\SimpleType\FreightBaseChargeCalculationType|string
     */
    public $BaseChargeCalculation;

        
    /**
     * @var FreightBaseCharge[]
     */
    public $BaseCharges = array();

        
    /**
     * @var FreightRateNotation[]
     */
    public $Notations = array();



    /**
     * A unique identifier for a specific rate quotation.
     *
     * @param string $quoteNumber
     * @return FreightRateDetail
     */
    public function setQuoteNumber($quoteNumber)
    {
        $this->__set('QuoteNumber', $quoteNumber);
        $this->QuoteNumber = $quoteNumber;
        return $this;
    }
    
    /**
     * Returns A unique identifier for a specific rate quotation.
     *
     * @return string
     */
    public function getQuoteNumber()
    {
        return $this->QuoteNumber;
    }
    
    /**
     * Specifies whether the rate quote was automated or manual.
     *
     * @param \FedEx\SimpleType\FreightRateQuoteType|string $quoteType
     * @return FreightRateDetail
     */
    public function setQuoteType($quoteType)
    {
        $this->__set('QuoteType', $quoteType);
        $this->QuoteType = $quoteType;
        return $this;
    }
    
    /**
     * Returns Specifies whether the rate quote was automated or manual.
     *
     * @return \FedEx\SimpleType\FreightRateQuoteType|string
     */
    public function getQuoteType()
    {
        return $this->QuoteType;
    }
    
    /**
     * Specifies how total base charge is determined.
     *
     * @param \FedEx\SimpleType\FreightBaseChargeCalculationType|string $baseChargeCalculation
     * @return FreightRateDetail
     */
    public function setBaseChargeCalculation($baseChargeCalculation)
    {
        $this->__set('BaseChargeCalculation', $baseChargeCalculation);
        $this->BaseChargeCalculation = $baseChargeCalculation;
        return $this;
    }
    
    /**
     * Returns Specifies how total base charge is determined.
     *
     * @return \FedEx\SimpleType\FreightBaseChargeCalculationType|string
     */
    public function getBaseChargeCalculation()
    {
        return $this->BaseChargeCalculation;
    }
    
    /**
     * Freight charges which accumulate to the total base charge for the shipment.
     *
     * @param FreightBaseCharge[] $baseCharges
     * @return FreightRateDetail
     */
    public function setBaseCharges(array $baseCharges)
    {
        $this->__set('BaseCharges', $baseCharges);
        $this->BaseCharges = $baseCharges;
        return $this;
    }
    
    /**
     * Returns Freight charges which accumulate to the total base charge for the shipment.
     *
     * @return FreightBaseCharge[]
     */
    public function getBaseCharges()
    {
        return $this->BaseCharges;
    }
    
    /**
     * Human-readable descriptions of additional information on this shipment rating.
     *
     * @param FreightRateNotation[] $notations
     * @return FreightRateDetail
     */
    public function setNotations(array $notations)
    {
        $this->__set('Notations', $notations);
        $this->Notations = $notations;
        return $this;
    }
    
    /**
     * Returns Human-readable descriptions of additional information on this shipment rating.
     *
     * @return FreightRateNotation[]
     */
    public function getNotations()
    {
        return $this->Notations;
    }
    

    
}