<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * SmartPostShipmentProcessingOptionsRequested
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class SmartPostShipmentProcessingOptionsRequested
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'SmartPostShipmentProcessingOptionsRequested';

    /**
     * Set Options
     *
     * @param SmartPostShipmentProcessingOptionType[] $options
     * @return SmartPostShipmentProcessingOptionsRequested
     */
    public function setOptions(array $options)
    {
        $this->Options = $options;
        return $this;
    }
    
    /**
     * Returns Set Options
     *
     * @return SmartPostShipmentProcessingOptionType[]
     */
    public function getOptions()
    {
        return $this->Options;
    }
    

    
}