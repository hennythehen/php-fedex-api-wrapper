<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Additional non-monetary data returned with Freight rates.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class FreightRateNotation
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Code' => 'string',
'Description' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'FreightRateNotation';

        
    /**
     * @var string
     */
    public $Code;

        
    /**
     * @var string
     */
    public $Description;



    /**
     * Unique identifier for notation.
     *
     * @param string $code
     * @return FreightRateNotation
     */
    public function setCode($code)
    {
        $this->__set('Code', $code);
        $this->Code = $code;
        return $this;
    }
    
    /**
     * Returns Unique identifier for notation.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }
    
    /**
     * Human-readable explanation of notation.
     *
     * @param string $description
     * @return FreightRateNotation
     */
    public function setDescription($description)
    {
        $this->__set('Description', $description);
        $this->Description = $description;
        return $this;
    }
    
    /**
     * Returns Human-readable explanation of notation.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }
    

    
}