<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * LabelSpecification
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class LabelSpecification
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'LabelFormatType' => 'LabelFormatType',
'ImageType' => 'ShippingDocumentImageType',
'LabelStockType' => 'LabelStockType',
'LabelPrintingOrientation' => 'LabelPrintingOrientationType',
'LabelRotation' => 'LabelRotationType',
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
     * @var \FedEx\RateService\SimpleType\LabelFormatType|string
     */
    public $LabelFormatType;

        
    /**
     * @var \FedEx\RateService\SimpleType\ShippingDocumentImageType|string
     */
    public $ImageType;

        
    /**
     * @var \FedEx\RateService\SimpleType\LabelStockType|string
     */
    public $LabelStockType;

        
    /**
     * @var \FedEx\RateService\SimpleType\LabelPrintingOrientationType|string
     */
    public $LabelPrintingOrientation;

        
    /**
     * @var \FedEx\RateService\SimpleType\LabelRotationType|string
     */
    public $LabelRotation;

        
    /**
     * @var \FedEx\RateService\SimpleType\LabelOrderType|string
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
     * Set LabelFormatType
     *
     * @param \FedEx\RateService\SimpleType\LabelFormatType|string $labelFormatType
     * @return LabelSpecification
     */
    public function setLabelFormatType($labelFormatType)
    {
        $this->__set('LabelFormatType', $labelFormatType);
        $this->LabelFormatType = $labelFormatType;
        return $this;
    }
    
    /**
     * Returns Set LabelFormatType
     *
     * @return \FedEx\RateService\SimpleType\LabelFormatType|string
     */
    public function getLabelFormatType()
    {
        return $this->LabelFormatType;
    }
    
    /**
     * Set ImageType
     *
     * @param \FedEx\RateService\SimpleType\ShippingDocumentImageType|string $imageType
     * @return LabelSpecification
     */
    public function setImageType($imageType)
    {
        $this->__set('ImageType', $imageType);
        $this->ImageType = $imageType;
        return $this;
    }
    
    /**
     * Returns Set ImageType
     *
     * @return \FedEx\RateService\SimpleType\ShippingDocumentImageType|string
     */
    public function getImageType()
    {
        return $this->ImageType;
    }
    
    /**
     * Set LabelStockType
     *
     * @param \FedEx\RateService\SimpleType\LabelStockType|string $labelStockType
     * @return LabelSpecification
     */
    public function setLabelStockType($labelStockType)
    {
        $this->__set('LabelStockType', $labelStockType);
        $this->LabelStockType = $labelStockType;
        return $this;
    }
    
    /**
     * Returns Set LabelStockType
     *
     * @return \FedEx\RateService\SimpleType\LabelStockType|string
     */
    public function getLabelStockType()
    {
        return $this->LabelStockType;
    }
    
    /**
     * Set LabelPrintingOrientation
     *
     * @param \FedEx\RateService\SimpleType\LabelPrintingOrientationType|string $labelPrintingOrientation
     * @return LabelSpecification
     */
    public function setLabelPrintingOrientation($labelPrintingOrientation)
    {
        $this->__set('LabelPrintingOrientation', $labelPrintingOrientation);
        $this->LabelPrintingOrientation = $labelPrintingOrientation;
        return $this;
    }
    
    /**
     * Returns Set LabelPrintingOrientation
     *
     * @return \FedEx\RateService\SimpleType\LabelPrintingOrientationType|string
     */
    public function getLabelPrintingOrientation()
    {
        return $this->LabelPrintingOrientation;
    }
    
    /**
     * Set LabelRotation
     *
     * @param \FedEx\RateService\SimpleType\LabelRotationType|string $labelRotation
     * @return LabelSpecification
     */
    public function setLabelRotation($labelRotation)
    {
        $this->__set('LabelRotation', $labelRotation);
        $this->LabelRotation = $labelRotation;
        return $this;
    }
    
    /**
     * Returns Set LabelRotation
     *
     * @return \FedEx\RateService\SimpleType\LabelRotationType|string
     */
    public function getLabelRotation()
    {
        return $this->LabelRotation;
    }
    
    /**
     * Specifies the order in which the labels are requested to be returned
     *
     * @param \FedEx\RateService\SimpleType\LabelOrderType|string $labelOrder
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
     * @return \FedEx\RateService\SimpleType\LabelOrderType|string
     */
    public function getLabelOrder()
    {
        return $this->LabelOrder;
    }
    
    /**
     * Set PrintedLabelOrigin
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
     * Returns Set PrintedLabelOrigin
     *
     * @return ContactAndAddress
     */
    public function getPrintedLabelOrigin()
    {
        return $this->PrintedLabelOrigin;
    }
    
    /**
     * Set CustomerSpecifiedDetail
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
     * Returns Set CustomerSpecifiedDetail
     *
     * @return CustomerSpecifiedLabelDetail
     */
    public function getCustomerSpecifiedDetail()
    {
        return $this->CustomerSpecifiedDetail;
    }
    

    
}