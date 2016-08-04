<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Describes specific information about the email label shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class EMailLabelDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Message' => 'string',
'Recipients' => 'EMailRecipient',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'EMailLabelDetail';

        
    /**
     * @var string
     */
    public $Message;

        
    /**
     * @var EMailRecipient[]
     */
    public $Recipients = array();



    /**
     * Content of the email message.
     *
     * @param string $message
     * @return EMailLabelDetail
     */
    public function setMessage($message)
    {
        $this->__set('Message', $message);
        $this->Message = $message;
        return $this;
    }
    
    /**
     * Returns Content of the email message.
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }
    
    /**
     * Set Recipients
     *
     * @param EMailRecipient[] $recipients
     * @return EMailLabelDetail
     */
    public function setRecipients(array $recipients)
    {
        $this->__set('Recipients', $recipients);
        $this->Recipients = $recipients;
        return $this;
    }
    
    /**
     * Returns Set Recipients
     *
     * @return EMailRecipient[]
     */
    public function getRecipients()
    {
        return $this->Recipients;
    }
    

    
}