<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This class rationalizes RequestedPackage and RequestedPackageSummary from previous interfaces.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class RequestedPackageLineItem
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'SequenceNumber' => 'positiveInteger',
'GroupNumber' => 'nonNegativeInteger',
'GroupPackageCount' => 'nonNegativeInteger',
'VariableHandlingChargeDetail' => 'VariableHandlingChargeDetail',
'InsuredValue' => 'Money',
'Weight' => 'Weight',
'Dimensions' => 'Dimensions',
'PhysicalPackaging' => 'PhysicalPackagingType',
'ItemDescription' => 'string',
'ItemDescriptionForClearance' => 'string',
'CustomerReferences' => 'CustomerReference',
'SpecialServicesRequested' => 'PackageSpecialServicesRequested',
'ContentRecords' => 'ContentRecord',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'RequestedPackageLineItem';

        
    /**
     * @var positiveInteger
     */
    public $SequenceNumber;

        
    /**
     * @var nonNegativeInteger
     */
    public $GroupNumber;

        
    /**
     * @var nonNegativeInteger
     */
    public $GroupPackageCount;

        
    /**
     * @var VariableHandlingChargeDetail
     */
    public $VariableHandlingChargeDetail;

        
    /**
     * @var Money
     */
    public $InsuredValue;

        
    /**
     * @var Weight
     */
    public $Weight;

        
    /**
     * @var Dimensions
     */
    public $Dimensions;

        
    /**
     * @var \FedEx\ShipService\SimpleType\PhysicalPackagingType|string
     */
    public $PhysicalPackaging;

        
    /**
     * @var string
     */
    public $ItemDescription;

        
    /**
     * @var string
     */
    public $ItemDescriptionForClearance;

        
    /**
     * @var CustomerReference[]
     */
    public $CustomerReferences = array();

        
    /**
     * @var PackageSpecialServicesRequested
     */
    public $SpecialServicesRequested;

        
    /**
     * @var ContentRecord[]
     */
    public $ContentRecords = array();



    /**
     * Used only with INDIVIDUAL_PACKAGE, as a unique identifier of each requested package.
     *
     * @param positiveInteger $sequenceNumber
     * @return RequestedPackageLineItem
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->__set('SequenceNumber', $sequenceNumber);
        $this->SequenceNumber = $sequenceNumber;
        return $this;
    }
    
    /**
     * Returns Used only with INDIVIDUAL_PACKAGE, as a unique identifier of each requested package.
     *
     * @return positiveInteger
     */
    public function getSequenceNumber()
    {
        return $this->SequenceNumber;
    }
    
    /**
     * Used only with PACKAGE_GROUPS, as a unique identifier of each group of identical packages.
     *
     * @param nonNegativeInteger $groupNumber
     * @return RequestedPackageLineItem
     */
    public function setGroupNumber($groupNumber)
    {
        $this->__set('GroupNumber', $groupNumber);
        $this->GroupNumber = $groupNumber;
        return $this;
    }
    
    /**
     * Returns Used only with PACKAGE_GROUPS, as a unique identifier of each group of identical packages.
     *
     * @return nonNegativeInteger
     */
    public function getGroupNumber()
    {
        return $this->GroupNumber;
    }
    
    /**
     * Used only with PACKAGE_GROUPS, as a count of packages within a group of identical packages.
     *
     * @param nonNegativeInteger $groupPackageCount
     * @return RequestedPackageLineItem
     */
    public function setGroupPackageCount($groupPackageCount)
    {
        $this->__set('GroupPackageCount', $groupPackageCount);
        $this->GroupPackageCount = $groupPackageCount;
        return $this;
    }
    
    /**
     * Returns Used only with PACKAGE_GROUPS, as a count of packages within a group of identical packages.
     *
     * @return nonNegativeInteger
     */
    public function getGroupPackageCount()
    {
        return $this->GroupPackageCount;
    }
    
    /**
     * Set VariableHandlingChargeDetail
     *
     * @param VariableHandlingChargeDetail $variableHandlingChargeDetail
     * @return RequestedPackageLineItem
     */
    public function setVariableHandlingChargeDetail(VariableHandlingChargeDetail $variableHandlingChargeDetail)
    {
        $this->__set('VariableHandlingChargeDetail', $variableHandlingChargeDetail);
        $this->VariableHandlingChargeDetail = $variableHandlingChargeDetail;
        return $this;
    }
    
    /**
     * Returns Set VariableHandlingChargeDetail
     *
     * @return VariableHandlingChargeDetail
     */
    public function getVariableHandlingChargeDetail()
    {
        return $this->VariableHandlingChargeDetail;
    }
    
    /**
     * Specifies the declared value for carriage of the package. The declared value for carriage represents the maximum liability of FedEx in connection with a shipment, including, but not limited to, any loss, damage, delay, mis-delivery, nondelivery, misinformation, any failure to provide information, or mis-delivery of information relating to the package. This field is only used for INDIVIDUAL_PACKAGES and PACKAGE_GROUPS. Ignored for PACKAGE_SUMMARY, in which case totalInsuredValue and packageCount on the shipment will be used to determine this value.
     *
     * @param Money $insuredValue
     * @return RequestedPackageLineItem
     */
    public function setInsuredValue(Money $insuredValue)
    {
        $this->__set('InsuredValue', $insuredValue);
        $this->InsuredValue = $insuredValue;
        return $this;
    }
    
    /**
     * Returns Specifies the declared value for carriage of the package. The declared value for carriage represents the maximum liability of FedEx in connection with a shipment, including, but not limited to, any loss, damage, delay, mis-delivery, nondelivery, misinformation, any failure to provide information, or mis-delivery of information relating to the package. This field is only used for INDIVIDUAL_PACKAGES and PACKAGE_GROUPS. Ignored for PACKAGE_SUMMARY, in which case totalInsuredValue and packageCount on the shipment will be used to determine this value.
     *
     * @return Money
     */
    public function getInsuredValue()
    {
        return $this->InsuredValue;
    }
    
    /**
     * Only used for INDIVIDUAL_PACKAGES and PACKAGE_GROUPS. Ignored for PACKAGE_SUMMARY, in which case total weight and packageCount on the shipment will be used to determine this value.
     *
     * @param Weight $weight
     * @return RequestedPackageLineItem
     */
    public function setWeight(Weight $weight)
    {
        $this->__set('Weight', $weight);
        $this->Weight = $weight;
        return $this;
    }
    
    /**
     * Returns Only used for INDIVIDUAL_PACKAGES and PACKAGE_GROUPS. Ignored for PACKAGE_SUMMARY, in which case total weight and packageCount on the shipment will be used to determine this value.
     *
     * @return Weight
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    
    /**
     * Set Dimensions
     *
     * @param Dimensions $dimensions
     * @return RequestedPackageLineItem
     */
    public function setDimensions(Dimensions $dimensions)
    {
        $this->__set('Dimensions', $dimensions);
        $this->Dimensions = $dimensions;
        return $this;
    }
    
    /**
     * Returns Set Dimensions
     *
     * @return Dimensions
     */
    public function getDimensions()
    {
        return $this->Dimensions;
    }
    
    /**
     * Provides additional detail on how the customer has physically packaged this item. As of June 2009, required for packages moving under international and SmartPost services.
     *
     * @param \FedEx\ShipService\SimpleType\PhysicalPackagingType|string $physicalPackaging
     * @return RequestedPackageLineItem
     */
    public function setPhysicalPackaging($physicalPackaging)
    {
        $this->__set('PhysicalPackaging', $physicalPackaging);
        $this->PhysicalPackaging = $physicalPackaging;
        return $this;
    }
    
    /**
     * Returns Provides additional detail on how the customer has physically packaged this item. As of June 2009, required for packages moving under international and SmartPost services.
     *
     * @return \FedEx\ShipService\SimpleType\PhysicalPackagingType|string
     */
    public function getPhysicalPackaging()
    {
        return $this->PhysicalPackaging;
    }
    
    /**
     * Human-readable text describing the package.
     *
     * @param string $itemDescription
     * @return RequestedPackageLineItem
     */
    public function setItemDescription($itemDescription)
    {
        $this->__set('ItemDescription', $itemDescription);
        $this->ItemDescription = $itemDescription;
        return $this;
    }
    
    /**
     * Returns Human-readable text describing the package.
     *
     * @return string
     */
    public function getItemDescription()
    {
        return $this->ItemDescription;
    }
    
    /**
     * Human-readable text describing the contents of the package to be used for clearance purposes.
     *
     * @param string $itemDescriptionForClearance
     * @return RequestedPackageLineItem
     */
    public function setItemDescriptionForClearance($itemDescriptionForClearance)
    {
        $this->__set('ItemDescriptionForClearance', $itemDescriptionForClearance);
        $this->ItemDescriptionForClearance = $itemDescriptionForClearance;
        return $this;
    }
    
    /**
     * Returns Human-readable text describing the contents of the package to be used for clearance purposes.
     *
     * @return string
     */
    public function getItemDescriptionForClearance()
    {
        return $this->ItemDescriptionForClearance;
    }
    
    /**
     * Set CustomerReferences
     *
     * @param CustomerReference[] $customerReferences
     * @return RequestedPackageLineItem
     */
    public function setCustomerReferences(array $customerReferences)
    {
        $this->__set('CustomerReferences', $customerReferences);
        $this->CustomerReferences = $customerReferences;
        return $this;
    }
    
    /**
     * Returns Set CustomerReferences
     *
     * @return CustomerReference[]
     */
    public function getCustomerReferences()
    {
        return $this->CustomerReferences;
    }
    
    /**
     * Set SpecialServicesRequested
     *
     * @param PackageSpecialServicesRequested $specialServicesRequested
     * @return RequestedPackageLineItem
     */
    public function setSpecialServicesRequested(PackageSpecialServicesRequested $specialServicesRequested)
    {
        $this->__set('SpecialServicesRequested', $specialServicesRequested);
        $this->SpecialServicesRequested = $specialServicesRequested;
        return $this;
    }
    
    /**
     * Returns Set SpecialServicesRequested
     *
     * @return PackageSpecialServicesRequested
     */
    public function getSpecialServicesRequested()
    {
        return $this->SpecialServicesRequested;
    }
    
    /**
     * Only used for INDIVIDUAL_PACKAGES and PACKAGE_GROUPS.
     *
     * @param ContentRecord[] $contentRecords
     * @return RequestedPackageLineItem
     */
    public function setContentRecords(array $contentRecords)
    {
        $this->__set('ContentRecords', $contentRecords);
        $this->ContentRecords = $contentRecords;
        return $this;
    }
    
    /**
     * Returns Only used for INDIVIDUAL_PACKAGES and PACKAGE_GROUPS.
     *
     * @return ContentRecord[]
     */
    public function getContentRecords()
    {
        return $this->ContentRecords;
    }
    

    
}