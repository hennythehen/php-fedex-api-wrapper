<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CustomsOptionDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CustomsOptionDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Type' => 'CustomsOptionType',
'Description' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CustomsOptionDetail';

        
    /**
     * @var \FedEx\ShipService\SimpleType\CustomsOptionType|string
     */
    public $Type;

        
    /**
     * @var string
     */
    public $Description;



    /**
     * Set Type
     *
     * @param \FedEx\ShipService\SimpleType\CustomsOptionType|string $type
     * @return CustomsOptionDetail
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
     * @return \FedEx\ShipService\SimpleType\CustomsOptionType|string
     */
    public function getType()
    {
        return $this->Type;
    }
    
    /**
     * Specifies additional description about customs options. This is a required field when the customs options type is "OTHER".
     *
     * @param string $description
     * @return CustomsOptionDetail
     */
    public function setDescription($description)
    {
        $this->__set('Description', $description);
        $this->Description = $description;
        return $this;
    }
    
    /**
     * Returns Specifies additional description about customs options. This is a required field when the customs options type is "OTHER".
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }
    

    
}