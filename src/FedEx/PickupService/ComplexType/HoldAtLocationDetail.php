<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * HoldAtLocationDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class HoldAtLocationDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'PhoneNumber' => 'string',
'LocationContactAndAddress' => 'ContactAndAddress',
'LocationType' => 'FedExLocationType',
'LocationId' => 'string',
'LocationNumber' => 'int',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'HoldAtLocationDetail';

        
    /**
     * @var string
     */
    public $PhoneNumber;

        
    /**
     * @var ContactAndAddress
     */
    public $LocationContactAndAddress;

        
    /**
     * @var \FedEx\PickupService\SimpleType\FedExLocationType|string
     */
    public $LocationType;

        
    /**
     * @var string
     */
    public $LocationId;

        
    /**
     * @var int
     */
    public $LocationNumber;



    /**
     * Contact phone number for recipient of shipment.
     *
     * @param string $phoneNumber
     * @return HoldAtLocationDetail
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->__set('PhoneNumber', $phoneNumber);
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    
    /**
     * Returns Contact phone number for recipient of shipment.
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }
    
    /**
     * Contact and address of FedEx facility at which shipment is to be held.
     *
     * @param ContactAndAddress $locationContactAndAddress
     * @return HoldAtLocationDetail
     */
    public function setLocationContactAndAddress(ContactAndAddress $locationContactAndAddress)
    {
        $this->__set('LocationContactAndAddress', $locationContactAndAddress);
        $this->LocationContactAndAddress = $locationContactAndAddress;
        return $this;
    }
    
    /**
     * Returns Contact and address of FedEx facility at which shipment is to be held.
     *
     * @return ContactAndAddress
     */
    public function getLocationContactAndAddress()
    {
        return $this->LocationContactAndAddress;
    }
    
    /**
     * Type of facility at which package/shipment is to be held.
     *
     * @param \FedEx\PickupService\SimpleType\FedExLocationType|string $locationType
     * @return HoldAtLocationDetail
     */
    public function setLocationType($locationType)
    {
        $this->__set('LocationType', $locationType);
        $this->LocationType = $locationType;
        return $this;
    }
    
    /**
     * Returns Type of facility at which package/shipment is to be held.
     *
     * @return \FedEx\PickupService\SimpleType\FedExLocationType|string
     */
    public function getLocationType()
    {
        return $this->LocationType;
    }
    
    /**
     * Location identification (for facilities identified by an alphanumeric location code).
     *
     * @param string $locationId
     * @return HoldAtLocationDetail
     */
    public function setLocationId($locationId)
    {
        $this->__set('LocationId', $locationId);
        $this->LocationId = $locationId;
        return $this;
    }
    
    /**
     * Returns Location identification (for facilities identified by an alphanumeric location code).
     *
     * @return string
     */
    public function getLocationId()
    {
        return $this->LocationId;
    }
    
    /**
     * Location identification (for facilities identified by an numeric location code).
     *
     * @param int $locationNumber
     * @return HoldAtLocationDetail
     */
    public function setLocationNumber($locationNumber)
    {
        $this->__set('LocationNumber', $locationNumber);
        $this->LocationNumber = $locationNumber;
        return $this;
    }
    
    /**
     * Returns Location identification (for facilities identified by an numeric location code).
     *
     * @return int
     */
    public function getLocationNumber()
    {
        return $this->LocationNumber;
    }
    

    
}