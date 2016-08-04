<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ServiceAvailabilityOption
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service
 */
class ServiceAvailabilityOption
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Service' => 'ServiceType',
'DeliveryDate' => 'date',
'DeliveryDay' => 'DayOfWeekType',
'DestinationStationId' => 'string',
'DestinationAirportId' => 'string',
'TransitTime' => 'TransitTimeType',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ServiceAvailabilityOption';

        
    /**
     * @var \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\ServiceType|string
     */
    public $Service;

        
    /**
     * @var date
     */
    public $DeliveryDate;

        
    /**
     * @var \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\DayOfWeekType|string
     */
    public $DeliveryDay;

        
    /**
     * @var string
     */
    public $DestinationStationId;

        
    /**
     * @var string
     */
    public $DestinationAirportId;

        
    /**
     * @var \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\TransitTimeType|string
     */
    public $TransitTime;



    /**
     * Set Service
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\ServiceType|string $service
     * @return ServiceAvailabilityOption
     */
    public function setService($service)
    {
        $this->__set('Service', $service);
        $this->Service = $service;
        return $this;
    }
    
    /**
     * Returns Set Service
     *
     * @return \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\ServiceType|string
     */
    public function getService()
    {
        return $this->Service;
    }
    
    /**
     * Set DeliveryDate
     *
     * @param date $deliveryDate
     * @return ServiceAvailabilityOption
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->__set('DeliveryDate', $deliveryDate);
        $this->DeliveryDate = $deliveryDate;
        return $this;
    }
    
    /**
     * Returns Set DeliveryDate
     *
     * @return date
     */
    public function getDeliveryDate()
    {
        return $this->DeliveryDate;
    }
    
    /**
     * Set DeliveryDay
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\DayOfWeekType|string $deliveryDay
     * @return ServiceAvailabilityOption
     */
    public function setDeliveryDay($deliveryDay)
    {
        $this->__set('DeliveryDay', $deliveryDay);
        $this->DeliveryDay = $deliveryDay;
        return $this;
    }
    
    /**
     * Returns Set DeliveryDay
     *
     * @return \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\DayOfWeekType|string
     */
    public function getDeliveryDay()
    {
        return $this->DeliveryDay;
    }
    
    /**
     * Set DestinationStationId
     *
     * @param string $destinationStationId
     * @return ServiceAvailabilityOption
     */
    public function setDestinationStationId($destinationStationId)
    {
        $this->__set('DestinationStationId', $destinationStationId);
        $this->DestinationStationId = $destinationStationId;
        return $this;
    }
    
    /**
     * Returns Set DestinationStationId
     *
     * @return string
     */
    public function getDestinationStationId()
    {
        return $this->DestinationStationId;
    }
    
    /**
     * Set DestinationAirportId
     *
     * @param string $destinationAirportId
     * @return ServiceAvailabilityOption
     */
    public function setDestinationAirportId($destinationAirportId)
    {
        $this->__set('DestinationAirportId', $destinationAirportId);
        $this->DestinationAirportId = $destinationAirportId;
        return $this;
    }
    
    /**
     * Returns Set DestinationAirportId
     *
     * @return string
     */
    public function getDestinationAirportId()
    {
        return $this->DestinationAirportId;
    }
    
    /**
     * Specifies the commit time for a FedEx Ground shipment.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\TransitTimeType|string $transitTime
     * @return ServiceAvailabilityOption
     */
    public function setTransitTime($transitTime)
    {
        $this->__set('TransitTime', $transitTime);
        $this->TransitTime = $transitTime;
        return $this;
    }
    
    /**
     * Returns Specifies the commit time for a FedEx Ground shipment.
     *
     * @return \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\TransitTimeType|string
     */
    public function getTransitTime()
    {
        return $this->TransitTime;
    }
    

    
}