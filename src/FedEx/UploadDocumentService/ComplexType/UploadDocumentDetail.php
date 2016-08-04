<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * UploadDocumentDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class UploadDocumentDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'LineNumber' => 'nonNegativeInteger',
'CustomerReference' => 'string',
'DocumentType' => 'UploadDocumentType',
'FileName' => 'string',
'DocumentContent' => 'base64Binary',
'ExpirationDate' => 'date',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'UploadDocumentDetail';

        
    /**
     * @var nonNegativeInteger
     */
    public $LineNumber;

        
    /**
     * @var string
     */
    public $CustomerReference;

        
    /**
     * @var \FedEx\UploadDocumentService\SimpleType\UploadDocumentType|string
     */
    public $DocumentType;

        
    /**
     * @var string
     */
    public $FileName;

        
    /**
     * @var base64Binary
     */
    public $DocumentContent;

        
    /**
     * @var date
     */
    public $ExpirationDate;



    /**
     * Set LineNumber
     *
     * @param nonNegativeInteger $lineNumber
     * @return UploadDocumentDetail
     */
    public function setLineNumber($lineNumber)
    {
        $this->__set('LineNumber', $lineNumber);
        $this->LineNumber = $lineNumber;
        return $this;
    }
    
    /**
     * Returns Set LineNumber
     *
     * @return nonNegativeInteger
     */
    public function getLineNumber()
    {
        return $this->LineNumber;
    }
    
    /**
     * Set CustomerReference
     *
     * @param string $customerReference
     * @return UploadDocumentDetail
     */
    public function setCustomerReference($customerReference)
    {
        $this->__set('CustomerReference', $customerReference);
        $this->CustomerReference = $customerReference;
        return $this;
    }
    
    /**
     * Returns Set CustomerReference
     *
     * @return string
     */
    public function getCustomerReference()
    {
        return $this->CustomerReference;
    }
    
    /**
     * Set DocumentType
     *
     * @param \FedEx\UploadDocumentService\SimpleType\UploadDocumentType|string $documentType
     * @return UploadDocumentDetail
     */
    public function setDocumentType($documentType)
    {
        $this->__set('DocumentType', $documentType);
        $this->DocumentType = $documentType;
        return $this;
    }
    
    /**
     * Returns Set DocumentType
     *
     * @return \FedEx\UploadDocumentService\SimpleType\UploadDocumentType|string
     */
    public function getDocumentType()
    {
        return $this->DocumentType;
    }
    
    /**
     * Set FileName
     *
     * @param string $fileName
     * @return UploadDocumentDetail
     */
    public function setFileName($fileName)
    {
        $this->__set('FileName', $fileName);
        $this->FileName = $fileName;
        return $this;
    }
    
    /**
     * Returns Set FileName
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->FileName;
    }
    
    /**
     * Set DocumentContent
     *
     * @param base64Binary $documentContent
     * @return UploadDocumentDetail
     */
    public function setDocumentContent($documentContent)
    {
        $this->__set('DocumentContent', $documentContent);
        $this->DocumentContent = $documentContent;
        return $this;
    }
    
    /**
     * Returns Set DocumentContent
     *
     * @return base64Binary
     */
    public function getDocumentContent()
    {
        return $this->DocumentContent;
    }
    
    /**
     * Specifies the date until which the document is available
     *
     * @param date $expirationDate
     * @return UploadDocumentDetail
     */
    public function setExpirationDate($expirationDate)
    {
        $this->__set('ExpirationDate', $expirationDate);
        $this->ExpirationDate = $expirationDate;
        return $this;
    }
    
    /**
     * Returns Specifies the date until which the document is available
     *
     * @return date
     */
    public function getExpirationDate()
    {
        return $this->ExpirationDate;
    }
    

    
}