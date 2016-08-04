<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifications for pup/set or vehicle delayed for loading or unloading.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class DetentionDetail
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
    protected $_name = 'DetentionDetail';

        
    /**
     * @var duration
     */
    public $Duration;



    /**
     * Amount of time involved in the detention.
     *
     * @param duration $duration
     * @return DetentionDetail
     */
    public function setDuration(duration $duration)
    {
        $this->__set('Duration', $duration);
        $this->Duration = $duration;
        return $this;
    }
    
    /**
     * Returns Amount of time involved in the detention.
     *
     * @return duration
     */
    public function getDuration()
    {
        return $this->Duration;
    }
    

    
}