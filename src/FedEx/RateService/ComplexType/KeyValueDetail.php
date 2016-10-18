<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * KeyValueDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class KeyValueDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Key' => 'string',
'Value' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'KeyValueDetail';

        
    /**
     * @var string
     */
    public $Key;

        
    /**
     * @var string
     */
    public $Value;



    /**
     * Set Key
     *
     * @param string $key
     * @return KeyValueDetail
     */
    public function setKey($key)
    {
        $this->__set('Key', $key);
        $this->Key = $key;
        return $this;
    }
    
    /**
     * Returns Set Key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->Key;
    }
    
    /**
     * Set Value
     *
     * @param string $value
     * @return KeyValueDetail
     */
    public function setValue($value)
    {
        $this->__set('Value', $value);
        $this->Value = $value;
        return $this;
    }
    
    /**
     * Returns Set Value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }
    

    
}