<?php
namespace FedEx\ComplexType;

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

    public $propertyTypes = array(
         'Options' => 'SmartPostShipmentProcessingOptionType',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'SmartPostShipmentProcessingOptionsRequested';

        
    /**
     * @var SmartPostShipmentProcessingOptionType[]
     */
    public $Options = array();



    /**
     * Set Options
     *
     * @param SmartPostShipmentProcessingOptionType[] $options
     * @return SmartPostShipmentProcessingOptionsRequested
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
     * @return SmartPostShipmentProcessingOptionType[]
     */
    public function getOptions()
    {
        return $this->Options;
    }
    

    
}