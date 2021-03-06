<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies which party will be responsible for payment of any surcharges for Freight special services for which split billing is allowed.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class FreightSpecialServicePayment
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'SpecialService' => 'ShipmentSpecialServiceType',
'PaymentType' => 'FreightShipmentRoleType',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'FreightSpecialServicePayment';

        
    /**
     * @var \FedEx\RateService\SimpleType\ShipmentSpecialServiceType|string
     */
    public $SpecialService;

        
    /**
     * @var \FedEx\RateService\SimpleType\FreightShipmentRoleType|string
     */
    public $PaymentType;



    /**
     * Identifies the special service.
     *
     * @param \FedEx\RateService\SimpleType\ShipmentSpecialServiceType|string $specialService
     * @return FreightSpecialServicePayment
     */
    public function setSpecialService($specialService)
    {
        $this->__set('SpecialService', $specialService);
        $this->SpecialService = $specialService;
        return $this;
    }
    
    /**
     * Returns Identifies the special service.
     *
     * @return \FedEx\RateService\SimpleType\ShipmentSpecialServiceType|string
     */
    public function getSpecialService()
    {
        return $this->SpecialService;
    }
    
    /**
     * Indicates who will pay for the special service.
     *
     * @param \FedEx\RateService\SimpleType\FreightShipmentRoleType|string $paymentType
     * @return FreightSpecialServicePayment
     */
    public function setPaymentType($paymentType)
    {
        $this->__set('PaymentType', $paymentType);
        $this->PaymentType = $paymentType;
        return $this;
    }
    
    /**
     * Returns Indicates who will pay for the special service.
     *
     * @return \FedEx\RateService\SimpleType\FreightShipmentRoleType|string
     */
    public function getPaymentType()
    {
        return $this->PaymentType;
    }
    

    
}