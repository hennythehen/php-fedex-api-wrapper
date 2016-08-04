<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * EdtExciseCondition
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class EdtExciseCondition
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Category' => 'string',
'Value' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'EdtExciseCondition';

        
    /**
     * @var string
     */
    public $Category;

        
    /**
     * @var string
     */
    public $Value;



    /**
     * Set Category
     *
     * @param string $category
     * @return EdtExciseCondition
     */
    public function setCategory($category)
    {
        $this->__set('Category', $category);
        $this->Category = $category;
        return $this;
    }
    
    /**
     * Returns Set Category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->Category;
    }
    
    /**
     * Customer-declared value, with data type and legal values depending on excise condition, used in defining the taxable value of the item.
     *
     * @param string $value
     * @return EdtExciseCondition
     */
    public function setValue($value)
    {
        $this->__set('Value', $value);
        $this->Value = $value;
        return $this;
    }
    
    /**
     * Returns Customer-declared value, with data type and legal values depending on excise condition, used in defining the taxable value of the item.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }
    

    
}