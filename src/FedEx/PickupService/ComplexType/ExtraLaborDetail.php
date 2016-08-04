<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specification for labor time spent handling shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class ExtraLaborDetail
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
    protected $_name = 'ExtraLaborDetail';

        
    /**
     * @var duration
     */
    public $Duration;



    /**
     * Total labor time.
     *
     * @param duration $duration
     * @return ExtraLaborDetail
     */
    public function setDuration(duration $duration)
    {
        $this->__set('Duration', $duration);
        $this->Duration = $duration;
        return $this;
    }
    
    /**
     * Returns Total labor time.
     *
     * @return duration
     */
    public function getDuration()
    {
        return $this->Duration;
    }
    

    
}