<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Dimensions
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class Dimensions
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Length' => 'nonNegativeInteger',
'Width' => 'nonNegativeInteger',
'Height' => 'nonNegativeInteger',
'Units' => 'LinearUnits',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Dimensions';

        
    /**
     * @var nonNegativeInteger
     */
    public $Length;

        
    /**
     * @var nonNegativeInteger
     */
    public $Width;

        
    /**
     * @var nonNegativeInteger
     */
    public $Height;

        
    /**
     * @var \FedEx\PickupService\SimpleType\LinearUnits|string
     */
    public $Units;



    /**
     * Set Length
     *
     * @param nonNegativeInteger $length
     * @return Dimensions
     */
    public function setLength($length)
    {
        $this->__set('Length', $length);
        $this->Length = $length;
        return $this;
    }
    
    /**
     * Returns Set Length
     *
     * @return nonNegativeInteger
     */
    public function getLength()
    {
        return $this->Length;
    }
    
    /**
     * Set Width
     *
     * @param nonNegativeInteger $width
     * @return Dimensions
     */
    public function setWidth($width)
    {
        $this->__set('Width', $width);
        $this->Width = $width;
        return $this;
    }
    
    /**
     * Returns Set Width
     *
     * @return nonNegativeInteger
     */
    public function getWidth()
    {
        return $this->Width;
    }
    
    /**
     * Set Height
     *
     * @param nonNegativeInteger $height
     * @return Dimensions
     */
    public function setHeight($height)
    {
        $this->__set('Height', $height);
        $this->Height = $height;
        return $this;
    }
    
    /**
     * Returns Set Height
     *
     * @return nonNegativeInteger
     */
    public function getHeight()
    {
        return $this->Height;
    }
    
    /**
     * Set Units
     *
     * @param \FedEx\PickupService\SimpleType\LinearUnits|string $units
     * @return Dimensions
     */
    public function setUnits($units)
    {
        $this->__set('Units', $units);
        $this->Units = $units;
        return $this;
    }
    
    /**
     * Returns Set Units
     *
     * @return \FedEx\PickupService\SimpleType\LinearUnits|string
     */
    public function getUnits()
    {
        return $this->Units;
    }
    

    
}