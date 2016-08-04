<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the details about the appointment time window.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class AppointmentTimeDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Type' => 'AppointmentWindowType',
'Window' => 'LocalTimeRange',
'Description' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'AppointmentTimeDetail';

        
    /**
     * @var \FedEx\TrackService\SimpleType\AppointmentWindowType|string
     */
    public $Type;

        
    /**
     * @var LocalTimeRange
     */
    public $Window;

        
    /**
     * @var string
     */
    public $Description;



    /**
     * The description that FedEx Ground uses for the appointment window being specified.
     *
     * @param \FedEx\TrackService\SimpleType\AppointmentWindowType|string $type
     * @return AppointmentTimeDetail
     */
    public function setType($type)
    {
        $this->__set('Type', $type);
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Returns The description that FedEx Ground uses for the appointment window being specified.
     *
     * @return \FedEx\TrackService\SimpleType\AppointmentWindowType|string
     */
    public function getType()
    {
        return $this->Type;
    }
    
    /**
     * Specifies the window of time for an appointment.
     *
     * @param LocalTimeRange $window
     * @return AppointmentTimeDetail
     */
    public function setWindow(LocalTimeRange $window)
    {
        $this->__set('Window', $window);
        $this->Window = $window;
        return $this;
    }
    
    /**
     * Returns Specifies the window of time for an appointment.
     *
     * @return LocalTimeRange
     */
    public function getWindow()
    {
        return $this->Window;
    }
    
    /**
     * Set Description
     *
     * @param string $description
     * @return AppointmentTimeDetail
     */
    public function setDescription($description)
    {
        $this->__set('Description', $description);
        $this->Description = $description;
        return $this;
    }
    
    /**
     * Returns Set Description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }
    

    
}