<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * NetExplosiveDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class NetExplosiveDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'NetExplosiveDetail';

    /**
     * Set Type
     *
     * @param \FedEx\RateService\SimpleType\NetExplosiveClassificationType|string $type
     * @return NetExplosiveDetail
     */
    public function setType($type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Returns Set Type
     *
     * @return \FedEx\RateService\SimpleType\NetExplosiveClassificationType|string
     */
    public function getType()
    {
        return $this->Type;
    }
    
    /**
     * Set Amount
     *
     * @param decimal $amount
     * @return NetExplosiveDetail
     */
    public function setAmount($amount)
    {
        $this->Amount = $amount;
        return $this;
    }
    
    /**
     * Returns Set Amount
     *
     * @return decimal
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    
    /**
     * Set Units
     *
     * @param string $units
     * @return NetExplosiveDetail
     */
    public function setUnits($units)
    {
        $this->Units = $units;
        return $this;
    }
    
    /**
     * Returns Set Units
     *
     * @return string
     */
    public function getUnits()
    {
        return $this->Units;
    }
    

    
}