<?php
namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Documents the kind and quantity of an individual hazardous commodity in a package.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class HazardousCommodityContent
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Description' => 'HazardousCommodityDescription',
'Quantity' => 'HazardousCommodityQuantityDetail',
'InnerReceptacles' => 'HazardousCommodityInnerReceptacleDetail',
'Options' => 'HazardousCommodityOptionDetail',
'RadionuclideDetail' => 'RadionuclideDetail',
'NetExplosiveDetail' => 'NetExplosiveDetail',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'HazardousCommodityContent';

        
    /**
     * @var HazardousCommodityDescription
     */
    public $Description;

        
    /**
     * @var HazardousCommodityQuantityDetail
     */
    public $Quantity;

        
    /**
     * @var HazardousCommodityInnerReceptacleDetail[]
     */
    public $InnerReceptacles = array();

        
    /**
     * @var HazardousCommodityOptionDetail
     */
    public $Options;

        
    /**
     * @var RadionuclideDetail
     */
    public $RadionuclideDetail;

        
    /**
     * @var NetExplosiveDetail
     */
    public $NetExplosiveDetail;



    /**
     * Identifies and describes an individual hazardous commodity.
     *
     * @param HazardousCommodityDescription $description
     * @return HazardousCommodityContent
     */
    public function setDescription(HazardousCommodityDescription $description)
    {
        $this->__set('Description', $description);
        $this->Description = $description;
        return $this;
    }
    
    /**
     * Returns Identifies and describes an individual hazardous commodity.
     *
     * @return HazardousCommodityDescription
     */
    public function getDescription()
    {
        return $this->Description;
    }
    
    /**
     * Specifies the amount of the commodity in alternate units.
     *
     * @param HazardousCommodityQuantityDetail $quantity
     * @return HazardousCommodityContent
     */
    public function setQuantity(HazardousCommodityQuantityDetail $quantity)
    {
        $this->__set('Quantity', $quantity);
        $this->Quantity = $quantity;
        return $this;
    }
    
    /**
     * Returns Specifies the amount of the commodity in alternate units.
     *
     * @return HazardousCommodityQuantityDetail
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    
    /**
     * This describes the inner receptacle details for a hazardous commodity within the dangerous goods container.
     *
     * @param HazardousCommodityInnerReceptacleDetail[] $innerReceptacles
     * @return HazardousCommodityContent
     */
    public function setInnerReceptacles(array $innerReceptacles)
    {
        $this->__set('InnerReceptacles', $innerReceptacles);
        $this->InnerReceptacles = $innerReceptacles;
        return $this;
    }
    
    /**
     * Returns This describes the inner receptacle details for a hazardous commodity within the dangerous goods container.
     *
     * @return HazardousCommodityInnerReceptacleDetail[]
     */
    public function getInnerReceptacles()
    {
        return $this->InnerReceptacles;
    }
    
    /**
     * Customer-provided specifications for handling individual commodities.
     *
     * @param HazardousCommodityOptionDetail $options
     * @return HazardousCommodityContent
     */
    public function setOptions(HazardousCommodityOptionDetail $options)
    {
        $this->__set('Options', $options);
        $this->Options = $options;
        return $this;
    }
    
    /**
     * Returns Customer-provided specifications for handling individual commodities.
     *
     * @return HazardousCommodityOptionDetail
     */
    public function getOptions()
    {
        return $this->Options;
    }
    
    /**
     * Specifies the details of any radio active materials within the commodity.
     *
     * @param RadionuclideDetail $radionuclideDetail
     * @return HazardousCommodityContent
     */
    public function setRadionuclideDetail(RadionuclideDetail $radionuclideDetail)
    {
        $this->__set('RadionuclideDetail', $radionuclideDetail);
        $this->RadionuclideDetail = $radionuclideDetail;
        return $this;
    }
    
    /**
     * Returns Specifies the details of any radio active materials within the commodity.
     *
     * @return RadionuclideDetail
     */
    public function getRadionuclideDetail()
    {
        return $this->RadionuclideDetail;
    }
    
    /**
     * The total mass of the contained explosive substances, without the mass of any casings, bullets, shells, etc.
     *
     * @param NetExplosiveDetail $netExplosiveDetail
     * @return HazardousCommodityContent
     */
    public function setNetExplosiveDetail(NetExplosiveDetail $netExplosiveDetail)
    {
        $this->__set('NetExplosiveDetail', $netExplosiveDetail);
        $this->NetExplosiveDetail = $netExplosiveDetail;
        return $this;
    }
    
    /**
     * Returns The total mass of the contained explosive substances, without the mass of any casings, bullets, shells, etc.
     *
     * @return NetExplosiveDetail
     */
    public function getNetExplosiveDetail()
    {
        return $this->NetExplosiveDetail;
    }
    

    
}