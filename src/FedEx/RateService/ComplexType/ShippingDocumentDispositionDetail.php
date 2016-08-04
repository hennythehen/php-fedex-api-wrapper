<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Each occurrence of this class specifies a particular way in which a kind of shipping document is to be produced and provided.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class ShippingDocumentDispositionDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'DispositionType' => 'ShippingDocumentDispositionType',
'Grouping' => 'ShippingDocumentGroupingType',
'EMailDetail' => 'ShippingDocumentEMailDetail',
'PrintDetail' => 'ShippingDocumentPrintDetail',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ShippingDocumentDispositionDetail';

        
    /**
     * @var \FedEx\RateService\SimpleType\ShippingDocumentDispositionType|string
     */
    public $DispositionType;

        
    /**
     * @var \FedEx\RateService\SimpleType\ShippingDocumentGroupingType|string
     */
    public $Grouping;

        
    /**
     * @var ShippingDocumentEMailDetail
     */
    public $EMailDetail;

        
    /**
     * @var ShippingDocumentPrintDetail
     */
    public $PrintDetail;



    /**
     * Values in this field specify how to create and return the document.
     *
     * @param \FedEx\RateService\SimpleType\ShippingDocumentDispositionType|string $dispositionType
     * @return ShippingDocumentDispositionDetail
     */
    public function setDispositionType($dispositionType)
    {
        $this->__set('DispositionType', $dispositionType);
        $this->DispositionType = $dispositionType;
        return $this;
    }
    
    /**
     * Returns Values in this field specify how to create and return the document.
     *
     * @return \FedEx\RateService\SimpleType\ShippingDocumentDispositionType|string
     */
    public function getDispositionType()
    {
        return $this->DispositionType;
    }
    
    /**
     * Specifies how to organize all documents of this type.
     *
     * @param \FedEx\RateService\SimpleType\ShippingDocumentGroupingType|string $grouping
     * @return ShippingDocumentDispositionDetail
     */
    public function setGrouping($grouping)
    {
        $this->__set('Grouping', $grouping);
        $this->Grouping = $grouping;
        return $this;
    }
    
    /**
     * Returns Specifies how to organize all documents of this type.
     *
     * @return \FedEx\RateService\SimpleType\ShippingDocumentGroupingType|string
     */
    public function getGrouping()
    {
        return $this->Grouping;
    }
    
    /**
     * Specifies how to e-mail document images.
     *
     * @param ShippingDocumentEMailDetail $eMailDetail
     * @return ShippingDocumentDispositionDetail
     */
    public function setEMailDetail(ShippingDocumentEMailDetail $eMailDetail)
    {
        $this->__set('EMailDetail', $eMailDetail);
        $this->EMailDetail = $eMailDetail;
        return $this;
    }
    
    /**
     * Returns Specifies how to e-mail document images.
     *
     * @return ShippingDocumentEMailDetail
     */
    public function getEMailDetail()
    {
        return $this->EMailDetail;
    }
    
    /**
     * Specifies how a queued document is to be printed.
     *
     * @param ShippingDocumentPrintDetail $printDetail
     * @return ShippingDocumentDispositionDetail
     */
    public function setPrintDetail(ShippingDocumentPrintDetail $printDetail)
    {
        $this->__set('PrintDetail', $printDetail);
        $this->PrintDetail = $printDetail;
        return $this;
    }
    
    /**
     * Returns Specifies how a queued document is to be printed.
     *
     * @return ShippingDocumentPrintDetail
     */
    public function getPrintDetail()
    {
        return $this->PrintDetail;
    }
    

    
}