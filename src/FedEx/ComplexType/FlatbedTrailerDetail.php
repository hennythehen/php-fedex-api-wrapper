<?php
namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the optional features/characteristics requested for a Freight shipment utilizing a flatbed trailer.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class FlatbedTrailerDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Options' => 'FlatbedTrailerOption',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'FlatbedTrailerDetail';

        
    /**
     * @var FlatbedTrailerOption[]
     */
    public $Options = array();



    /**
     * Set Options
     *
     * @param FlatbedTrailerOption[] $options
     * @return FlatbedTrailerDetail
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
     * @return FlatbedTrailerOption[]
     */
    public function getOptions()
    {
        return $this->Options;
    }
    

    
}