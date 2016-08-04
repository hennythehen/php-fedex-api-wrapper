<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ShippingHoliday
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 */
class ShippingHoliday
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Holiday' => 'Holiday',
'UnavailableActions' => 'ShippingActionType',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ShippingHoliday';

        
    /**
     * @var Holiday
     */
    public $Holiday;

        
    /**
     * @var ShippingActionType[]
     */
    public $UnavailableActions = array();



    /**
     * Set Holiday
     *
     * @param Holiday $holiday
     * @return ShippingHoliday
     */
    public function setHoliday(Holiday $holiday)
    {
        $this->__set('Holiday', $holiday);
        $this->Holiday = $holiday;
        return $this;
    }
    
    /**
     * Returns Set Holiday
     *
     * @return Holiday
     */
    public function getHoliday()
    {
        return $this->Holiday;
    }
    
    /**
     * Set UnavailableActions
     *
     * @param ShippingActionType[] $unavailableActions
     * @return ShippingHoliday
     */
    public function setUnavailableActions(array $unavailableActions)
    {
        $this->__set('UnavailableActions', $unavailableActions);
        $this->UnavailableActions = $unavailableActions;
        return $this;
    }
    
    /**
     * Returns Set UnavailableActions
     *
     * @return ShippingActionType[]
     */
    public function getUnavailableActions()
    {
        return $this->UnavailableActions;
    }
    

    
}