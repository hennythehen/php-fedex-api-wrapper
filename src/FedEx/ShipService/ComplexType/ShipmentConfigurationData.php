<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies data structures that may be re-used multiple times with s single shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ShipmentConfigurationData
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'DangerousGoodsPackageConfigurations' => 'DangerousGoodsDetail',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ShipmentConfigurationData';

        
    /**
     * @var DangerousGoodsDetail[]
     */
    public $DangerousGoodsPackageConfigurations = array();



    /**
     * Specifies the data that is common to dangerous goods packages in the shipment. This is populated when the shipment contains packages with identical dangerous goods commodities.
     *
     * @param DangerousGoodsDetail[] $dangerousGoodsPackageConfigurations
     * @return ShipmentConfigurationData
     */
    public function setDangerousGoodsPackageConfigurations(array $dangerousGoodsPackageConfigurations)
    {
        $this->__set('DangerousGoodsPackageConfigurations', $dangerousGoodsPackageConfigurations);
        $this->DangerousGoodsPackageConfigurations = $dangerousGoodsPackageConfigurations;
        return $this;
    }
    
    /**
     * Returns Specifies the data that is common to dangerous goods packages in the shipment. This is populated when the shipment contains packages with identical dangerous goods commodities.
     *
     * @return DangerousGoodsDetail[]
     */
    public function getDangerousGoodsPackageConfigurations()
    {
        return $this->DangerousGoodsPackageConfigurations;
    }
    

    
}