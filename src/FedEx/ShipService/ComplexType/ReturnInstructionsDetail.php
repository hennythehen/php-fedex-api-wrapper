<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The instructions indicating how to print the return instructions( e.g. image type) Specifies characteristics of a shipping document to be produced.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ReturnInstructionsDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Format' => 'ShippingDocumentFormat',
'CustomText' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ReturnInstructionsDetail';

        
    /**
     * @var ShippingDocumentFormat
     */
    public $Format;

        
    /**
     * @var string
     */
    public $CustomText;



    /**
     * Set Format
     *
     * @param ShippingDocumentFormat $format
     * @return ReturnInstructionsDetail
     */
    public function setFormat(ShippingDocumentFormat $format)
    {
        $this->__set('Format', $format);
        $this->Format = $format;
        return $this;
    }
    
    /**
     * Returns Set Format
     *
     * @return ShippingDocumentFormat
     */
    public function getFormat()
    {
        return $this->Format;
    }
    
    /**
     * Specifies additional customer provided text to be inserted into the return document.
     *
     * @param string $customText
     * @return ReturnInstructionsDetail
     */
    public function setCustomText($customText)
    {
        $this->__set('CustomText', $customText);
        $this->CustomText = $customText;
        return $this;
    }
    
    /**
     * Returns Specifies additional customer provided text to be inserted into the return document.
     *
     * @return string
     */
    public function getCustomText()
    {
        return $this->CustomText;
    }
    

    
}