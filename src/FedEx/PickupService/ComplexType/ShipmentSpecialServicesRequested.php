<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These special services are available at the shipment level for some or all service types. If the shipper is requesting a special service which requires additional data (such as the COD amount), the shipment special service type must be present in the specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object below.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class ShipmentSpecialServicesRequested
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'SpecialServiceTypes' => 'ShipmentSpecialServiceType',
'CodDetail' => 'CodDetail',
'DeliveryOnInvoiceAcceptanceDetail' => 'DeliveryOnInvoiceAcceptanceDetail',
'HoldAtLocationDetail' => 'HoldAtLocationDetail',
'EMailNotificationDetail' => 'EMailNotificationDetail',
'ReturnShipmentDetail' => 'ReturnShipmentDetail',
'PendingShipmentDetail' => 'PendingShipmentDetail',
'InternationalControlledExportDetail' => 'InternationalControlledExportDetail',
'InternationalTrafficInArmsRegulationsDetail' => 'InternationalTrafficInArmsRegulationsDetail',
'ShipmentDryIceDetail' => 'ShipmentDryIceDetail',
'HomeDeliveryPremiumDetail' => 'HomeDeliveryPremiumDetail',
'FlatbedTrailerDetail' => 'FlatbedTrailerDetail',
'FreightGuaranteeDetail' => 'FreightGuaranteeDetail',
'EtdDetail' => 'EtdDetail',
'ExtraLaborDetail' => 'ExtraLaborDetail',
'PalletShrinkwrapDetail' => 'PalletShrinkwrapDetail',
'PalletsProvidedDetail' => 'PalletsProvidedDetail',
'DetentionDetail' => 'DetentionDetail',
'MarkingOrTaggingDetail' => 'MarkingOrTaggingDetail',
'NonBusinessTimeDetail' => 'NonBusinessTimeDetail',
'ShipmentAssemblyDetail' => 'ShipmentAssemblyDetail',
'SortAndSegregateDetail' => 'SortAndSegregateDetail',
'SpecialEquipmentDetail' => 'SpecialEquipmentDetail',
'StorageDetail' => 'StorageDetail',
'WeighingDetail' => 'WeighingDetail',
'CustomDeliveryWindowDetail' => 'CustomDeliveryWindowDetail',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ShipmentSpecialServicesRequested';

        
    /**
     * @var ShipmentSpecialServiceType[]
     */
    public $SpecialServiceTypes = array();

        
    /**
     * @var CodDetail
     */
    public $CodDetail;

        
    /**
     * @var DeliveryOnInvoiceAcceptanceDetail
     */
    public $DeliveryOnInvoiceAcceptanceDetail;

        
    /**
     * @var HoldAtLocationDetail
     */
    public $HoldAtLocationDetail;

        
    /**
     * @var EMailNotificationDetail
     */
    public $EMailNotificationDetail;

        
    /**
     * @var ReturnShipmentDetail
     */
    public $ReturnShipmentDetail;

        
    /**
     * @var PendingShipmentDetail
     */
    public $PendingShipmentDetail;

        
    /**
     * @var InternationalControlledExportDetail
     */
    public $InternationalControlledExportDetail;

        
    /**
     * @var InternationalTrafficInArmsRegulationsDetail
     */
    public $InternationalTrafficInArmsRegulationsDetail;

        
    /**
     * @var ShipmentDryIceDetail
     */
    public $ShipmentDryIceDetail;

        
    /**
     * @var HomeDeliveryPremiumDetail
     */
    public $HomeDeliveryPremiumDetail;

        
    /**
     * @var FlatbedTrailerDetail
     */
    public $FlatbedTrailerDetail;

        
    /**
     * @var FreightGuaranteeDetail
     */
    public $FreightGuaranteeDetail;

        
    /**
     * @var EtdDetail
     */
    public $EtdDetail;

        
    /**
     * @var ExtraLaborDetail
     */
    public $ExtraLaborDetail;

        
    /**
     * @var PalletShrinkwrapDetail
     */
    public $PalletShrinkwrapDetail;

        
    /**
     * @var PalletsProvidedDetail
     */
    public $PalletsProvidedDetail;

        
    /**
     * @var DetentionDetail
     */
    public $DetentionDetail;

        
    /**
     * @var MarkingOrTaggingDetail
     */
    public $MarkingOrTaggingDetail;

        
    /**
     * @var NonBusinessTimeDetail
     */
    public $NonBusinessTimeDetail;

        
    /**
     * @var ShipmentAssemblyDetail
     */
    public $ShipmentAssemblyDetail;

        
    /**
     * @var SortAndSegregateDetail
     */
    public $SortAndSegregateDetail;

        
    /**
     * @var SpecialEquipmentDetail
     */
    public $SpecialEquipmentDetail;

        
    /**
     * @var StorageDetail
     */
    public $StorageDetail;

        
    /**
     * @var WeighingDetail
     */
    public $WeighingDetail;

        
    /**
     * @var CustomDeliveryWindowDetail
     */
    public $CustomDeliveryWindowDetail;



    /**
     * The types of all special services requested for the enclosing shipment (or other shipment-level transaction).
     *
     * @param ShipmentSpecialServiceType[] $specialServiceTypes
     * @return ShipmentSpecialServicesRequested
     */
    public function setSpecialServiceTypes(array $specialServiceTypes)
    {
        $this->__set('SpecialServiceTypes', $specialServiceTypes);
        $this->SpecialServiceTypes = $specialServiceTypes;
        return $this;
    }
    
    /**
     * Returns The types of all special services requested for the enclosing shipment (or other shipment-level transaction).
     *
     * @return ShipmentSpecialServiceType[]
     */
    public function getSpecialServiceTypes()
    {
        return $this->SpecialServiceTypes;
    }
    
    /**
     * Set CodDetail
     *
     * @param CodDetail $codDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setCodDetail(CodDetail $codDetail)
    {
        $this->__set('CodDetail', $codDetail);
        $this->CodDetail = $codDetail;
        return $this;
    }
    
    /**
     * Returns Set CodDetail
     *
     * @return CodDetail
     */
    public function getCodDetail()
    {
        return $this->CodDetail;
    }
    
    /**
     * Set DeliveryOnInvoiceAcceptanceDetail
     *
     * @param DeliveryOnInvoiceAcceptanceDetail $deliveryOnInvoiceAcceptanceDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setDeliveryOnInvoiceAcceptanceDetail(DeliveryOnInvoiceAcceptanceDetail $deliveryOnInvoiceAcceptanceDetail)
    {
        $this->__set('DeliveryOnInvoiceAcceptanceDetail', $deliveryOnInvoiceAcceptanceDetail);
        $this->DeliveryOnInvoiceAcceptanceDetail = $deliveryOnInvoiceAcceptanceDetail;
        return $this;
    }
    
    /**
     * Returns Set DeliveryOnInvoiceAcceptanceDetail
     *
     * @return DeliveryOnInvoiceAcceptanceDetail
     */
    public function getDeliveryOnInvoiceAcceptanceDetail()
    {
        return $this->DeliveryOnInvoiceAcceptanceDetail;
    }
    
    /**
     * Set HoldAtLocationDetail
     *
     * @param HoldAtLocationDetail $holdAtLocationDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setHoldAtLocationDetail(HoldAtLocationDetail $holdAtLocationDetail)
    {
        $this->__set('HoldAtLocationDetail', $holdAtLocationDetail);
        $this->HoldAtLocationDetail = $holdAtLocationDetail;
        return $this;
    }
    
    /**
     * Returns Set HoldAtLocationDetail
     *
     * @return HoldAtLocationDetail
     */
    public function getHoldAtLocationDetail()
    {
        return $this->HoldAtLocationDetail;
    }
    
    /**
     * Set EMailNotificationDetail
     *
     * @param EMailNotificationDetail $eMailNotificationDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setEMailNotificationDetail(EMailNotificationDetail $eMailNotificationDetail)
    {
        $this->__set('EMailNotificationDetail', $eMailNotificationDetail);
        $this->EMailNotificationDetail = $eMailNotificationDetail;
        return $this;
    }
    
    /**
     * Returns Set EMailNotificationDetail
     *
     * @return EMailNotificationDetail
     */
    public function getEMailNotificationDetail()
    {
        return $this->EMailNotificationDetail;
    }
    
    /**
     * Set ReturnShipmentDetail
     *
     * @param ReturnShipmentDetail $returnShipmentDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setReturnShipmentDetail(ReturnShipmentDetail $returnShipmentDetail)
    {
        $this->__set('ReturnShipmentDetail', $returnShipmentDetail);
        $this->ReturnShipmentDetail = $returnShipmentDetail;
        return $this;
    }
    
    /**
     * Returns Set ReturnShipmentDetail
     *
     * @return ReturnShipmentDetail
     */
    public function getReturnShipmentDetail()
    {
        return $this->ReturnShipmentDetail;
    }
    
    /**
     * This field should be populated for pending shipments (e.g. e-mail label) It is required by a PENDING_SHIPMENT special service type.
     *
     * @param PendingShipmentDetail $pendingShipmentDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setPendingShipmentDetail(PendingShipmentDetail $pendingShipmentDetail)
    {
        $this->__set('PendingShipmentDetail', $pendingShipmentDetail);
        $this->PendingShipmentDetail = $pendingShipmentDetail;
        return $this;
    }
    
    /**
     * Returns This field should be populated for pending shipments (e.g. e-mail label) It is required by a PENDING_SHIPMENT special service type.
     *
     * @return PendingShipmentDetail
     */
    public function getPendingShipmentDetail()
    {
        return $this->PendingShipmentDetail;
    }
    
    /**
     * Set InternationalControlledExportDetail
     *
     * @param InternationalControlledExportDetail $internationalControlledExportDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setInternationalControlledExportDetail(InternationalControlledExportDetail $internationalControlledExportDetail)
    {
        $this->__set('InternationalControlledExportDetail', $internationalControlledExportDetail);
        $this->InternationalControlledExportDetail = $internationalControlledExportDetail;
        return $this;
    }
    
    /**
     * Returns Set InternationalControlledExportDetail
     *
     * @return InternationalControlledExportDetail
     */
    public function getInternationalControlledExportDetail()
    {
        return $this->InternationalControlledExportDetail;
    }
    
    /**
     * Set InternationalTrafficInArmsRegulationsDetail
     *
     * @param InternationalTrafficInArmsRegulationsDetail $internationalTrafficInArmsRegulationsDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setInternationalTrafficInArmsRegulationsDetail(InternationalTrafficInArmsRegulationsDetail $internationalTrafficInArmsRegulationsDetail)
    {
        $this->__set('InternationalTrafficInArmsRegulationsDetail', $internationalTrafficInArmsRegulationsDetail);
        $this->InternationalTrafficInArmsRegulationsDetail = $internationalTrafficInArmsRegulationsDetail;
        return $this;
    }
    
    /**
     * Returns Set InternationalTrafficInArmsRegulationsDetail
     *
     * @return InternationalTrafficInArmsRegulationsDetail
     */
    public function getInternationalTrafficInArmsRegulationsDetail()
    {
        return $this->InternationalTrafficInArmsRegulationsDetail;
    }
    
    /**
     * Set ShipmentDryIceDetail
     *
     * @param ShipmentDryIceDetail $shipmentDryIceDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setShipmentDryIceDetail(ShipmentDryIceDetail $shipmentDryIceDetail)
    {
        $this->__set('ShipmentDryIceDetail', $shipmentDryIceDetail);
        $this->ShipmentDryIceDetail = $shipmentDryIceDetail;
        return $this;
    }
    
    /**
     * Returns Set ShipmentDryIceDetail
     *
     * @return ShipmentDryIceDetail
     */
    public function getShipmentDryIceDetail()
    {
        return $this->ShipmentDryIceDetail;
    }
    
    /**
     * Set HomeDeliveryPremiumDetail
     *
     * @param HomeDeliveryPremiumDetail $homeDeliveryPremiumDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setHomeDeliveryPremiumDetail(HomeDeliveryPremiumDetail $homeDeliveryPremiumDetail)
    {
        $this->__set('HomeDeliveryPremiumDetail', $homeDeliveryPremiumDetail);
        $this->HomeDeliveryPremiumDetail = $homeDeliveryPremiumDetail;
        return $this;
    }
    
    /**
     * Returns Set HomeDeliveryPremiumDetail
     *
     * @return HomeDeliveryPremiumDetail
     */
    public function getHomeDeliveryPremiumDetail()
    {
        return $this->HomeDeliveryPremiumDetail;
    }
    
    /**
     * Set FlatbedTrailerDetail
     *
     * @param FlatbedTrailerDetail $flatbedTrailerDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setFlatbedTrailerDetail(FlatbedTrailerDetail $flatbedTrailerDetail)
    {
        $this->__set('FlatbedTrailerDetail', $flatbedTrailerDetail);
        $this->FlatbedTrailerDetail = $flatbedTrailerDetail;
        return $this;
    }
    
    /**
     * Returns Set FlatbedTrailerDetail
     *
     * @return FlatbedTrailerDetail
     */
    public function getFlatbedTrailerDetail()
    {
        return $this->FlatbedTrailerDetail;
    }
    
    /**
     * Set FreightGuaranteeDetail
     *
     * @param FreightGuaranteeDetail $freightGuaranteeDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setFreightGuaranteeDetail(FreightGuaranteeDetail $freightGuaranteeDetail)
    {
        $this->__set('FreightGuaranteeDetail', $freightGuaranteeDetail);
        $this->FreightGuaranteeDetail = $freightGuaranteeDetail;
        return $this;
    }
    
    /**
     * Returns Set FreightGuaranteeDetail
     *
     * @return FreightGuaranteeDetail
     */
    public function getFreightGuaranteeDetail()
    {
        return $this->FreightGuaranteeDetail;
    }
    
    /**
     * Electronic Trade document references.
     *
     * @param EtdDetail $etdDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setEtdDetail(EtdDetail $etdDetail)
    {
        $this->__set('EtdDetail', $etdDetail);
        $this->EtdDetail = $etdDetail;
        return $this;
    }
    
    /**
     * Returns Electronic Trade document references.
     *
     * @return EtdDetail
     */
    public function getEtdDetail()
    {
        return $this->EtdDetail;
    }
    
    /**
     * Specification for labor to be performed with the shipment.
     *
     * @param ExtraLaborDetail $extraLaborDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setExtraLaborDetail(ExtraLaborDetail $extraLaborDetail)
    {
        $this->__set('ExtraLaborDetail', $extraLaborDetail);
        $this->ExtraLaborDetail = $extraLaborDetail;
        return $this;
    }
    
    /**
     * Returns Specification for labor to be performed with the shipment.
     *
     * @return ExtraLaborDetail
     */
    public function getExtraLaborDetail()
    {
        return $this->ExtraLaborDetail;
    }
    
    /**
     * Specifications for pallets to be shrinkwrapped as part of a Freight shipment.
     *
     * @param PalletShrinkwrapDetail $palletShrinkwrapDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setPalletShrinkwrapDetail(PalletShrinkwrapDetail $palletShrinkwrapDetail)
    {
        $this->__set('PalletShrinkwrapDetail', $palletShrinkwrapDetail);
        $this->PalletShrinkwrapDetail = $palletShrinkwrapDetail;
        return $this;
    }
    
    /**
     * Returns Specifications for pallets to be shrinkwrapped as part of a Freight shipment.
     *
     * @return PalletShrinkwrapDetail
     */
    public function getPalletShrinkwrapDetail()
    {
        return $this->PalletShrinkwrapDetail;
    }
    
    /**
     * Specifications for pallets to be provided on Freight shipment.
     *
     * @param PalletsProvidedDetail $palletsProvidedDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setPalletsProvidedDetail(PalletsProvidedDetail $palletsProvidedDetail)
    {
        $this->__set('PalletsProvidedDetail', $palletsProvidedDetail);
        $this->PalletsProvidedDetail = $palletsProvidedDetail;
        return $this;
    }
    
    /**
     * Returns Specifications for pallets to be provided on Freight shipment.
     *
     * @return PalletsProvidedDetail
     */
    public function getPalletsProvidedDetail()
    {
        return $this->PalletsProvidedDetail;
    }
    
    /**
     * Specifications for pup/set or vehicle delayed for loading or unloading.
     *
     * @param DetentionDetail $detentionDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setDetentionDetail(DetentionDetail $detentionDetail)
    {
        $this->__set('DetentionDetail', $detentionDetail);
        $this->DetentionDetail = $detentionDetail;
        return $this;
    }
    
    /**
     * Returns Specifications for pup/set or vehicle delayed for loading or unloading.
     *
     * @return DetentionDetail
     */
    public function getDetentionDetail()
    {
        return $this->DetentionDetail;
    }
    
    /**
     * Specification for marking or tagging of pieces in shipment.
     *
     * @param MarkingOrTaggingDetail $markingOrTaggingDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setMarkingOrTaggingDetail(MarkingOrTaggingDetail $markingOrTaggingDetail)
    {
        $this->__set('MarkingOrTaggingDetail', $markingOrTaggingDetail);
        $this->MarkingOrTaggingDetail = $markingOrTaggingDetail;
        return $this;
    }
    
    /**
     * Returns Specification for marking or tagging of pieces in shipment.
     *
     * @return MarkingOrTaggingDetail
     */
    public function getMarkingOrTaggingDetail()
    {
        return $this->MarkingOrTaggingDetail;
    }
    
    /**
     * Specification for services performed during non-business hours and/or days.
     *
     * @param NonBusinessTimeDetail $nonBusinessTimeDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setNonBusinessTimeDetail(NonBusinessTimeDetail $nonBusinessTimeDetail)
    {
        $this->__set('NonBusinessTimeDetail', $nonBusinessTimeDetail);
        $this->NonBusinessTimeDetail = $nonBusinessTimeDetail;
        return $this;
    }
    
    /**
     * Returns Specification for services performed during non-business hours and/or days.
     *
     * @return NonBusinessTimeDetail
     */
    public function getNonBusinessTimeDetail()
    {
        return $this->NonBusinessTimeDetail;
    }
    
    /**
     * Specification for assembly performed on shipment.
     *
     * @param ShipmentAssemblyDetail $shipmentAssemblyDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setShipmentAssemblyDetail(ShipmentAssemblyDetail $shipmentAssemblyDetail)
    {
        $this->__set('ShipmentAssemblyDetail', $shipmentAssemblyDetail);
        $this->ShipmentAssemblyDetail = $shipmentAssemblyDetail;
        return $this;
    }
    
    /**
     * Returns Specification for assembly performed on shipment.
     *
     * @return ShipmentAssemblyDetail
     */
    public function getShipmentAssemblyDetail()
    {
        return $this->ShipmentAssemblyDetail;
    }
    
    /**
     * Specification for sorting and/or segregating performed on shipment.
     *
     * @param SortAndSegregateDetail $sortAndSegregateDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setSortAndSegregateDetail(SortAndSegregateDetail $sortAndSegregateDetail)
    {
        $this->__set('SortAndSegregateDetail', $sortAndSegregateDetail);
        $this->SortAndSegregateDetail = $sortAndSegregateDetail;
        return $this;
    }
    
    /**
     * Returns Specification for sorting and/or segregating performed on shipment.
     *
     * @return SortAndSegregateDetail
     */
    public function getSortAndSegregateDetail()
    {
        return $this->SortAndSegregateDetail;
    }
    
    /**
     * Specification for special equipment used in loading/unloading shipment.
     *
     * @param SpecialEquipmentDetail $specialEquipmentDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setSpecialEquipmentDetail(SpecialEquipmentDetail $specialEquipmentDetail)
    {
        $this->__set('SpecialEquipmentDetail', $specialEquipmentDetail);
        $this->SpecialEquipmentDetail = $specialEquipmentDetail;
        return $this;
    }
    
    /**
     * Returns Specification for special equipment used in loading/unloading shipment.
     *
     * @return SpecialEquipmentDetail
     */
    public function getSpecialEquipmentDetail()
    {
        return $this->SpecialEquipmentDetail;
    }
    
    /**
     * Specification for storage provided for shipment.
     *
     * @param StorageDetail $storageDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setStorageDetail(StorageDetail $storageDetail)
    {
        $this->__set('StorageDetail', $storageDetail);
        $this->StorageDetail = $storageDetail;
        return $this;
    }
    
    /**
     * Returns Specification for storage provided for shipment.
     *
     * @return StorageDetail
     */
    public function getStorageDetail()
    {
        return $this->StorageDetail;
    }
    
    /**
     * Specification for weighing services provided for shipment.
     *
     * @param WeighingDetail $weighingDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setWeighingDetail(WeighingDetail $weighingDetail)
    {
        $this->__set('WeighingDetail', $weighingDetail);
        $this->WeighingDetail = $weighingDetail;
        return $this;
    }
    
    /**
     * Returns Specification for weighing services provided for shipment.
     *
     * @return WeighingDetail
     */
    public function getWeighingDetail()
    {
        return $this->WeighingDetail;
    }
    
    /**
     * Specification for date or range of dates on which delivery is to be attempted.
     *
     * @param CustomDeliveryWindowDetail $customDeliveryWindowDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setCustomDeliveryWindowDetail(CustomDeliveryWindowDetail $customDeliveryWindowDetail)
    {
        $this->__set('CustomDeliveryWindowDetail', $customDeliveryWindowDetail);
        $this->CustomDeliveryWindowDetail = $customDeliveryWindowDetail;
        return $this;
    }
    
    /**
     * Returns Specification for date or range of dates on which delivery is to be attempted.
     *
     * @return CustomDeliveryWindowDetail
     */
    public function getCustomDeliveryWindowDetail()
    {
        return $this->CustomDeliveryWindowDetail;
    }
    

    
}