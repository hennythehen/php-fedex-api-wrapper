<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * UploadDocumentReferenceDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class UploadDocumentReferenceDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'LineNumber' => 'nonNegativeInteger',
'CustomerReference' => 'string',
'Description' => 'string',
'DocumentProducer' => 'UploadDocumentProducerType',
'DocumentType' => 'UploadDocumentType',
'DocumentId' => 'string',
'DocumentIdProducer' => 'UploadDocumentIdProducer',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'UploadDocumentReferenceDetail';

        
    /**
     * @var nonNegativeInteger
     */
    public $LineNumber;

        
    /**
     * @var string
     */
    public $CustomerReference;

        
    /**
     * @var string
     */
    public $Description;

        
    /**
     * @var \FedEx\PickupService\SimpleType\UploadDocumentProducerType|string
     */
    public $DocumentProducer;

        
    /**
     * @var \FedEx\PickupService\SimpleType\UploadDocumentType|string
     */
    public $DocumentType;

        
    /**
     * @var string
     */
    public $DocumentId;

        
    /**
     * @var \FedEx\PickupService\SimpleType\UploadDocumentIdProducer|string
     */
    public $DocumentIdProducer;



    /**
     * Set LineNumber
     *
     * @param nonNegativeInteger $lineNumber
     * @return UploadDocumentReferenceDetail
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
     * @return UploadDocumentReferenceDetail
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
     * Description of the uploaded document.
     *
     * @param string $description
     * @return UploadDocumentReferenceDetail
     */
    public function setDescription($description)
    {
        $this->__set('Description', $description);
        $this->Description = $description;
        return $this;
    }
    
    /**
     * Returns Description of the uploaded document.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }
    
    /**
     * Set DocumentProducer
     *
     * @param \FedEx\PickupService\SimpleType\UploadDocumentProducerType|string $documentProducer
     * @return UploadDocumentReferenceDetail
     */
    public function setDocumentProducer($documentProducer)
    {
        $this->__set('DocumentProducer', $documentProducer);
        $this->DocumentProducer = $documentProducer;
        return $this;
    }
    
    /**
     * Returns Set DocumentProducer
     *
     * @return \FedEx\PickupService\SimpleType\UploadDocumentProducerType|string
     */
    public function getDocumentProducer()
    {
        return $this->DocumentProducer;
    }
    
    /**
     * Set DocumentType
     *
     * @param \FedEx\PickupService\SimpleType\UploadDocumentType|string $documentType
     * @return UploadDocumentReferenceDetail
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
     * @return \FedEx\PickupService\SimpleType\UploadDocumentType|string
     */
    public function getDocumentType()
    {
        return $this->DocumentType;
    }
    
    /**
     * Set DocumentId
     *
     * @param string $documentId
     * @return UploadDocumentReferenceDetail
     */
    public function setDocumentId($documentId)
    {
        $this->__set('DocumentId', $documentId);
        $this->DocumentId = $documentId;
        return $this;
    }
    
    /**
     * Returns Set DocumentId
     *
     * @return string
     */
    public function getDocumentId()
    {
        return $this->DocumentId;
    }
    
    /**
     * Set DocumentIdProducer
     *
     * @param \FedEx\PickupService\SimpleType\UploadDocumentIdProducer|string $documentIdProducer
     * @return UploadDocumentReferenceDetail
     */
    public function setDocumentIdProducer($documentIdProducer)
    {
        $this->__set('DocumentIdProducer', $documentIdProducer);
        $this->DocumentIdProducer = $documentIdProducer;
        return $this;
    }
    
    /**
     * Returns Set DocumentIdProducer
     *
     * @return \FedEx\PickupService\SimpleType\UploadDocumentIdProducer|string
     */
    public function getDocumentIdProducer()
    {
        return $this->DocumentIdProducer;
    }
    

    
}