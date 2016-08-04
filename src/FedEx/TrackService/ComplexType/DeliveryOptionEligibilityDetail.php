<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Details about the eligibility for a delivery option.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class DeliveryOptionEligibilityDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Option' => 'DeliveryOptionType',
'Eligibility' => 'EligibilityType',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'DeliveryOptionEligibilityDetail';

        
    /**
     * @var \FedEx\TrackService\SimpleType\DeliveryOptionType|string
     */
    public $Option;

        
    /**
     * @var \FedEx\TrackService\SimpleType\EligibilityType|string
     */
    public $Eligibility;



    /**
     * Type of delivery option.
     *
     * @param \FedEx\TrackService\SimpleType\DeliveryOptionType|string $option
     * @return DeliveryOptionEligibilityDetail
     */
    public function setOption($option)
    {
        $this->__set('Option', $option);
        $this->Option = $option;
        return $this;
    }
    
    /**
     * Returns Type of delivery option.
     *
     * @return \FedEx\TrackService\SimpleType\DeliveryOptionType|string
     */
    public function getOption()
    {
        return $this->Option;
    }
    
    /**
     * Eligibility of the customer for the specific delivery option.
     *
     * @param \FedEx\TrackService\SimpleType\EligibilityType|string $eligibility
     * @return DeliveryOptionEligibilityDetail
     */
    public function setEligibility($eligibility)
    {
        $this->__set('Eligibility', $eligibility);
        $this->Eligibility = $eligibility;
        return $this;
    }
    
    /**
     * Returns Eligibility of the customer for the specific delivery option.
     *
     * @return \FedEx\TrackService\SimpleType\EligibilityType|string
     */
    public function getEligibility()
    {
        return $this->Eligibility;
    }
    

    
}