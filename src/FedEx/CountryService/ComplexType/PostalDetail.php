<?php
namespace FedEx\CountryService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * PostalDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Country Service
 */
class PostalDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'StateOrProvinceCode' => 'string',
'CityFirstInitials' => 'string',
'CleanedPostalCode' => 'string',
'LocationDescriptions' => 'LocationDescription',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'PostalDetail';

        
    /**
     * @var string
     */
    public $StateOrProvinceCode;

        
    /**
     * @var string
     */
    public $CityFirstInitials;

        
    /**
     * @var string
     */
    public $CleanedPostalCode;

        
    /**
     * @var LocationDescription[]
     */
    public $LocationDescriptions = array();



    /**
     * Set StateOrProvinceCode
     *
     * @param string $stateOrProvinceCode
     * @return PostalDetail
     */
    public function setStateOrProvinceCode($stateOrProvinceCode)
    {
        $this->__set('StateOrProvinceCode', $stateOrProvinceCode);
        $this->StateOrProvinceCode = $stateOrProvinceCode;
        return $this;
    }
    
    /**
     * Returns Set StateOrProvinceCode
     *
     * @return string
     */
    public function getStateOrProvinceCode()
    {
        return $this->StateOrProvinceCode;
    }
    
    /**
     * Set CityFirstInitials
     *
     * @param string $cityFirstInitials
     * @return PostalDetail
     */
    public function setCityFirstInitials($cityFirstInitials)
    {
        $this->__set('CityFirstInitials', $cityFirstInitials);
        $this->CityFirstInitials = $cityFirstInitials;
        return $this;
    }
    
    /**
     * Returns Set CityFirstInitials
     *
     * @return string
     */
    public function getCityFirstInitials()
    {
        return $this->CityFirstInitials;
    }
    
    /**
     * Set CleanedPostalCode
     *
     * @param string $cleanedPostalCode
     * @return PostalDetail
     */
    public function setCleanedPostalCode($cleanedPostalCode)
    {
        $this->__set('CleanedPostalCode', $cleanedPostalCode);
        $this->CleanedPostalCode = $cleanedPostalCode;
        return $this;
    }
    
    /**
     * Returns Set CleanedPostalCode
     *
     * @return string
     */
    public function getCleanedPostalCode()
    {
        return $this->CleanedPostalCode;
    }
    
    /**
     * Set LocationDescriptions
     *
     * @param LocationDescription[] $locationDescriptions
     * @return PostalDetail
     */
    public function setLocationDescriptions(array $locationDescriptions)
    {
        $this->__set('LocationDescriptions', $locationDescriptions);
        $this->LocationDescriptions = $locationDescriptions;
        return $this;
    }
    
    /**
     * Returns Set LocationDescriptions
     *
     * @return LocationDescription[]
     */
    public function getLocationDescriptions()
    {
        return $this->LocationDescriptions;
    }
    

    
}