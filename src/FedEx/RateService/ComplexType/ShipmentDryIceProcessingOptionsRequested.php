<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ShipmentDryIceProcessingOptionsRequested
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class ShipmentDryIceProcessingOptionsRequested
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Options' => 'ShipmentDryIceProcessingOptionType',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ShipmentDryIceProcessingOptionsRequested';

        
    /**
     * @var ShipmentDryIceProcessingOptionType[]
     */
    public $Options = array();



    /**
     * Set Options
     *
     * @param ShipmentDryIceProcessingOptionType[] $options
     * @return ShipmentDryIceProcessingOptionsRequested
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
     * @return ShipmentDryIceProcessingOptionType[]
     */
    public function getOptions()
    {
        return $this->Options;
    }
    

    
}