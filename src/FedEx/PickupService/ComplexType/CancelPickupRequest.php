<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CancelPickupRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class CancelPickupRequest
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'WebAuthenticationDetail' => 'WebAuthenticationDetail',
'ClientDetail' => 'ClientDetail',
'TransactionDetail' => 'TransactionDetail',
'Version' => 'VersionId',
'CarrierCode' => 'CarrierCodeType',
'PickupConfirmationNumber' => 'string',
'ScheduledDate' => 'date',
'EndDate' => 'date',
'Location' => 'string',
'Remarks' => 'string',
'ShippingChargesPayment' => 'Payment',
'Reason' => 'string',
'ContactName' => 'string',
'PhoneNumber' => 'string',
'PhoneExtension' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CancelPickupRequest';

        
    /**
     * @var WebAuthenticationDetail
     */
    public $WebAuthenticationDetail;

        
    /**
     * @var ClientDetail
     */
    public $ClientDetail;

        
    /**
     * @var TransactionDetail
     */
    public $TransactionDetail;

        
    /**
     * @var VersionId
     */
    public $Version;

        
    /**
     * @var \FedEx\PickupService\SimpleType\CarrierCodeType|string
     */
    public $CarrierCode;

        
    /**
     * @var string
     */
    public $PickupConfirmationNumber;

        
    /**
     * @var date
     */
    public $ScheduledDate;

        
    /**
     * @var date
     */
    public $EndDate;

        
    /**
     * @var string
     */
    public $Location;

        
    /**
     * @var string
     */
    public $Remarks;

        
    /**
     * @var Payment
     */
    public $ShippingChargesPayment;

        
    /**
     * @var string
     */
    public $Reason;

        
    /**
     * @var string
     */
    public $ContactName;

        
    /**
     * @var string
     */
    public $PhoneNumber;

        
    /**
     * @var string
     */
    public $PhoneExtension;



    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $webAuthenticationDetail
     * @return CancelPickupRequest
     */
    public function setWebAuthenticationDetail(WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->__set('WebAuthenticationDetail', $webAuthenticationDetail);
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * Returns Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @return WebAuthenticationDetail
     */
    public function getWebAuthenticationDetail()
    {
        return $this->WebAuthenticationDetail;
    }
    
    /**
     * Set ClientDetail
     *
     * @param ClientDetail $clientDetail
     * @return CancelPickupRequest
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->__set('ClientDetail', $clientDetail);
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * Returns Set ClientDetail
     *
     * @return ClientDetail
     */
    public function getClientDetail()
    {
        return $this->ClientDetail;
    }
    
    /**
     * Set TransactionDetail
     *
     * @param TransactionDetail $transactionDetail
     * @return CancelPickupRequest
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
     * @return CancelPickupRequest
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
     * Set CarrierCode
     *
     * @param \FedEx\PickupService\SimpleType\CarrierCodeType|string $carrierCode
     * @return CancelPickupRequest
     */
    public function setCarrierCode($carrierCode)
    {
        $this->__set('CarrierCode', $carrierCode);
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    
    /**
     * Returns Set CarrierCode
     *
     * @return \FedEx\PickupService\SimpleType\CarrierCodeType|string
     */
    public function getCarrierCode()
    {
        return $this->CarrierCode;
    }
    
    /**
     * Set PickupConfirmationNumber
     *
     * @param string $pickupConfirmationNumber
     * @return CancelPickupRequest
     */
    public function setPickupConfirmationNumber($pickupConfirmationNumber)
    {
        $this->__set('PickupConfirmationNumber', $pickupConfirmationNumber);
        $this->PickupConfirmationNumber = $pickupConfirmationNumber;
        return $this;
    }
    
    /**
     * Returns Set PickupConfirmationNumber
     *
     * @return string
     */
    public function getPickupConfirmationNumber()
    {
        return $this->PickupConfirmationNumber;
    }
    
    /**
     * The local date which the pickup was originally scheduled to be picked up on. The date provided is the local to the client of the request. The date specification does not include any time zone designators.
     *
     * @param date $scheduledDate
     * @return CancelPickupRequest
     */
    public function setScheduledDate($scheduledDate)
    {
        $this->__set('ScheduledDate', $scheduledDate);
        $this->ScheduledDate = $scheduledDate;
        return $this;
    }
    
    /**
     * Returns The local date which the pickup was originally scheduled to be picked up on. The date provided is the local to the client of the request. The date specification does not include any time zone designators.
     *
     * @return date
     */
    public function getScheduledDate()
    {
        return $this->ScheduledDate;
    }
    
    /**
     * Set EndDate
     *
     * @param date $endDate
     * @return CancelPickupRequest
     */
    public function setEndDate($endDate)
    {
        $this->__set('EndDate', $endDate);
        $this->EndDate = $endDate;
        return $this;
    }
    
    /**
     * Returns Set EndDate
     *
     * @return date
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }
    
    /**
     * Set Location
     *
     * @param string $location
     * @return CancelPickupRequest
     */
    public function setLocation($location)
    {
        $this->__set('Location', $location);
        $this->Location = $location;
        return $this;
    }
    
    /**
     * Returns Set Location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->Location;
    }
    
    /**
     * Set Remarks
     *
     * @param string $remarks
     * @return CancelPickupRequest
     */
    public function setRemarks($remarks)
    {
        $this->__set('Remarks', $remarks);
        $this->Remarks = $remarks;
        return $this;
    }
    
    /**
     * Returns Set Remarks
     *
     * @return string
     */
    public function getRemarks()
    {
        return $this->Remarks;
    }
    
    /**
     * Set ShippingChargesPayment
     *
     * @param Payment $shippingChargesPayment
     * @return CancelPickupRequest
     */
    public function setShippingChargesPayment(Payment $shippingChargesPayment)
    {
        $this->__set('ShippingChargesPayment', $shippingChargesPayment);
        $this->ShippingChargesPayment = $shippingChargesPayment;
        return $this;
    }
    
    /**
     * Returns Set ShippingChargesPayment
     *
     * @return Payment
     */
    public function getShippingChargesPayment()
    {
        return $this->ShippingChargesPayment;
    }
    
    /**
     * The reason for canceling the pickup request.
     *
     * @param string $reason
     * @return CancelPickupRequest
     */
    public function setReason($reason)
    {
        $this->__set('Reason', $reason);
        $this->Reason = $reason;
        return $this;
    }
    
    /**
     * Returns The reason for canceling the pickup request.
     *
     * @return string
     */
    public function getReason()
    {
        return $this->Reason;
    }
    
    /**
     * Identifies the name of the person that requested pickup cancellation.
     *
     * @param string $contactName
     * @return CancelPickupRequest
     */
    public function setContactName($contactName)
    {
        $this->__set('ContactName', $contactName);
        $this->ContactName = $contactName;
        return $this;
    }
    
    /**
     * Returns Identifies the name of the person that requested pickup cancellation.
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->ContactName;
    }
    
    /**
     * Identifies the phone number of the person that requested pickup cancellation.
     *
     * @param string $phoneNumber
     * @return CancelPickupRequest
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->__set('PhoneNumber', $phoneNumber);
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    
    /**
     * Returns Identifies the phone number of the person that requested pickup cancellation.
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }
    
    /**
     * Identifies the phone extension of the person that requested pickup cancellation.
     *
     * @param string $phoneExtension
     * @return CancelPickupRequest
     */
    public function setPhoneExtension($phoneExtension)
    {
        $this->__set('PhoneExtension', $phoneExtension);
        $this->PhoneExtension = $phoneExtension;
        return $this;
    }
    
    /**
     * Returns Identifies the phone extension of the person that requested pickup cancellation.
     *
     * @return string
     */
    public function getPhoneExtension()
    {
        return $this->PhoneExtension;
    }
    

    
}