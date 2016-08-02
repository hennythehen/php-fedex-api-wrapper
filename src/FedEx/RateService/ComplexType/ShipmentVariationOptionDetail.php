<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ShipmentVariationOptionDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class ShipmentVariationOptionDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ShipmentVariationOptionDetail';

    /**
     * Specifies the name or the key for the shipment variation.
     *
     * @param string $id
     * @return ShipmentVariationOptionDetail
     */
    public function setId($id)
    {
        $this->Id = $id;
        return $this;
    }
    
    /**
     * Returns Specifies the name or the key for the shipment variation.
     *
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }
    
    /**
     * The values that are valid for the specified shipment variation in the context of the current shipment.
     *
     * @param string[] $values
     * @return ShipmentVariationOptionDetail
     */
    public function setValues(array $values)
    {
        $this->Values = $values;
        return $this;
    }
    
    /**
     * Returns The values that are valid for the specified shipment variation in the context of the current shipment.
     *
     * @return string[]
     */
    public function getValues()
    {
        return $this->Values;
    }
    

    
}