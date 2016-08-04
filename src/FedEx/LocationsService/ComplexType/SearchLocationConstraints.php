<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies additional constraints on the attributes of the locations being searched.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 */
class SearchLocationConstraints
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'RadiusDistance' => 'Distance',
'ExpressDropOffTimeNeeded' => 'time',
'ResultsFilters' => 'LocationSearchFilterType',
'SupportedRedirectToHoldServices' => 'SupportedRedirectToHoldServiceType',
'RequiredLocationAttributes' => 'LocationAttributesType',
'ResultsToSkip' => 'nonNegativeInteger',
'ResultsRequested' => 'nonNegativeInteger',
'LocationContentOptions' => 'LocationContentOptionType',
'LocationTypesToInclude' => 'FedExLocationType',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'SearchLocationConstraints';

        
    /**
     * @var Distance
     */
    public $RadiusDistance;

        
    /**
     * @var time
     */
    public $ExpressDropOffTimeNeeded;

        
    /**
     * @var LocationSearchFilterType[]
     */
    public $ResultsFilters = array();

        
    /**
     * @var SupportedRedirectToHoldServiceType[]
     */
    public $SupportedRedirectToHoldServices = array();

        
    /**
     * @var LocationAttributesType[]
     */
    public $RequiredLocationAttributes = array();

        
    /**
     * @var nonNegativeInteger
     */
    public $ResultsToSkip;

        
    /**
     * @var nonNegativeInteger
     */
    public $ResultsRequested;

        
    /**
     * @var LocationContentOptionType[]
     */
    public $LocationContentOptions = array();

        
    /**
     * @var FedExLocationType[]
     */
    public $LocationTypesToInclude = array();



    /**
     * Specifies value and units of the radius around the address to search for FedEx locations.
     *
     * @param Distance $radiusDistance
     * @return SearchLocationConstraints
     */
    public function setRadiusDistance(Distance $radiusDistance)
    {
        $this->__set('RadiusDistance', $radiusDistance);
        $this->RadiusDistance = $radiusDistance;
        return $this;
    }
    
    /**
     * Returns Specifies value and units of the radius around the address to search for FedEx locations.
     *
     * @return Distance
     */
    public function getRadiusDistance()
    {
        return $this->RadiusDistance;
    }
    
    /**
     * The latest time at which the customer can drop off a package for being shipped using an express service.
     *
     * @param time $expressDropOffTimeNeeded
     * @return SearchLocationConstraints
     */
    public function setExpressDropOffTimeNeeded(time $expressDropOffTimeNeeded)
    {
        $this->__set('ExpressDropOffTimeNeeded', $expressDropOffTimeNeeded);
        $this->ExpressDropOffTimeNeeded = $expressDropOffTimeNeeded;
        return $this;
    }
    
    /**
     * Returns The latest time at which the customer can drop off a package for being shipped using an express service.
     *
     * @return time
     */
    public function getExpressDropOffTimeNeeded()
    {
        return $this->ExpressDropOffTimeNeeded;
    }
    
    /**
     * Specifies the criteria used to filter the results of locations search.
     *
     * @param LocationSearchFilterType[] $resultsFilters
     * @return SearchLocationConstraints
     */
    public function setResultsFilters(array $resultsFilters)
    {
        $this->__set('ResultsFilters', $resultsFilters);
        $this->ResultsFilters = $resultsFilters;
        return $this;
    }
    
    /**
     * Returns Specifies the criteria used to filter the results of locations search.
     *
     * @return LocationSearchFilterType[]
     */
    public function getResultsFilters()
    {
        return $this->ResultsFilters;
    }
    
    /**
     * Specifies the types of services supported by a FedEx location for redirect to hold.
     *
     * @param SupportedRedirectToHoldServiceType[] $supportedRedirectToHoldServices
     * @return SearchLocationConstraints
     */
    public function setSupportedRedirectToHoldServices(array $supportedRedirectToHoldServices)
    {
        $this->__set('SupportedRedirectToHoldServices', $supportedRedirectToHoldServices);
        $this->SupportedRedirectToHoldServices = $supportedRedirectToHoldServices;
        return $this;
    }
    
    /**
     * Returns Specifies the types of services supported by a FedEx location for redirect to hold.
     *
     * @return SupportedRedirectToHoldServiceType[]
     */
    public function getSupportedRedirectToHoldServices()
    {
        return $this->SupportedRedirectToHoldServices;
    }
    
    /**
     * Set RequiredLocationAttributes
     *
     * @param LocationAttributesType[] $requiredLocationAttributes
     * @return SearchLocationConstraints
     */
    public function setRequiredLocationAttributes(array $requiredLocationAttributes)
    {
        $this->__set('RequiredLocationAttributes', $requiredLocationAttributes);
        $this->RequiredLocationAttributes = $requiredLocationAttributes;
        return $this;
    }
    
    /**
     * Returns Set RequiredLocationAttributes
     *
     * @return LocationAttributesType[]
     */
    public function getRequiredLocationAttributes()
    {
        return $this->RequiredLocationAttributes;
    }
    
    /**
     * Set ResultsToSkip
     *
     * @param nonNegativeInteger $resultsToSkip
     * @return SearchLocationConstraints
     */
    public function setResultsToSkip($resultsToSkip)
    {
        $this->__set('ResultsToSkip', $resultsToSkip);
        $this->ResultsToSkip = $resultsToSkip;
        return $this;
    }
    
    /**
     * Returns Set ResultsToSkip
     *
     * @return nonNegativeInteger
     */
    public function getResultsToSkip()
    {
        return $this->ResultsToSkip;
    }
    
    /**
     * Set ResultsRequested
     *
     * @param nonNegativeInteger $resultsRequested
     * @return SearchLocationConstraints
     */
    public function setResultsRequested($resultsRequested)
    {
        $this->__set('ResultsRequested', $resultsRequested);
        $this->ResultsRequested = $resultsRequested;
        return $this;
    }
    
    /**
     * Returns Set ResultsRequested
     *
     * @return nonNegativeInteger
     */
    public function getResultsRequested()
    {
        return $this->ResultsRequested;
    }
    
    /**
     * Set LocationContentOptions
     *
     * @param LocationContentOptionType[] $locationContentOptions
     * @return SearchLocationConstraints
     */
    public function setLocationContentOptions(array $locationContentOptions)
    {
        $this->__set('LocationContentOptions', $locationContentOptions);
        $this->LocationContentOptions = $locationContentOptions;
        return $this;
    }
    
    /**
     * Returns Set LocationContentOptions
     *
     * @return LocationContentOptionType[]
     */
    public function getLocationContentOptions()
    {
        return $this->LocationContentOptions;
    }
    
    /**
     * Set LocationTypesToInclude
     *
     * @param FedExLocationType[] $locationTypesToInclude
     * @return SearchLocationConstraints
     */
    public function setLocationTypesToInclude(array $locationTypesToInclude)
    {
        $this->__set('LocationTypesToInclude', $locationTypesToInclude);
        $this->LocationTypesToInclude = $locationTypesToInclude;
        return $this;
    }
    
    /**
     * Returns Set LocationTypesToInclude
     *
     * @return FedExLocationType[]
     */
    public function getLocationTypesToInclude()
    {
        return $this->LocationTypesToInclude;
    }
    

    
}