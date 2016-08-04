<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifications for pallets to be provided on Freight shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class PalletsProvidedDetail
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
    protected $_name = 'PalletsProvidedDetail';

        
    /**
     * @var positiveInteger
     */
    public $PalletCount;



    /**
     * Number of pallets to be provided.
     *
     * @param positiveInteger $palletCount
     * @return PalletsProvidedDetail
     */
    public function setPalletCount($palletCount)
    {
        $this->__set('PalletCount', $palletCount);
        $this->PalletCount = $palletCount;
        return $this;
    }
    
    /**
     * Returns Number of pallets to be provided.
     *
     * @return positiveInteger
     */
    public function getPalletCount()
    {
        return $this->PalletCount;
    }
    

    
}