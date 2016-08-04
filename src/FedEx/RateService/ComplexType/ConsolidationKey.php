<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Uniquely identifies a consolidation, which is a logical container for a collection of shipments.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class ConsolidationKey
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Type' => 'ConsolidationType',
'Index' => 'string',
'Date' => 'date',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ConsolidationKey';

        
    /**
     * @var \FedEx\RateService\SimpleType\ConsolidationType|string
     */
    public $Type;

        
    /**
     * @var string
     */
    public $Index;

        
    /**
     * @var date
     */
    public $Date;



    /**
     * Specifies the type of consolidation.
     *
     * @param \FedEx\RateService\SimpleType\ConsolidationType|string $type
     * @return ConsolidationKey
     */
    public function setType($type)
    {
        $this->__set('Type', $type);
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Returns Specifies the type of consolidation.
     *
     * @return \FedEx\RateService\SimpleType\ConsolidationType|string
     */
    public function getType()
    {
        return $this->Type;
    }
    
    /**
     * Uniquely identifies the consolidation, within a given type and date.
     *
     * @param string $index
     * @return ConsolidationKey
     */
    public function setIndex($index)
    {
        $this->__set('Index', $index);
        $this->Index = $index;
        return $this;
    }
    
    /**
     * Returns Uniquely identifies the consolidation, within a given type and date.
     *
     * @return string
     */
    public function getIndex()
    {
        return $this->Index;
    }
    
    /**
     * The date on which the consolidation was created.
     *
     * @param date $date
     * @return ConsolidationKey
     */
    public function setDate($date)
    {
        $this->__set('Date', $date);
        $this->Date = $date;
        return $this;
    }
    
    /**
     * Returns The date on which the consolidation was created.
     *
     * @return date
     */
    public function getDate()
    {
        return $this->Date;
    }
    

    
}