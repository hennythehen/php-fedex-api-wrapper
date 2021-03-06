<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data returned from a FedEx package tracking request.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class TrackReply
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'HighestSeverity' => 'NotificationSeverityType',
'Notifications' => 'Notification',
'TransactionDetail' => 'TransactionDetail',
'Version' => 'VersionId',
'CompletedTrackDetails' => 'CompletedTrackDetail',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'TrackReply';

        
    /**
     * @var \FedEx\TrackService\SimpleType\NotificationSeverityType|string
     */
    public $HighestSeverity;

        
    /**
     * @var Notification[]
     */
    public $Notifications = array();

        
    /**
     * @var TransactionDetail
     */
    public $TransactionDetail;

        
    /**
     * @var VersionId
     */
    public $Version;

        
    /**
     * @var CompletedTrackDetail[]
     */
    public $CompletedTrackDetails = array();



    /**
     * This contains the severity type of the most severe Notification in the Notifications array.
     *
     * @param \FedEx\TrackService\SimpleType\NotificationSeverityType|string $highestSeverity
     * @return TrackReply
     */
    public function setHighestSeverity($highestSeverity)
    {
        $this->__set('HighestSeverity', $highestSeverity);
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * Returns This contains the severity type of the most severe Notification in the Notifications array.
     *
     * @return \FedEx\TrackService\SimpleType\NotificationSeverityType|string
     */
    public function getHighestSeverity()
    {
        return $this->HighestSeverity;
    }
    
    /**
     * Information about the request/reply such was the transaction successful or not, and any additional information relevant to the request and/or reply. There may be multiple Notifications in a reply.
     *
     * @param Notification[] $notifications
     * @return TrackReply
     */
    public function setNotifications(array $notifications)
    {
        $this->__set('Notifications', $notifications);
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * Returns Information about the request/reply such was the transaction successful or not, and any additional information relevant to the request and/or reply. There may be multiple Notifications in a reply.
     *
     * @return Notification[]
     */
    public function getNotifications()
    {
        return $this->Notifications;
    }
    
    /**
     * Contains the CustomerTransactionDetail that is echoed back to the caller for matching requests and replies and a Localization element for defining the language/translation used in the reply data.
     *
     * @param TransactionDetail $transactionDetail
     * @return TrackReply
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->__set('TransactionDetail', $transactionDetail);
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Returns Contains the CustomerTransactionDetail that is echoed back to the caller for matching requests and replies and a Localization element for defining the language/translation used in the reply data.
     *
     * @return TransactionDetail
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    
    /**
     * Contains the version of the reply being used.
     *
     * @param VersionId $version
     * @return TrackReply
     */
    public function setVersion(VersionId $version)
    {
        $this->__set('Version', $version);
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Returns Contains the version of the reply being used.
     *
     * @return VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    
    /**
     * Contains detailed tracking entity information.
     *
     * @param CompletedTrackDetail[] $completedTrackDetails
     * @return TrackReply
     */
    public function setCompletedTrackDetails(array $completedTrackDetails)
    {
        $this->__set('CompletedTrackDetails', $completedTrackDetails);
        $this->CompletedTrackDetails = $completedTrackDetails;
        return $this;
    }
    
    /**
     * Returns Contains detailed tracking entity information.
     *
     * @return CompletedTrackDetail[]
     */
    public function getCompletedTrackDetails()
    {
        return $this->CompletedTrackDetails;
    }
    

    
}