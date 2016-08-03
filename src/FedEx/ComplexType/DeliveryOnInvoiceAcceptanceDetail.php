<?php
namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * DeliveryOnInvoiceAcceptanceDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class DeliveryOnInvoiceAcceptanceDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Recipient' => 'Party',
'TrackingId' => 'TrackingId',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'DeliveryOnInvoiceAcceptanceDetail';

        
    /**
     * @var Party
     */
    public $Recipient;

        
    /**
     * @var TrackingId
     */
    public $TrackingId;



    /**
     * Set Recipient
     *
     * @param Party $recipient
     * @return DeliveryOnInvoiceAcceptanceDetail
     */
    public function setRecipient(Party $recipient)
    {
        $this->__set('Recipient', $recipient);
        $this->Recipient = $recipient;
        return $this;
    }
    
    /**
     * Returns Set Recipient
     *
     * @return Party
     */
    public function getRecipient()
    {
        return $this->Recipient;
    }
    
    /**
     * Specifies the tracking id for the return, if preassigned.
     *
     * @param TrackingId $trackingId
     * @return DeliveryOnInvoiceAcceptanceDetail
     */
    public function setTrackingId(TrackingId $trackingId)
    {
        $this->__set('TrackingId', $trackingId);
        $this->TrackingId = $trackingId;
        return $this;
    }
    
    /**
     * Returns Specifies the tracking id for the return, if preassigned.
     *
     * @return TrackingId
     */
    public function getTrackingId()
    {
        return $this->TrackingId;
    }
    

    
}