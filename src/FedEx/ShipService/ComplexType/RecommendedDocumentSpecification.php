<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the details about documents that are recommended to be included with the shipment for ease of shipment processing and transportation.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class RecommendedDocumentSpecification
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Types' => 'RecommendedDocumentType',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'RecommendedDocumentSpecification';

        
    /**
     * @var RecommendedDocumentType[]
     */
    public $Types = array();



    /**
     * Set Types
     *
     * @param RecommendedDocumentType[] $types
     * @return RecommendedDocumentSpecification
     */
    public function setTypes(array $types)
    {
        $this->__set('Types', $types);
        $this->Types = $types;
        return $this;
    }
    
    /**
     * Returns Set Types
     *
     * @return RecommendedDocumentType[]
     */
    public function getTypes()
    {
        return $this->Types;
    }
    

    
}