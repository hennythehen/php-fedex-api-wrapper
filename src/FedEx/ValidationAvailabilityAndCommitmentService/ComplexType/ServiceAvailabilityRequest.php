<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ServiceAvailabilityRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service
 */
class ServiceAvailabilityRequest
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'WebAuthenticationDetail' => 'WebAuthenticationDetail',
'ClientDetail' => 'ClientDetail',
'TransactionDetail' => 'TransactionDetail',
'Version' => 'VersionId',
'Origin' => 'Address',
'Destination' => 'Address',
'ShipDate' => 'date',
'CarrierCode' => 'CarrierCodeType',
'Service' => 'ServiceType',
'Packaging' => 'PackagingType',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ServiceAvailabilityRequest';

        
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
     * @var Address
     */
    public $Origin;

        
    /**
     * @var Address
     */
    public $Destination;

        
    /**
     * @var date
     */
    public $ShipDate;

        
    /**
     * @var \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CarrierCodeType|string
     */
    public $CarrierCode;

        
    /**
     * @var \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\ServiceType|string
     */
    public $Service;

        
    /**
     * @var \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\PackagingType|string
     */
    public $Packaging;



    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $webAuthenticationDetail
     * @return ServiceAvailabilityRequest
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
     * @return ServiceAvailabilityRequest
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
     * @return ServiceAvailabilityRequest
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
     * @return ServiceAvailabilityRequest
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
     * Set Origin
     *
     * @param Address $origin
     * @return ServiceAvailabilityRequest
     */
    public function setOrigin(Address $origin)
    {
        $this->__set('Origin', $origin);
        $this->Origin = $origin;
        return $this;
    }
    
    /**
     * Returns Set Origin
     *
     * @return Address
     */
    public function getOrigin()
    {
        return $this->Origin;
    }
    
    /**
     * Set Destination
     *
     * @param Address $destination
     * @return ServiceAvailabilityRequest
     */
    public function setDestination(Address $destination)
    {
        $this->__set('Destination', $destination);
        $this->Destination = $destination;
        return $this;
    }
    
    /**
     * Returns Set Destination
     *
     * @return Address
     */
    public function getDestination()
    {
        return $this->Destination;
    }
    
    /**
     * Set ShipDate
     *
     * @param date $shipDate
     * @return ServiceAvailabilityRequest
     */
    public function setShipDate($shipDate)
    {
        $this->__set('ShipDate', $shipDate);
        $this->ShipDate = $shipDate;
        return $this;
    }
    
    /**
     * Returns Set ShipDate
     *
     * @return date
     */
    public function getShipDate()
    {
        return $this->ShipDate;
    }
    
    /**
     * Optionally supplied instead of service to restrict reply to services for a specific carrier.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CarrierCodeType|string $carrierCode
     * @return ServiceAvailabilityRequest
     */
    public function setCarrierCode($carrierCode)
    {
        $this->__set('CarrierCode', $carrierCode);
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    
    /**
     * Returns Optionally supplied instead of service to restrict reply to services for a specific carrier.
     *
     * @return \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CarrierCodeType|string
     */
    public function getCarrierCode()
    {
        return $this->CarrierCode;
    }
    
    /**
     * Restricts reply to single service, if supplied.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\ServiceType|string $service
     * @return ServiceAvailabilityRequest
     */
    public function setService($service)
    {
        $this->__set('Service', $service);
        $this->Service = $service;
        return $this;
    }
    
    /**
     * Returns Restricts reply to single service, if supplied.
     *
     * @return \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\ServiceType|string
     */
    public function getService()
    {
        return $this->Service;
    }
    
    /**
     * Set Packaging
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\PackagingType|string $packaging
     * @return ServiceAvailabilityRequest
     */
    public function setPackaging($packaging)
    {
        $this->__set('Packaging', $packaging);
        $this->Packaging = $packaging;
        return $this;
    }
    
    /**
     * Returns Set Packaging
     *
     * @return \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\PackagingType|string
     */
    public function getPackaging()
    {
        return $this->Packaging;
    }
    

    
}