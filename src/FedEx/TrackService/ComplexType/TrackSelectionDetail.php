<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TrackSelectionDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class TrackSelectionDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'CarrierCode' => 'CarrierCodeType',
'OperatingCompany' => 'OperatingCompanyType',
'PackageIdentifier' => 'TrackPackageIdentifier',
'TrackingNumberUniqueIdentifier' => 'string',
'ShipDateRangeBegin' => 'date',
'ShipDateRangeEnd' => 'date',
'ShipmentAccountNumber' => 'string',
'SecureSpodAccount' => 'string',
'Destination' => 'Address',
'PagingDetail' => 'PagingDetail',
'CustomerSpecifiedTimeOutValueInMilliseconds' => 'nonNegativeInteger',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'TrackSelectionDetail';

        
    /**
     * @var \FedEx\TrackService\SimpleType\CarrierCodeType|string
     */
    public $CarrierCode;

        
    /**
     * @var \FedEx\TrackService\SimpleType\OperatingCompanyType|string
     */
    public $OperatingCompany;

        
    /**
     * @var TrackPackageIdentifier
     */
    public $PackageIdentifier;

        
    /**
     * @var string
     */
    public $TrackingNumberUniqueIdentifier;

        
    /**
     * @var date
     */
    public $ShipDateRangeBegin;

        
    /**
     * @var date
     */
    public $ShipDateRangeEnd;

        
    /**
     * @var string
     */
    public $ShipmentAccountNumber;

        
    /**
     * @var string
     */
    public $SecureSpodAccount;

        
    /**
     * @var Address
     */
    public $Destination;

        
    /**
     * @var PagingDetail
     */
    public $PagingDetail;

        
    /**
     * @var nonNegativeInteger
     */
    public $CustomerSpecifiedTimeOutValueInMilliseconds;



    /**
     * The FedEx operating company (transportation) used for this package's delivery.
     *
     * @param \FedEx\TrackService\SimpleType\CarrierCodeType|string $carrierCode
     * @return TrackSelectionDetail
     */
    public function setCarrierCode($carrierCode)
    {
        $this->__set('CarrierCode', $carrierCode);
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    
    /**
     * Returns The FedEx operating company (transportation) used for this package's delivery.
     *
     * @return \FedEx\TrackService\SimpleType\CarrierCodeType|string
     */
    public function getCarrierCode()
    {
        return $this->CarrierCode;
    }
    
    /**
     * Identifies operating transportation company that is the specific to the carrier code.
     *
     * @param \FedEx\TrackService\SimpleType\OperatingCompanyType|string $operatingCompany
     * @return TrackSelectionDetail
     */
    public function setOperatingCompany($operatingCompany)
    {
        $this->__set('OperatingCompany', $operatingCompany);
        $this->OperatingCompany = $operatingCompany;
        return $this;
    }
    
    /**
     * Returns Identifies operating transportation company that is the specific to the carrier code.
     *
     * @return \FedEx\TrackService\SimpleType\OperatingCompanyType|string
     */
    public function getOperatingCompany()
    {
        return $this->OperatingCompany;
    }
    
    /**
     * The type and value of the package identifier that is to be used to retrieve the tracking information for a package or group of packages.
     *
     * @param TrackPackageIdentifier $packageIdentifier
     * @return TrackSelectionDetail
     */
    public function setPackageIdentifier(TrackPackageIdentifier $packageIdentifier)
    {
        $this->__set('PackageIdentifier', $packageIdentifier);
        $this->PackageIdentifier = $packageIdentifier;
        return $this;
    }
    
    /**
     * Returns The type and value of the package identifier that is to be used to retrieve the tracking information for a package or group of packages.
     *
     * @return TrackPackageIdentifier
     */
    public function getPackageIdentifier()
    {
        return $this->PackageIdentifier;
    }
    
    /**
     * Used to distinguish duplicate FedEx tracking numbers.
     *
     * @param string $trackingNumberUniqueIdentifier
     * @return TrackSelectionDetail
     */
    public function setTrackingNumberUniqueIdentifier($trackingNumberUniqueIdentifier)
    {
        $this->__set('TrackingNumberUniqueIdentifier', $trackingNumberUniqueIdentifier);
        $this->TrackingNumberUniqueIdentifier = $trackingNumberUniqueIdentifier;
        return $this;
    }
    
    /**
     * Returns Used to distinguish duplicate FedEx tracking numbers.
     *
     * @return string
     */
    public function getTrackingNumberUniqueIdentifier()
    {
        return $this->TrackingNumberUniqueIdentifier;
    }
    
    /**
     * To narrow the search to a period in time the ShipDateRangeBegin and ShipDateRangeEnd can be used to help eliminate duplicates.
     *
     * @param date $shipDateRangeBegin
     * @return TrackSelectionDetail
     */
    public function setShipDateRangeBegin($shipDateRangeBegin)
    {
        $this->__set('ShipDateRangeBegin', $shipDateRangeBegin);
        $this->ShipDateRangeBegin = $shipDateRangeBegin;
        return $this;
    }
    
    /**
     * Returns To narrow the search to a period in time the ShipDateRangeBegin and ShipDateRangeEnd can be used to help eliminate duplicates.
     *
     * @return date
     */
    public function getShipDateRangeBegin()
    {
        return $this->ShipDateRangeBegin;
    }
    
    /**
     * To narrow the search to a period in time the ShipDateRangeBegin and ShipDateRangeEnd can be used to help eliminate duplicates.
     *
     * @param date $shipDateRangeEnd
     * @return TrackSelectionDetail
     */
    public function setShipDateRangeEnd($shipDateRangeEnd)
    {
        $this->__set('ShipDateRangeEnd', $shipDateRangeEnd);
        $this->ShipDateRangeEnd = $shipDateRangeEnd;
        return $this;
    }
    
    /**
     * Returns To narrow the search to a period in time the ShipDateRangeBegin and ShipDateRangeEnd can be used to help eliminate duplicates.
     *
     * @return date
     */
    public function getShipDateRangeEnd()
    {
        return $this->ShipDateRangeEnd;
    }
    
    /**
     * For tracking by references information either the account number or destination postal code and country must be provided.
     *
     * @param string $shipmentAccountNumber
     * @return TrackSelectionDetail
     */
    public function setShipmentAccountNumber($shipmentAccountNumber)
    {
        $this->__set('ShipmentAccountNumber', $shipmentAccountNumber);
        $this->ShipmentAccountNumber = $shipmentAccountNumber;
        return $this;
    }
    
    /**
     * Returns For tracking by references information either the account number or destination postal code and country must be provided.
     *
     * @return string
     */
    public function getShipmentAccountNumber()
    {
        return $this->ShipmentAccountNumber;
    }
    
    /**
     * Specifies the SPOD account number for the shipment being tracked.
     *
     * @param string $secureSpodAccount
     * @return TrackSelectionDetail
     */
    public function setSecureSpodAccount($secureSpodAccount)
    {
        $this->__set('SecureSpodAccount', $secureSpodAccount);
        $this->SecureSpodAccount = $secureSpodAccount;
        return $this;
    }
    
    /**
     * Returns Specifies the SPOD account number for the shipment being tracked.
     *
     * @return string
     */
    public function getSecureSpodAccount()
    {
        return $this->SecureSpodAccount;
    }
    
    /**
     * For tracking by references information either the account number or destination postal code and country must be provided.
     *
     * @param Address $destination
     * @return TrackSelectionDetail
     */
    public function setDestination(Address $destination)
    {
        $this->__set('Destination', $destination);
        $this->Destination = $destination;
        return $this;
    }
    
    /**
     * Returns For tracking by references information either the account number or destination postal code and country must be provided.
     *
     * @return Address
     */
    public function getDestination()
    {
        return $this->Destination;
    }
    
    /**
     * Specifies the details about how to retrieve the subsequent pages when there is more than one page in the TrackReply.
     *
     * @param PagingDetail $pagingDetail
     * @return TrackSelectionDetail
     */
    public function setPagingDetail(PagingDetail $pagingDetail)
    {
        $this->__set('PagingDetail', $pagingDetail);
        $this->PagingDetail = $pagingDetail;
        return $this;
    }
    
    /**
     * Returns Specifies the details about how to retrieve the subsequent pages when there is more than one page in the TrackReply.
     *
     * @return PagingDetail
     */
    public function getPagingDetail()
    {
        return $this->PagingDetail;
    }
    
    /**
     * The customer can specify a desired time out value for this particular tracking number.
     *
     * @param nonNegativeInteger $customerSpecifiedTimeOutValueInMilliseconds
     * @return TrackSelectionDetail
     */
    public function setCustomerSpecifiedTimeOutValueInMilliseconds($customerSpecifiedTimeOutValueInMilliseconds)
    {
        $this->__set('CustomerSpecifiedTimeOutValueInMilliseconds', $customerSpecifiedTimeOutValueInMilliseconds);
        $this->CustomerSpecifiedTimeOutValueInMilliseconds = $customerSpecifiedTimeOutValueInMilliseconds;
        return $this;
    }
    
    /**
     * Returns The customer can specify a desired time out value for this particular tracking number.
     *
     * @return nonNegativeInteger
     */
    public function getCustomerSpecifiedTimeOutValueInMilliseconds()
    {
        return $this->CustomerSpecifiedTimeOutValueInMilliseconds;
    }
    

    
}