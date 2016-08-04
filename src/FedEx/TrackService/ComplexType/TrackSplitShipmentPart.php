<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Used when a cargo shipment is split across vehicles. This is used to give the status of each part of the shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class TrackSplitShipmentPart
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'PieceCount' => 'positiveInteger',
'Timestamp' => 'dateTime',
'StatusCode' => 'string',
'StatusDescription' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'TrackSplitShipmentPart';

        
    /**
     * @var positiveInteger
     */
    public $PieceCount;

        
    /**
     * @var dateTime
     */
    public $Timestamp;

        
    /**
     * @var string
     */
    public $StatusCode;

        
    /**
     * @var string
     */
    public $StatusDescription;



    /**
     * The number of pieces in this part.
     *
     * @param positiveInteger $pieceCount
     * @return TrackSplitShipmentPart
     */
    public function setPieceCount($pieceCount)
    {
        $this->__set('PieceCount', $pieceCount);
        $this->PieceCount = $pieceCount;
        return $this;
    }
    
    /**
     * Returns The number of pieces in this part.
     *
     * @return positiveInteger
     */
    public function getPieceCount()
    {
        return $this->PieceCount;
    }
    
    /**
     * The date and time this status began.
     *
     * @param dateTime $timestamp
     * @return TrackSplitShipmentPart
     */
    public function setTimestamp($timestamp)
    {
        $this->__set('Timestamp', $timestamp);
        $this->Timestamp = $timestamp;
        return $this;
    }
    
    /**
     * Returns The date and time this status began.
     *
     * @return dateTime
     */
    public function getTimestamp()
    {
        return $this->Timestamp;
    }
    
    /**
     * A code that identifies this type of status.
     *
     * @param string $statusCode
     * @return TrackSplitShipmentPart
     */
    public function setStatusCode($statusCode)
    {
        $this->__set('StatusCode', $statusCode);
        $this->StatusCode = $statusCode;
        return $this;
    }
    
    /**
     * Returns A code that identifies this type of status.
     *
     * @return string
     */
    public function getStatusCode()
    {
        return $this->StatusCode;
    }
    
    /**
     * A human-readable description of this status.
     *
     * @param string $statusDescription
     * @return TrackSplitShipmentPart
     */
    public function setStatusDescription($statusDescription)
    {
        $this->__set('StatusDescription', $statusDescription);
        $this->StatusDescription = $statusDescription;
        return $this;
    }
    
    /**
     * Returns A human-readable description of this status.
     *
     * @return string
     */
    public function getStatusDescription()
    {
        return $this->StatusDescription;
    }
    

    
}