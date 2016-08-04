<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specification for marking or tagging of pieces in shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class MarkingOrTaggingDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Count' => 'positiveInteger',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'MarkingOrTaggingDetail';

        
    /**
     * @var positiveInteger
     */
    public $Count;



    /**
     * Number of pieces to be marked or tagged by FedEx.
     *
     * @param positiveInteger $count
     * @return MarkingOrTaggingDetail
     */
    public function setCount($count)
    {
        $this->__set('Count', $count);
        $this->Count = $count;
        return $this;
    }
    
    /**
     * Returns Number of pieces to be marked or tagged by FedEx.
     *
     * @return positiveInteger
     */
    public function getCount()
    {
        return $this->Count;
    }
    

    
}