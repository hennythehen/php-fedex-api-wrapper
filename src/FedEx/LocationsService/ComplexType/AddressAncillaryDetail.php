<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Additional information about a physical location, such as suite number, cross street, floor number in a building. These details are not typically a part of a standard address definition; however, these details might help locate the address.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 */
class AddressAncillaryDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'LocationInCity' => 'string',
'LocationInProperty' => 'string',
'Accessibility' => 'LocationAccessibilityType',
'Building' => 'string',
'Department' => 'string',
'RoomFloor' => 'string',
'Suite' => 'string',
'Apartment' => 'string',
'Room' => 'string',
'CrossStreet' => 'string',
'AdditionalDescriptions' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'AddressAncillaryDetail';

        
    /**
     * @var string
     */
    public $LocationInCity;

        
    /**
     * @var string
     */
    public $LocationInProperty;

        
    /**
     * @var \FedEx\LocationsService\SimpleType\LocationAccessibilityType|string
     */
    public $Accessibility;

        
    /**
     * @var string
     */
    public $Building;

        
    /**
     * @var string
     */
    public $Department;

        
    /**
     * @var string
     */
    public $RoomFloor;

        
    /**
     * @var string
     */
    public $Suite;

        
    /**
     * @var string
     */
    public $Apartment;

        
    /**
     * @var string
     */
    public $Room;

        
    /**
     * @var string
     */
    public $CrossStreet;

        
    /**
     * @var string[]
     */
    public $AdditionalDescriptions = array();



    /**
     * Set LocationInCity
     *
     * @param string $locationInCity
     * @return AddressAncillaryDetail
     */
    public function setLocationInCity($locationInCity)
    {
        $this->__set('LocationInCity', $locationInCity);
        $this->LocationInCity = $locationInCity;
        return $this;
    }
    
    /**
     * Returns Set LocationInCity
     *
     * @return string
     */
    public function getLocationInCity()
    {
        return $this->LocationInCity;
    }
    
    /**
     * Set LocationInProperty
     *
     * @param string $locationInProperty
     * @return AddressAncillaryDetail
     */
    public function setLocationInProperty($locationInProperty)
    {
        $this->__set('LocationInProperty', $locationInProperty);
        $this->LocationInProperty = $locationInProperty;
        return $this;
    }
    
    /**
     * Returns Set LocationInProperty
     *
     * @return string
     */
    public function getLocationInProperty()
    {
        return $this->LocationInProperty;
    }
    
    /**
     * Indicates whether how this location can be accessed.
     *
     * @param \FedEx\LocationsService\SimpleType\LocationAccessibilityType|string $accessibility
     * @return AddressAncillaryDetail
     */
    public function setAccessibility($accessibility)
    {
        $this->__set('Accessibility', $accessibility);
        $this->Accessibility = $accessibility;
        return $this;
    }
    
    /**
     * Returns Indicates whether how this location can be accessed.
     *
     * @return \FedEx\LocationsService\SimpleType\LocationAccessibilityType|string
     */
    public function getAccessibility()
    {
        return $this->Accessibility;
    }
    
    /**
     * Specifies building number or name.
     *
     * @param string $building
     * @return AddressAncillaryDetail
     */
    public function setBuilding($building)
    {
        $this->__set('Building', $building);
        $this->Building = $building;
        return $this;
    }
    
    /**
     * Returns Specifies building number or name.
     *
     * @return string
     */
    public function getBuilding()
    {
        return $this->Building;
    }
    
    /**
     * Specifies a department in the company or retail store.
     *
     * @param string $department
     * @return AddressAncillaryDetail
     */
    public function setDepartment($department)
    {
        $this->__set('Department', $department);
        $this->Department = $department;
        return $this;
    }
    
    /**
     * Returns Specifies a department in the company or retail store.
     *
     * @return string
     */
    public function getDepartment()
    {
        return $this->Department;
    }
    
    /**
     * Specifies the floor number.
     *
     * @param string $roomFloor
     * @return AddressAncillaryDetail
     */
    public function setRoomFloor($roomFloor)
    {
        $this->__set('RoomFloor', $roomFloor);
        $this->RoomFloor = $roomFloor;
        return $this;
    }
    
    /**
     * Returns Specifies the floor number.
     *
     * @return string
     */
    public function getRoomFloor()
    {
        return $this->RoomFloor;
    }
    
    /**
     * Set Suite
     *
     * @param string $suite
     * @return AddressAncillaryDetail
     */
    public function setSuite($suite)
    {
        $this->__set('Suite', $suite);
        $this->Suite = $suite;
        return $this;
    }
    
    /**
     * Returns Set Suite
     *
     * @return string
     */
    public function getSuite()
    {
        return $this->Suite;
    }
    
    /**
     * Specifies apartment number.
     *
     * @param string $apartment
     * @return AddressAncillaryDetail
     */
    public function setApartment($apartment)
    {
        $this->__set('Apartment', $apartment);
        $this->Apartment = $apartment;
        return $this;
    }
    
    /**
     * Returns Specifies apartment number.
     *
     * @return string
     */
    public function getApartment()
    {
        return $this->Apartment;
    }
    
    /**
     * Specifies the room number, if one is specified.
     *
     * @param string $room
     * @return AddressAncillaryDetail
     */
    public function setRoom($room)
    {
        $this->__set('Room', $room);
        $this->Room = $room;
        return $this;
    }
    
    /**
     * Returns Specifies the room number, if one is specified.
     *
     * @return string
     */
    public function getRoom()
    {
        return $this->Room;
    }
    
    /**
     * Set CrossStreet
     *
     * @param string $crossStreet
     * @return AddressAncillaryDetail
     */
    public function setCrossStreet($crossStreet)
    {
        $this->__set('CrossStreet', $crossStreet);
        $this->CrossStreet = $crossStreet;
        return $this;
    }
    
    /**
     * Returns Set CrossStreet
     *
     * @return string
     */
    public function getCrossStreet()
    {
        return $this->CrossStreet;
    }
    
    /**
     * This is used to specify additional details about the address such as landmark. For e.g. This field is used to capture details such as an address being inside a facility such as, Chilli's Care Center, St. Jude - Inside.
     *
     * @param string[] $additionalDescriptions
     * @return AddressAncillaryDetail
     */
    public function setAdditionalDescriptions(array $additionalDescriptions)
    {
        $this->__set('AdditionalDescriptions', $additionalDescriptions);
        $this->AdditionalDescriptions = $additionalDescriptions;
        return $this;
    }
    
    /**
     * Returns This is used to specify additional details about the address such as landmark. For e.g. This field is used to capture details such as an address being inside a facility such as, Chilli's Care Center, St. Jude - Inside.
     *
     * @return string[]
     */
    public function getAdditionalDescriptions()
    {
        return $this->AdditionalDescriptions;
    }
    

    
}