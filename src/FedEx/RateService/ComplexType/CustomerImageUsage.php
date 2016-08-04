<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CustomerImageUsage
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class CustomerImageUsage
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Type' => 'CustomerImageUsageType',
'Id' => 'ImageId',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CustomerImageUsage';

        
    /**
     * @var \FedEx\RateService\SimpleType\CustomerImageUsageType|string
     */
    public $Type;

        
    /**
     * @var \FedEx\RateService\SimpleType\ImageId|string
     */
    public $Id;



    /**
     * Set Type
     *
     * @param \FedEx\RateService\SimpleType\CustomerImageUsageType|string $type
     * @return CustomerImageUsage
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
     * @return \FedEx\RateService\SimpleType\CustomerImageUsageType|string
     */
    public function getType()
    {
        return $this->Type;
    }
    
    /**
     * Set Id
     *
     * @param \FedEx\RateService\SimpleType\ImageId|string $id
     * @return CustomerImageUsage
     */
    public function setId($id)
    {
        $this->__set('Id', $id);
        $this->Id = $id;
        return $this;
    }
    
    /**
     * Returns Set Id
     *
     * @return \FedEx\RateService\SimpleType\ImageId|string
     */
    public function getId()
    {
        return $this->Id;
    }
    

    
}