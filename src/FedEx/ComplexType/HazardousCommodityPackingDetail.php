<?php
namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies documentation and limits for validation of an individual packing group/category.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class HazardousCommodityPackingDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'CargoAircraftOnly' => 'boolean',
'PackingInstructions' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'HazardousCommodityPackingDetail';

        
    /**
     * @var boolean
     */
    public $CargoAircraftOnly;

        
    /**
     * @var string
     */
    public $PackingInstructions;



    /**
     * Set CargoAircraftOnly
     *
     * @param boolean $cargoAircraftOnly
     * @return HazardousCommodityPackingDetail
     */
    public function setCargoAircraftOnly($cargoAircraftOnly)
    {
        $this->__set('CargoAircraftOnly', $cargoAircraftOnly);
        $this->CargoAircraftOnly = $cargoAircraftOnly;
        return $this;
    }
    
    /**
     * Returns Set CargoAircraftOnly
     *
     * @return boolean
     */
    public function getCargoAircraftOnly()
    {
        return $this->CargoAircraftOnly;
    }
    
    /**
     * Coded specification for how commodity is to be packed.
     *
     * @param string $packingInstructions
     * @return HazardousCommodityPackingDetail
     */
    public function setPackingInstructions($packingInstructions)
    {
        $this->__set('PackingInstructions', $packingInstructions);
        $this->PackingInstructions = $packingInstructions;
        return $this;
    }
    
    /**
     * Returns Coded specification for how commodity is to be packed.
     *
     * @return string
     */
    public function getPackingInstructions()
    {
        return $this->PackingInstructions;
    }
    

    
}