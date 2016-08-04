<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CompletedTrackDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class CompletedTrackDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'HighestSeverity' => 'NotificationSeverityType',
'Notifications' => 'Notification',
'DuplicateWaybill' => 'boolean',
'MoreData' => 'boolean',
'PagingToken' => 'string',
'TrackDetailsCount' => 'nonNegativeInteger',
'TrackDetails' => 'TrackDetail',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CompletedTrackDetail';

        
    /**
     * @var \FedEx\TrackService\SimpleType\NotificationSeverityType|string
     */
    public $HighestSeverity;

        
    /**
     * @var Notification[]
     */
    public $Notifications = array();

        
    /**
     * @var boolean
     */
    public $DuplicateWaybill;

        
    /**
     * @var boolean
     */
    public $MoreData;

        
    /**
     * @var string
     */
    public $PagingToken;

        
    /**
     * @var nonNegativeInteger
     */
    public $TrackDetailsCount;

        
    /**
     * @var TrackDetail[]
     */
    public $TrackDetails = array();



    /**
     * Set HighestSeverity
     *
     * @param \FedEx\TrackService\SimpleType\NotificationSeverityType|string $highestSeverity
     * @return CompletedTrackDetail
     */
    public function setHighestSeverity($highestSeverity)
    {
        $this->__set('HighestSeverity', $highestSeverity);
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * Returns Set HighestSeverity
     *
     * @return \FedEx\TrackService\SimpleType\NotificationSeverityType|string
     */
    public function getHighestSeverity()
    {
        return $this->HighestSeverity;
    }
    
    /**
     * Set Notifications
     *
     * @param Notification[] $notifications
     * @return CompletedTrackDetail
     */
    public function setNotifications(array $notifications)
    {
        $this->__set('Notifications', $notifications);
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * Returns Set Notifications
     *
     * @return Notification[]
     */
    public function getNotifications()
    {
        return $this->Notifications;
    }
    
    /**
     * True if duplicate packages (more than one package with the same tracking number) have been found, and only limited data will be provided for each one.
     *
     * @param boolean $duplicateWaybill
     * @return CompletedTrackDetail
     */
    public function setDuplicateWaybill($duplicateWaybill)
    {
        $this->__set('DuplicateWaybill', $duplicateWaybill);
        $this->DuplicateWaybill = $duplicateWaybill;
        return $this;
    }
    
    /**
     * Returns True if duplicate packages (more than one package with the same tracking number) have been found, and only limited data will be provided for each one.
     *
     * @return boolean
     */
    public function getDuplicateWaybill()
    {
        return $this->DuplicateWaybill;
    }
    
    /**
     * True if additional packages remain to be retrieved.
     *
     * @param boolean $moreData
     * @return CompletedTrackDetail
     */
    public function setMoreData($moreData)
    {
        $this->__set('MoreData', $moreData);
        $this->MoreData = $moreData;
        return $this;
    }
    
    /**
     * Returns True if additional packages remain to be retrieved.
     *
     * @return boolean
     */
    public function getMoreData()
    {
        return $this->MoreData;
    }
    
    /**
     * Value that must be passed in a TrackNotification request to retrieve the next set of packages (when MoreDataAvailable = true).
     *
     * @param string $pagingToken
     * @return CompletedTrackDetail
     */
    public function setPagingToken($pagingToken)
    {
        $this->__set('PagingToken', $pagingToken);
        $this->PagingToken = $pagingToken;
        return $this;
    }
    
    /**
     * Returns Value that must be passed in a TrackNotification request to retrieve the next set of packages (when MoreDataAvailable = true).
     *
     * @return string
     */
    public function getPagingToken()
    {
        return $this->PagingToken;
    }
    
    /**
     * Identifies the total number of available track details across all pages.
     *
     * @param nonNegativeInteger $trackDetailsCount
     * @return CompletedTrackDetail
     */
    public function setTrackDetailsCount($trackDetailsCount)
    {
        $this->__set('TrackDetailsCount', $trackDetailsCount);
        $this->TrackDetailsCount = $trackDetailsCount;
        return $this;
    }
    
    /**
     * Returns Identifies the total number of available track details across all pages.
     *
     * @return nonNegativeInteger
     */
    public function getTrackDetailsCount()
    {
        return $this->TrackDetailsCount;
    }
    
    /**
     * Contains detailed tracking information for the requested packages(s).
     *
     * @param TrackDetail[] $trackDetails
     * @return CompletedTrackDetail
     */
    public function setTrackDetails(array $trackDetails)
    {
        $this->__set('TrackDetails', $trackDetails);
        $this->TrackDetails = $trackDetails;
        return $this;
    }
    
    /**
     * Returns Contains detailed tracking information for the requested packages(s).
     *
     * @return TrackDetail[]
     */
    public function getTrackDetails()
    {
        return $this->TrackDetails;
    }
    

    
}