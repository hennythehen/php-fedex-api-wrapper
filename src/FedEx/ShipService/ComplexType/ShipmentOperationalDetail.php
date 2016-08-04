<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ShipmentOperationalDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ShipmentOperationalDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'UrsaPrefixCode' => 'string',
'UrsaSuffixCode' => 'string',
'OriginLocationId' => 'string',
'OriginLocationNumber' => 'int',
'OriginServiceArea' => 'string',
'DestinationLocationId' => 'string',
'DestinationLocationNumber' => 'int',
'DestinationServiceArea' => 'string',
'DestinationLocationStateOrProvinceCode' => 'string',
'DeliveryDate' => 'date',
'DeliveryDay' => 'DayOfWeekType',
'PublishedDeliveryTime' => 'time',
'CommitDate' => 'date',
'CommitDay' => 'DayOfWeekType',
'TransitTime' => 'TransitTimeType',
'MaximumTransitTime' => 'TransitTimeType',
'CustomTransitTime' => 'TransitTimeType',
'IneligibleForMoneyBackGuarantee' => 'boolean',
'DeliveryEligibilities' => 'GroundDeliveryEligibilityType',
'AstraPlannedServiceLevel' => 'string',
'AstraDescription' => 'string',
'PostalCode' => 'string',
'StateOrProvinceCode' => 'string',
'CountryCode' => 'string',
'AirportId' => 'string',
'ServiceCode' => 'string',
'PackagingCode' => 'string',
'Scac' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ShipmentOperationalDetail';

        
    /**
     * @var string
     */
    public $UrsaPrefixCode;

        
    /**
     * @var string
     */
    public $UrsaSuffixCode;

        
    /**
     * @var string
     */
    public $OriginLocationId;

        
    /**
     * @var int
     */
    public $OriginLocationNumber;

        
    /**
     * @var string
     */
    public $OriginServiceArea;

        
    /**
     * @var string
     */
    public $DestinationLocationId;

        
    /**
     * @var int
     */
    public $DestinationLocationNumber;

        
    /**
     * @var string
     */
    public $DestinationServiceArea;

        
    /**
     * @var string
     */
    public $DestinationLocationStateOrProvinceCode;

        
    /**
     * @var date
     */
    public $DeliveryDate;

        
    /**
     * @var \FedEx\ShipService\SimpleType\DayOfWeekType|string
     */
    public $DeliveryDay;

        
    /**
     * @var time
     */
    public $PublishedDeliveryTime;

        
    /**
     * @var date
     */
    public $CommitDate;

        
    /**
     * @var \FedEx\ShipService\SimpleType\DayOfWeekType|string
     */
    public $CommitDay;

        
    /**
     * @var \FedEx\ShipService\SimpleType\TransitTimeType|string
     */
    public $TransitTime;

        
    /**
     * @var \FedEx\ShipService\SimpleType\TransitTimeType|string
     */
    public $MaximumTransitTime;

        
    /**
     * @var \FedEx\ShipService\SimpleType\TransitTimeType|string
     */
    public $CustomTransitTime;

        
    /**
     * @var boolean
     */
    public $IneligibleForMoneyBackGuarantee;

        
    /**
     * @var GroundDeliveryEligibilityType[]
     */
    public $DeliveryEligibilities = array();

        
    /**
     * @var string
     */
    public $AstraPlannedServiceLevel;

        
    /**
     * @var string
     */
    public $AstraDescription;

        
    /**
     * @var string
     */
    public $PostalCode;

        
    /**
     * @var string
     */
    public $StateOrProvinceCode;

        
    /**
     * @var string
     */
    public $CountryCode;

        
    /**
     * @var string
     */
    public $AirportId;

        
    /**
     * @var string
     */
    public $ServiceCode;

        
    /**
     * @var string
     */
    public $PackagingCode;

        
    /**
     * @var string
     */
    public $Scac;



    /**
     * Set UrsaPrefixCode
     *
     * @param string $ursaPrefixCode
     * @return ShipmentOperationalDetail
     */
    public function setUrsaPrefixCode($ursaPrefixCode)
    {
        $this->__set('UrsaPrefixCode', $ursaPrefixCode);
        $this->UrsaPrefixCode = $ursaPrefixCode;
        return $this;
    }
    
    /**
     * Returns Set UrsaPrefixCode
     *
     * @return string
     */
    public function getUrsaPrefixCode()
    {
        return $this->UrsaPrefixCode;
    }
    
    /**
     * Set UrsaSuffixCode
     *
     * @param string $ursaSuffixCode
     * @return ShipmentOperationalDetail
     */
    public function setUrsaSuffixCode($ursaSuffixCode)
    {
        $this->__set('UrsaSuffixCode', $ursaSuffixCode);
        $this->UrsaSuffixCode = $ursaSuffixCode;
        return $this;
    }
    
    /**
     * Returns Set UrsaSuffixCode
     *
     * @return string
     */
    public function getUrsaSuffixCode()
    {
        return $this->UrsaSuffixCode;
    }
    
    /**
     * Set OriginLocationId
     *
     * @param string $originLocationId
     * @return ShipmentOperationalDetail
     */
    public function setOriginLocationId($originLocationId)
    {
        $this->__set('OriginLocationId', $originLocationId);
        $this->OriginLocationId = $originLocationId;
        return $this;
    }
    
    /**
     * Returns Set OriginLocationId
     *
     * @return string
     */
    public function getOriginLocationId()
    {
        return $this->OriginLocationId;
    }
    
    /**
     * Set OriginLocationNumber
     *
     * @param int $originLocationNumber
     * @return ShipmentOperationalDetail
     */
    public function setOriginLocationNumber($originLocationNumber)
    {
        $this->__set('OriginLocationNumber', $originLocationNumber);
        $this->OriginLocationNumber = $originLocationNumber;
        return $this;
    }
    
    /**
     * Returns Set OriginLocationNumber
     *
     * @return int
     */
    public function getOriginLocationNumber()
    {
        return $this->OriginLocationNumber;
    }
    
    /**
     * Set OriginServiceArea
     *
     * @param string $originServiceArea
     * @return ShipmentOperationalDetail
     */
    public function setOriginServiceArea($originServiceArea)
    {
        $this->__set('OriginServiceArea', $originServiceArea);
        $this->OriginServiceArea = $originServiceArea;
        return $this;
    }
    
    /**
     * Returns Set OriginServiceArea
     *
     * @return string
     */
    public function getOriginServiceArea()
    {
        return $this->OriginServiceArea;
    }
    
    /**
     * Set DestinationLocationId
     *
     * @param string $destinationLocationId
     * @return ShipmentOperationalDetail
     */
    public function setDestinationLocationId($destinationLocationId)
    {
        $this->__set('DestinationLocationId', $destinationLocationId);
        $this->DestinationLocationId = $destinationLocationId;
        return $this;
    }
    
    /**
     * Returns Set DestinationLocationId
     *
     * @return string
     */
    public function getDestinationLocationId()
    {
        return $this->DestinationLocationId;
    }
    
    /**
     * Set DestinationLocationNumber
     *
     * @param int $destinationLocationNumber
     * @return ShipmentOperationalDetail
     */
    public function setDestinationLocationNumber($destinationLocationNumber)
    {
        $this->__set('DestinationLocationNumber', $destinationLocationNumber);
        $this->DestinationLocationNumber = $destinationLocationNumber;
        return $this;
    }
    
    /**
     * Returns Set DestinationLocationNumber
     *
     * @return int
     */
    public function getDestinationLocationNumber()
    {
        return $this->DestinationLocationNumber;
    }
    
    /**
     * Set DestinationServiceArea
     *
     * @param string $destinationServiceArea
     * @return ShipmentOperationalDetail
     */
    public function setDestinationServiceArea($destinationServiceArea)
    {
        $this->__set('DestinationServiceArea', $destinationServiceArea);
        $this->DestinationServiceArea = $destinationServiceArea;
        return $this;
    }
    
    /**
     * Returns Set DestinationServiceArea
     *
     * @return string
     */
    public function getDestinationServiceArea()
    {
        return $this->DestinationServiceArea;
    }
    
    /**
     * This is the state of the destination location ID, and is not necessarily the same as the postal state.
     *
     * @param string $destinationLocationStateOrProvinceCode
     * @return ShipmentOperationalDetail
     */
    public function setDestinationLocationStateOrProvinceCode($destinationLocationStateOrProvinceCode)
    {
        $this->__set('DestinationLocationStateOrProvinceCode', $destinationLocationStateOrProvinceCode);
        $this->DestinationLocationStateOrProvinceCode = $destinationLocationStateOrProvinceCode;
        return $this;
    }
    
    /**
     * Returns This is the state of the destination location ID, and is not necessarily the same as the postal state.
     *
     * @return string
     */
    public function getDestinationLocationStateOrProvinceCode()
    {
        return $this->DestinationLocationStateOrProvinceCode;
    }
    
    /**
     * Expected/estimated date of delivery.
     *
     * @param date $deliveryDate
     * @return ShipmentOperationalDetail
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->__set('DeliveryDate', $deliveryDate);
        $this->DeliveryDate = $deliveryDate;
        return $this;
    }
    
    /**
     * Returns Expected/estimated date of delivery.
     *
     * @return date
     */
    public function getDeliveryDate()
    {
        return $this->DeliveryDate;
    }
    
    /**
     * Expected/estimated day of week of delivery.
     *
     * @param \FedEx\ShipService\SimpleType\DayOfWeekType|string $deliveryDay
     * @return ShipmentOperationalDetail
     */
    public function setDeliveryDay($deliveryDay)
    {
        $this->__set('DeliveryDay', $deliveryDay);
        $this->DeliveryDay = $deliveryDay;
        return $this;
    }
    
    /**
     * Returns Expected/estimated day of week of delivery.
     *
     * @return \FedEx\ShipService\SimpleType\DayOfWeekType|string
     */
    public function getDeliveryDay()
    {
        return $this->DeliveryDay;
    }
    
    /**
     * Delivery time, as published in Service Guide.
     *
     * @param time $publishedDeliveryTime
     * @return ShipmentOperationalDetail
     */
    public function setPublishedDeliveryTime(time $publishedDeliveryTime)
    {
        $this->__set('PublishedDeliveryTime', $publishedDeliveryTime);
        $this->PublishedDeliveryTime = $publishedDeliveryTime;
        return $this;
    }
    
    /**
     * Returns Delivery time, as published in Service Guide.
     *
     * @return time
     */
    public function getPublishedDeliveryTime()
    {
        return $this->PublishedDeliveryTime;
    }
    
    /**
     * Committed date of delivery.
     *
     * @param date $commitDate
     * @return ShipmentOperationalDetail
     */
    public function setCommitDate($commitDate)
    {
        $this->__set('CommitDate', $commitDate);
        $this->CommitDate = $commitDate;
        return $this;
    }
    
    /**
     * Returns Committed date of delivery.
     *
     * @return date
     */
    public function getCommitDate()
    {
        return $this->CommitDate;
    }
    
    /**
     * Committed day of week of delivery.
     *
     * @param \FedEx\ShipService\SimpleType\DayOfWeekType|string $commitDay
     * @return ShipmentOperationalDetail
     */
    public function setCommitDay($commitDay)
    {
        $this->__set('CommitDay', $commitDay);
        $this->CommitDay = $commitDay;
        return $this;
    }
    
    /**
     * Returns Committed day of week of delivery.
     *
     * @return \FedEx\ShipService\SimpleType\DayOfWeekType|string
     */
    public function getCommitDay()
    {
        return $this->CommitDay;
    }
    
    /**
     * Standard transit time per origin, destination, and service.
     *
     * @param \FedEx\ShipService\SimpleType\TransitTimeType|string $transitTime
     * @return ShipmentOperationalDetail
     */
    public function setTransitTime($transitTime)
    {
        $this->__set('TransitTime', $transitTime);
        $this->TransitTime = $transitTime;
        return $this;
    }
    
    /**
     * Returns Standard transit time per origin, destination, and service.
     *
     * @return \FedEx\ShipService\SimpleType\TransitTimeType|string
     */
    public function getTransitTime()
    {
        return $this->TransitTime;
    }
    
    /**
     * Maximum expected transit time
     *
     * @param \FedEx\ShipService\SimpleType\TransitTimeType|string $maximumTransitTime
     * @return ShipmentOperationalDetail
     */
    public function setMaximumTransitTime($maximumTransitTime)
    {
        $this->__set('MaximumTransitTime', $maximumTransitTime);
        $this->MaximumTransitTime = $maximumTransitTime;
        return $this;
    }
    
    /**
     * Returns Maximum expected transit time
     *
     * @return \FedEx\ShipService\SimpleType\TransitTimeType|string
     */
    public function getMaximumTransitTime()
    {
        return $this->MaximumTransitTime;
    }
    
    /**
     * Transit time based on customer eligibility.
     *
     * @param \FedEx\ShipService\SimpleType\TransitTimeType|string $customTransitTime
     * @return ShipmentOperationalDetail
     */
    public function setCustomTransitTime($customTransitTime)
    {
        $this->__set('CustomTransitTime', $customTransitTime);
        $this->CustomTransitTime = $customTransitTime;
        return $this;
    }
    
    /**
     * Returns Transit time based on customer eligibility.
     *
     * @return \FedEx\ShipService\SimpleType\TransitTimeType|string
     */
    public function getCustomTransitTime()
    {
        return $this->CustomTransitTime;
    }
    
    /**
     * Indicates that this shipment is not eligible for money back guarantee.
     *
     * @param boolean $ineligibleForMoneyBackGuarantee
     * @return ShipmentOperationalDetail
     */
    public function setIneligibleForMoneyBackGuarantee($ineligibleForMoneyBackGuarantee)
    {
        $this->__set('IneligibleForMoneyBackGuarantee', $ineligibleForMoneyBackGuarantee);
        $this->IneligibleForMoneyBackGuarantee = $ineligibleForMoneyBackGuarantee;
        return $this;
    }
    
    /**
     * Returns Indicates that this shipment is not eligible for money back guarantee.
     *
     * @return boolean
     */
    public function getIneligibleForMoneyBackGuarantee()
    {
        return $this->IneligibleForMoneyBackGuarantee;
    }
    
    /**
     * FedEx Ground delivery features for which this shipment may be eligible.
     *
     * @param GroundDeliveryEligibilityType[] $deliveryEligibilities
     * @return ShipmentOperationalDetail
     */
    public function setDeliveryEligibilities(array $deliveryEligibilities)
    {
        $this->__set('DeliveryEligibilities', $deliveryEligibilities);
        $this->DeliveryEligibilities = $deliveryEligibilities;
        return $this;
    }
    
    /**
     * Returns FedEx Ground delivery features for which this shipment may be eligible.
     *
     * @return GroundDeliveryEligibilityType[]
     */
    public function getDeliveryEligibilities()
    {
        return $this->DeliveryEligibilities;
    }
    
    /**
     * Text describing planned delivery.
     *
     * @param string $astraPlannedServiceLevel
     * @return ShipmentOperationalDetail
     */
    public function setAstraPlannedServiceLevel($astraPlannedServiceLevel)
    {
        $this->__set('AstraPlannedServiceLevel', $astraPlannedServiceLevel);
        $this->AstraPlannedServiceLevel = $astraPlannedServiceLevel;
        return $this;
    }
    
    /**
     * Returns Text describing planned delivery.
     *
     * @return string
     */
    public function getAstraPlannedServiceLevel()
    {
        return $this->AstraPlannedServiceLevel;
    }
    
    /**
     * Set AstraDescription
     *
     * @param string $astraDescription
     * @return ShipmentOperationalDetail
     */
    public function setAstraDescription($astraDescription)
    {
        $this->__set('AstraDescription', $astraDescription);
        $this->AstraDescription = $astraDescription;
        return $this;
    }
    
    /**
     * Returns Set AstraDescription
     *
     * @return string
     */
    public function getAstraDescription()
    {
        return $this->AstraDescription;
    }
    
    /**
     * Set PostalCode
     *
     * @param string $postalCode
     * @return ShipmentOperationalDetail
     */
    public function setPostalCode($postalCode)
    {
        $this->__set('PostalCode', $postalCode);
        $this->PostalCode = $postalCode;
        return $this;
    }
    
    /**
     * Returns Set PostalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }
    
    /**
     * Set StateOrProvinceCode
     *
     * @param string $stateOrProvinceCode
     * @return ShipmentOperationalDetail
     */
    public function setStateOrProvinceCode($stateOrProvinceCode)
    {
        $this->__set('StateOrProvinceCode', $stateOrProvinceCode);
        $this->StateOrProvinceCode = $stateOrProvinceCode;
        return $this;
    }
    
    /**
     * Returns Set StateOrProvinceCode
     *
     * @return string
     */
    public function getStateOrProvinceCode()
    {
        return $this->StateOrProvinceCode;
    }
    
    /**
     * Set CountryCode
     *
     * @param string $countryCode
     * @return ShipmentOperationalDetail
     */
    public function setCountryCode($countryCode)
    {
        $this->__set('CountryCode', $countryCode);
        $this->CountryCode = $countryCode;
        return $this;
    }
    
    /**
     * Returns Set CountryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }
    
    /**
     * Set AirportId
     *
     * @param string $airportId
     * @return ShipmentOperationalDetail
     */
    public function setAirportId($airportId)
    {
        $this->__set('AirportId', $airportId);
        $this->AirportId = $airportId;
        return $this;
    }
    
    /**
     * Returns Set AirportId
     *
     * @return string
     */
    public function getAirportId()
    {
        return $this->AirportId;
    }
    
    /**
     * Set ServiceCode
     *
     * @param string $serviceCode
     * @return ShipmentOperationalDetail
     */
    public function setServiceCode($serviceCode)
    {
        $this->__set('ServiceCode', $serviceCode);
        $this->ServiceCode = $serviceCode;
        return $this;
    }
    
    /**
     * Returns Set ServiceCode
     *
     * @return string
     */
    public function getServiceCode()
    {
        return $this->ServiceCode;
    }
    
    /**
     * Set PackagingCode
     *
     * @param string $packagingCode
     * @return ShipmentOperationalDetail
     */
    public function setPackagingCode($packagingCode)
    {
        $this->__set('PackagingCode', $packagingCode);
        $this->PackagingCode = $packagingCode;
        return $this;
    }
    
    /**
     * Returns Set PackagingCode
     *
     * @return string
     */
    public function getPackagingCode()
    {
        return $this->PackagingCode;
    }
    
    /**
     * Set Scac
     *
     * @param string $scac
     * @return ShipmentOperationalDetail
     */
    public function setScac($scac)
    {
        $this->__set('Scac', $scac);
        $this->Scac = $scac;
        return $this;
    }
    
    /**
     * Returns Set Scac
     *
     * @return string
     */
    public function getScac()
    {
        return $this->Scac;
    }
    

    
}