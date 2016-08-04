<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The instructions indicating how to print the Certificate of Origin ( e.g. whether or not to include the instructions, image type, etc ...)
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CertificateOfOriginDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'DocumentFormat' => 'ShippingDocumentFormat',
'CustomerImageUsages' => 'CustomerImageUsage',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CertificateOfOriginDetail';

        
    /**
     * @var ShippingDocumentFormat
     */
    public $DocumentFormat;

        
    /**
     * @var CustomerImageUsage[]
     */
    public $CustomerImageUsages = array();



    /**
     * Specifies characteristics of a shipping document to be produced.
     *
     * @param ShippingDocumentFormat $documentFormat
     * @return CertificateOfOriginDetail
     */
    public function setDocumentFormat(ShippingDocumentFormat $documentFormat)
    {
        $this->__set('DocumentFormat', $documentFormat);
        $this->DocumentFormat = $documentFormat;
        return $this;
    }
    
    /**
     * Returns Specifies characteristics of a shipping document to be produced.
     *
     * @return ShippingDocumentFormat
     */
    public function getDocumentFormat()
    {
        return $this->DocumentFormat;
    }
    
    /**
     * Specifies the usage and identification of customer supplied images to be used on this document.
     *
     * @param CustomerImageUsage[] $customerImageUsages
     * @return CertificateOfOriginDetail
     */
    public function setCustomerImageUsages(array $customerImageUsages)
    {
        $this->__set('CustomerImageUsages', $customerImageUsages);
        $this->CustomerImageUsages = $customerImageUsages;
        return $this;
    }
    
    /**
     * Returns Specifies the usage and identification of customer supplied images to be used on this document.
     *
     * @return CustomerImageUsage[]
     */
    public function getCustomerImageUsages()
    {
        return $this->CustomerImageUsages;
    }
    

    
}