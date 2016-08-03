<?php
namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * DocumentFormatOptionsRequested
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class DocumentFormatOptionsRequested
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Options' => 'DocumentFormatOptionType',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'DocumentFormatOptionsRequested';

        
    /**
     * @var DocumentFormatOptionType[]
     */
    public $Options = array();



    /**
     * Set Options
     *
     * @param DocumentFormatOptionType[] $options
     * @return DocumentFormatOptionsRequested
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
     * @return DocumentFormatOptionType[]
     */
    public function getOptions()
    {
        return $this->Options;
    }
    

    
}