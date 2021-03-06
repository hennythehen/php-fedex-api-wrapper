<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CodAddTransportationChargesDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CodAddTransportationChargesDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'RateTypeBasis' => 'RateTypeBasisType',
'ChargeBasis' => 'CodAddTransportationChargeBasisType',
'ChargeBasisLevel' => 'ChargeBasisLevelType',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CodAddTransportationChargesDetail';

        
    /**
     * @var \FedEx\ShipService\SimpleType\RateTypeBasisType|string
     */
    public $RateTypeBasis;

        
    /**
     * @var \FedEx\ShipService\SimpleType\CodAddTransportationChargeBasisType|string
     */
    public $ChargeBasis;

        
    /**
     * @var \FedEx\ShipService\SimpleType\ChargeBasisLevelType|string
     */
    public $ChargeBasisLevel;



    /**
     * Select the type of rate from which the element is to be selected.
     *
     * @param \FedEx\ShipService\SimpleType\RateTypeBasisType|string $rateTypeBasis
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
     * @return \FedEx\ShipService\SimpleType\RateTypeBasisType|string
     */
    public function getRateTypeBasis()
    {
        return $this->RateTypeBasis;
    }
    
    /**
     * Set ChargeBasis
     *
     * @param \FedEx\ShipService\SimpleType\CodAddTransportationChargeBasisType|string $chargeBasis
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
     * @return \FedEx\ShipService\SimpleType\CodAddTransportationChargeBasisType|string
     */
    public function getChargeBasis()
    {
        return $this->ChargeBasis;
    }
    
    /**
     * Set ChargeBasisLevel
     *
     * @param \FedEx\ShipService\SimpleType\ChargeBasisLevelType|string $chargeBasisLevel
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
     * @return \FedEx\ShipService\SimpleType\ChargeBasisLevelType|string
     */
    public function getChargeBasisLevel()
    {
        return $this->ChargeBasisLevel;
    }
    

    
}