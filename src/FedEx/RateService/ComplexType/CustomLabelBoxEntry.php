<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Solid (filled) rectangular area on label.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class CustomLabelBoxEntry
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'TopLeftCorner' => 'CustomLabelPosition',
'BottomRightCorner' => 'CustomLabelPosition',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CustomLabelBoxEntry';

        
    /**
     * @var CustomLabelPosition
     */
    public $TopLeftCorner;

        
    /**
     * @var CustomLabelPosition
     */
    public $BottomRightCorner;



    /**
     * Set TopLeftCorner
     *
     * @param CustomLabelPosition $topLeftCorner
     * @return CustomLabelBoxEntry
     */
    public function setTopLeftCorner(CustomLabelPosition $topLeftCorner)
    {
        $this->__set('TopLeftCorner', $topLeftCorner);
        $this->TopLeftCorner = $topLeftCorner;
        return $this;
    }
    
    /**
     * Returns Set TopLeftCorner
     *
     * @return CustomLabelPosition
     */
    public function getTopLeftCorner()
    {
        return $this->TopLeftCorner;
    }
    
    /**
     * Set BottomRightCorner
     *
     * @param CustomLabelPosition $bottomRightCorner
     * @return CustomLabelBoxEntry
     */
    public function setBottomRightCorner(CustomLabelPosition $bottomRightCorner)
    {
        $this->__set('BottomRightCorner', $bottomRightCorner);
        $this->BottomRightCorner = $bottomRightCorner;
        return $this;
    }
    
    /**
     * Returns Set BottomRightCorner
     *
     * @return CustomLabelPosition
     */
    public function getBottomRightCorner()
    {
        return $this->BottomRightCorner;
    }
    

    
}