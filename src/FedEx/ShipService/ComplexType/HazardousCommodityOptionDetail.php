<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Customer-provided specifications for handling individual commodities.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class HazardousCommodityOptionDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'LabelTextOption' => 'HazardousCommodityLabelTextOptionType',
'CustomerSuppliedLabelText' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'HazardousCommodityOptionDetail';

        
    /**
     * @var \FedEx\ShipService\SimpleType\HazardousCommodityLabelTextOptionType|string
     */
    public $LabelTextOption;

        
    /**
     * @var string
     */
    public $CustomerSuppliedLabelText;



    /**
     * Specifies how the customer wishes the label text to be handled for this commodity in this package.
     *
     * @param \FedEx\ShipService\SimpleType\HazardousCommodityLabelTextOptionType|string $labelTextOption
     * @return HazardousCommodityOptionDetail
     */
    public function setLabelTextOption($labelTextOption)
    {
        $this->__set('LabelTextOption', $labelTextOption);
        $this->LabelTextOption = $labelTextOption;
        return $this;
    }
    
    /**
     * Returns Specifies how the customer wishes the label text to be handled for this commodity in this package.
     *
     * @return \FedEx\ShipService\SimpleType\HazardousCommodityLabelTextOptionType|string
     */
    public function getLabelTextOption()
    {
        return $this->LabelTextOption;
    }
    
    /**
     * Text used in labeling the commodity under control of the labelTextOption field.
     *
     * @param string $customerSuppliedLabelText
     * @return HazardousCommodityOptionDetail
     */
    public function setCustomerSuppliedLabelText($customerSuppliedLabelText)
    {
        $this->__set('CustomerSuppliedLabelText', $customerSuppliedLabelText);
        $this->CustomerSuppliedLabelText = $customerSuppliedLabelText;
        return $this;
    }
    
    /**
     * Returns Text used in labeling the commodity under control of the labelTextOption field.
     *
     * @return string
     */
    public function getCustomerSuppliedLabelText()
    {
        return $this->CustomerSuppliedLabelText;
    }
    

    
}