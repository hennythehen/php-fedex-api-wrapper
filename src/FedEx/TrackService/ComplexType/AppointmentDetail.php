<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the different appointment times on a specific date.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class AppointmentDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Date' => 'date',
'WindowDetails' => 'AppointmentTimeDetail',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'AppointmentDetail';

        
    /**
     * @var date
     */
    public $Date;

        
    /**
     * @var AppointmentTimeDetail[]
     */
    public $WindowDetails = array();



    /**
     * Set Date
     *
     * @param date $date
     * @return AppointmentDetail
     */
    public function setDate($date)
    {
        $this->__set('Date', $date);
        $this->Date = $date;
        return $this;
    }
    
    /**
     * Returns Set Date
     *
     * @return date
     */
    public function getDate()
    {
        return $this->Date;
    }
    
    /**
     * Different appointment time windows on the date specified.
     *
     * @param AppointmentTimeDetail[] $windowDetails
     * @return AppointmentDetail
     */
    public function setWindowDetails(array $windowDetails)
    {
        $this->__set('WindowDetails', $windowDetails);
        $this->WindowDetails = $windowDetails;
        return $this;
    }
    
    /**
     * Returns Different appointment time windows on the date specified.
     *
     * @return AppointmentTimeDetail[]
     */
    public function getWindowDetails()
    {
        return $this->WindowDetails;
    }
    

    
}