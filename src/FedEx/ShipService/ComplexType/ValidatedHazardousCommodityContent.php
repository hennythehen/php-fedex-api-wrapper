<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Documents the kind and quantity of an individual hazardous commodity in a package.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ValidatedHazardousCommodityContent
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Description' => 'ValidatedHazardousCommodityDescription',
'Quantity' => 'HazardousCommodityQuantityDetail',
'MassPoints' => 'decimal',
'Options' => 'HazardousCommodityOptionDetail',
'NetExplosiveDetail' => 'NetExplosiveDetail',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ValidatedHazardousCommodityContent';

        
    /**
     * @var ValidatedHazardousCommodityDescription
     */
    public $Description;

        
    /**
     * @var HazardousCommodityQuantityDetail
     */
    public $Quantity;

        
    /**
     * @var decimal
     */
    public $MassPoints;

        
    /**
     * @var HazardousCommodityOptionDetail
     */
    public $Options;

        
    /**
     * @var NetExplosiveDetail
     */
    public $NetExplosiveDetail;



    /**
     * Identifies and describes an individual hazardous commodity.
     *
     * @param ValidatedHazardousCommodityDescription $description
     * @return ValidatedHazardousCommodityContent
     */
    public function setDescription(ValidatedHazardousCommodityDescription $description)
    {
        $this->__set('Description', $description);
        $this->Description = $description;
        return $this;
    }
    
    /**
     * Returns Identifies and describes an individual hazardous commodity.
     *
     * @return ValidatedHazardousCommodityDescription
     */
    public function getDescription()
    {
        return $this->Description;
    }
    
    /**
     * Specifies the amount of the commodity in alternate units.
     *
     * @param HazardousCommodityQuantityDetail $quantity
     * @return ValidatedHazardousCommodityContent
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
     * The mass points are a calculation used by ADR regulations for measuring the risk of a particular hazardous commodity.
     *
     * @param decimal $massPoints
     * @return ValidatedHazardousCommodityContent
     */
    public function setMassPoints($massPoints)
    {
        $this->__set('MassPoints', $massPoints);
        $this->MassPoints = $massPoints;
        return $this;
    }
    
    /**
     * Returns The mass points are a calculation used by ADR regulations for measuring the risk of a particular hazardous commodity.
     *
     * @return decimal
     */
    public function getMassPoints()
    {
        return $this->MassPoints;
    }
    
    /**
     * Customer-provided specifications for handling individual commodities.
     *
     * @param HazardousCommodityOptionDetail $options
     * @return ValidatedHazardousCommodityContent
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
     * The total mass of the contained explosive substances, without the mass of any casings, bullets, shells, etc.
     *
     * @param NetExplosiveDetail $netExplosiveDetail
     * @return ValidatedHazardousCommodityContent
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