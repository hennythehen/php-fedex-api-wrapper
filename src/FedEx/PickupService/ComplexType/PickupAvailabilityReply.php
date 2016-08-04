<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * PickupAvailabilityReply
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class PickupAvailabilityReply
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'HighestSeverity' => 'NotificationSeverityType',
'Notifications' => 'Notification',
'TransactionDetail' => 'TransactionDetail',
'Version' => 'VersionId',
'RequestTimestamp' => 'dateTime',
'Options' => 'PickupScheduleOption',
'CloseTimeType' => 'CloseTimeType',
'CloseTime' => 'time',
'LocalTime' => 'time',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'PickupAvailabilityReply';

        
    /**
     * @var \FedEx\PickupService\SimpleType\NotificationSeverityType|string
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
     * @var dateTime
     */
    public $RequestTimestamp;

        
    /**
     * @var PickupScheduleOption[]
     */
    public $Options = array();

        
    /**
     * @var \FedEx\PickupService\SimpleType\CloseTimeType|string
     */
    public $CloseTimeType;

        
    /**
     * @var time
     */
    public $CloseTime;

        
    /**
     * @var time
     */
    public $LocalTime;



    /**
     * Set HighestSeverity
     *
     * @param \FedEx\PickupService\SimpleType\NotificationSeverityType|string $highestSeverity
     * @return PickupAvailabilityReply
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
     * @return \FedEx\PickupService\SimpleType\NotificationSeverityType|string
     */
    public function getHighestSeverity()
    {
        return $this->HighestSeverity;
    }
    
    /**
     * Set Notifications
     *
     * @param Notification[] $notifications
     * @return PickupAvailabilityReply
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
     * Set TransactionDetail
     *
     * @param TransactionDetail $transactionDetail
     * @return PickupAvailabilityReply
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->__set('TransactionDetail', $transactionDetail);
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Returns Set TransactionDetail
     *
     * @return TransactionDetail
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    
    /**
     * Set Version
     *
     * @param VersionId $version
     * @return PickupAvailabilityReply
     */
    public function setVersion(VersionId $version)
    {
        $this->__set('Version', $version);
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Returns Set Version
     *
     * @return VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    
    /**
     * Set RequestTimestamp
     *
     * @param dateTime $requestTimestamp
     * @return PickupAvailabilityReply
     */
    public function setRequestTimestamp($requestTimestamp)
    {
        $this->__set('RequestTimestamp', $requestTimestamp);
        $this->RequestTimestamp = $requestTimestamp;
        return $this;
    }
    
    /**
     * Returns Set RequestTimestamp
     *
     * @return dateTime
     */
    public function getRequestTimestamp()
    {
        return $this->RequestTimestamp;
    }
    
    /**
     * Set Options
     *
     * @param PickupScheduleOption[] $options
     * @return PickupAvailabilityReply
     */
    public function setOptions(array $options)
    {
        $this->__set('Options', $options);
        $this->Options = $options;
        return $this;
    }
    
    /**
     * Returns Set Options
     *
     * @return PickupScheduleOption[]
     */
    public function getOptions()
    {
        return $this->Options;
    }
    
    /**
     * Identifies whether the close time is specified by the customer or is the default time.
     *
     * @param \FedEx\PickupService\SimpleType\CloseTimeType|string $closeTimeType
     * @return PickupAvailabilityReply
     */
    public function setCloseTimeType($closeTimeType)
    {
        $this->__set('CloseTimeType', $closeTimeType);
        $this->CloseTimeType = $closeTimeType;
        return $this;
    }
    
    /**
     * Returns Identifies whether the close time is specified by the customer or is the default time.
     *
     * @return \FedEx\PickupService\SimpleType\CloseTimeType|string
     */
    public function getCloseTimeType()
    {
        return $this->CloseTimeType;
    }
    
    /**
     * Close time corresponding to the above specified type
     *
     * @param time $closeTime
     * @return PickupAvailabilityReply
     */
    public function setCloseTime(time $closeTime)
    {
        $this->__set('CloseTime', $closeTime);
        $this->CloseTime = $closeTime;
        return $this;
    }
    
    /**
     * Returns Close time corresponding to the above specified type
     *
     * @return time
     */
    public function getCloseTime()
    {
        return $this->CloseTime;
    }
    
    /**
     * Local time of the service center that will service the pickup
     *
     * @param time $localTime
     * @return PickupAvailabilityReply
     */
    public function setLocalTime(time $localTime)
    {
        $this->__set('LocalTime', $localTime);
        $this->LocalTime = $localTime;
        return $this;
    }
    
    /**
     * Returns Local time of the service center that will service the pickup
     *
     * @return time
     */
    public function getLocalTime()
    {
        return $this->LocalTime;
    }
    

    
}