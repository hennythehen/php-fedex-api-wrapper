<?php
namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies details needed to generate any label artifacts required due to regulatory requirements.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class RegulatoryLabelContentDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Type' => 'RegulatoryLabelType',
'GenerationOptions' => 'CustomerSpecifiedLabelGenerationOptionType',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'RegulatoryLabelContentDetail';

        
    /**
     * @var \FedEx\SimpleType\RegulatoryLabelType|string
     */
    public $Type;

        
    /**
     * @var CustomerSpecifiedLabelGenerationOptionType[]
     */
    public $GenerationOptions = array();



    /**
     * Set Type
     *
     * @param \FedEx\SimpleType\RegulatoryLabelType|string $type
     * @return RegulatoryLabelContentDetail
     */
    public function setType($type)
    {
        $this->__set('Type', $type);
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Returns Set Type
     *
     * @return \FedEx\SimpleType\RegulatoryLabelType|string
     */
    public function getType()
    {
        return $this->Type;
    }
    
    /**
     * Specifies how the customer requested the regulatory label to be generated.
     *
     * @param CustomerSpecifiedLabelGenerationOptionType[] $generationOptions
     * @return RegulatoryLabelContentDetail
     */
    public function setGenerationOptions(array $generationOptions)
    {
        $this->__set('GenerationOptions', $generationOptions);
        $this->GenerationOptions = $generationOptions;
        return $this;
    }
    
    /**
     * Returns Specifies how the customer requested the regulatory label to be generated.
     *
     * @return CustomerSpecifiedLabelGenerationOptionType[]
     */
    public function getGenerationOptions()
    {
        return $this->GenerationOptions;
    }
    

    
}