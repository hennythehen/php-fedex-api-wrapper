<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These special services are available at the shipment level for some or all service types. If the shipper is requesting a special service which requires additional data (such as the COD amount), the shipment special service type must be present in the specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object below.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class ShipmentSpecialServicesRequested
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'SpecialServiceTypes' => 'ShipmentSpecialServiceType',
'CodDetail' => 'CodDetail',
'DeliveryOnInvoiceAcceptanceDetail' => 'DeliveryOnInvoiceAcceptanceDetail',
'HoldAtLocationDetail' => 'HoldAtLocationDetail',
'EventNotificationDetail' => 'ShipmentEventNotificationDetail',
'ReturnShipmentDetail' => 'ReturnShipmentDetail',
'PendingShipmentDetail' => 'PendingShipmentDetail',
'InternationalControlledExportDetail' => 'InternationalControlledExportDetail',
'InternationalTrafficInArmsRegulationsDetail' => 'InternationalTrafficInArmsRegulationsDetail',
'ShipmentDryIceDetail' => 'ShipmentDryIceDetail',
'HomeDeliveryPremiumDetail' => 'HomeDeliveryPremiumDetail',
'FlatbedTrailerDetail' => 'FlatbedTrailerDetail',
'FreightGuaranteeDetail' => 'FreightGuaranteeDetail',
'EtdDetail' => 'EtdDetail',
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
     * @var ShipmentEventNotificationDetail
     */
    public $EventNotificationDetail;

        
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
     * This replaces eMailNotificationDetail
     *
     * @param ShipmentEventNotificationDetail $eventNotificationDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setEventNotificationDetail(ShipmentEventNotificationDetail $eventNotificationDetail)
    {
        $this->__set('EventNotificationDetail', $eventNotificationDetail);
        $this->EventNotificationDetail = $eventNotificationDetail;
        return $this;
    }
    
    /**
     * Returns This replaces eMailNotificationDetail
     *
     * @return ShipmentEventNotificationDetail
     */
    public function getEventNotificationDetail()
    {
        return $this->EventNotificationDetail;
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