<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * UploadImagesReply
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class UploadImagesReply
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'HighestSeverity' => 'NotificationSeverityType',
'Notifications' => 'Notification',
'TransactionDetail' => 'TransactionDetail',
'Version' => 'VersionId',
'ImageStatuses' => 'ImageUploadStatusDetail',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'UploadImagesReply';

        
    /**
     * @var \FedEx\UploadDocumentService\SimpleType\NotificationSeverityType|string
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
     * @var ImageUploadStatusDetail[]
     */
    public $ImageStatuses = array();



    /**
     * Identifies the highest severity encountered when executing the request; in order from high to low: FAILURE, ERROR, WARNING, NOTE, SUCCESS.
     *
     * @param \FedEx\UploadDocumentService\SimpleType\NotificationSeverityType|string $highestSeverity
     * @return UploadImagesReply
     */
    public function setHighestSeverity($highestSeverity)
    {
        $this->__set('HighestSeverity', $highestSeverity);
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * Returns Identifies the highest severity encountered when executing the request; in order from high to low: FAILURE, ERROR, WARNING, NOTE, SUCCESS.
     *
     * @return \FedEx\UploadDocumentService\SimpleType\NotificationSeverityType|string
     */
    public function getHighestSeverity()
    {
        return $this->HighestSeverity;
    }
    
    /**
     * The descriptive data detailing the status of a sumbitted transaction.
     *
     * @param Notification[] $notifications
     * @return UploadImagesReply
     */
    public function setNotifications(array $notifications)
    {
        $this->__set('Notifications', $notifications);
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * Returns The descriptive data detailing the status of a sumbitted transaction.
     *
     * @return Notification[]
     */
    public function getNotifications()
    {
        return $this->Notifications;
    }
    
    /**
     * Descriptive data that governs data payload language/translations. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $transactionDetail
     * @return UploadImagesReply
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->__set('TransactionDetail', $transactionDetail);
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Returns Descriptive data that governs data payload language/translations. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @return TransactionDetail
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $version
     * @return UploadImagesReply
     */
    public function setVersion(VersionId $version)
    {
        $this->__set('Version', $version);
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Returns Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @return VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    
    /**
     * Set ImageStatuses
     *
     * @param ImageUploadStatusDetail[] $imageStatuses
     * @return UploadImagesReply
     */
    public function setImageStatuses(array $imageStatuses)
    {
        $this->__set('ImageStatuses', $imageStatuses);
        $this->ImageStatuses = $imageStatuses;
        return $this;
    }
    
    /**
     * Returns Set ImageStatuses
     *
     * @return ImageUploadStatusDetail[]
     */
    public function getImageStatuses()
    {
        return $this->ImageStatuses;
    }
    

    
}