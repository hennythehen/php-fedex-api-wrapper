<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifications for pallets to be shrinkwrapped as part of a Freight shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class PalletShrinkwrapDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'PalletCount' => 'positiveInteger',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'PalletShrinkwrapDetail';

        
    /**
     * @var positiveInteger
     */
    public $PalletCount;



    /**
     * Number of pallets to be shrinkwrapped.
     *
     * @param positiveInteger $palletCount
     * @return PalletShrinkwrapDetail
     */
    public function setPalletCount($palletCount)
    {
        $this->__set('PalletCount', $palletCount);
        $this->PalletCount = $palletCount;
        return $this;
    }
    
    /**
     * Returns Number of pallets to be shrinkwrapped.
     *
     * @return positiveInteger
     */
    public function getPalletCount()
    {
        return $this->PalletCount;
    }
    

    
}