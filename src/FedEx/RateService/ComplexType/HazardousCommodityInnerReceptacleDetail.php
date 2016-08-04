<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This describes information about the inner receptacles for the hazardous commodity in a particular dangerous goods container.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class HazardousCommodityInnerReceptacleDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Quantity' => 'HazardousCommodityQuantityDetail',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'HazardousCommodityInnerReceptacleDetail';

        
    /**
     * @var HazardousCommodityQuantityDetail
     */
    public $Quantity;



    /**
     * This specifies the quantity contained in the inner receptacle.
     *
     * @param HazardousCommodityQuantityDetail $quantity
     * @return HazardousCommodityInnerReceptacleDetail
     */
    public function setQuantity(HazardousCommodityQuantityDetail $quantity)
    {
        $this->__set('Quantity', $quantity);
        $this->Quantity = $quantity;
        return $this;
    }
    
    /**
     * Returns This specifies the quantity contained in the inner receptacle.
     *
     * @return HazardousCommodityQuantityDetail
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    

    
}