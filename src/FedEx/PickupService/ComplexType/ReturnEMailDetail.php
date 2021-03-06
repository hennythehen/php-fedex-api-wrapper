<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ReturnEMailDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class ReturnEMailDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'MerchantPhoneNumber' => 'string',
'AllowedSpecialServices' => 'ReturnEMailAllowedSpecialServiceType',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ReturnEMailDetail';

        
    /**
     * @var string
     */
    public $MerchantPhoneNumber;

        
    /**
     * @var ReturnEMailAllowedSpecialServiceType[]
     */
    public $AllowedSpecialServices = array();



    /**
     * Set MerchantPhoneNumber
     *
     * @param string $merchantPhoneNumber
     * @return ReturnEMailDetail
     */
    public function setMerchantPhoneNumber($merchantPhoneNumber)
    {
        $this->__set('MerchantPhoneNumber', $merchantPhoneNumber);
        $this->MerchantPhoneNumber = $merchantPhoneNumber;
        return $this;
    }
    
    /**
     * Returns Set MerchantPhoneNumber
     *
     * @return string
     */
    public function getMerchantPhoneNumber()
    {
        return $this->MerchantPhoneNumber;
    }
    
    /**
     * Identifies the allowed (merchant-authorized) special services which may be selected when the subsequent shipment is created. Only services represented in EMailLabelAllowedSpecialServiceType will be controlled by this list.
     *
     * @param ReturnEMailAllowedSpecialServiceType[] $allowedSpecialServices
     * @return ReturnEMailDetail
     */
    public function setAllowedSpecialServices(array $allowedSpecialServices)
    {
        $this->__set('AllowedSpecialServices', $allowedSpecialServices);
        $this->AllowedSpecialServices = $allowedSpecialServices;
        return $this;
    }
    
    /**
     * Returns Identifies the allowed (merchant-authorized) special services which may be selected when the subsequent shipment is created. Only services represented in EMailLabelAllowedSpecialServiceType will be controlled by this list.
     *
     * @return ReturnEMailAllowedSpecialServiceType[]
     */
    public function getAllowedSpecialServices()
    {
        return $this->AllowedSpecialServices;
    }
    

    
}