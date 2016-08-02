<?php
namespace FedEx\ComplexType;

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

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ImageUploadStatusDetail';

    /**
     * Set Id
     *
     * @param \FedEx\SimpleType\ImageId|string $id
     * @return ImageUploadStatusDetail
     */
    public function setId($id)
    {
        $this->Id = $id;
        return $this;
    }
    
    /**
     * Returns Set Id
     *
     * @return \FedEx\SimpleType\ImageId|string
     */
    public function getId()
    {
        return $this->Id;
    }
    
    /**
     * Set Status
     *
     * @param \FedEx\SimpleType\UploadImageStatusType|string $status
     * @return ImageUploadStatusDetail
     */
    public function setStatus($status)
    {
        $this->Status = $status;
        return $this;
    }
    
    /**
     * Returns Set Status
     *
     * @return \FedEx\SimpleType\UploadImageStatusType|string
     */
    public function getStatus()
    {
        return $this->Status;
    }
    
    /**
     * Set StatusInfo
     *
     * @param \FedEx\SimpleType\UploadImageStatusInfoType|string $statusInfo
     * @return ImageUploadStatusDetail
     */
    public function setStatusInfo($statusInfo)
    {
        $this->StatusInfo = $statusInfo;
        return $this;
    }
    
    /**
     * Returns Set StatusInfo
     *
     * @return \FedEx\SimpleType\UploadImageStatusInfoType|string
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