<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Data required to produce a General Agency Agreement document. Remaining content (business data) to be defined once requirements have been completed.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class GeneralAgencyAgreementDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Format' => 'ShippingDocumentFormat',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'GeneralAgencyAgreementDetail';

        
    /**
     * @var ShippingDocumentFormat
     */
    public $Format;



    /**
     * Set Format
     *
     * @param ShippingDocumentFormat $format
     * @return GeneralAgencyAgreementDetail
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
    

    
}