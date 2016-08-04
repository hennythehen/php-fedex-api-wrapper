<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * SendNotificationsReply
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class SendNotificationsReply
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'HighestSeverity' => 'NotificationSeverityType',
'Notifications' => 'Notification',
'TransactionDetail' => 'TransactionDetail',
'Version' => 'VersionId',
'DuplicateWaybill' => 'boolean',
'MoreDataAvailable' => 'boolean',
'PagingToken' => 'string',
'Packages' => 'TrackNotificationPackage',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'SendNotificationsReply';

        
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
     * @var boolean
     */
    public $DuplicateWaybill;

        
    /**
     * @var boolean
     */
    public $MoreDataAvailable;

        
    /**
     * @var string
     */
    public $PagingToken;

        
    /**
     * @var TrackNotificationPackage[]
     */
    public $Packages = array();



    /**
     * This contains the severity type of the most severe Notification in the Notifications array.
     *
     * @param \FedEx\TrackService\SimpleType\NotificationSeverityType|string $highestSeverity
     * @return SendNotificationsReply
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
     * @return SendNotificationsReply
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
     * @return SendNotificationsReply
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
     * @return SendNotificationsReply
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
     * True if duplicate packages (more than one package with the same tracking number) have been found, the packages array contains information about each duplicate. Use this information to determine which of the tracking numbers is the one you need and resend your request using the tracking number and TrackingNumberUniqueIdentifier for that package.
     *
     * @param boolean $duplicateWaybill
     * @return SendNotificationsReply
     */
    public function setDuplicateWaybill($duplicateWaybill)
    {
        $this->__set('DuplicateWaybill', $duplicateWaybill);
        $this->DuplicateWaybill = $duplicateWaybill;
        return $this;
    }
    
    /**
     * Returns True if duplicate packages (more than one package with the same tracking number) have been found, the packages array contains information about each duplicate. Use this information to determine which of the tracking numbers is the one you need and resend your request using the tracking number and TrackingNumberUniqueIdentifier for that package.
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
     * @param boolean $moreDataAvailable
     * @return SendNotificationsReply
     */
    public function setMoreDataAvailable($moreDataAvailable)
    {
        $this->__set('MoreDataAvailable', $moreDataAvailable);
        $this->MoreDataAvailable = $moreDataAvailable;
        return $this;
    }
    
    /**
     * Returns True if additional packages remain to be retrieved.
     *
     * @return boolean
     */
    public function getMoreDataAvailable()
    {
        return $this->MoreDataAvailable;
    }
    
    /**
     * Value that must be passed in a TrackNotification request to retrieve the next set of packages (when MoreDataAvailable = true).
     *
     * @param string $pagingToken
     * @return SendNotificationsReply
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
     * Information about the notifications that are available for this tracking number. If there are duplicates the ship date and destination address information is returned for determining which TrackingNumberUniqueIdentifier to use on a subsequent request.
     *
     * @param TrackNotificationPackage[] $packages
     * @return SendNotificationsReply
     */
    public function setPackages(array $packages)
    {
        $this->__set('Packages', $packages);
        $this->Packages = $packages;
        return $this;
    }
    
    /**
     * Returns Information about the notifications that are available for this tracking number. If there are duplicates the ship date and destination address information is returned for determining which TrackingNumberUniqueIdentifier to use on a subsequent request.
     *
     * @return TrackNotificationPackage[]
     */
    public function getPackages()
    {
        return $this->Packages;
    }
    

    
}