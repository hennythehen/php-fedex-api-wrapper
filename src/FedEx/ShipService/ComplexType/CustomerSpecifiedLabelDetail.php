<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Allows customer-specified control of label content.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CustomerSpecifiedLabelDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'DocTabContent' => 'DocTabContent',
'CustomContentPosition' => 'RelativeVerticalPositionType',
'CustomContent' => 'CustomLabelDetail',
'ConfigurableReferenceEntries' => 'ConfigurableLabelReferenceEntry',
'MaskedData' => 'LabelMaskableDataType',
'SecondaryBarcode' => 'SecondaryBarcodeType',
'TermsAndConditionsLocalization' => 'Localization',
'RegulatoryLabels' => 'RegulatoryLabelContentDetail',
'AdditionalLabels' => 'AdditionalLabelsDetail',
'AirWaybillSuppressionCount' => 'nonNegativeInteger',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CustomerSpecifiedLabelDetail';

        
    /**
     * @var DocTabContent
     */
    public $DocTabContent;

        
    /**
     * @var \FedEx\ShipService\SimpleType\RelativeVerticalPositionType|string
     */
    public $CustomContentPosition;

        
    /**
     * @var CustomLabelDetail
     */
    public $CustomContent;

        
    /**
     * @var ConfigurableLabelReferenceEntry[]
     */
    public $ConfigurableReferenceEntries = array();

        
    /**
     * @var LabelMaskableDataType[]
     */
    public $MaskedData = array();

        
    /**
     * @var \FedEx\ShipService\SimpleType\SecondaryBarcodeType|string
     */
    public $SecondaryBarcode;

        
    /**
     * @var Localization
     */
    public $TermsAndConditionsLocalization;

        
    /**
     * @var RegulatoryLabelContentDetail[]
     */
    public $RegulatoryLabels = array();

        
    /**
     * @var AdditionalLabelsDetail[]
     */
    public $AdditionalLabels = array();

        
    /**
     * @var nonNegativeInteger
     */
    public $AirWaybillSuppressionCount;



    /**
     * If omitted, no doc tab will be produced (i.e. default is former NONE type).
     *
     * @param DocTabContent $docTabContent
     * @return CustomerSpecifiedLabelDetail
     */
    public function setDocTabContent(DocTabContent $docTabContent)
    {
        $this->__set('DocTabContent', $docTabContent);
        $this->DocTabContent = $docTabContent;
        return $this;
    }
    
    /**
     * Returns If omitted, no doc tab will be produced (i.e. default is former NONE type).
     *
     * @return DocTabContent
     */
    public function getDocTabContent()
    {
        return $this->DocTabContent;
    }
    
    /**
     * Controls the position of the customer specified content relative to the FedEx portion.
     *
     * @param \FedEx\ShipService\SimpleType\RelativeVerticalPositionType|string $customContentPosition
     * @return CustomerSpecifiedLabelDetail
     */
    public function setCustomContentPosition($customContentPosition)
    {
        $this->__set('CustomContentPosition', $customContentPosition);
        $this->CustomContentPosition = $customContentPosition;
        return $this;
    }
    
    /**
     * Returns Controls the position of the customer specified content relative to the FedEx portion.
     *
     * @return \FedEx\ShipService\SimpleType\RelativeVerticalPositionType|string
     */
    public function getCustomContentPosition()
    {
        return $this->CustomContentPosition;
    }
    
    /**
     * Defines any custom content to print on the label.
     *
     * @param CustomLabelDetail $customContent
     * @return CustomerSpecifiedLabelDetail
     */
    public function setCustomContent(CustomLabelDetail $customContent)
    {
        $this->__set('CustomContent', $customContent);
        $this->CustomContent = $customContent;
        return $this;
    }
    
    /**
     * Returns Defines any custom content to print on the label.
     *
     * @return CustomLabelDetail
     */
    public function getCustomContent()
    {
        return $this->CustomContent;
    }
    
    /**
     * Defines additional data to print in the Configurable portion of the label, this allows you to print the same type information on the label that can also be printed on the doc tab.
     *
     * @param ConfigurableLabelReferenceEntry[] $configurableReferenceEntries
     * @return CustomerSpecifiedLabelDetail
     */
    public function setConfigurableReferenceEntries(array $configurableReferenceEntries)
    {
        $this->__set('ConfigurableReferenceEntries', $configurableReferenceEntries);
        $this->ConfigurableReferenceEntries = $configurableReferenceEntries;
        return $this;
    }
    
    /**
     * Returns Defines additional data to print in the Configurable portion of the label, this allows you to print the same type information on the label that can also be printed on the doc tab.
     *
     * @return ConfigurableLabelReferenceEntry[]
     */
    public function getConfigurableReferenceEntries()
    {
        return $this->ConfigurableReferenceEntries;
    }
    
    /**
     * Controls which data/sections will be suppressed.
     *
     * @param LabelMaskableDataType[] $maskedData
     * @return CustomerSpecifiedLabelDetail
     */
    public function setMaskedData(array $maskedData)
    {
        $this->__set('MaskedData', $maskedData);
        $this->MaskedData = $maskedData;
        return $this;
    }
    
    /**
     * Returns Controls which data/sections will be suppressed.
     *
     * @return LabelMaskableDataType[]
     */
    public function getMaskedData()
    {
        return $this->MaskedData;
    }
    
    /**
     * For customers producing their own Ground labels, this field specifies which secondary barcode will be printed on the label; so that the primary barcode produced by FedEx has the correct SCNC.
     *
     * @param \FedEx\ShipService\SimpleType\SecondaryBarcodeType|string $secondaryBarcode
     * @return CustomerSpecifiedLabelDetail
     */
    public function setSecondaryBarcode($secondaryBarcode)
    {
        $this->__set('SecondaryBarcode', $secondaryBarcode);
        $this->SecondaryBarcode = $secondaryBarcode;
        return $this;
    }
    
    /**
     * Returns For customers producing their own Ground labels, this field specifies which secondary barcode will be printed on the label; so that the primary barcode produced by FedEx has the correct SCNC.
     *
     * @return \FedEx\ShipService\SimpleType\SecondaryBarcodeType|string
     */
    public function getSecondaryBarcode()
    {
        return $this->SecondaryBarcode;
    }
    
    /**
     * Set TermsAndConditionsLocalization
     *
     * @param Localization $termsAndConditionsLocalization
     * @return CustomerSpecifiedLabelDetail
     */
    public function setTermsAndConditionsLocalization(Localization $termsAndConditionsLocalization)
    {
        $this->__set('TermsAndConditionsLocalization', $termsAndConditionsLocalization);
        $this->TermsAndConditionsLocalization = $termsAndConditionsLocalization;
        return $this;
    }
    
    /**
     * Returns Set TermsAndConditionsLocalization
     *
     * @return Localization
     */
    public function getTermsAndConditionsLocalization()
    {
        return $this->TermsAndConditionsLocalization;
    }
    
    /**
     * Set RegulatoryLabels
     *
     * @param RegulatoryLabelContentDetail[] $regulatoryLabels
     * @return CustomerSpecifiedLabelDetail
     */
    public function setRegulatoryLabels(array $regulatoryLabels)
    {
        $this->__set('RegulatoryLabels', $regulatoryLabels);
        $this->RegulatoryLabels = $regulatoryLabels;
        return $this;
    }
    
    /**
     * Returns Set RegulatoryLabels
     *
     * @return RegulatoryLabelContentDetail[]
     */
    public function getRegulatoryLabels()
    {
        return $this->RegulatoryLabels;
    }
    
    /**
     * Controls the number of additional copies of supplemental labels.
     *
     * @param AdditionalLabelsDetail[] $additionalLabels
     * @return CustomerSpecifiedLabelDetail
     */
    public function setAdditionalLabels(array $additionalLabels)
    {
        $this->__set('AdditionalLabels', $additionalLabels);
        $this->AdditionalLabels = $additionalLabels;
        return $this;
    }
    
    /**
     * Returns Controls the number of additional copies of supplemental labels.
     *
     * @return AdditionalLabelsDetail[]
     */
    public function getAdditionalLabels()
    {
        return $this->AdditionalLabels;
    }
    
    /**
     * This value reduces the default quantity of destination/consignee air waybill labels. A value of zero indicates no change to default. A minimum of one copy will always be produced.
     *
     * @param nonNegativeInteger $airWaybillSuppressionCount
     * @return CustomerSpecifiedLabelDetail
     */
    public function setAirWaybillSuppressionCount($airWaybillSuppressionCount)
    {
        $this->__set('AirWaybillSuppressionCount', $airWaybillSuppressionCount);
        $this->AirWaybillSuppressionCount = $airWaybillSuppressionCount;
        return $this;
    }
    
    /**
     * Returns This value reduces the default quantity of destination/consignee air waybill labels. A value of zero indicates no change to default. A minimum of one copy will always be produced.
     *
     * @return nonNegativeInteger
     */
    public function getAirWaybillSuppressionCount()
    {
        return $this->AirWaybillSuppressionCount;
    }
    

    
}