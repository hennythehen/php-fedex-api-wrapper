<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This is a structure for providing document line item content (in part or in whole) to a service.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class DocumentLineItem
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Values' => 'KeyValueDetail',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'DocumentLineItem';

        
    /**
     * @var KeyValueDetail[]
     */
    public $Values = array();



    /**
     * Set Values
     *
     * @param KeyValueDetail[] $values
     * @return DocumentLineItem
     */
    public function setValues(array $values)
    {
        $this->__set('Values', $values);
        $this->Values = $values;
        return $this;
    }
    
    /**
     * Returns Set Values
     *
     * @return KeyValueDetail[]
     */
    public function getValues()
    {
        return $this->Values;
    }
    

    
}