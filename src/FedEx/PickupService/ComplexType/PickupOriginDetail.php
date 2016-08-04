<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * PickupOriginDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class PickupOriginDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'UseAccountAddress' => 'boolean',
'AddressId' => 'string',
'PickupLocation' => 'ContactAndAddress',
'PackageLocation' => 'PickupBuildingLocationType',
'BuildingPart' => 'BuildingPartCode',
'BuildingPartDescription' => 'string',
'ReadyTimestamp' => 'dateTime',
'CompanyCloseTime' => 'time',
'StayLate' => 'boolean',
'PickupDateType' => 'PickupRequestType',
'LastAccessTime' => 'time',
'GeographicalPostalCode' => 'string',
'Location' => 'string',
'DeleteLastUsed' => 'boolean',
'SuppliesRequested' => 'string',
'EarlyPickup' => 'boolean',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'PickupOriginDetail';

        
    /**
     * @var boolean
     */
    public $UseAccountAddress;

        
    /**
     * @var string
     */
    public $AddressId;

        
    /**
     * @var ContactAndAddress
     */
    public $PickupLocation;

        
    /**
     * @var \FedEx\PickupService\SimpleType\PickupBuildingLocationType|string
     */
    public $PackageLocation;

        
    /**
     * @var \FedEx\PickupService\SimpleType\BuildingPartCode|string
     */
    public $BuildingPart;

        
    /**
     * @var string
     */
    public $BuildingPartDescription;

        
    /**
     * @var dateTime
     */
    public $ReadyTimestamp;

        
    /**
     * @var time
     */
    public $CompanyCloseTime;

        
    /**
     * @var boolean
     */
    public $StayLate;

        
    /**
     * @var \FedEx\PickupService\SimpleType\PickupRequestType|string
     */
    public $PickupDateType;

        
    /**
     * @var time
     */
    public $LastAccessTime;

        
    /**
     * @var string
     */
    public $GeographicalPostalCode;

        
    /**
     * @var string
     */
    public $Location;

        
    /**
     * @var boolean
     */
    public $DeleteLastUsed;

        
    /**
     * @var string
     */
    public $SuppliesRequested;

        
    /**
     * @var boolean
     */
    public $EarlyPickup;



    /**
     * Set UseAccountAddress
     *
     * @param boolean $useAccountAddress
     * @return PickupOriginDetail
     */
    public function setUseAccountAddress($useAccountAddress)
    {
        $this->__set('UseAccountAddress', $useAccountAddress);
        $this->UseAccountAddress = $useAccountAddress;
        return $this;
    }
    
    /**
     * Returns Set UseAccountAddress
     *
     * @return boolean
     */
    public function getUseAccountAddress()
    {
        return $this->UseAccountAddress;
    }
    
    /**
     * FedEx USE ONLY (with IVR client)
     *
     * @param string $addressId
     * @return PickupOriginDetail
     */
    public function setAddressId($addressId)
    {
        $this->__set('AddressId', $addressId);
        $this->AddressId = $addressId;
        return $this;
    }
    
    /**
     * Returns FedEx USE ONLY (with IVR client)
     *
     * @return string
     */
    public function getAddressId()
    {
        return $this->AddressId;
    }
    
    /**
     * Set PickupLocation
     *
     * @param ContactAndAddress $pickupLocation
     * @return PickupOriginDetail
     */
    public function setPickupLocation(ContactAndAddress $pickupLocation)
    {
        $this->__set('PickupLocation', $pickupLocation);
        $this->PickupLocation = $pickupLocation;
        return $this;
    }
    
    /**
     * Returns Set PickupLocation
     *
     * @return ContactAndAddress
     */
    public function getPickupLocation()
    {
        return $this->PickupLocation;
    }
    
    /**
     * Set PackageLocation
     *
     * @param \FedEx\PickupService\SimpleType\PickupBuildingLocationType|string $packageLocation
     * @return PickupOriginDetail
     */
    public function setPackageLocation($packageLocation)
    {
        $this->__set('PackageLocation', $packageLocation);
        $this->PackageLocation = $packageLocation;
        return $this;
    }
    
    /**
     * Returns Set PackageLocation
     *
     * @return \FedEx\PickupService\SimpleType\PickupBuildingLocationType|string
     */
    public function getPackageLocation()
    {
        return $this->PackageLocation;
    }
    
    /**
     * Set BuildingPart
     *
     * @param \FedEx\PickupService\SimpleType\BuildingPartCode|string $buildingPart
     * @return PickupOriginDetail
     */
    public function setBuildingPart($buildingPart)
    {
        $this->__set('BuildingPart', $buildingPart);
        $this->BuildingPart = $buildingPart;
        return $this;
    }
    
    /**
     * Returns Set BuildingPart
     *
     * @return \FedEx\PickupService\SimpleType\BuildingPartCode|string
     */
    public function getBuildingPart()
    {
        return $this->BuildingPart;
    }
    
    /**
     * Set BuildingPartDescription
     *
     * @param string $buildingPartDescription
     * @return PickupOriginDetail
     */
    public function setBuildingPartDescription($buildingPartDescription)
    {
        $this->__set('BuildingPartDescription', $buildingPartDescription);
        $this->BuildingPartDescription = $buildingPartDescription;
        return $this;
    }
    
    /**
     * Returns Set BuildingPartDescription
     *
     * @return string
     */
    public function getBuildingPartDescription()
    {
        return $this->BuildingPartDescription;
    }
    
    /**
     * Set ReadyTimestamp
     *
     * @param dateTime $readyTimestamp
     * @return PickupOriginDetail
     */
    public function setReadyTimestamp($readyTimestamp)
    {
        $this->__set('ReadyTimestamp', $readyTimestamp);
        $this->ReadyTimestamp = $readyTimestamp;
        return $this;
    }
    
    /**
     * Returns Set ReadyTimestamp
     *
     * @return dateTime
     */
    public function getReadyTimestamp()
    {
        return $this->ReadyTimestamp;
    }
    
    /**
     * Set CompanyCloseTime
     *
     * @param time $companyCloseTime
     * @return PickupOriginDetail
     */
    public function setCompanyCloseTime(time $companyCloseTime)
    {
        $this->__set('CompanyCloseTime', $companyCloseTime);
        $this->CompanyCloseTime = $companyCloseTime;
        return $this;
    }
    
    /**
     * Returns Set CompanyCloseTime
     *
     * @return time
     */
    public function getCompanyCloseTime()
    {
        return $this->CompanyCloseTime;
    }
    
    /**
     * FedEx IVR Only. Customer is willing to stay late for pickup.
     *
     * @param boolean $stayLate
     * @return PickupOriginDetail
     */
    public function setStayLate($stayLate)
    {
        $this->__set('StayLate', $stayLate);
        $this->StayLate = $stayLate;
        return $this;
    }
    
    /**
     * Returns FedEx IVR Only. Customer is willing to stay late for pickup.
     *
     * @return boolean
     */
    public function getStayLate()
    {
        return $this->StayLate;
    }
    
    /**
     * FedEx USE ONLY (with IVR client)
     *
     * @param \FedEx\PickupService\SimpleType\PickupRequestType|string $pickupDateType
     * @return PickupOriginDetail
     */
    public function setPickupDateType($pickupDateType)
    {
        $this->__set('PickupDateType', $pickupDateType);
        $this->PickupDateType = $pickupDateType;
        return $this;
    }
    
    /**
     * Returns FedEx USE ONLY (with IVR client)
     *
     * @return \FedEx\PickupService\SimpleType\PickupRequestType|string
     */
    public function getPickupDateType()
    {
        return $this->PickupDateType;
    }
    
    /**
     * FedEx IVR Only
     *
     * @param time $lastAccessTime
     * @return PickupOriginDetail
     */
    public function setLastAccessTime(time $lastAccessTime)
    {
        $this->__set('LastAccessTime', $lastAccessTime);
        $this->LastAccessTime = $lastAccessTime;
        return $this;
    }
    
    /**
     * Returns FedEx IVR Only
     *
     * @return time
     */
    public function getLastAccessTime()
    {
        return $this->LastAccessTime;
    }
    
    /**
     * Alternate postal code tied to pickup location (European pickups)
     *
     * @param string $geographicalPostalCode
     * @return PickupOriginDetail
     */
    public function setGeographicalPostalCode($geographicalPostalCode)
    {
        $this->__set('GeographicalPostalCode', $geographicalPostalCode);
        $this->GeographicalPostalCode = $geographicalPostalCode;
        return $this;
    }
    
    /**
     * Returns Alternate postal code tied to pickup location (European pickups)
     *
     * @return string
     */
    public function getGeographicalPostalCode()
    {
        return $this->GeographicalPostalCode;
    }
    
    /**
     * FedEx USE ONLY
     *
     * @param string $location
     * @return PickupOriginDetail
     */
    public function setLocation($location)
    {
        $this->__set('Location', $location);
        $this->Location = $location;
        return $this;
    }
    
    /**
     * Returns FedEx USE ONLY
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->Location;
    }
    
    /**
     * FedEx USE ONLY (with IVR client)
     *
     * @param boolean $deleteLastUsed
     * @return PickupOriginDetail
     */
    public function setDeleteLastUsed($deleteLastUsed)
    {
        $this->__set('DeleteLastUsed', $deleteLastUsed);
        $this->DeleteLastUsed = $deleteLastUsed;
        return $this;
    }
    
    /**
     * Returns FedEx USE ONLY (with IVR client)
     *
     * @return boolean
     */
    public function getDeleteLastUsed()
    {
        return $this->DeleteLastUsed;
    }
    
    /**
     * Set SuppliesRequested
     *
     * @param string $suppliesRequested
     * @return PickupOriginDetail
     */
    public function setSuppliesRequested($suppliesRequested)
    {
        $this->__set('SuppliesRequested', $suppliesRequested);
        $this->SuppliesRequested = $suppliesRequested;
        return $this;
    }
    
    /**
     * Returns Set SuppliesRequested
     *
     * @return string
     */
    public function getSuppliesRequested()
    {
        return $this->SuppliesRequested;
    }
    
    /**
     * Applies only to Europe
     *
     * @param boolean $earlyPickup
     * @return PickupOriginDetail
     */
    public function setEarlyPickup($earlyPickup)
    {
        $this->__set('EarlyPickup', $earlyPickup);
        $this->EarlyPickup = $earlyPickup;
        return $this;
    }
    
    /**
     * Returns Applies only to Europe
     *
     * @return boolean
     */
    public function getEarlyPickup()
    {
        return $this->EarlyPickup;
    }
    

    
}