<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * PendingShipmentProcessingOptionsRequested
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class PendingShipmentProcessingOptionsRequested
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Options' => 'PendingShipmentProcessingOptionType',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'PendingShipmentProcessingOptionsRequested';

        
    /**
     * @var PendingShipmentProcessingOptionType[]
     */
    public $Options = array();



    /**
     * Set Options
     *
     * @param PendingShipmentProcessingOptionType[] $options
     * @return PendingShipmentProcessingOptionsRequested
     */
    public function setOptions(array $options)
    {
        $this->__set('Options', $options);
        $this->Options = $options;
        return $this;
    }
    
    /**
     * Returns Set Options
     *
     * @return PendingShipmentProcessingOptionType[]
     */
    public function getOptions()
    {
        return $this->Options;
    }
    

    
}