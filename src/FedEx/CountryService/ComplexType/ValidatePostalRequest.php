<?php
namespace FedEx\CountryService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ValidatePostalRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Country Service
 */
class ValidatePostalRequest
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'WebAuthenticationDetail' => 'WebAuthenticationDetail',
'ClientDetail' => 'ClientDetail',
'TransactionDetail' => 'TransactionDetail',
'Version' => 'VersionId',
'ShipDateTime' => 'dateTime',
'Address' => 'Address',
'RoutingCode' => 'string',
'CheckForMismatch' => 'boolean',
'CarrierCode' => 'CarrierCodeType',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ValidatePostalRequest';

        
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
     * @var dateTime
     */
    public $ShipDateTime;

        
    /**
     * @var Address
     */
    public $Address;

        
    /**
     * @var string
     */
    public $RoutingCode;

        
    /**
     * @var boolean
     */
    public $CheckForMismatch;

        
    /**
     * @var \FedEx\CountryService\SimpleType\CarrierCodeType|string
     */
    public $CarrierCode;



    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $webAuthenticationDetail
     * @return ValidatePostalRequest
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
     * @return ValidatePostalRequest
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
     * @return ValidatePostalRequest
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
     * @return ValidatePostalRequest
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
     * Set ShipDateTime
     *
     * @param dateTime $shipDateTime
     * @return ValidatePostalRequest
     */
    public function setShipDateTime($shipDateTime)
    {
        $this->__set('ShipDateTime', $shipDateTime);
        $this->ShipDateTime = $shipDateTime;
        return $this;
    }
    
    /**
     * Returns Set ShipDateTime
     *
     * @return dateTime
     */
    public function getShipDateTime()
    {
        return $this->ShipDateTime;
    }
    
    /**
     * Set Address
     *
     * @param Address $address
     * @return ValidatePostalRequest
     */
    public function setAddress(Address $address)
    {
        $this->__set('Address', $address);
        $this->Address = $address;
        return $this;
    }
    
    /**
     * Returns Set Address
     *
     * @return Address
     */
    public function getAddress()
    {
        return $this->Address;
    }
    
    /**
     * Set RoutingCode
     *
     * @param string $routingCode
     * @return ValidatePostalRequest
     */
    public function setRoutingCode($routingCode)
    {
        $this->__set('RoutingCode', $routingCode);
        $this->RoutingCode = $routingCode;
        return $this;
    }
    
    /**
     * Returns Set RoutingCode
     *
     * @return string
     */
    public function getRoutingCode()
    {
        return $this->RoutingCode;
    }
    
    /**
     * Set CheckForMismatch
     *
     * @param boolean $checkForMismatch
     * @return ValidatePostalRequest
     */
    public function setCheckForMismatch($checkForMismatch)
    {
        $this->__set('CheckForMismatch', $checkForMismatch);
        $this->CheckForMismatch = $checkForMismatch;
        return $this;
    }
    
    /**
     * Returns Set CheckForMismatch
     *
     * @return boolean
     */
    public function getCheckForMismatch()
    {
        return $this->CheckForMismatch;
    }
    
    /**
     * Set CarrierCode
     *
     * @param \FedEx\CountryService\SimpleType\CarrierCodeType|string $carrierCode
     * @return ValidatePostalRequest
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
     * @return \FedEx\CountryService\SimpleType\CarrierCodeType|string
     */
    public function getCarrierCode()
    {
        return $this->CarrierCode;
    }
    

    
}