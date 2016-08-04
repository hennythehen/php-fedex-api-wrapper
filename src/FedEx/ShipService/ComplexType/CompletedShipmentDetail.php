<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CompletedShipmentDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CompletedShipmentDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'UsDomestic' => 'boolean',
'CarrierCode' => 'CarrierCodeType',
'MasterTrackingId' => 'TrackingId',
'ServiceTypeDescription' => 'string',
'PackagingDescription' => 'string',
'OperationalDetail' => 'ShipmentOperationalDetail',
'AccessDetail' => 'PendingShipmentAccessDetail',
'TagDetail' => 'CompletedTagDetail',
'SmartPostDetail' => 'CompletedSmartPostDetail',
'HazardousShipmentDetail' => 'CompletedHazardousShipmentDetail',
'ShipmentRating' => 'ShipmentRating',
'CompletedHoldAtLocationDetail' => 'CompletedHoldAtLocationDetail',
'ExportComplianceStatement' => 'string',
'CompletedEtdDetail' => 'CompletedEtdDetail',
'ShipmentDocuments' => 'ShippingDocument',
'AssociatedShipments' => 'AssociatedShipmentDetail',
'CompletedCodDetail' => 'CompletedCodDetail',
'CompletedPackageDetails' => 'CompletedPackageDetail',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CompletedShipmentDetail';

        
    /**
     * @var boolean
     */
    public $UsDomestic;

        
    /**
     * @var \FedEx\ShipService\SimpleType\CarrierCodeType|string
     */
    public $CarrierCode;

        
    /**
     * @var TrackingId
     */
    public $MasterTrackingId;

        
    /**
     * @var string
     */
    public $ServiceTypeDescription;

        
    /**
     * @var string
     */
    public $PackagingDescription;

        
    /**
     * @var ShipmentOperationalDetail
     */
    public $OperationalDetail;

        
    /**
     * @var PendingShipmentAccessDetail
     */
    public $AccessDetail;

        
    /**
     * @var CompletedTagDetail
     */
    public $TagDetail;

        
    /**
     * @var CompletedSmartPostDetail
     */
    public $SmartPostDetail;

        
    /**
     * @var CompletedHazardousShipmentDetail
     */
    public $HazardousShipmentDetail;

        
    /**
     * @var ShipmentRating
     */
    public $ShipmentRating;

        
    /**
     * @var CompletedHoldAtLocationDetail
     */
    public $CompletedHoldAtLocationDetail;

        
    /**
     * @var string
     */
    public $ExportComplianceStatement;

        
    /**
     * @var CompletedEtdDetail
     */
    public $CompletedEtdDetail;

        
    /**
     * @var ShippingDocument[]
     */
    public $ShipmentDocuments = array();

        
    /**
     * @var AssociatedShipmentDetail[]
     */
    public $AssociatedShipments = array();

        
    /**
     * @var CompletedCodDetail
     */
    public $CompletedCodDetail;

        
    /**
     * @var CompletedPackageDetail[]
     */
    public $CompletedPackageDetails = array();



    /**
     * Indicates whether or not this is a US Domestic shipment.
     *
     * @param boolean $usDomestic
     * @return CompletedShipmentDetail
     */
    public function setUsDomestic($usDomestic)
    {
        $this->__set('UsDomestic', $usDomestic);
        $this->UsDomestic = $usDomestic;
        return $this;
    }
    
    /**
     * Returns Indicates whether or not this is a US Domestic shipment.
     *
     * @return boolean
     */
    public function getUsDomestic()
    {
        return $this->UsDomestic;
    }
    
    /**
     * Indicates the carrier that will be used to deliver this shipment.
     *
     * @param \FedEx\ShipService\SimpleType\CarrierCodeType|string $carrierCode
     * @return CompletedShipmentDetail
     */
    public function setCarrierCode($carrierCode)
    {
        $this->__set('CarrierCode', $carrierCode);
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    
    /**
     * Returns Indicates the carrier that will be used to deliver this shipment.
     *
     * @return \FedEx\ShipService\SimpleType\CarrierCodeType|string
     */
    public function getCarrierCode()
    {
        return $this->CarrierCode;
    }
    
    /**
     * The master tracking number and form id of this multiple piece shipment. This information is to be provided for each subsequent of a multiple piece shipment.
     *
     * @param TrackingId $masterTrackingId
     * @return CompletedShipmentDetail
     */
    public function setMasterTrackingId(TrackingId $masterTrackingId)
    {
        $this->__set('MasterTrackingId', $masterTrackingId);
        $this->MasterTrackingId = $masterTrackingId;
        return $this;
    }
    
    /**
     * Returns The master tracking number and form id of this multiple piece shipment. This information is to be provided for each subsequent of a multiple piece shipment.
     *
     * @return TrackingId
     */
    public function getMasterTrackingId()
    {
        return $this->MasterTrackingId;
    }
    
    /**
     * Description of the FedEx service used for this shipment. Currently not supported.
     *
     * @param string $serviceTypeDescription
     * @return CompletedShipmentDetail
     */
    public function setServiceTypeDescription($serviceTypeDescription)
    {
        $this->__set('ServiceTypeDescription', $serviceTypeDescription);
        $this->ServiceTypeDescription = $serviceTypeDescription;
        return $this;
    }
    
    /**
     * Returns Description of the FedEx service used for this shipment. Currently not supported.
     *
     * @return string
     */
    public function getServiceTypeDescription()
    {
        return $this->ServiceTypeDescription;
    }
    
    /**
     * Description of the packaging used for this shipment. Currently not supported.
     *
     * @param string $packagingDescription
     * @return CompletedShipmentDetail
     */
    public function setPackagingDescription($packagingDescription)
    {
        $this->__set('PackagingDescription', $packagingDescription);
        $this->PackagingDescription = $packagingDescription;
        return $this;
    }
    
    /**
     * Returns Description of the packaging used for this shipment. Currently not supported.
     *
     * @return string
     */
    public function getPackagingDescription()
    {
        return $this->PackagingDescription;
    }
    
    /**
     * Set OperationalDetail
     *
     * @param ShipmentOperationalDetail $operationalDetail
     * @return CompletedShipmentDetail
     */
    public function setOperationalDetail(ShipmentOperationalDetail $operationalDetail)
    {
        $this->__set('OperationalDetail', $operationalDetail);
        $this->OperationalDetail = $operationalDetail;
        return $this;
    }
    
    /**
     * Returns Set OperationalDetail
     *
     * @return ShipmentOperationalDetail
     */
    public function getOperationalDetail()
    {
        return $this->OperationalDetail;
    }
    
    /**
     * Only used with pending shipments.
     *
     * @param PendingShipmentAccessDetail $accessDetail
     * @return CompletedShipmentDetail
     */
    public function setAccessDetail(PendingShipmentAccessDetail $accessDetail)
    {
        $this->__set('AccessDetail', $accessDetail);
        $this->AccessDetail = $accessDetail;
        return $this;
    }
    
    /**
     * Returns Only used with pending shipments.
     *
     * @return PendingShipmentAccessDetail
     */
    public function getAccessDetail()
    {
        return $this->AccessDetail;
    }
    
    /**
     * Only used in the reply to tag requests.
     *
     * @param CompletedTagDetail $tagDetail
     * @return CompletedShipmentDetail
     */
    public function setTagDetail(CompletedTagDetail $tagDetail)
    {
        $this->__set('TagDetail', $tagDetail);
        $this->TagDetail = $tagDetail;
        return $this;
    }
    
    /**
     * Returns Only used in the reply to tag requests.
     *
     * @return CompletedTagDetail
     */
    public function getTagDetail()
    {
        return $this->TagDetail;
    }
    
    /**
     * Provides reply information specific to SmartPost shipments.
     *
     * @param CompletedSmartPostDetail $smartPostDetail
     * @return CompletedShipmentDetail
     */
    public function setSmartPostDetail(CompletedSmartPostDetail $smartPostDetail)
    {
        $this->__set('SmartPostDetail', $smartPostDetail);
        $this->SmartPostDetail = $smartPostDetail;
        return $this;
    }
    
    /**
     * Returns Provides reply information specific to SmartPost shipments.
     *
     * @return CompletedSmartPostDetail
     */
    public function getSmartPostDetail()
    {
        return $this->SmartPostDetail;
    }
    
    /**
     * Computed shipment level information about hazarous commodities.
     *
     * @param CompletedHazardousShipmentDetail $hazardousShipmentDetail
     * @return CompletedShipmentDetail
     */
    public function setHazardousShipmentDetail(CompletedHazardousShipmentDetail $hazardousShipmentDetail)
    {
        $this->__set('HazardousShipmentDetail', $hazardousShipmentDetail);
        $this->HazardousShipmentDetail = $hazardousShipmentDetail;
        return $this;
    }
    
    /**
     * Returns Computed shipment level information about hazarous commodities.
     *
     * @return CompletedHazardousShipmentDetail
     */
    public function getHazardousShipmentDetail()
    {
        return $this->HazardousShipmentDetail;
    }
    
    /**
     * All shipment-level rating data for this shipment, which may include data for multiple rate types.
     *
     * @param ShipmentRating $shipmentRating
     * @return CompletedShipmentDetail
     */
    public function setShipmentRating(ShipmentRating $shipmentRating)
    {
        $this->__set('ShipmentRating', $shipmentRating);
        $this->ShipmentRating = $shipmentRating;
        return $this;
    }
    
    /**
     * Returns All shipment-level rating data for this shipment, which may include data for multiple rate types.
     *
     * @return ShipmentRating
     */
    public function getShipmentRating()
    {
        return $this->ShipmentRating;
    }
    
    /**
     * Returns the default holding location information when HOLD_AT_LOCATION special service is requested and the client does not specify the hold location address.
     *
     * @param CompletedHoldAtLocationDetail $completedHoldAtLocationDetail
     * @return CompletedShipmentDetail
     */
    public function setCompletedHoldAtLocationDetail(CompletedHoldAtLocationDetail $completedHoldAtLocationDetail)
    {
        $this->__set('CompletedHoldAtLocationDetail', $completedHoldAtLocationDetail);
        $this->CompletedHoldAtLocationDetail = $completedHoldAtLocationDetail;
        return $this;
    }
    
    /**
     * Returns Returns the default holding location information when HOLD_AT_LOCATION special service is requested and the client does not specify the hold location address.
     *
     * @return CompletedHoldAtLocationDetail
     */
    public function getCompletedHoldAtLocationDetail()
    {
        return $this->CompletedHoldAtLocationDetail;
    }
    
    /**
     * Returns any defaults or updates applied to RequestedShipment.exportDetail.exportComplianceStatement.
     *
     * @param string $exportComplianceStatement
     * @return CompletedShipmentDetail
     */
    public function setExportComplianceStatement($exportComplianceStatement)
    {
        $this->__set('ExportComplianceStatement', $exportComplianceStatement);
        $this->ExportComplianceStatement = $exportComplianceStatement;
        return $this;
    }
    
    /**
     * Returns Returns any defaults or updates applied to RequestedShipment.exportDetail.exportComplianceStatement.
     *
     * @return string
     */
    public function getExportComplianceStatement()
    {
        return $this->ExportComplianceStatement;
    }
    
    /**
     * Set CompletedEtdDetail
     *
     * @param CompletedEtdDetail $completedEtdDetail
     * @return CompletedShipmentDetail
     */
    public function setCompletedEtdDetail(CompletedEtdDetail $completedEtdDetail)
    {
        $this->__set('CompletedEtdDetail', $completedEtdDetail);
        $this->CompletedEtdDetail = $completedEtdDetail;
        return $this;
    }
    
    /**
     * Returns Set CompletedEtdDetail
     *
     * @return CompletedEtdDetail
     */
    public function getCompletedEtdDetail()
    {
        return $this->CompletedEtdDetail;
    }
    
    /**
     * All shipment-level shipping documents (other than labels and barcodes).
     *
     * @param ShippingDocument[] $shipmentDocuments
     * @return CompletedShipmentDetail
     */
    public function setShipmentDocuments(array $shipmentDocuments)
    {
        $this->__set('ShipmentDocuments', $shipmentDocuments);
        $this->ShipmentDocuments = $shipmentDocuments;
        return $this;
    }
    
    /**
     * Returns All shipment-level shipping documents (other than labels and barcodes).
     *
     * @return ShippingDocument[]
     */
    public function getShipmentDocuments()
    {
        return $this->ShipmentDocuments;
    }
    
    /**
     * Set AssociatedShipments
     *
     * @param AssociatedShipmentDetail[] $associatedShipments
     * @return CompletedShipmentDetail
     */
    public function setAssociatedShipments(array $associatedShipments)
    {
        $this->__set('AssociatedShipments', $associatedShipments);
        $this->AssociatedShipments = $associatedShipments;
        return $this;
    }
    
    /**
     * Returns Set AssociatedShipments
     *
     * @return AssociatedShipmentDetail[]
     */
    public function getAssociatedShipments()
    {
        return $this->AssociatedShipments;
    }
    
    /**
     * Set CompletedCodDetail
     *
     * @param CompletedCodDetail $completedCodDetail
     * @return CompletedShipmentDetail
     */
    public function setCompletedCodDetail(CompletedCodDetail $completedCodDetail)
    {
        $this->__set('CompletedCodDetail', $completedCodDetail);
        $this->CompletedCodDetail = $completedCodDetail;
        return $this;
    }
    
    /**
     * Returns Set CompletedCodDetail
     *
     * @return CompletedCodDetail
     */
    public function getCompletedCodDetail()
    {
        return $this->CompletedCodDetail;
    }
    
    /**
     * Package level details about this package.
     *
     * @param CompletedPackageDetail[] $completedPackageDetails
     * @return CompletedShipmentDetail
     */
    public function setCompletedPackageDetails(array $completedPackageDetails)
    {
        $this->__set('CompletedPackageDetails', $completedPackageDetails);
        $this->CompletedPackageDetails = $completedPackageDetails;
        return $this;
    }
    
    /**
     * Returns Package level details about this package.
     *
     * @return CompletedPackageDetail[]
     */
    public function getCompletedPackageDetails()
    {
        return $this->CompletedPackageDetails;
    }
    

    
}