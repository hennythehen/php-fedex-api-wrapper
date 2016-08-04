<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specification for special equipment used in loading/unloading shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class SpecialEquipmentDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'LineItems' => 'SpecialEquipmentLineItem',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'SpecialEquipmentDetail';

        
    /**
     * @var SpecialEquipmentLineItem[]
     */
    public $LineItems = array();



    /**
     * Contains an entry for each type of special equipment used with shipment
     *
     * @param SpecialEquipmentLineItem[] $lineItems
     * @return SpecialEquipmentDetail
     */
    public function setLineItems(array $lineItems)
    {
        $this->__set('LineItems', $lineItems);
        $this->LineItems = $lineItems;
        return $this;
    }
    
    /**
     * Returns Contains an entry for each type of special equipment used with shipment
     *
     * @return SpecialEquipmentLineItem[]
     */
    public function getLineItems()
    {
        return $this->LineItems;
    }
    

    
}