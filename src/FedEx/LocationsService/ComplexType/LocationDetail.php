<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Describes an individual location providing a set of customer service features.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 */
class LocationDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'LocationId' => 'string',
'StoreNumber' => 'int',
'LocationContactAndAddress' => 'LocationContactAndAddress',
'SpecialInstructions' => 'string',
'GeographicCoordinates' => 'string',
'LocationType' => 'FedExLocationType',
'Attributes' => 'LocationAttributesType',
'ClearanceLocationDetail' => 'ClearanceLocationDetail',
'AcceptedCurrency' => 'string',
'LocationHolidays' => 'Holiday',
'MapUrl' => 'string',
'EntityId' => 'string',
'NormalHours' => 'LocationHours',
'ExceptionalHours' => 'LocationHours',
'HoursForEffectiveDate' => 'LocationHours',
'CarrierDetails' => 'CarrierDetail',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'LocationDetail';

        
    /**
     * @var string
     */
    public $LocationId;

        
    /**
     * @var int
     */
    public $StoreNumber;

        
    /**
     * @var LocationContactAndAddress
     */
    public $LocationContactAndAddress;

        
    /**
     * @var string
     */
    public $SpecialInstructions;

        
    /**
     * @var string
     */
    public $GeographicCoordinates;

        
    /**
     * @var \FedEx\LocationsService\SimpleType\FedExLocationType|string
     */
    public $LocationType;

        
    /**
     * @var LocationAttributesType[]
     */
    public $Attributes = array();

        
    /**
     * @var ClearanceLocationDetail
     */
    public $ClearanceLocationDetail;

        
    /**
     * @var string
     */
    public $AcceptedCurrency;

        
    /**
     * @var Holiday[]
     */
    public $LocationHolidays = array();

        
    /**
     * @var string
     */
    public $MapUrl;

        
    /**
     * @var string
     */
    public $EntityId;

        
    /**
     * @var LocationHours[]
     */
    public $NormalHours = array();

        
    /**
     * @var LocationHours[]
     */
    public $ExceptionalHours = array();

        
    /**
     * @var LocationHours[]
     */
    public $HoursForEffectiveDate = array();

        
    /**
     * @var CarrierDetail[]
     */
    public $CarrierDetails = array();



    /**
     * Set LocationId
     *
     * @param string $locationId
     * @return LocationDetail
     */
    public function setLocationId($locationId)
    {
        $this->__set('LocationId', $locationId);
        $this->LocationId = $locationId;
        return $this;
    }
    
    /**
     * Returns Set LocationId
     *
     * @return string
     */
    public function getLocationId()
    {
        return $this->LocationId;
    }
    
    /**
     * Set StoreNumber
     *
     * @param int $storeNumber
     * @return LocationDetail
     */
    public function setStoreNumber($storeNumber)
    {
        $this->__set('StoreNumber', $storeNumber);
        $this->StoreNumber = $storeNumber;
        return $this;
    }
    
    /**
     * Returns Set StoreNumber
     *
     * @return int
     */
    public function getStoreNumber()
    {
        return $this->StoreNumber;
    }
    
    /**
     * Set LocationContactAndAddress
     *
     * @param LocationContactAndAddress $locationContactAndAddress
     * @return LocationDetail
     */
    public function setLocationContactAndAddress(LocationContactAndAddress $locationContactAndAddress)
    {
        $this->__set('LocationContactAndAddress', $locationContactAndAddress);
        $this->LocationContactAndAddress = $locationContactAndAddress;
        return $this;
    }
    
    /**
     * Returns Set LocationContactAndAddress
     *
     * @return LocationContactAndAddress
     */
    public function getLocationContactAndAddress()
    {
        return $this->LocationContactAndAddress;
    }
    
    /**
     * Set SpecialInstructions
     *
     * @param string $specialInstructions
     * @return LocationDetail
     */
    public function setSpecialInstructions($specialInstructions)
    {
        $this->__set('SpecialInstructions', $specialInstructions);
        $this->SpecialInstructions = $specialInstructions;
        return $this;
    }
    
    /**
     * Returns Set SpecialInstructions
     *
     * @return string
     */
    public function getSpecialInstructions()
    {
        return $this->SpecialInstructions;
    }
    
    /**
     * Set GeographicCoordinates
     *
     * @param string $geographicCoordinates
     * @return LocationDetail
     */
    public function setGeographicCoordinates($geographicCoordinates)
    {
        $this->__set('GeographicCoordinates', $geographicCoordinates);
        $this->GeographicCoordinates = $geographicCoordinates;
        return $this;
    }
    
    /**
     * Returns Set GeographicCoordinates
     *
     * @return string
     */
    public function getGeographicCoordinates()
    {
        return $this->GeographicCoordinates;
    }
    
    /**
     * Set LocationType
     *
     * @param \FedEx\LocationsService\SimpleType\FedExLocationType|string $locationType
     * @return LocationDetail
     */
    public function setLocationType($locationType)
    {
        $this->__set('LocationType', $locationType);
        $this->LocationType = $locationType;
        return $this;
    }
    
    /**
     * Returns Set LocationType
     *
     * @return \FedEx\LocationsService\SimpleType\FedExLocationType|string
     */
    public function getLocationType()
    {
        return $this->LocationType;
    }
    
    /**
     * Set Attributes
     *
     * @param LocationAttributesType[] $attributes
     * @return LocationDetail
     */
    public function setAttributes(array $attributes)
    {
        $this->__set('Attributes', $attributes);
        $this->Attributes = $attributes;
        return $this;
    }
    
    /**
     * Returns Set Attributes
     *
     * @return LocationAttributesType[]
     */
    public function getAttributes()
    {
        return $this->Attributes;
    }
    
    /**
     * Details about the clearance location.
     *
     * @param ClearanceLocationDetail $clearanceLocationDetail
     * @return LocationDetail
     */
    public function setClearanceLocationDetail(ClearanceLocationDetail $clearanceLocationDetail)
    {
        $this->__set('ClearanceLocationDetail', $clearanceLocationDetail);
        $this->ClearanceLocationDetail = $clearanceLocationDetail;
        return $this;
    }
    
    /**
     * Returns Details about the clearance location.
     *
     * @return ClearanceLocationDetail
     */
    public function getClearanceLocationDetail()
    {
        return $this->ClearanceLocationDetail;
    }
    
    /**
     * Set AcceptedCurrency
     *
     * @param string $acceptedCurrency
     * @return LocationDetail
     */
    public function setAcceptedCurrency($acceptedCurrency)
    {
        $this->__set('AcceptedCurrency', $acceptedCurrency);
        $this->AcceptedCurrency = $acceptedCurrency;
        return $this;
    }
    
    /**
     * Returns Set AcceptedCurrency
     *
     * @return string
     */
    public function getAcceptedCurrency()
    {
        return $this->AcceptedCurrency;
    }
    
    /**
     * Set LocationHolidays
     *
     * @param Holiday[] $locationHolidays
     * @return LocationDetail
     */
    public function setLocationHolidays(array $locationHolidays)
    {
        $this->__set('LocationHolidays', $locationHolidays);
        $this->LocationHolidays = $locationHolidays;
        return $this;
    }
    
    /**
     * Returns Set LocationHolidays
     *
     * @return Holiday[]
     */
    public function getLocationHolidays()
    {
        return $this->LocationHolidays;
    }
    
    /**
     * Set MapUrl
     *
     * @param string $mapUrl
     * @return LocationDetail
     */
    public function setMapUrl($mapUrl)
    {
        $this->__set('MapUrl', $mapUrl);
        $this->MapUrl = $mapUrl;
        return $this;
    }
    
    /**
     * Returns Set MapUrl
     *
     * @return string
     */
    public function getMapUrl()
    {
        return $this->MapUrl;
    }
    
    /**
     * Set EntityId
     *
     * @param string $entityId
     * @return LocationDetail
     */
    public function setEntityId($entityId)
    {
        $this->__set('EntityId', $entityId);
        $this->EntityId = $entityId;
        return $this;
    }
    
    /**
     * Returns Set EntityId
     *
     * @return string
     */
    public function getEntityId()
    {
        return $this->EntityId;
    }
    
    /**
     * Normal operating hours for the location.
     *
     * @param LocationHours[] $normalHours
     * @return LocationDetail
     */
    public function setNormalHours(array $normalHours)
    {
        $this->__set('NormalHours', $normalHours);
        $this->NormalHours = $normalHours;
        return $this;
    }
    
    /**
     * Returns Normal operating hours for the location.
     *
     * @return LocationHours[]
     */
    public function getNormalHours()
    {
        return $this->NormalHours;
    }
    
    /**
     * Operating hours for the location that are exception from the normal hours of operation.
     *
     * @param LocationHours[] $exceptionalHours
     * @return LocationDetail
     */
    public function setExceptionalHours(array $exceptionalHours)
    {
        $this->__set('ExceptionalHours', $exceptionalHours);
        $this->ExceptionalHours = $exceptionalHours;
        return $this;
    }
    
    /**
     * Returns Operating hours for the location that are exception from the normal hours of operation.
     *
     * @return LocationHours[]
     */
    public function getExceptionalHours()
    {
        return $this->ExceptionalHours;
    }
    
    /**
     * Set HoursForEffectiveDate
     *
     * @param LocationHours[] $hoursForEffectiveDate
     * @return LocationDetail
     */
    public function setHoursForEffectiveDate(array $hoursForEffectiveDate)
    {
        $this->__set('HoursForEffectiveDate', $hoursForEffectiveDate);
        $this->HoursForEffectiveDate = $hoursForEffectiveDate;
        return $this;
    }
    
    /**
     * Returns Set HoursForEffectiveDate
     *
     * @return LocationHours[]
     */
    public function getHoursForEffectiveDate()
    {
        return $this->HoursForEffectiveDate;
    }
    
    /**
     * Set CarrierDetails
     *
     * @param CarrierDetail[] $carrierDetails
     * @return LocationDetail
     */
    public function setCarrierDetails(array $carrierDetails)
    {
        $this->__set('CarrierDetails', $carrierDetails);
        $this->CarrierDetails = $carrierDetails;
        return $this;
    }
    
    /**
     * Returns Set CarrierDetails
     *
     * @return CarrierDetail[]
     */
    public function getCarrierDetails()
    {
        return $this->CarrierDetails;
    }
    

    
}