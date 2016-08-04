<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the location hours for a location.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 */
class LocationHours
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'DayofWeek' => 'DayOfWeekType',
'OperationalHours' => 'OperationalHoursType',
'Hours' => 'TimeRange',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'LocationHours';

        
    /**
     * @var \FedEx\LocationsService\SimpleType\DayOfWeekType|string
     */
    public $DayofWeek;

        
    /**
     * @var \FedEx\LocationsService\SimpleType\OperationalHoursType|string
     */
    public $OperationalHours;

        
    /**
     * @var TimeRange[]
     */
    public $Hours = array();



    /**
     * Set DayofWeek
     *
     * @param \FedEx\LocationsService\SimpleType\DayOfWeekType|string $dayofWeek
     * @return LocationHours
     */
    public function setDayofWeek($dayofWeek)
    {
        $this->__set('DayofWeek', $dayofWeek);
        $this->DayofWeek = $dayofWeek;
        return $this;
    }
    
    /**
     * Returns Set DayofWeek
     *
     * @return \FedEx\LocationsService\SimpleType\DayOfWeekType|string
     */
    public function getDayofWeek()
    {
        return $this->DayofWeek;
    }
    
    /**
     * Set OperationalHours
     *
     * @param \FedEx\LocationsService\SimpleType\OperationalHoursType|string $operationalHours
     * @return LocationHours
     */
    public function setOperationalHours($operationalHours)
    {
        $this->__set('OperationalHours', $operationalHours);
        $this->OperationalHours = $operationalHours;
        return $this;
    }
    
    /**
     * Returns Set OperationalHours
     *
     * @return \FedEx\LocationsService\SimpleType\OperationalHoursType|string
     */
    public function getOperationalHours()
    {
        return $this->OperationalHours;
    }
    
    /**
     * Set Hours
     *
     * @param TimeRange[] $hours
     * @return LocationHours
     */
    public function setHours(array $hours)
    {
        $this->__set('Hours', $hours);
        $this->Hours = $hours;
        return $this;
    }
    
    /**
     * Returns Set Hours
     *
     * @return TimeRange[]
     */
    public function getHours()
    {
        return $this->Hours;
    }
    

    
}