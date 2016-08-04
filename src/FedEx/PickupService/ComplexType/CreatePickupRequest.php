<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CreatePickupRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class CreatePickupRequest
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'WebAuthenticationDetail' => 'WebAuthenticationDetail',
'ClientDetail' => 'ClientDetail',
'TransactionDetail' => 'TransactionDetail',
'Version' => 'VersionId',
'AssociatedAccountNumber' => 'AssociatedAccount',
'TrackingNumber' => 'string',
'OriginDetail' => 'PickupOriginDetail',
'PickupServiceCategory' => 'PickupServiceCategoryType',
'FreightPickupDetail' => 'FreightPickupDetail',
'ExpressFreightDetail' => 'ExpressFreightPickupDetail',
'PackageCount' => 'positiveInteger',
'TotalWeight' => 'Weight',
'CarrierCode' => 'CarrierCodeType',
'OversizePackageCount' => 'nonNegativeInteger',
'Remarks' => 'string',
'CommodityDescription' => 'string',
'CountryRelationship' => 'CountryRelationshipType',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CreatePickupRequest';

        
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
     * @var AssociatedAccount
     */
    public $AssociatedAccountNumber;

        
    /**
     * @var string
     */
    public $TrackingNumber;

        
    /**
     * @var PickupOriginDetail
     */
    public $OriginDetail;

        
    /**
     * @var \FedEx\PickupService\SimpleType\PickupServiceCategoryType|string
     */
    public $PickupServiceCategory;

        
    /**
     * @var FreightPickupDetail
     */
    public $FreightPickupDetail;

        
    /**
     * @var ExpressFreightPickupDetail
     */
    public $ExpressFreightDetail;

        
    /**
     * @var positiveInteger
     */
    public $PackageCount;

        
    /**
     * @var Weight
     */
    public $TotalWeight;

        
    /**
     * @var \FedEx\PickupService\SimpleType\CarrierCodeType|string
     */
    public $CarrierCode;

        
    /**
     * @var nonNegativeInteger
     */
    public $OversizePackageCount;

        
    /**
     * @var string
     */
    public $Remarks;

        
    /**
     * @var string
     */
    public $CommodityDescription;

        
    /**
     * @var \FedEx\PickupService\SimpleType\CountryRelationshipType|string
     */
    public $CountryRelationship;



    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $webAuthenticationDetail
     * @return CreatePickupRequest
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
     * @return CreatePickupRequest
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
     * @return CreatePickupRequest
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
     * @return CreatePickupRequest
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
     * Set AssociatedAccountNumber
     *
     * @param AssociatedAccount $associatedAccountNumber
     * @return CreatePickupRequest
     */
    public function setAssociatedAccountNumber(AssociatedAccount $associatedAccountNumber)
    {
        $this->__set('AssociatedAccountNumber', $associatedAccountNumber);
        $this->AssociatedAccountNumber = $associatedAccountNumber;
        return $this;
    }
    
    /**
     * Returns Set AssociatedAccountNumber
     *
     * @return AssociatedAccount
     */
    public function getAssociatedAccountNumber()
    {
        return $this->AssociatedAccountNumber;
    }
    
    /**
     * Specifies the tracking number to be used for processing a pickup for a return shipment.
     *
     * @param string $trackingNumber
     * @return CreatePickupRequest
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->__set('TrackingNumber', $trackingNumber);
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    
    /**
     * Returns Specifies the tracking number to be used for processing a pickup for a return shipment.
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->TrackingNumber;
    }
    
    /**
     * Set OriginDetail
     *
     * @param PickupOriginDetail $originDetail
     * @return CreatePickupRequest
     */
    public function setOriginDetail(PickupOriginDetail $originDetail)
    {
        $this->__set('OriginDetail', $originDetail);
        $this->OriginDetail = $originDetail;
        return $this;
    }
    
    /**
     * Returns Set OriginDetail
     *
     * @return PickupOriginDetail
     */
    public function getOriginDetail()
    {
        return $this->OriginDetail;
    }
    
    /**
     * Set PickupServiceCategory
     *
     * @param \FedEx\PickupService\SimpleType\PickupServiceCategoryType|string $pickupServiceCategory
     * @return CreatePickupRequest
     */
    public function setPickupServiceCategory($pickupServiceCategory)
    {
        $this->__set('PickupServiceCategory', $pickupServiceCategory);
        $this->PickupServiceCategory = $pickupServiceCategory;
        return $this;
    }
    
    /**
     * Returns Set PickupServiceCategory
     *
     * @return \FedEx\PickupService\SimpleType\PickupServiceCategoryType|string
     */
    public function getPickupServiceCategory()
    {
        return $this->PickupServiceCategory;
    }
    
    /**
     * Set FreightPickupDetail
     *
     * @param FreightPickupDetail $freightPickupDetail
     * @return CreatePickupRequest
     */
    public function setFreightPickupDetail(FreightPickupDetail $freightPickupDetail)
    {
        $this->__set('FreightPickupDetail', $freightPickupDetail);
        $this->FreightPickupDetail = $freightPickupDetail;
        return $this;
    }
    
    /**
     * Returns Set FreightPickupDetail
     *
     * @return FreightPickupDetail
     */
    public function getFreightPickupDetail()
    {
        return $this->FreightPickupDetail;
    }
    
    /**
     * Set ExpressFreightDetail
     *
     * @param ExpressFreightPickupDetail $expressFreightDetail
     * @return CreatePickupRequest
     */
    public function setExpressFreightDetail(ExpressFreightPickupDetail $expressFreightDetail)
    {
        $this->__set('ExpressFreightDetail', $expressFreightDetail);
        $this->ExpressFreightDetail = $expressFreightDetail;
        return $this;
    }
    
    /**
     * Returns Set ExpressFreightDetail
     *
     * @return ExpressFreightPickupDetail
     */
    public function getExpressFreightDetail()
    {
        return $this->ExpressFreightDetail;
    }
    
    /**
     * Set PackageCount
     *
     * @param positiveInteger $packageCount
     * @return CreatePickupRequest
     */
    public function setPackageCount($packageCount)
    {
        $this->__set('PackageCount', $packageCount);
        $this->PackageCount = $packageCount;
        return $this;
    }
    
    /**
     * Returns Set PackageCount
     *
     * @return positiveInteger
     */
    public function getPackageCount()
    {
        return $this->PackageCount;
    }
    
    /**
     * Set TotalWeight
     *
     * @param Weight $totalWeight
     * @return CreatePickupRequest
     */
    public function setTotalWeight(Weight $totalWeight)
    {
        $this->__set('TotalWeight', $totalWeight);
        $this->TotalWeight = $totalWeight;
        return $this;
    }
    
    /**
     * Returns Set TotalWeight
     *
     * @return Weight
     */
    public function getTotalWeight()
    {
        return $this->TotalWeight;
    }
    
    /**
     * Set CarrierCode
     *
     * @param \FedEx\PickupService\SimpleType\CarrierCodeType|string $carrierCode
     * @return CreatePickupRequest
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
     * Set OversizePackageCount
     *
     * @param nonNegativeInteger $oversizePackageCount
     * @return CreatePickupRequest
     */
    public function setOversizePackageCount($oversizePackageCount)
    {
        $this->__set('OversizePackageCount', $oversizePackageCount);
        $this->OversizePackageCount = $oversizePackageCount;
        return $this;
    }
    
    /**
     * Returns Set OversizePackageCount
     *
     * @return nonNegativeInteger
     */
    public function getOversizePackageCount()
    {
        return $this->OversizePackageCount;
    }
    
    /**
     * This field is being deprecated and will not be removed in the June 2014 load.
     *
     * @param string $remarks
     * @return CreatePickupRequest
     */
    public function setRemarks($remarks)
    {
        $this->__set('Remarks', $remarks);
        $this->Remarks = $remarks;
        return $this;
    }
    
    /**
     * Returns This field is being deprecated and will not be removed in the June 2014 load.
     *
     * @return string
     */
    public function getRemarks()
    {
        return $this->Remarks;
    }
    
    /**
     * Set CommodityDescription
     *
     * @param string $commodityDescription
     * @return CreatePickupRequest
     */
    public function setCommodityDescription($commodityDescription)
    {
        $this->__set('CommodityDescription', $commodityDescription);
        $this->CommodityDescription = $commodityDescription;
        return $this;
    }
    
    /**
     * Returns Set CommodityDescription
     *
     * @return string
     */
    public function getCommodityDescription()
    {
        return $this->CommodityDescription;
    }
    
    /**
     * Describes the country relationship (domestic and/or international) among the shipments being picked up.
     *
     * @param \FedEx\PickupService\SimpleType\CountryRelationshipType|string $countryRelationship
     * @return CreatePickupRequest
     */
    public function setCountryRelationship($countryRelationship)
    {
        $this->__set('CountryRelationship', $countryRelationship);
        $this->CountryRelationship = $countryRelationship;
        return $this;
    }
    
    /**
     * Returns Describes the country relationship (domestic and/or international) among the shipments being picked up.
     *
     * @return \FedEx\PickupService\SimpleType\CountryRelationshipType|string
     */
    public function getCountryRelationship()
    {
        return $this->CountryRelationship;
    }
    

    
}