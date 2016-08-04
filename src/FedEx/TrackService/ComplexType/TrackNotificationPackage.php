<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TrackNotificationPackage
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class TrackNotificationPackage
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'TrackingNumber' => 'string',
'TrackingNumberUniqueIdentifiers' => 'string',
'CarrierCode' => 'CarrierCodeType',
'ShipDate' => 'date',
'Destination' => 'Address',
'RecipientDetails' => 'TrackNotificationRecipientDetail',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'TrackNotificationPackage';

        
    /**
     * @var string
     */
    public $TrackingNumber;

        
    /**
     * @var string
     */
    public $TrackingNumberUniqueIdentifiers;

        
    /**
     * @var \FedEx\TrackService\SimpleType\CarrierCodeType|string
     */
    public $CarrierCode;

        
    /**
     * @var date
     */
    public $ShipDate;

        
    /**
     * @var Address
     */
    public $Destination;

        
    /**
     * @var TrackNotificationRecipientDetail[]
     */
    public $RecipientDetails = array();



    /**
     * FedEx assigned identifier for a package/shipment.
     *
     * @param string $trackingNumber
     * @return TrackNotificationPackage
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->__set('TrackingNumber', $trackingNumber);
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    
    /**
     * Returns FedEx assigned identifier for a package/shipment.
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->TrackingNumber;
    }
    
    /**
     * When duplicate tracking numbers exist this data is returned with summary information for each of the duplicates. The summary information is used to determine which of the duplicates the intended tracking number is. This identifier is used on a subsequent track request to retrieve the tracking data for the desired tracking number.
     *
     * @param string $trackingNumberUniqueIdentifiers
     * @return TrackNotificationPackage
     */
    public function setTrackingNumberUniqueIdentifiers($trackingNumberUniqueIdentifiers)
    {
        $this->__set('TrackingNumberUniqueIdentifiers', $trackingNumberUniqueIdentifiers);
        $this->TrackingNumberUniqueIdentifiers = $trackingNumberUniqueIdentifiers;
        return $this;
    }
    
    /**
     * Returns When duplicate tracking numbers exist this data is returned with summary information for each of the duplicates. The summary information is used to determine which of the duplicates the intended tracking number is. This identifier is used on a subsequent track request to retrieve the tracking data for the desired tracking number.
     *
     * @return string
     */
    public function getTrackingNumberUniqueIdentifiers()
    {
        return $this->TrackingNumberUniqueIdentifiers;
    }
    
    /**
     * Identification of a FedEx operating company (transportation).
     *
     * @param \FedEx\TrackService\SimpleType\CarrierCodeType|string $carrierCode
     * @return TrackNotificationPackage
     */
    public function setCarrierCode($carrierCode)
    {
        $this->__set('CarrierCode', $carrierCode);
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    
    /**
     * Returns Identification of a FedEx operating company (transportation).
     *
     * @return \FedEx\TrackService\SimpleType\CarrierCodeType|string
     */
    public function getCarrierCode()
    {
        return $this->CarrierCode;
    }
    
    /**
     * The date the package was shipped (tendered to FedEx).
     *
     * @param date $shipDate
     * @return TrackNotificationPackage
     */
    public function setShipDate($shipDate)
    {
        $this->__set('ShipDate', $shipDate);
        $this->ShipDate = $shipDate;
        return $this;
    }
    
    /**
     * Returns The date the package was shipped (tendered to FedEx).
     *
     * @return date
     */
    public function getShipDate()
    {
        return $this->ShipDate;
    }
    
    /**
     * The destination address of this package. Only city, state/province, and country are returned.
     *
     * @param Address $destination
     * @return TrackNotificationPackage
     */
    public function setDestination(Address $destination)
    {
        $this->__set('Destination', $destination);
        $this->Destination = $destination;
        return $this;
    }
    
    /**
     * Returns The destination address of this package. Only city, state/province, and country are returned.
     *
     * @return Address
     */
    public function getDestination()
    {
        return $this->Destination;
    }
    
    /**
     * Options available for a tracking notification recipient.
     *
     * @param TrackNotificationRecipientDetail[] $recipientDetails
     * @return TrackNotificationPackage
     */
    public function setRecipientDetails(array $recipientDetails)
    {
        $this->__set('RecipientDetails', $recipientDetails);
        $this->RecipientDetails = $recipientDetails;
        return $this;
    }
    
    /**
     * Returns Options available for a tracking notification recipient.
     *
     * @return TrackNotificationRecipientDetail[]
     */
    public function getRecipientDetails()
    {
        return $this->RecipientDetails;
    }
    

    
}