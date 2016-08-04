<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ExpressFreightPickupDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class ExpressFreightPickupDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Service' => 'ServiceType',
'BookingNumber' => 'string',
'Dimensions' => 'Dimensions',
'TruckType' => 'TruckType',
'TrailerSize' => 'TrailerSizeType',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ExpressFreightPickupDetail';

        
    /**
     * @var \FedEx\PickupService\SimpleType\ServiceType|string
     */
    public $Service;

        
    /**
     * @var string
     */
    public $BookingNumber;

        
    /**
     * @var Dimensions
     */
    public $Dimensions;

        
    /**
     * @var \FedEx\PickupService\SimpleType\TruckType|string
     */
    public $TruckType;

        
    /**
     * @var \FedEx\PickupService\SimpleType\TrailerSizeType|string
     */
    public $TrailerSize;



    /**
     * Set Service
     *
     * @param \FedEx\PickupService\SimpleType\ServiceType|string $service
     * @return ExpressFreightPickupDetail
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
     * @return \FedEx\PickupService\SimpleType\ServiceType|string
     */
    public function getService()
    {
        return $this->Service;
    }
    
    /**
     * Set BookingNumber
     *
     * @param string $bookingNumber
     * @return ExpressFreightPickupDetail
     */
    public function setBookingNumber($bookingNumber)
    {
        $this->__set('BookingNumber', $bookingNumber);
        $this->BookingNumber = $bookingNumber;
        return $this;
    }
    
    /**
     * Returns Set BookingNumber
     *
     * @return string
     */
    public function getBookingNumber()
    {
        return $this->BookingNumber;
    }
    
    /**
     * Set Dimensions
     *
     * @param Dimensions $dimensions
     * @return ExpressFreightPickupDetail
     */
    public function setDimensions(Dimensions $dimensions)
    {
        $this->__set('Dimensions', $dimensions);
        $this->Dimensions = $dimensions;
        return $this;
    }
    
    /**
     * Returns Set Dimensions
     *
     * @return Dimensions
     */
    public function getDimensions()
    {
        return $this->Dimensions;
    }
    
    /**
     * Set TruckType
     *
     * @param \FedEx\PickupService\SimpleType\TruckType|string $truckType
     * @return ExpressFreightPickupDetail
     */
    public function setTruckType($truckType)
    {
        $this->__set('TruckType', $truckType);
        $this->TruckType = $truckType;
        return $this;
    }
    
    /**
     * Returns Set TruckType
     *
     * @return \FedEx\PickupService\SimpleType\TruckType|string
     */
    public function getTruckType()
    {
        return $this->TruckType;
    }
    
    /**
     * Set TrailerSize
     *
     * @param \FedEx\PickupService\SimpleType\TrailerSizeType|string $trailerSize
     * @return ExpressFreightPickupDetail
     */
    public function setTrailerSize($trailerSize)
    {
        $this->__set('TrailerSize', $trailerSize);
        $this->TrailerSize = $trailerSize;
        return $this;
    }
    
    /**
     * Returns Set TrailerSize
     *
     * @return \FedEx\PickupService\SimpleType\TrailerSizeType|string
     */
    public function getTrailerSize()
    {
        return $this->TrailerSize;
    }
    

    
}