<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * NaftaCommodityDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class NaftaCommodityDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'PreferenceCriterion' => 'NaftaPreferenceCriterionCode',
'ProducerDetermination' => 'NaftaProducerDeterminationCode',
'ProducerId' => 'string',
'NetCostMethod' => 'NaftaNetCostMethodCode',
'NetCostDateRange' => 'DateRange',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'NaftaCommodityDetail';

        
    /**
     * @var \FedEx\TrackService\SimpleType\NaftaPreferenceCriterionCode|string
     */
    public $PreferenceCriterion;

        
    /**
     * @var \FedEx\TrackService\SimpleType\NaftaProducerDeterminationCode|string
     */
    public $ProducerDetermination;

        
    /**
     * @var string
     */
    public $ProducerId;

        
    /**
     * @var \FedEx\TrackService\SimpleType\NaftaNetCostMethodCode|string
     */
    public $NetCostMethod;

        
    /**
     * @var DateRange
     */
    public $NetCostDateRange;



    /**
     * Defined by NAFTA regulations.
     *
     * @param \FedEx\TrackService\SimpleType\NaftaPreferenceCriterionCode|string $preferenceCriterion
     * @return NaftaCommodityDetail
     */
    public function setPreferenceCriterion($preferenceCriterion)
    {
        $this->__set('PreferenceCriterion', $preferenceCriterion);
        $this->PreferenceCriterion = $preferenceCriterion;
        return $this;
    }
    
    /**
     * Returns Defined by NAFTA regulations.
     *
     * @return \FedEx\TrackService\SimpleType\NaftaPreferenceCriterionCode|string
     */
    public function getPreferenceCriterion()
    {
        return $this->PreferenceCriterion;
    }
    
    /**
     * Defined by NAFTA regulations.
     *
     * @param \FedEx\TrackService\SimpleType\NaftaProducerDeterminationCode|string $producerDetermination
     * @return NaftaCommodityDetail
     */
    public function setProducerDetermination($producerDetermination)
    {
        $this->__set('ProducerDetermination', $producerDetermination);
        $this->ProducerDetermination = $producerDetermination;
        return $this;
    }
    
    /**
     * Returns Defined by NAFTA regulations.
     *
     * @return \FedEx\TrackService\SimpleType\NaftaProducerDeterminationCode|string
     */
    public function getProducerDetermination()
    {
        return $this->ProducerDetermination;
    }
    
    /**
     * Identification of which producer is associated with this commodity (if multiple producers are used in a single shipment).
     *
     * @param string $producerId
     * @return NaftaCommodityDetail
     */
    public function setProducerId($producerId)
    {
        $this->__set('ProducerId', $producerId);
        $this->ProducerId = $producerId;
        return $this;
    }
    
    /**
     * Returns Identification of which producer is associated with this commodity (if multiple producers are used in a single shipment).
     *
     * @return string
     */
    public function getProducerId()
    {
        return $this->ProducerId;
    }
    
    /**
     * Set NetCostMethod
     *
     * @param \FedEx\TrackService\SimpleType\NaftaNetCostMethodCode|string $netCostMethod
     * @return NaftaCommodityDetail
     */
    public function setNetCostMethod($netCostMethod)
    {
        $this->__set('NetCostMethod', $netCostMethod);
        $this->NetCostMethod = $netCostMethod;
        return $this;
    }
    
    /**
     * Returns Set NetCostMethod
     *
     * @return \FedEx\TrackService\SimpleType\NaftaNetCostMethodCode|string
     */
    public function getNetCostMethod()
    {
        return $this->NetCostMethod;
    }
    
    /**
     * Date range over which RVC net cost was calculated.
     *
     * @param DateRange $netCostDateRange
     * @return NaftaCommodityDetail
     */
    public function setNetCostDateRange(DateRange $netCostDateRange)
    {
        $this->__set('NetCostDateRange', $netCostDateRange);
        $this->NetCostDateRange = $netCostDateRange;
        return $this;
    }
    
    /**
     * Returns Date range over which RVC net cost was calculated.
     *
     * @return DateRange
     */
    public function getNetCostDateRange()
    {
        return $this->NetCostDateRange;
    }
    

    
}