<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specification for storage provided for shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class StorageDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Duration' => 'duration',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'StorageDetail';

        
    /**
     * @var duration
     */
    public $Duration;



    /**
     * Total time shipment is held by carrier.
     *
     * @param duration $duration
     * @return StorageDetail
     */
    public function setDuration(duration $duration)
    {
        $this->__set('Duration', $duration);
        $this->Duration = $duration;
        return $this;
    }
    
    /**
     * Returns Total time shipment is held by carrier.
     *
     * @return duration
     */
    public function getDuration()
    {
        return $this->Duration;
    }
    

    
}