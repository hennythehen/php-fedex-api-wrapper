<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TrackChargeDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class TrackChargeDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Type' => 'TrackChargeDetailType',
'ChargeAmount' => 'Money',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'TrackChargeDetail';

        
    /**
     * @var \FedEx\TrackService\SimpleType\TrackChargeDetailType|string
     */
    public $Type;

        
    /**
     * @var Money
     */
    public $ChargeAmount;



    /**
     * Set Type
     *
     * @param \FedEx\TrackService\SimpleType\TrackChargeDetailType|string $type
     * @return TrackChargeDetail
     */
    public function setType($type)
    {
        $this->__set('Type', $type);
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Returns Set Type
     *
     * @return \FedEx\TrackService\SimpleType\TrackChargeDetailType|string
     */
    public function getType()
    {
        return $this->Type;
    }
    
    /**
     * Set ChargeAmount
     *
     * @param Money $chargeAmount
     * @return TrackChargeDetail
     */
    public function setChargeAmount(Money $chargeAmount)
    {
        $this->__set('ChargeAmount', $chargeAmount);
        $this->ChargeAmount = $chargeAmount;
        return $this;
    }
    
    /**
     * Returns Set ChargeAmount
     *
     * @return Money
     */
    public function getChargeAmount()
    {
        return $this->ChargeAmount;
    }
    

    
}