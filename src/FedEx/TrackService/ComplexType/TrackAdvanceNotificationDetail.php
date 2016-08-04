<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TrackAdvanceNotificationDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class TrackAdvanceNotificationDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'EstimatedTimeOfArrival' => 'dateTime',
'Reason' => 'string',
'Status' => 'TrackAdvanceNotificationStatusType',
'StatusDescription' => 'string',
'StatusTime' => 'dateTime',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'TrackAdvanceNotificationDetail';

        
    /**
     * @var dateTime
     */
    public $EstimatedTimeOfArrival;

        
    /**
     * @var string
     */
    public $Reason;

        
    /**
     * @var \FedEx\TrackService\SimpleType\TrackAdvanceNotificationStatusType|string
     */
    public $Status;

        
    /**
     * @var string
     */
    public $StatusDescription;

        
    /**
     * @var dateTime
     */
    public $StatusTime;



    /**
     * Set EstimatedTimeOfArrival
     *
     * @param dateTime $estimatedTimeOfArrival
     * @return TrackAdvanceNotificationDetail
     */
    public function setEstimatedTimeOfArrival($estimatedTimeOfArrival)
    {
        $this->__set('EstimatedTimeOfArrival', $estimatedTimeOfArrival);
        $this->EstimatedTimeOfArrival = $estimatedTimeOfArrival;
        return $this;
    }
    
    /**
     * Returns Set EstimatedTimeOfArrival
     *
     * @return dateTime
     */
    public function getEstimatedTimeOfArrival()
    {
        return $this->EstimatedTimeOfArrival;
    }
    
    /**
     * Set Reason
     *
     * @param string $reason
     * @return TrackAdvanceNotificationDetail
     */
    public function setReason($reason)
    {
        $this->__set('Reason', $reason);
        $this->Reason = $reason;
        return $this;
    }
    
    /**
     * Returns Set Reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->Reason;
    }
    
    /**
     * Set Status
     *
     * @param \FedEx\TrackService\SimpleType\TrackAdvanceNotificationStatusType|string $status
     * @return TrackAdvanceNotificationDetail
     */
    public function setStatus($status)
    {
        $this->__set('Status', $status);
        $this->Status = $status;
        return $this;
    }
    
    /**
     * Returns Set Status
     *
     * @return \FedEx\TrackService\SimpleType\TrackAdvanceNotificationStatusType|string
     */
    public function getStatus()
    {
        return $this->Status;
    }
    
    /**
     * Set StatusDescription
     *
     * @param string $statusDescription
     * @return TrackAdvanceNotificationDetail
     */
    public function setStatusDescription($statusDescription)
    {
        $this->__set('StatusDescription', $statusDescription);
        $this->StatusDescription = $statusDescription;
        return $this;
    }
    
    /**
     * Returns Set StatusDescription
     *
     * @return string
     */
    public function getStatusDescription()
    {
        return $this->StatusDescription;
    }
    
    /**
     * Set StatusTime
     *
     * @param dateTime $statusTime
     * @return TrackAdvanceNotificationDetail
     */
    public function setStatusTime($statusTime)
    {
        $this->__set('StatusTime', $statusTime);
        $this->StatusTime = $statusTime;
        return $this;
    }
    
    /**
     * Returns Set StatusTime
     *
     * @return dateTime
     */
    public function getStatusTime()
    {
        return $this->StatusTime;
    }
    

    
}