<?php
namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TrackingId
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class TrackingId
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'TrackingIdType' => 'TrackingIdType',
'FormId' => 'string',
'TrackingNumber' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'TrackingId';

        
    /**
     * @var \FedEx\SimpleType\TrackingIdType|string
     */
    public $TrackingIdType;

        
    /**
     * @var string
     */
    public $FormId;

        
    /**
     * @var string
     */
    public $TrackingNumber;



    /**
     * Set TrackingIdType
     *
     * @param \FedEx\SimpleType\TrackingIdType|string $trackingIdType
     * @return TrackingId
     */
    public function setTrackingIdType($trackingIdType)
    {
        $this->__set('TrackingIdType', $trackingIdType);
        $this->TrackingIdType = $trackingIdType;
        return $this;
    }
    
    /**
     * Returns Set TrackingIdType
     *
     * @return \FedEx\SimpleType\TrackingIdType|string
     */
    public function getTrackingIdType()
    {
        return $this->TrackingIdType;
    }
    
    /**
     * Set FormId
     *
     * @param string $formId
     * @return TrackingId
     */
    public function setFormId($formId)
    {
        $this->__set('FormId', $formId);
        $this->FormId = $formId;
        return $this;
    }
    
    /**
     * Returns Set FormId
     *
     * @return string
     */
    public function getFormId()
    {
        return $this->FormId;
    }
    
    /**
     * Set TrackingNumber
     *
     * @param string $trackingNumber
     * @return TrackingId
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->__set('TrackingNumber', $trackingNumber);
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    
    /**
     * Returns Set TrackingNumber
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->TrackingNumber;
    }
    

    
}