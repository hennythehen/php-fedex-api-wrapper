<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The instructions indicating how to print the Commercial Invoice( e.g. image type) Specifies characteristics of a shipping document to be produced.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class CommercialInvoiceDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Format' => 'ShippingDocumentFormat',
'CustomerImageUsages' => 'CustomerImageUsage',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CommercialInvoiceDetail';

        
    /**
     * @var ShippingDocumentFormat
     */
    public $Format;

        
    /**
     * @var CustomerImageUsage[]
     */
    public $CustomerImageUsages = array();



    /**
     * Set Format
     *
     * @param ShippingDocumentFormat $format
     * @return CommercialInvoiceDetail
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
     * Specifies the usage and identification of a customer supplied image to be used on this document.
     *
     * @param CustomerImageUsage[] $customerImageUsages
     * @return CommercialInvoiceDetail
     */
    public function setCustomerImageUsages(array $customerImageUsages)
    {
        $this->__set('CustomerImageUsages', $customerImageUsages);
        $this->CustomerImageUsages = $customerImageUsages;
        return $this;
    }
    
    /**
     * Returns Specifies the usage and identification of a customer supplied image to be used on this document.
     *
     * @return CustomerImageUsage[]
     */
    public function getCustomerImageUsages()
    {
        return $this->CustomerImageUsages;
    }
    

    
}