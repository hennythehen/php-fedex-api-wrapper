<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * UploadDocumentsRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class UploadDocumentsRequest
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'WebAuthenticationDetail' => 'WebAuthenticationDetail',
'ClientDetail' => 'ClientDetail',
'TransactionDetail' => 'TransactionDetail',
'Version' => 'VersionId',
'OriginCountryCode' => 'string',
'DestinationCountryCode' => 'string',
'Usage' => 'DocumentUsageType',
'Documents' => 'UploadDocumentDetail',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'UploadDocumentsRequest';

        
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
     * @var string
     */
    public $OriginCountryCode;

        
    /**
     * @var string
     */
    public $DestinationCountryCode;

        
    /**
     * @var \FedEx\UploadDocumentService\SimpleType\DocumentUsageType|string
     */
    public $Usage;

        
    /**
     * @var UploadDocumentDetail[]
     */
    public $Documents = array();



    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $webAuthenticationDetail
     * @return UploadDocumentsRequest
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
     * @return UploadDocumentsRequest
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
     * Descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $transactionDetail
     * @return UploadDocumentsRequest
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->__set('TransactionDetail', $transactionDetail);
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Returns Descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @return TransactionDetail
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $version
     * @return UploadDocumentsRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->__set('Version', $version);
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Returns Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @return VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    
    /**
     * Set OriginCountryCode
     *
     * @param string $originCountryCode
     * @return UploadDocumentsRequest
     */
    public function setOriginCountryCode($originCountryCode)
    {
        $this->__set('OriginCountryCode', $originCountryCode);
        $this->OriginCountryCode = $originCountryCode;
        return $this;
    }
    
    /**
     * Returns Set OriginCountryCode
     *
     * @return string
     */
    public function getOriginCountryCode()
    {
        return $this->OriginCountryCode;
    }
    
    /**
     * Set DestinationCountryCode
     *
     * @param string $destinationCountryCode
     * @return UploadDocumentsRequest
     */
    public function setDestinationCountryCode($destinationCountryCode)
    {
        $this->__set('DestinationCountryCode', $destinationCountryCode);
        $this->DestinationCountryCode = $destinationCountryCode;
        return $this;
    }
    
    /**
     * Returns Set DestinationCountryCode
     *
     * @return string
     */
    public function getDestinationCountryCode()
    {
        return $this->DestinationCountryCode;
    }
    
    /**
     * Specifies the intent or the usage of the documents being uploaded. This provides details about how the documents are relevant to the current transaction.
     *
     * @param \FedEx\UploadDocumentService\SimpleType\DocumentUsageType|string $usage
     * @return UploadDocumentsRequest
     */
    public function setUsage($usage)
    {
        $this->__set('Usage', $usage);
        $this->Usage = $usage;
        return $this;
    }
    
    /**
     * Returns Specifies the intent or the usage of the documents being uploaded. This provides details about how the documents are relevant to the current transaction.
     *
     * @return \FedEx\UploadDocumentService\SimpleType\DocumentUsageType|string
     */
    public function getUsage()
    {
        return $this->Usage;
    }
    
    /**
     * Set Documents
     *
     * @param UploadDocumentDetail[] $documents
     * @return UploadDocumentsRequest
     */
    public function setDocuments(array $documents)
    {
        $this->__set('Documents', $documents);
        $this->Documents = $documents;
        return $this;
    }
    
    /**
     * Returns Set Documents
     *
     * @return UploadDocumentDetail[]
     */
    public function getDocuments()
    {
        return $this->Documents;
    }
    

    
}