<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * FedEx Signature Proof Of Delivery Letter request.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class SignatureProofOfDeliveryLetterRequest
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'WebAuthenticationDetail' => 'WebAuthenticationDetail',
'ClientDetail' => 'ClientDetail',
'TransactionDetail' => 'TransactionDetail',
'Version' => 'VersionId',
'QualifiedTrackingNumber' => 'QualifiedTrackingNumber',
'AdditionalComments' => 'string',
'LetterFormat' => 'SignatureProofOfDeliveryImageType',
'Consignee' => 'ContactAndAddress',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'SignatureProofOfDeliveryLetterRequest';

        
    /**
     * @var WebAuthenticationDetail
     */
    public $WebAuthenticationDetail;

        
    /**
     * @var ClientDetail
     */
    public $ClientDetail;

        
    /**
     * @var TransactionDetail
     */
    public $TransactionDetail;

        
    /**
     * @var VersionId
     */
    public $Version;

        
    /**
     * @var QualifiedTrackingNumber
     */
    public $QualifiedTrackingNumber;

        
    /**
     * @var string
     */
    public $AdditionalComments;

        
    /**
     * @var \FedEx\TrackService\SimpleType\SignatureProofOfDeliveryImageType|string
     */
    public $LetterFormat;

        
    /**
     * @var ContactAndAddress
     */
    public $Consignee;



    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $webAuthenticationDetail
     * @return SignatureProofOfDeliveryLetterRequest
     */
    public function setWebAuthenticationDetail(WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->__set('WebAuthenticationDetail', $webAuthenticationDetail);
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * Returns Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @return WebAuthenticationDetail
     */
    public function getWebAuthenticationDetail()
    {
        return $this->WebAuthenticationDetail;
    }
    
    /**
     * Descriptive data identifying the client submitting the transaction.
     *
     * @param ClientDetail $clientDetail
     * @return SignatureProofOfDeliveryLetterRequest
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->__set('ClientDetail', $clientDetail);
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * Returns Descriptive data identifying the client submitting the transaction.
     *
     * @return ClientDetail
     */
    public function getClientDetail()
    {
        return $this->ClientDetail;
    }
    
    /**
     * Contains a free form field that is echoed back in the reply to match requests with replies and data that governs the data payload language/translations.
     *
     * @param TransactionDetail $transactionDetail
     * @return SignatureProofOfDeliveryLetterRequest
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->__set('TransactionDetail', $transactionDetail);
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Returns Contains a free form field that is echoed back in the reply to match requests with replies and data that governs the data payload language/translations.
     *
     * @return TransactionDetail
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    
    /**
     * The version of the request being used.
     *
     * @param VersionId $version
     * @return SignatureProofOfDeliveryLetterRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->__set('Version', $version);
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Returns The version of the request being used.
     *
     * @return VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    
    /**
     * Tracking number and additional shipment data used to identify a unique shipment for proof of delivery.
     *
     * @param QualifiedTrackingNumber $qualifiedTrackingNumber
     * @return SignatureProofOfDeliveryLetterRequest
     */
    public function setQualifiedTrackingNumber(QualifiedTrackingNumber $qualifiedTrackingNumber)
    {
        $this->__set('QualifiedTrackingNumber', $qualifiedTrackingNumber);
        $this->QualifiedTrackingNumber = $qualifiedTrackingNumber;
        return $this;
    }
    
    /**
     * Returns Tracking number and additional shipment data used to identify a unique shipment for proof of delivery.
     *
     * @return QualifiedTrackingNumber
     */
    public function getQualifiedTrackingNumber()
    {
        return $this->QualifiedTrackingNumber;
    }
    
    /**
     * Additional customer-supplied text to be added to the body of the letter.
     *
     * @param string $additionalComments
     * @return SignatureProofOfDeliveryLetterRequest
     */
    public function setAdditionalComments($additionalComments)
    {
        $this->__set('AdditionalComments', $additionalComments);
        $this->AdditionalComments = $additionalComments;
        return $this;
    }
    
    /**
     * Returns Additional customer-supplied text to be added to the body of the letter.
     *
     * @return string
     */
    public function getAdditionalComments()
    {
        return $this->AdditionalComments;
    }
    
    /**
     * Identifies the set of SPOD image types.
     *
     * @param \FedEx\TrackService\SimpleType\SignatureProofOfDeliveryImageType|string $letterFormat
     * @return SignatureProofOfDeliveryLetterRequest
     */
    public function setLetterFormat($letterFormat)
    {
        $this->__set('LetterFormat', $letterFormat);
        $this->LetterFormat = $letterFormat;
        return $this;
    }
    
    /**
     * Returns Identifies the set of SPOD image types.
     *
     * @return \FedEx\TrackService\SimpleType\SignatureProofOfDeliveryImageType|string
     */
    public function getLetterFormat()
    {
        return $this->LetterFormat;
    }
    
    /**
     * If provided this information will be print on the letter.
     *
     * @param ContactAndAddress $consignee
     * @return SignatureProofOfDeliveryLetterRequest
     */
    public function setConsignee(ContactAndAddress $consignee)
    {
        $this->__set('Consignee', $consignee);
        $this->Consignee = $consignee;
        return $this;
    }
    
    /**
     * Returns If provided this information will be print on the letter.
     *
     * @return ContactAndAddress
     */
    public function getConsignee()
    {
        return $this->Consignee;
    }
    

    
}