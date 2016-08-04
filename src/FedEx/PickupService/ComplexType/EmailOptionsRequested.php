<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies how to apply the localization detail to the current context.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class EmailOptionsRequested
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Options' => 'EmailOptionType',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'EmailOptionsRequested';

        
    /**
     * @var EmailOptionType[]
     */
    public $Options = array();



    /**
     * Set Options
     *
     * @param EmailOptionType[] $options
     * @return EmailOptionsRequested
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
     * @return EmailOptionType[]
     */
    public function getOptions()
    {
        return $this->Options;
    }
    

    
}