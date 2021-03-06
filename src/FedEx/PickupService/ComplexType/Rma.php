<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * June 2011 ITG 121203 IR-RMA number has been removed from this structure and added as a new customer reference type. The structure remains because of the reason field below.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class Rma
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Reason' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Rma';

        
    /**
     * @var string
     */
    public $Reason;



    /**
     * Set Reason
     *
     * @param string $reason
     * @return Rma
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
    

    
}