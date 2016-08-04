<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * SearchLocationsRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 */
class SearchLocationsRequest
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'WebAuthenticationDetail' => 'WebAuthenticationDetail',
'ClientDetail' => 'ClientDetail',
'TransactionDetail' => 'TransactionDetail',
'Version' => 'VersionId',
'EffectiveDate' => 'date',
'LocationsSearchCriterion' => 'LocationsSearchCriteriaType',
'UniqueTrackingNumber' => 'UniqueTrackingNumber',
'Address' => 'Address',
'PhoneNumber' => 'string',
'GeographicCoordinates' => 'string',
'MultipleMatchesAction' => 'MultipleMatchesActionType',
'SortDetail' => 'LocationSortDetail',
'Constraints' => 'SearchLocationConstraints',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'SearchLocationsRequest';

        
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
     * @var date
     */
    public $EffectiveDate;

        
    /**
     * @var \FedEx\LocationsService\SimpleType\LocationsSearchCriteriaType|string
     */
    public $LocationsSearchCriterion;

        
    /**
     * @var UniqueTrackingNumber
     */
    public $UniqueTrackingNumber;

        
    /**
     * @var Address
     */
    public $Address;

        
    /**
     * @var string
     */
    public $PhoneNumber;

        
    /**
     * @var string
     */
    public $GeographicCoordinates;

        
    /**
     * @var \FedEx\LocationsService\SimpleType\MultipleMatchesActionType|string
     */
    public $MultipleMatchesAction;

        
    /**
     * @var LocationSortDetail
     */
    public $SortDetail;

        
    /**
     * @var SearchLocationConstraints
     */
    public $Constraints;



    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $webAuthenticationDetail
     * @return SearchLocationsRequest
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
     * @return SearchLocationsRequest
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
     * @return SearchLocationsRequest
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
     * @return SearchLocationsRequest
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
     * Set EffectiveDate
     *
     * @param date $effectiveDate
     * @return SearchLocationsRequest
     */
    public function setEffectiveDate($effectiveDate)
    {
        $this->__set('EffectiveDate', $effectiveDate);
        $this->EffectiveDate = $effectiveDate;
        return $this;
    }
    
    /**
     * Returns Set EffectiveDate
     *
     * @return date
     */
    public function getEffectiveDate()
    {
        return $this->EffectiveDate;
    }
    
    /**
     * Specifies the criterion that may be used to search for FedEx locations.
     *
     * @param \FedEx\LocationsService\SimpleType\LocationsSearchCriteriaType|string $locationsSearchCriterion
     * @return SearchLocationsRequest
     */
    public function setLocationsSearchCriterion($locationsSearchCriterion)
    {
        $this->__set('LocationsSearchCriterion', $locationsSearchCriterion);
        $this->LocationsSearchCriterion = $locationsSearchCriterion;
        return $this;
    }
    
    /**
     * Returns Specifies the criterion that may be used to search for FedEx locations.
     *
     * @return \FedEx\LocationsService\SimpleType\LocationsSearchCriteriaType|string
     */
    public function getLocationsSearchCriterion()
    {
        return $this->LocationsSearchCriterion;
    }
    
    /**
     * Tracking number to be used when searching for locations. This tracking number, along with other location search constraints, help to narrow the search for locations.
     *
     * @param UniqueTrackingNumber $uniqueTrackingNumber
     * @return SearchLocationsRequest
     */
    public function setUniqueTrackingNumber(UniqueTrackingNumber $uniqueTrackingNumber)
    {
        $this->__set('UniqueTrackingNumber', $uniqueTrackingNumber);
        $this->UniqueTrackingNumber = $uniqueTrackingNumber;
        return $this;
    }
    
    /**
     * Returns Tracking number to be used when searching for locations. This tracking number, along with other location search constraints, help to narrow the search for locations.
     *
     * @return UniqueTrackingNumber
     */
    public function getUniqueTrackingNumber()
    {
        return $this->UniqueTrackingNumber;
    }
    
    /**
     * Set Address
     *
     * @param Address $address
     * @return SearchLocationsRequest
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
     * Set PhoneNumber
     *
     * @param string $phoneNumber
     * @return SearchLocationsRequest
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->__set('PhoneNumber', $phoneNumber);
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    
    /**
     * Returns Set PhoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }
    
    /**
     * Set GeographicCoordinates
     *
     * @param string $geographicCoordinates
     * @return SearchLocationsRequest
     */
    public function setGeographicCoordinates($geographicCoordinates)
    {
        $this->__set('GeographicCoordinates', $geographicCoordinates);
        $this->GeographicCoordinates = $geographicCoordinates;
        return $this;
    }
    
    /**
     * Returns Set GeographicCoordinates
     *
     * @return string
     */
    public function getGeographicCoordinates()
    {
        return $this->GeographicCoordinates;
    }
    
    /**
     * Specifies the criterion to be used to return location results when there are mutiple matches.
     *
     * @param \FedEx\LocationsService\SimpleType\MultipleMatchesActionType|string $multipleMatchesAction
     * @return SearchLocationsRequest
     */
    public function setMultipleMatchesAction($multipleMatchesAction)
    {
        $this->__set('MultipleMatchesAction', $multipleMatchesAction);
        $this->MultipleMatchesAction = $multipleMatchesAction;
        return $this;
    }
    
    /**
     * Returns Specifies the criterion to be used to return location results when there are mutiple matches.
     *
     * @return \FedEx\LocationsService\SimpleType\MultipleMatchesActionType|string
     */
    public function getMultipleMatchesAction()
    {
        return $this->MultipleMatchesAction;
    }
    
    /**
     * Specifies the details on how the location search results be sorted in the reply.
     *
     * @param LocationSortDetail $sortDetail
     * @return SearchLocationsRequest
     */
    public function setSortDetail(LocationSortDetail $sortDetail)
    {
        $this->__set('SortDetail', $sortDetail);
        $this->SortDetail = $sortDetail;
        return $this;
    }
    
    /**
     * Returns Specifies the details on how the location search results be sorted in the reply.
     *
     * @return LocationSortDetail
     */
    public function getSortDetail()
    {
        return $this->SortDetail;
    }
    
    /**
     * Contraints to be applied to location attributes.
     *
     * @param SearchLocationConstraints $constraints
     * @return SearchLocationsRequest
     */
    public function setConstraints(SearchLocationConstraints $constraints)
    {
        $this->__set('Constraints', $constraints);
        $this->Constraints = $constraints;
        return $this;
    }
    
    /**
     * Returns Contraints to be applied to location attributes.
     *
     * @return SearchLocationConstraints
     */
    public function getConstraints()
    {
        return $this->Constraints;
    }
    

    
}