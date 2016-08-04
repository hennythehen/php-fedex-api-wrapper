<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ImageUploadStatusDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class ImageUploadStatusDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Id' => 'ImageId',
'Status' => 'UploadImageStatusType',
'StatusInfo' => 'UploadImageStatusInfoType',
'Message' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ImageUploadStatusDetail';

        
    /**
     * @var \FedEx\UploadDocumentService\SimpleType\ImageId|string
     */
    public $Id;

        
    /**
     * @var \FedEx\UploadDocumentService\SimpleType\UploadImageStatusType|string
     */
    public $Status;

        
    /**
     * @var \FedEx\UploadDocumentService\SimpleType\UploadImageStatusInfoType|string
     */
    public $StatusInfo;

        
    /**
     * @var string
     */
    public $Message;



    /**
     * Set Id
     *
     * @param \FedEx\UploadDocumentService\SimpleType\ImageId|string $id
     * @return ImageUploadStatusDetail
     */
    public function setId($id)
    {
        $this->__set('Id', $id);
        $this->Id = $id;
        return $this;
    }
    
    /**
     * Returns Set Id
     *
     * @return \FedEx\UploadDocumentService\SimpleType\ImageId|string
     */
    public function getId()
    {
        return $this->Id;
    }
    
    /**
     * Set Status
     *
     * @param \FedEx\UploadDocumentService\SimpleType\UploadImageStatusType|string $status
     * @return ImageUploadStatusDetail
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
     * @return \FedEx\UploadDocumentService\SimpleType\UploadImageStatusType|string
     */
    public function getStatus()
    {
        return $this->Status;
    }
    
    /**
     * Set StatusInfo
     *
     * @param \FedEx\UploadDocumentService\SimpleType\UploadImageStatusInfoType|string $statusInfo
     * @return ImageUploadStatusDetail
     */
    public function setStatusInfo($statusInfo)
    {
        $this->__set('StatusInfo', $statusInfo);
        $this->StatusInfo = $statusInfo;
        return $this;
    }
    
    /**
     * Returns Set StatusInfo
     *
     * @return \FedEx\UploadDocumentService\SimpleType\UploadImageStatusInfoType|string
     */
    public function getStatusInfo()
    {
        return $this->StatusInfo;
    }
    
    /**
     * Set Message
     *
     * @param string $message
     * @return ImageUploadStatusDetail
     */
    public function setMessage($message)
    {
        $this->__set('Message', $message);
        $this->Message = $message;
        return $this;
    }
    
    /**
     * Returns Set Message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }
    

    
}