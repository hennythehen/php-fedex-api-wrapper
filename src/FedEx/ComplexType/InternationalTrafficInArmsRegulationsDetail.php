<?php
namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * InternationalTrafficInArmsRegulationsDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class InternationalTrafficInArmsRegulationsDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'LicenseOrExemptionNumber' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'InternationalTrafficInArmsRegulationsDetail';

        
    /**
     * @var string
     */
    public $LicenseOrExemptionNumber;



    /**
     * Set LicenseOrExemptionNumber
     *
     * @param string $licenseOrExemptionNumber
     * @return InternationalTrafficInArmsRegulationsDetail
     */
    public function setLicenseOrExemptionNumber($licenseOrExemptionNumber)
    {
        $this->__set('LicenseOrExemptionNumber', $licenseOrExemptionNumber);
        $this->LicenseOrExemptionNumber = $licenseOrExemptionNumber;
        return $this;
    }
    
    /**
     * Returns Set LicenseOrExemptionNumber
     *
     * @return string
     */
    public function getLicenseOrExemptionNumber()
    {
        return $this->LicenseOrExemptionNumber;
    }
    

    
}