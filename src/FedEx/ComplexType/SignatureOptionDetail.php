<?php
namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * SignatureOptionDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class SignatureOptionDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'OptionType' => 'SignatureOptionType',
'SignatureReleaseNumber' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'SignatureOptionDetail';

        
    /**
     * @var \FedEx\SimpleType\SignatureOptionType|string
     */
    public $OptionType;

        
    /**
     * @var string
     */
    public $SignatureReleaseNumber;



    /**
     * Set OptionType
     *
     * @param \FedEx\SimpleType\SignatureOptionType|string $optionType
     * @return SignatureOptionDetail
     */
    public function setOptionType($optionType)
    {
        $this->__set('OptionType', $optionType);
        $this->OptionType = $optionType;
        return $this;
    }
    
    /**
     * Returns Set OptionType
     *
     * @return \FedEx\SimpleType\SignatureOptionType|string
     */
    public function getOptionType()
    {
        return $this->OptionType;
    }
    
    /**
     * Set SignatureReleaseNumber
     *
     * @param string $signatureReleaseNumber
     * @return SignatureOptionDetail
     */
    public function setSignatureReleaseNumber($signatureReleaseNumber)
    {
        $this->__set('SignatureReleaseNumber', $signatureReleaseNumber);
        $this->SignatureReleaseNumber = $signatureReleaseNumber;
        return $this;
    }
    
    /**
     * Returns Set SignatureReleaseNumber
     *
     * @return string
     */
    public function getSignatureReleaseNumber()
    {
        return $this->SignatureReleaseNumber;
    }
    

    
}