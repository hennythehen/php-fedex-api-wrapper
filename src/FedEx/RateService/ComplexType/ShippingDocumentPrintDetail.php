<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies printing options for a shipping document.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class ShippingDocumentPrintDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'PrinterId' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ShippingDocumentPrintDetail';

        
    /**
     * @var string
     */
    public $PrinterId;



    /**
     * Provides environment-specific printer identification.
     *
     * @param string $printerId
     * @return ShippingDocumentPrintDetail
     */
    public function setPrinterId($printerId)
    {
        $this->__set('PrinterId', $printerId);
        $this->PrinterId = $printerId;
        return $this;
    }
    
    /**
     * Returns Provides environment-specific printer identification.
     *
     * @return string
     */
    public function getPrinterId()
    {
        return $this->PrinterId;
    }
    

    
}