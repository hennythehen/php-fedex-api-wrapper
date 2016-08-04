<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CodAddTransportationChargesDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class CodAddTransportationChargesDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'RateTypeBasis' => 'RateTypeBasisType',
'ChargeBasis' => 'CodAddTransportationChargeBasisType',
'ChargeBasisLevel' => 'ChargeBasisLevelType',
'RateLevelBasis' => 'RateLevelBasisType',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CodAddTransportationChargesDetail';

        
    /**
     * @var \FedEx\PickupService\SimpleType\RateTypeBasisType|string
     */
    public $RateTypeBasis;

        
    /**
     * @var \FedEx\PickupService\SimpleType\CodAddTransportationChargeBasisType|string
     */
    public $ChargeBasis;

        
    /**
     * @var \FedEx\PickupService\SimpleType\ChargeBasisLevelType|string
     */
    public $ChargeBasisLevel;

        
    /**
     * @var \FedEx\PickupService\SimpleType\RateLevelBasisType|string
     */
    public $RateLevelBasis;



    /**
     * Select the type of rate from which the element is to be selected.
     *
     * @param \FedEx\PickupService\SimpleType\RateTypeBasisType|string $rateTypeBasis
     * @return CodAddTransportationChargesDetail
     */
    public function setRateTypeBasis($rateTypeBasis)
    {
        $this->__set('RateTypeBasis', $rateTypeBasis);
        $this->RateTypeBasis = $rateTypeBasis;
        return $this;
    }
    
    /**
     * Returns Select the type of rate from which the element is to be selected.
     *
     * @return \FedEx\PickupService\SimpleType\RateTypeBasisType|string
     */
    public function getRateTypeBasis()
    {
        return $this->RateTypeBasis;
    }
    
    /**
     * Set ChargeBasis
     *
     * @param \FedEx\PickupService\SimpleType\CodAddTransportationChargeBasisType|string $chargeBasis
     * @return CodAddTransportationChargesDetail
     */
    public function setChargeBasis($chargeBasis)
    {
        $this->__set('ChargeBasis', $chargeBasis);
        $this->ChargeBasis = $chargeBasis;
        return $this;
    }
    
    /**
     * Returns Set ChargeBasis
     *
     * @return \FedEx\PickupService\SimpleType\CodAddTransportationChargeBasisType|string
     */
    public function getChargeBasis()
    {
        return $this->ChargeBasis;
    }
    
    /**
     * Set ChargeBasisLevel
     *
     * @param \FedEx\PickupService\SimpleType\ChargeBasisLevelType|string $chargeBasisLevel
     * @return CodAddTransportationChargesDetail
     */
    public function setChargeBasisLevel($chargeBasisLevel)
    {
        $this->__set('ChargeBasisLevel', $chargeBasisLevel);
        $this->ChargeBasisLevel = $chargeBasisLevel;
        return $this;
    }
    
    /**
     * Returns Set ChargeBasisLevel
     *
     * @return \FedEx\PickupService\SimpleType\ChargeBasisLevelType|string
     */
    public function getChargeBasisLevel()
    {
        return $this->ChargeBasisLevel;
    }
    
    /**
     * Select the type of rate used to calculate the percentage value of variable handling.
     *
     * @param \FedEx\PickupService\SimpleType\RateLevelBasisType|string $rateLevelBasis
     * @return CodAddTransportationChargesDetail
     */
    public function setRateLevelBasis($rateLevelBasis)
    {
        $this->__set('RateLevelBasis', $rateLevelBasis);
        $this->RateLevelBasis = $rateLevelBasis;
        return $this;
    }
    
    /**
     * Returns Select the type of rate used to calculate the percentage value of variable handling.
     *
     * @return \FedEx\PickupService\SimpleType\RateLevelBasisType|string
     */
    public function getRateLevelBasis()
    {
        return $this->RateLevelBasis;
    }
    

    
}