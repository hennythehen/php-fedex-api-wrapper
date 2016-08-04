<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the details about the status of the track information for the shipments being tracked.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class TrackStatusDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'CreationTime' => 'dateTime',
'Code' => 'string',
'Description' => 'string',
'Location' => 'Address',
'AncillaryDetails' => 'TrackStatusAncillaryDetail',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'TrackStatusDetail';

        
    /**
     * @var dateTime
     */
    public $CreationTime;

        
    /**
     * @var string
     */
    public $Code;

        
    /**
     * @var string
     */
    public $Description;

        
    /**
     * @var Address
     */
    public $Location;

        
    /**
     * @var TrackStatusAncillaryDetail[]
     */
    public $AncillaryDetails = array();



    /**
     * Set CreationTime
     *
     * @param dateTime $creationTime
     * @return TrackStatusDetail
     */
    public function setCreationTime($creationTime)
    {
        $this->__set('CreationTime', $creationTime);
        $this->CreationTime = $creationTime;
        return $this;
    }
    
    /**
     * Returns Set CreationTime
     *
     * @return dateTime
     */
    public function getCreationTime()
    {
        return $this->CreationTime;
    }
    
    /**
     * Set Code
     *
     * @param string $code
     * @return TrackStatusDetail
     */
    public function setCode($code)
    {
        $this->__set('Code', $code);
        $this->Code = $code;
        return $this;
    }
    
    /**
     * Returns Set Code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }
    
    /**
     * Set Description
     *
     * @param string $description
     * @return TrackStatusDetail
     */
    public function setDescription($description)
    {
        $this->__set('Description', $description);
        $this->Description = $description;
        return $this;
    }
    
    /**
     * Returns Set Description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }
    
    /**
     * Set Location
     *
     * @param Address $location
     * @return TrackStatusDetail
     */
    public function setLocation(Address $location)
    {
        $this->__set('Location', $location);
        $this->Location = $location;
        return $this;
    }
    
    /**
     * Returns Set Location
     *
     * @return Address
     */
    public function getLocation()
    {
        return $this->Location;
    }
    
    /**
     * Set AncillaryDetails
     *
     * @param TrackStatusAncillaryDetail[] $ancillaryDetails
     * @return TrackStatusDetail
     */
    public function setAncillaryDetails(array $ancillaryDetails)
    {
        $this->__set('AncillaryDetails', $ancillaryDetails);
        $this->AncillaryDetails = $ancillaryDetails;
        return $this;
    }
    
    /**
     * Returns Set AncillaryDetails
     *
     * @return TrackStatusAncillaryDetail[]
     */
    public function getAncillaryDetails()
    {
        return $this->AncillaryDetails;
    }
    

    
}