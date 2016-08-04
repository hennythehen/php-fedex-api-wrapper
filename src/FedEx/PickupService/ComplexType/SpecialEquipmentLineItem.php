<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the usage of a single type of special equipment while loading/unloading a shipment
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class SpecialEquipmentLineItem
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Type' => 'SpecialEquipmentType',
'Duration' => 'duration',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'SpecialEquipmentLineItem';

        
    /**
     * @var \FedEx\PickupService\SimpleType\SpecialEquipmentType|string
     */
    public $Type;

        
    /**
     * @var duration
     */
    public $Duration;



    /**
     * Type of equipment used
     *
     * @param \FedEx\PickupService\SimpleType\SpecialEquipmentType|string $type
     * @return SpecialEquipmentLineItem
     */
    public function setType($type)
    {
        $this->__set('Type', $type);
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Returns Type of equipment used
     *
     * @return \FedEx\PickupService\SimpleType\SpecialEquipmentType|string
     */
    public function getType()
    {
        return $this->Type;
    }
    
    /**
     * Total amount of time the equipment was used
     *
     * @param duration $duration
     * @return SpecialEquipmentLineItem
     */
    public function setDuration(duration $duration)
    {
        $this->__set('Duration', $duration);
        $this->Duration = $duration;
        return $this;
    }
    
    /**
     * Returns Total amount of time the equipment was used
     *
     * @return duration
     */
    public function getDuration()
    {
        return $this->Duration;
    }
    

    
}