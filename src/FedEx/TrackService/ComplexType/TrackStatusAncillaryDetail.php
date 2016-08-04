<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TrackStatusAncillaryDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class TrackStatusAncillaryDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Reason' => 'string',
'ReasonDescription' => 'string',
'Action' => 'string',
'ActionDescription' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'TrackStatusAncillaryDetail';

        
    /**
     * @var string
     */
    public $Reason;

        
    /**
     * @var string
     */
    public $ReasonDescription;

        
    /**
     * @var string
     */
    public $Action;

        
    /**
     * @var string
     */
    public $ActionDescription;



    /**
     * Set Reason
     *
     * @param string $reason
     * @return TrackStatusAncillaryDetail
     */
    public function setReason($reason)
    {
        $this->__set('Reason', $reason);
        $this->Reason = $reason;
        return $this;
    }
    
    /**
     * Returns Set Reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->Reason;
    }
    
    /**
     * Set ReasonDescription
     *
     * @param string $reasonDescription
     * @return TrackStatusAncillaryDetail
     */
    public function setReasonDescription($reasonDescription)
    {
        $this->__set('ReasonDescription', $reasonDescription);
        $this->ReasonDescription = $reasonDescription;
        return $this;
    }
    
    /**
     * Returns Set ReasonDescription
     *
     * @return string
     */
    public function getReasonDescription()
    {
        return $this->ReasonDescription;
    }
    
    /**
     * Set Action
     *
     * @param string $action
     * @return TrackStatusAncillaryDetail
     */
    public function setAction($action)
    {
        $this->__set('Action', $action);
        $this->Action = $action;
        return $this;
    }
    
    /**
     * Returns Set Action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->Action;
    }
    
    /**
     * Set ActionDescription
     *
     * @param string $actionDescription
     * @return TrackStatusAncillaryDetail
     */
    public function setActionDescription($actionDescription)
    {
        $this->__set('ActionDescription', $actionDescription);
        $this->ActionDescription = $actionDescription;
        return $this;
    }
    
    /**
     * Returns Set ActionDescription
     *
     * @return string
     */
    public function getActionDescription()
    {
        return $this->ActionDescription;
    }
    

    
}