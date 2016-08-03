<?php
namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies how to e-mail shipping documents.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class ShippingDocumentEMailDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'EMailRecipients' => 'ShippingDocumentEMailRecipient',
'Grouping' => 'ShippingDocumentEMailGroupingType',
'Localization' => 'Localization',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ShippingDocumentEMailDetail';

        
    /**
     * @var ShippingDocumentEMailRecipient[]
     */
    public $EMailRecipients = array();

        
    /**
     * @var \FedEx\SimpleType\ShippingDocumentEMailGroupingType|string
     */
    public $Grouping;

        
    /**
     * @var Localization
     */
    public $Localization;



    /**
     * Provides the roles and email addresses for e-mail recipients.
     *
     * @param ShippingDocumentEMailRecipient[] $eMailRecipients
     * @return ShippingDocumentEMailDetail
     */
    public function setEMailRecipients(array $eMailRecipients)
    {
        $this->__set('EMailRecipients', $eMailRecipients);
        $this->EMailRecipients = $eMailRecipients;
        return $this;
    }
    
    /**
     * Returns Provides the roles and email addresses for e-mail recipients.
     *
     * @return ShippingDocumentEMailRecipient[]
     */
    public function getEMailRecipients()
    {
        return $this->EMailRecipients;
    }
    
    /**
     * Identifies the convention by which documents are to be grouped as e-mail attachments.
     *
     * @param \FedEx\SimpleType\ShippingDocumentEMailGroupingType|string $grouping
     * @return ShippingDocumentEMailDetail
     */
    public function setGrouping($grouping)
    {
        $this->__set('Grouping', $grouping);
        $this->Grouping = $grouping;
        return $this;
    }
    
    /**
     * Returns Identifies the convention by which documents are to be grouped as e-mail attachments.
     *
     * @return \FedEx\SimpleType\ShippingDocumentEMailGroupingType|string
     */
    public function getGrouping()
    {
        return $this->Grouping;
    }
    
    /**
     * Specifies the language in which the email containing the document is requested to be composed.
     *
     * @param Localization $localization
     * @return ShippingDocumentEMailDetail
     */
    public function setLocalization(Localization $localization)
    {
        $this->__set('Localization', $localization);
        $this->Localization = $localization;
        return $this;
    }
    
    /**
     * Returns Specifies the language in which the email containing the document is requested to be composed.
     *
     * @return Localization
     */
    public function getLocalization()
    {
        return $this->Localization;
    }
    

    
}