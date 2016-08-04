<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the latest time by which a package can be dropped off at a FedEx location.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 */
class LatestDropOffDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'DayOfWeek' => 'DayOfWeekType',
'Time' => 'time',
'Overlays' => 'LatestDropoffOverlayDetail',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'LatestDropOffDetail';

        
    /**
     * @var \FedEx\LocationsService\SimpleType\DayOfWeekType|string
     */
    public $DayOfWeek;

        
    /**
     * @var time
     */
    public $Time;

        
    /**
     * @var LatestDropoffOverlayDetail[]
     */
    public $Overlays = array();



    /**
     * Set DayOfWeek
     *
     * @param \FedEx\LocationsService\SimpleType\DayOfWeekType|string $dayOfWeek
     * @return LatestDropOffDetail
     */
    public function setDayOfWeek($dayOfWeek)
    {
        $this->__set('DayOfWeek', $dayOfWeek);
        $this->DayOfWeek = $dayOfWeek;
        return $this;
    }
    
    /**
     * Returns Set DayOfWeek
     *
     * @return \FedEx\LocationsService\SimpleType\DayOfWeekType|string
     */
    public function getDayOfWeek()
    {
        return $this->DayOfWeek;
    }
    
    /**
     * Set Time
     *
     * @param time $time
     * @return LatestDropOffDetail
     */
    public function setTime(time $time)
    {
        $this->__set('Time', $time);
        $this->Time = $time;
        return $this;
    }
    
    /**
     * Returns Set Time
     *
     * @return time
     */
    public function getTime()
    {
        return $this->Time;
    }
    
    /**
     * Specifies the details about the overlay to the last drop off time for a carrier at a FedEx location.
     *
     * @param LatestDropoffOverlayDetail[] $overlays
     * @return LatestDropOffDetail
     */
    public function setOverlays(array $overlays)
    {
        $this->__set('Overlays', $overlays);
        $this->Overlays = $overlays;
        return $this;
    }
    
    /**
     * Returns Specifies the details about the overlay to the last drop off time for a carrier at a FedEx location.
     *
     * @return LatestDropoffOverlayDetail[]
     */
    public function getOverlays()
    {
        return $this->Overlays;
    }
    

    
}