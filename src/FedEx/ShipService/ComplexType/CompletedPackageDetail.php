<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CompletedPackageDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CompletedPackageDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'SequenceNumber' => 'positiveInteger',
'TrackingIds' => 'TrackingId',
'GroupNumber' => 'nonNegativeInteger',
'OversizeClass' => 'OversizeClassType',
'PackageRating' => 'PackageRating',
'OperationalDetail' => 'PackageOperationalDetail',
'Label' => 'ShippingDocument',
'PackageDocuments' => 'ShippingDocument',
'CodReturnDetail' => 'CodReturnPackageDetail',
'SignatureOption' => 'SignatureOptionType',
'DryIceWeight' => 'Weight',
'HazardousPackageDetail' => 'CompletedHazardousPackageDetail',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CompletedPackageDetail';

        
    /**
     * @var positiveInteger
     */
    public $SequenceNumber;

        
    /**
     * @var TrackingId[]
     */
    public $TrackingIds = array();

        
    /**
     * @var nonNegativeInteger
     */
    public $GroupNumber;

        
    /**
     * @var \FedEx\ShipService\SimpleType\OversizeClassType|string
     */
    public $OversizeClass;

        
    /**
     * @var PackageRating
     */
    public $PackageRating;

        
    /**
     * @var PackageOperationalDetail
     */
    public $OperationalDetail;

        
    /**
     * @var ShippingDocument
     */
    public $Label;

        
    /**
     * @var ShippingDocument[]
     */
    public $PackageDocuments = array();

        
    /**
     * @var CodReturnPackageDetail
     */
    public $CodReturnDetail;

        
    /**
     * @var \FedEx\ShipService\SimpleType\SignatureOptionType|string
     */
    public $SignatureOption;

        
    /**
     * @var Weight
     */
    public $DryIceWeight;

        
    /**
     * @var CompletedHazardousPackageDetail
     */
    public $HazardousPackageDetail;



    /**
     * The package sequence number of this package in a multiple piece shipment.
     *
     * @param positiveInteger $sequenceNumber
     * @return CompletedPackageDetail
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->__set('SequenceNumber', $sequenceNumber);
        $this->SequenceNumber = $sequenceNumber;
        return $this;
    }
    
    /**
     * Returns The package sequence number of this package in a multiple piece shipment.
     *
     * @return positiveInteger
     */
    public function getSequenceNumber()
    {
        return $this->SequenceNumber;
    }
    
    /**
     * The Tracking number and form id for this package.
     *
     * @param TrackingId[] $trackingIds
     * @return CompletedPackageDetail
     */
    public function setTrackingIds(array $trackingIds)
    {
        $this->__set('TrackingIds', $trackingIds);
        $this->TrackingIds = $trackingIds;
        return $this;
    }
    
    /**
     * Returns The Tracking number and form id for this package.
     *
     * @return TrackingId[]
     */
    public function getTrackingIds()
    {
        return $this->TrackingIds;
    }
    
    /**
     * Used with request containing PACKAGE_GROUPS, to identify which group of identical packages was used to produce a reply item.
     *
     * @param nonNegativeInteger $groupNumber
     * @return CompletedPackageDetail
     */
    public function setGroupNumber($groupNumber)
    {
        $this->__set('GroupNumber', $groupNumber);
        $this->GroupNumber = $groupNumber;
        return $this;
    }
    
    /**
     * Returns Used with request containing PACKAGE_GROUPS, to identify which group of identical packages was used to produce a reply item.
     *
     * @return nonNegativeInteger
     */
    public function getGroupNumber()
    {
        return $this->GroupNumber;
    }
    
    /**
     * Oversize class for this package.
     *
     * @param \FedEx\ShipService\SimpleType\OversizeClassType|string $oversizeClass
     * @return CompletedPackageDetail
     */
    public function setOversizeClass($oversizeClass)
    {
        $this->__set('OversizeClass', $oversizeClass);
        $this->OversizeClass = $oversizeClass;
        return $this;
    }
    
    /**
     * Returns Oversize class for this package.
     *
     * @return \FedEx\ShipService\SimpleType\OversizeClassType|string
     */
    public function getOversizeClass()
    {
        return $this->OversizeClass;
    }
    
    /**
     * All package-level rating data for this package, which may include data for multiple rate types.
     *
     * @param PackageRating $packageRating
     * @return CompletedPackageDetail
     */
    public function setPackageRating(PackageRating $packageRating)
    {
        $this->__set('PackageRating', $packageRating);
        $this->PackageRating = $packageRating;
        return $this;
    }
    
    /**
     * Returns All package-level rating data for this package, which may include data for multiple rate types.
     *
     * @return PackageRating
     */
    public function getPackageRating()
    {
        return $this->PackageRating;
    }
    
    /**
     * Set OperationalDetail
     *
     * @param PackageOperationalDetail $operationalDetail
     * @return CompletedPackageDetail
     */
    public function setOperationalDetail(PackageOperationalDetail $operationalDetail)
    {
        $this->__set('OperationalDetail', $operationalDetail);
        $this->OperationalDetail = $operationalDetail;
        return $this;
    }
    
    /**
     * Returns Set OperationalDetail
     *
     * @return PackageOperationalDetail
     */
    public function getOperationalDetail()
    {
        return $this->OperationalDetail;
    }
    
    /**
     * The label image or printer commands to print the label.
     *
     * @param ShippingDocument $label
     * @return CompletedPackageDetail
     */
    public function setLabel(ShippingDocument $label)
    {
        $this->__set('Label', $label);
        $this->Label = $label;
        return $this;
    }
    
    /**
     * Returns The label image or printer commands to print the label.
     *
     * @return ShippingDocument
     */
    public function getLabel()
    {
        return $this->Label;
    }
    
    /**
     * All package-level shipping documents (other than labels and barcodes). For use in loads after January, 2008.
     *
     * @param ShippingDocument[] $packageDocuments
     * @return CompletedPackageDetail
     */
    public function setPackageDocuments(array $packageDocuments)
    {
        $this->__set('PackageDocuments', $packageDocuments);
        $this->PackageDocuments = $packageDocuments;
        return $this;
    }
    
    /**
     * Returns All package-level shipping documents (other than labels and barcodes). For use in loads after January, 2008.
     *
     * @return ShippingDocument[]
     */
    public function getPackageDocuments()
    {
        return $this->PackageDocuments;
    }
    
    /**
     * Specifies the information associated with this package that has COD special service in a ground shipment.
     *
     * @param CodReturnPackageDetail $codReturnDetail
     * @return CompletedPackageDetail
     */
    public function setCodReturnDetail(CodReturnPackageDetail $codReturnDetail)
    {
        $this->__set('CodReturnDetail', $codReturnDetail);
        $this->CodReturnDetail = $codReturnDetail;
        return $this;
    }
    
    /**
     * Returns Specifies the information associated with this package that has COD special service in a ground shipment.
     *
     * @return CodReturnPackageDetail
     */
    public function getCodReturnDetail()
    {
        return $this->CodReturnDetail;
    }
    
    /**
     * Actual signature option applied, to allow for cases in which the original value conflicted with other service features in the shipment.
     *
     * @param \FedEx\ShipService\SimpleType\SignatureOptionType|string $signatureOption
     * @return CompletedPackageDetail
     */
    public function setSignatureOption($signatureOption)
    {
        $this->__set('SignatureOption', $signatureOption);
        $this->SignatureOption = $signatureOption;
        return $this;
    }
    
    /**
     * Returns Actual signature option applied, to allow for cases in which the original value conflicted with other service features in the shipment.
     *
     * @return \FedEx\ShipService\SimpleType\SignatureOptionType|string
     */
    public function getSignatureOption()
    {
        return $this->SignatureOption;
    }
    
    /**
     * Set DryIceWeight
     *
     * @param Weight $dryIceWeight
     * @return CompletedPackageDetail
     */
    public function setDryIceWeight(Weight $dryIceWeight)
    {
        $this->__set('DryIceWeight', $dryIceWeight);
        $this->DryIceWeight = $dryIceWeight;
        return $this;
    }
    
    /**
     * Returns Set DryIceWeight
     *
     * @return Weight
     */
    public function getDryIceWeight()
    {
        return $this->DryIceWeight;
    }
    
    /**
     * Documents the kinds and quantities of all hazardous commodities in the current package, using updated hazardous commodity description data.
     *
     * @param CompletedHazardousPackageDetail $hazardousPackageDetail
     * @return CompletedPackageDetail
     */
    public function setHazardousPackageDetail(CompletedHazardousPackageDetail $hazardousPackageDetail)
    {
        $this->__set('HazardousPackageDetail', $hazardousPackageDetail);
        $this->HazardousPackageDetail = $hazardousPackageDetail;
        return $this;
    }
    
    /**
     * Returns Documents the kinds and quantities of all hazardous commodities in the current package, using updated hazardous commodity description data.
     *
     * @return CompletedHazardousPackageDetail
     */
    public function getHazardousPackageDetail()
    {
        return $this->HazardousPackageDetail;
    }
    

    
}