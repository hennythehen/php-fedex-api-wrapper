<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CustomLabelPosition
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CustomLabelPosition
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'X' => 'nonNegativeInteger',
'Y' => 'int',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CustomLabelPosition';

        
    /**
     * @var nonNegativeInteger
     */
    public $X;

        
    /**
     * @var int
     */
    public $Y;



    /**
     * Horizontal position, relative to left edge of custom area.
     *
     * @param nonNegativeInteger $x
     * @return CustomLabelPosition
     */
    public function setX($x)
    {
        $this->__set('X', $x);
        $this->X = $x;
        return $this;
    }
    
    /**
     * Returns Horizontal position, relative to left edge of custom area.
     *
     * @return nonNegativeInteger
     */
    public function getX()
    {
        return $this->X;
    }
    
    /**
     * Vertical position, relative to top edge of custom area.
     *
     * @param int $y
     * @return CustomLabelPosition
     */
    public function setY($y)
    {
        $this->__set('Y', $y);
        $this->Y = $y;
        return $this;
    }
    
    /**
     * Returns Vertical position, relative to top edge of custom area.
     *
     * @return int
     */
    public function getY()
    {
        return $this->Y;
    }
    

    
}