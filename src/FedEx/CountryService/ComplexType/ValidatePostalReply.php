<?php
namespace FedEx\CountryService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ValidatePostalReply
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Country Service
 */
class ValidatePostalReply
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'HighestSeverity' => 'NotificationSeverityType',
'Notifications' => 'Notification',
'TransactionDetail' => 'TransactionDetail',
'Version' => 'VersionId',
'PostalDetail' => 'PostalDetail',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ValidatePostalReply';

        
    /**
     * @var \FedEx\CountryService\SimpleType\NotificationSeverityType|string
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
     * @var PostalDetail
     */
    public $PostalDetail;



    /**
     * Set HighestSeverity
     *
     * @param \FedEx\CountryService\SimpleType\NotificationSeverityType|string $highestSeverity
     * @return ValidatePostalReply
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
     * @return \FedEx\CountryService\SimpleType\NotificationSeverityType|string
     */
    public function getHighestSeverity()
    {
        return $this->HighestSeverity;
    }
    
    /**
     * Set Notifications
     *
     * @param Notification[] $notifications
     * @return ValidatePostalReply
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
     * @return ValidatePostalReply
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
     * @return ValidatePostalReply
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
     * Set PostalDetail
     *
     * @param PostalDetail $postalDetail
     * @return ValidatePostalReply
     */
    public function setPostalDetail(PostalDetail $postalDetail)
    {
        $this->__set('PostalDetail', $postalDetail);
        $this->PostalDetail = $postalDetail;
        return $this;
    }
    
    /**
     * Returns Set PostalDetail
     *
     * @return PostalDetail
     */
    public function getPostalDetail()
    {
        return $this->PostalDetail;
    }
    

    
}