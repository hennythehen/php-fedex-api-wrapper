<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of shipping label to be returned in the reply
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class LabelSpecification
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Dispositions' => 'ShippingDocumentDispositionDetail',
'LabelFormatType' => 'LabelFormatType',
'ImageType' => 'ShippingDocumentImageType',
'LabelStockType' => 'LabelStockType',
'LabelPrintingOrientation' => 'LabelPrintingOrientationType',
'LabelOrder' => 'LabelOrderType',
'PrintedLabelOrigin' => 'ContactAndAddress',
'CustomerSpecifiedDetail' => 'CustomerSpecifiedLabelDetail',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'LabelSpecification';

        
    /**
     * @var ShippingDocumentDispositionDetail[]
     */
    public $Dispositions = array();

        
    /**
     * @var \FedEx\ShipService\SimpleType\LabelFormatType|string
     */
    public $LabelFormatType;

        
    /**
     * @var \FedEx\ShipService\SimpleType\ShippingDocumentImageType|string
     */
    public $ImageType;

        
    /**
     * @var \FedEx\ShipService\SimpleType\LabelStockType|string
     */
    public $LabelStockType;

        
    /**
     * @var \FedEx\ShipService\SimpleType\LabelPrintingOrientationType|string
     */
    public $LabelPrintingOrientation;

        
    /**
     * @var \FedEx\ShipService\SimpleType\LabelOrderType|string
     */
    public $LabelOrder;

        
    /**
     * @var ContactAndAddress
     */
    public $PrintedLabelOrigin;

        
    /**
     * @var CustomerSpecifiedLabelDetail
     */
    public $CustomerSpecifiedDetail;



    /**
     * Specifies how to create, organize, and return the document.
     *
     * @param ShippingDocumentDispositionDetail[] $dispositions
     * @return LabelSpecification
     */
    public function setDispositions(array $dispositions)
    {
        $this->__set('Dispositions', $dispositions);
        $this->Dispositions = $dispositions;
        return $this;
    }
    
    /**
     * Returns Specifies how to create, organize, and return the document.
     *
     * @return ShippingDocumentDispositionDetail[]
     */
    public function getDispositions()
    {
        return $this->Dispositions;
    }
    
    /**
     * Specify type of label to be returned
     *
     * @param \FedEx\ShipService\SimpleType\LabelFormatType|string $labelFormatType
     * @return LabelSpecification
     */
    public function setLabelFormatType($labelFormatType)
    {
        $this->__set('LabelFormatType', $labelFormatType);
        $this->LabelFormatType = $labelFormatType;
        return $this;
    }
    
    /**
     * Returns Specify type of label to be returned
     *
     * @return \FedEx\ShipService\SimpleType\LabelFormatType|string
     */
    public function getLabelFormatType()
    {
        return $this->LabelFormatType;
    }
    
    /**
     * Specifies the image format used for a shipping document.
     *
     * @param \FedEx\ShipService\SimpleType\ShippingDocumentImageType|string $imageType
     * @return LabelSpecification
     */
    public function setImageType($imageType)
    {
        $this->__set('ImageType', $imageType);
        $this->ImageType = $imageType;
        return $this;
    }
    
    /**
     * Returns Specifies the image format used for a shipping document.
     *
     * @return \FedEx\ShipService\SimpleType\ShippingDocumentImageType|string
     */
    public function getImageType()
    {
        return $this->ImageType;
    }
    
    /**
     * For thermal printer lables this indicates the size of the label and the location of the doc tab if present.
     *
     * @param \FedEx\ShipService\SimpleType\LabelStockType|string $labelStockType
     * @return LabelSpecification
     */
    public function setLabelStockType($labelStockType)
    {
        $this->__set('LabelStockType', $labelStockType);
        $this->LabelStockType = $labelStockType;
        return $this;
    }
    
    /**
     * Returns For thermal printer lables this indicates the size of the label and the location of the doc tab if present.
     *
     * @return \FedEx\ShipService\SimpleType\LabelStockType|string
     */
    public function getLabelStockType()
    {
        return $this->LabelStockType;
    }
    
    /**
     * This indicates if the top or bottom of the label comes out of the printer first.
     *
     * @param \FedEx\ShipService\SimpleType\LabelPrintingOrientationType|string $labelPrintingOrientation
     * @return LabelSpecification
     */
    public function setLabelPrintingOrientation($labelPrintingOrientation)
    {
        $this->__set('LabelPrintingOrientation', $labelPrintingOrientation);
        $this->LabelPrintingOrientation = $labelPrintingOrientation;
        return $this;
    }
    
    /**
     * Returns This indicates if the top or bottom of the label comes out of the printer first.
     *
     * @return \FedEx\ShipService\SimpleType\LabelPrintingOrientationType|string
     */
    public function getLabelPrintingOrientation()
    {
        return $this->LabelPrintingOrientation;
    }
    
    /**
     * Specifies the order in which the labels are requested to be returned
     *
     * @param \FedEx\ShipService\SimpleType\LabelOrderType|string $labelOrder
     * @return LabelSpecification
     */
    public function setLabelOrder($labelOrder)
    {
        $this->__set('LabelOrder', $labelOrder);
        $this->LabelOrder = $labelOrder;
        return $this;
    }
    
    /**
     * Returns Specifies the order in which the labels are requested to be returned
     *
     * @return \FedEx\ShipService\SimpleType\LabelOrderType|string
     */
    public function getLabelOrder()
    {
        return $this->LabelOrder;
    }
    
    /**
     * If present, this contact and address information will replace the return address information on the label.
     *
     * @param ContactAndAddress $printedLabelOrigin
     * @return LabelSpecification
     */
    public function setPrintedLabelOrigin(ContactAndAddress $printedLabelOrigin)
    {
        $this->__set('PrintedLabelOrigin', $printedLabelOrigin);
        $this->PrintedLabelOrigin = $printedLabelOrigin;
        return $this;
    }
    
    /**
     * Returns If present, this contact and address information will replace the return address information on the label.
     *
     * @return ContactAndAddress
     */
    public function getPrintedLabelOrigin()
    {
        return $this->PrintedLabelOrigin;
    }
    
    /**
     * Allows customer-specified control of label content.
     *
     * @param CustomerSpecifiedLabelDetail $customerSpecifiedDetail
     * @return LabelSpecification
     */
    public function setCustomerSpecifiedDetail(CustomerSpecifiedLabelDetail $customerSpecifiedDetail)
    {
        $this->__set('CustomerSpecifiedDetail', $customerSpecifiedDetail);
        $this->CustomerSpecifiedDetail = $customerSpecifiedDetail;
        return $this;
    }
    
    /**
     * Returns Allows customer-specified control of label content.
     *
     * @return CustomerSpecifiedLabelDetail
     */
    public function getCustomerSpecifiedDetail()
    {
        return $this->CustomerSpecifiedDetail;
    }
    

    
}