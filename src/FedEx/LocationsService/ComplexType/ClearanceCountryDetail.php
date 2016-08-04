<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the special services supported at the clearance location for an individual destination country.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 */
class ClearanceCountryDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'ClearanceCountry' => 'string',
'SpecialServicesSupported' => 'PackageSpecialServiceType',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ClearanceCountryDetail';

        
    /**
     * @var string
     */
    public $ClearanceCountry;

        
    /**
     * @var PackageSpecialServiceType[]
     */
    public $SpecialServicesSupported = array();



    /**
     * Identifies the country whose special services are specified below.
     *
     * @param string $clearanceCountry
     * @return ClearanceCountryDetail
     */
    public function setClearanceCountry($clearanceCountry)
    {
        $this->__set('ClearanceCountry', $clearanceCountry);
        $this->ClearanceCountry = $clearanceCountry;
        return $this;
    }
    
    /**
     * Returns Identifies the country whose special services are specified below.
     *
     * @return string
     */
    public function getClearanceCountry()
    {
        return $this->ClearanceCountry;
    }
    
    /**
     * Identifies the constrained special services supported for the country above.
     *
     * @param PackageSpecialServiceType[] $specialServicesSupported
     * @return ClearanceCountryDetail
     */
    public function setSpecialServicesSupported(array $specialServicesSupported)
    {
        $this->__set('SpecialServicesSupported', $specialServicesSupported);
        $this->SpecialServicesSupported = $specialServicesSupported;
        return $this;
    }
    
    /**
     * Returns Identifies the constrained special services supported for the country above.
     *
     * @return PackageSpecialServiceType[]
     */
    public function getSpecialServicesSupported()
    {
        return $this->SpecialServicesSupported;
    }
    

    
}