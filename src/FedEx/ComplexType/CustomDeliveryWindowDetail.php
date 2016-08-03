<?php
namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CustomDeliveryWindowDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class CustomDeliveryWindowDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Type' => 'CustomDeliveryWindowType',
'RequestTime' => 'time',
'RequestRange' => 'DateRange',
'RequestDate' => 'date',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CustomDeliveryWindowDetail';

        
    /**
     * @var \FedEx\SimpleType\CustomDeliveryWindowType|string
     */
    public $Type;

        
    /**
     * @var time
     */
    public $RequestTime;

        
    /**
     * @var DateRange
     */
    public $RequestRange;

        
    /**
     * @var date
     */
    public $RequestDate;



    /**
     * Indicates the type of custom delivery being requested.
     *
     * @param \FedEx\SimpleType\CustomDeliveryWindowType|string $type
     * @return CustomDeliveryWindowDetail
     */
    public function setType($type)
    {
        $this->__set('Type', $type);
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Returns Indicates the type of custom delivery being requested.
     *
     * @return \FedEx\SimpleType\CustomDeliveryWindowType|string
     */
    public function getType()
    {
        return $this->Type;
    }
    
    /**
     * Time by which delivery is requested.
     *
     * @param time $requestTime
     * @return CustomDeliveryWindowDetail
     */
    public function setRequestTime(time $requestTime)
    {
        $this->__set('RequestTime', $requestTime);
        $this->RequestTime = $requestTime;
        return $this;
    }
    
    /**
     * Returns Time by which delivery is requested.
     *
     * @return time
     */
    public function getRequestTime()
    {
        return $this->RequestTime;
    }
    
    /**
     * Range of dates for custom delivery request; only used if type is BETWEEN.
     *
     * @param DateRange $requestRange
     * @return CustomDeliveryWindowDetail
     */
    public function setRequestRange(DateRange $requestRange)
    {
        $this->__set('RequestRange', $requestRange);
        $this->RequestRange = $requestRange;
        return $this;
    }
    
    /**
     * Returns Range of dates for custom delivery request; only used if type is BETWEEN.
     *
     * @return DateRange
     */
    public function getRequestRange()
    {
        return $this->RequestRange;
    }
    
    /**
     * Date for custom delivery request; only used for types of ON, BETWEEN, or AFTER.
     *
     * @param date $requestDate
     * @return CustomDeliveryWindowDetail
     */
    public function setRequestDate($requestDate)
    {
        $this->__set('RequestDate', $requestDate);
        $this->RequestDate = $requestDate;
        return $this;
    }
    
    /**
     * Returns Date for custom delivery request; only used for types of ON, BETWEEN, or AFTER.
     *
     * @return date
     */
    public function getRequestDate()
    {
        return $this->RequestDate;
    }
    

    
}