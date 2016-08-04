<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the location details and other information relevant to the location that is derived from the inputs provided in the request.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 */
class DistanceAndLocationDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Distance' => 'Distance',
'ReservationAvailabilityDetail' => 'ReservationAvailabilityDetail',
'LocationDetail' => 'LocationDetail',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'DistanceAndLocationDetail';

        
    /**
     * @var Distance
     */
    public $Distance;

        
    /**
     * @var ReservationAvailabilityDetail
     */
    public $ReservationAvailabilityDetail;

        
    /**
     * @var LocationDetail
     */
    public $LocationDetail;



    /**
     * Distance between an address of a geographic location and an address of a FedEx location.
     *
     * @param Distance $distance
     * @return DistanceAndLocationDetail
     */
    public function setDistance(Distance $distance)
    {
        $this->__set('Distance', $distance);
        $this->Distance = $distance;
        return $this;
    }
    
    /**
     * Returns Distance between an address of a geographic location and an address of a FedEx location.
     *
     * @return Distance
     */
    public function getDistance()
    {
        return $this->Distance;
    }
    
    /**
     * Set ReservationAvailabilityDetail
     *
     * @param ReservationAvailabilityDetail $reservationAvailabilityDetail
     * @return DistanceAndLocationDetail
     */
    public function setReservationAvailabilityDetail(ReservationAvailabilityDetail $reservationAvailabilityDetail)
    {
        $this->__set('ReservationAvailabilityDetail', $reservationAvailabilityDetail);
        $this->ReservationAvailabilityDetail = $reservationAvailabilityDetail;
        return $this;
    }
    
    /**
     * Returns Set ReservationAvailabilityDetail
     *
     * @return ReservationAvailabilityDetail
     */
    public function getReservationAvailabilityDetail()
    {
        return $this->ReservationAvailabilityDetail;
    }
    
    /**
     * Details about a FedEx location such as services offered, working hours and pick and drop off times.
     *
     * @param LocationDetail $locationDetail
     * @return DistanceAndLocationDetail
     */
    public function setLocationDetail(LocationDetail $locationDetail)
    {
        $this->__set('LocationDetail', $locationDetail);
        $this->LocationDetail = $locationDetail;
        return $this;
    }
    
    /**
     * Returns Details about a FedEx location such as services offered, working hours and pick and drop off times.
     *
     * @return LocationDetail
     */
    public function getLocationDetail()
    {
        return $this->LocationDetail;
    }
    

    
}