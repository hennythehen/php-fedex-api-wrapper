<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * FreightGuaranteeDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class FreightGuaranteeDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Type' => 'FreightGuaranteeType',
'Date' => 'date',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'FreightGuaranteeDetail';

        
    /**
     * @var \FedEx\ShipService\SimpleType\FreightGuaranteeType|string
     */
    public $Type;

        
    /**
     * @var date
     */
    public $Date;



    /**
     * Set Type
     *
     * @param \FedEx\ShipService\SimpleType\FreightGuaranteeType|string $type
     * @return FreightGuaranteeDetail
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
     * @return \FedEx\ShipService\SimpleType\FreightGuaranteeType|string
     */
    public function getType()
    {
        return $this->Type;
    }
    
    /**
     * Date for all Freight guarantee types.
     *
     * @param date $date
     * @return FreightGuaranteeDetail
     */
    public function setDate($date)
    {
        $this->__set('Date', $date);
        $this->Date = $date;
        return $this;
    }
    
    /**
     * Returns Date for all Freight guarantee types.
     *
     * @return date
     */
    public function getDate()
    {
        return $this->Date;
    }
    

    
}