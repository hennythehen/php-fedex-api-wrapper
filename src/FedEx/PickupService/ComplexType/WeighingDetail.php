<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies a single type of weighing performed on a shipment
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class WeighingDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Type' => 'WeighingScaleType',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'WeighingDetail';

        
    /**
     * @var \FedEx\PickupService\SimpleType\WeighingScaleType|string
     */
    public $Type;



    /**
     * Type of scale used
     *
     * @param \FedEx\PickupService\SimpleType\WeighingScaleType|string $type
     * @return WeighingDetail
     */
    public function setType($type)
    {
        $this->__set('Type', $type);
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Returns Type of scale used
     *
     * @return \FedEx\PickupService\SimpleType\WeighingScaleType|string
     */
    public function getType()
    {
        return $this->Type;
    }
    

    
}