<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * SpecialInstructionStatusDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class SpecialInstructionStatusDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Status' => 'SpecialInstructionsStatusCode',
'StatusCreateTime' => 'dateTime',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'SpecialInstructionStatusDetail';

        
    /**
     * @var \FedEx\TrackService\SimpleType\SpecialInstructionsStatusCode|string
     */
    public $Status;

        
    /**
     * @var dateTime
     */
    public $StatusCreateTime;



    /**
     * Specifies the status of the track special instructions requested.
     *
     * @param \FedEx\TrackService\SimpleType\SpecialInstructionsStatusCode|string $status
     * @return SpecialInstructionStatusDetail
     */
    public function setStatus($status)
    {
        $this->__set('Status', $status);
        $this->Status = $status;
        return $this;
    }
    
    /**
     * Returns Specifies the status of the track special instructions requested.
     *
     * @return \FedEx\TrackService\SimpleType\SpecialInstructionsStatusCode|string
     */
    public function getStatus()
    {
        return $this->Status;
    }
    
    /**
     * Time when the status was changed.
     *
     * @param dateTime $statusCreateTime
     * @return SpecialInstructionStatusDetail
     */
    public function setStatusCreateTime($statusCreateTime)
    {
        $this->__set('StatusCreateTime', $statusCreateTime);
        $this->StatusCreateTime = $statusCreateTime;
        return $this;
    }
    
    /**
     * Returns Time when the status was changed.
     *
     * @return dateTime
     */
    public function getStatusCreateTime()
    {
        return $this->StatusCreateTime;
    }
    

    
}