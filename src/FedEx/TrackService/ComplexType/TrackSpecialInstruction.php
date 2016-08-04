<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TrackSpecialInstruction
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class TrackSpecialInstruction
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Description' => 'string',
'DeliveryOption' => 'TrackDeliveryOptionType',
'StatusDetail' => 'SpecialInstructionStatusDetail',
'OriginalEstimatedDeliveryTimestamp' => 'dateTime',
'OriginalRequestTime' => 'dateTime',
'RequestedAppointmentTime' => 'AppointmentDetail',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'TrackSpecialInstruction';

        
    /**
     * @var string
     */
    public $Description;

        
    /**
     * @var \FedEx\TrackService\SimpleType\TrackDeliveryOptionType|string
     */
    public $DeliveryOption;

        
    /**
     * @var SpecialInstructionStatusDetail
     */
    public $StatusDetail;

        
    /**
     * @var dateTime
     */
    public $OriginalEstimatedDeliveryTimestamp;

        
    /**
     * @var dateTime
     */
    public $OriginalRequestTime;

        
    /**
     * @var AppointmentDetail
     */
    public $RequestedAppointmentTime;



    /**
     * Set Description
     *
     * @param string $description
     * @return TrackSpecialInstruction
     */
    public function setDescription($description)
    {
        $this->__set('Description', $description);
        $this->Description = $description;
        return $this;
    }
    
    /**
     * Returns Set Description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }
    
    /**
     * Set DeliveryOption
     *
     * @param \FedEx\TrackService\SimpleType\TrackDeliveryOptionType|string $deliveryOption
     * @return TrackSpecialInstruction
     */
    public function setDeliveryOption($deliveryOption)
    {
        $this->__set('DeliveryOption', $deliveryOption);
        $this->DeliveryOption = $deliveryOption;
        return $this;
    }
    
    /**
     * Returns Set DeliveryOption
     *
     * @return \FedEx\TrackService\SimpleType\TrackDeliveryOptionType|string
     */
    public function getDeliveryOption()
    {
        return $this->DeliveryOption;
    }
    
    /**
     * Specifies the status and status update time of the track special instructions.
     *
     * @param SpecialInstructionStatusDetail $statusDetail
     * @return TrackSpecialInstruction
     */
    public function setStatusDetail(SpecialInstructionStatusDetail $statusDetail)
    {
        $this->__set('StatusDetail', $statusDetail);
        $this->StatusDetail = $statusDetail;
        return $this;
    }
    
    /**
     * Returns Specifies the status and status update time of the track special instructions.
     *
     * @return SpecialInstructionStatusDetail
     */
    public function getStatusDetail()
    {
        return $this->StatusDetail;
    }
    
    /**
     * Specifies the estimated delivery time that was originally estimated when the shipment was shipped.
     *
     * @param dateTime $originalEstimatedDeliveryTimestamp
     * @return TrackSpecialInstruction
     */
    public function setOriginalEstimatedDeliveryTimestamp($originalEstimatedDeliveryTimestamp)
    {
        $this->__set('OriginalEstimatedDeliveryTimestamp', $originalEstimatedDeliveryTimestamp);
        $this->OriginalEstimatedDeliveryTimestamp = $originalEstimatedDeliveryTimestamp;
        return $this;
    }
    
    /**
     * Returns Specifies the estimated delivery time that was originally estimated when the shipment was shipped.
     *
     * @return dateTime
     */
    public function getOriginalEstimatedDeliveryTimestamp()
    {
        return $this->OriginalEstimatedDeliveryTimestamp;
    }
    
    /**
     * Specifies the time the customer requested a change to the shipment.
     *
     * @param dateTime $originalRequestTime
     * @return TrackSpecialInstruction
     */
    public function setOriginalRequestTime($originalRequestTime)
    {
        $this->__set('OriginalRequestTime', $originalRequestTime);
        $this->OriginalRequestTime = $originalRequestTime;
        return $this;
    }
    
    /**
     * Returns Specifies the time the customer requested a change to the shipment.
     *
     * @return dateTime
     */
    public function getOriginalRequestTime()
    {
        return $this->OriginalRequestTime;
    }
    
    /**
     * The requested appointment time for delivery.
     *
     * @param AppointmentDetail $requestedAppointmentTime
     * @return TrackSpecialInstruction
     */
    public function setRequestedAppointmentTime(AppointmentDetail $requestedAppointmentTime)
    {
        $this->__set('RequestedAppointmentTime', $requestedAppointmentTime);
        $this->RequestedAppointmentTime = $requestedAppointmentTime;
        return $this;
    }
    
    /**
     * Returns The requested appointment time for delivery.
     *
     * @return AppointmentDetail
     */
    public function getRequestedAppointmentTime()
    {
        return $this->RequestedAppointmentTime;
    }
    

    
}