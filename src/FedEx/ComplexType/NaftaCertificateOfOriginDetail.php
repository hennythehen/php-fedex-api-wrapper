<?php
namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Data required to produce a Certificate of Origin document. Remaining content (business data) to be defined once requirements have been completed.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class NaftaCertificateOfOriginDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Format' => 'ShippingDocumentFormat',
'BlanketPeriod' => 'DateRange',
'ImporterSpecification' => 'NaftaImporterSpecificationType',
'SignatureContact' => 'Contact',
'ProducerSpecification' => 'NaftaProducerSpecificationType',
'Producers' => 'NaftaProducer',
'CustomerImageUsages' => 'CustomerImageUsage',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'NaftaCertificateOfOriginDetail';

        
    /**
     * @var ShippingDocumentFormat
     */
    public $Format;

        
    /**
     * @var DateRange
     */
    public $BlanketPeriod;

        
    /**
     * @var \FedEx\SimpleType\NaftaImporterSpecificationType|string
     */
    public $ImporterSpecification;

        
    /**
     * @var Contact
     */
    public $SignatureContact;

        
    /**
     * @var \FedEx\SimpleType\NaftaProducerSpecificationType|string
     */
    public $ProducerSpecification;

        
    /**
     * @var NaftaProducer[]
     */
    public $Producers = array();

        
    /**
     * @var CustomerImageUsage[]
     */
    public $CustomerImageUsages = array();



    /**
     * Set Format
     *
     * @param ShippingDocumentFormat $format
     * @return NaftaCertificateOfOriginDetail
     */
    public function setFormat(ShippingDocumentFormat $format)
    {
        $this->__set('Format', $format);
        $this->Format = $format;
        return $this;
    }
    
    /**
     * Returns Set Format
     *
     * @return ShippingDocumentFormat
     */
    public function getFormat()
    {
        return $this->Format;
    }
    
    /**
     * Set BlanketPeriod
     *
     * @param DateRange $blanketPeriod
     * @return NaftaCertificateOfOriginDetail
     */
    public function setBlanketPeriod(DateRange $blanketPeriod)
    {
        $this->__set('BlanketPeriod', $blanketPeriod);
        $this->BlanketPeriod = $blanketPeriod;
        return $this;
    }
    
    /**
     * Returns Set BlanketPeriod
     *
     * @return DateRange
     */
    public function getBlanketPeriod()
    {
        return $this->BlanketPeriod;
    }
    
    /**
     * Indicates which Party (if any) from the shipment is to be used as the source of importer data on the NAFTA COO form.
     *
     * @param \FedEx\SimpleType\NaftaImporterSpecificationType|string $importerSpecification
     * @return NaftaCertificateOfOriginDetail
     */
    public function setImporterSpecification($importerSpecification)
    {
        $this->__set('ImporterSpecification', $importerSpecification);
        $this->ImporterSpecification = $importerSpecification;
        return $this;
    }
    
    /**
     * Returns Indicates which Party (if any) from the shipment is to be used as the source of importer data on the NAFTA COO form.
     *
     * @return \FedEx\SimpleType\NaftaImporterSpecificationType|string
     */
    public function getImporterSpecification()
    {
        return $this->ImporterSpecification;
    }
    
    /**
     * Contact information for "Authorized Signature" area of form.
     *
     * @param Contact $signatureContact
     * @return NaftaCertificateOfOriginDetail
     */
    public function setSignatureContact(Contact $signatureContact)
    {
        $this->__set('SignatureContact', $signatureContact);
        $this->SignatureContact = $signatureContact;
        return $this;
    }
    
    /**
     * Returns Contact information for "Authorized Signature" area of form.
     *
     * @return Contact
     */
    public function getSignatureContact()
    {
        return $this->SignatureContact;
    }
    
    /**
     * Set ProducerSpecification
     *
     * @param \FedEx\SimpleType\NaftaProducerSpecificationType|string $producerSpecification
     * @return NaftaCertificateOfOriginDetail
     */
    public function setProducerSpecification($producerSpecification)
    {
        $this->__set('ProducerSpecification', $producerSpecification);
        $this->ProducerSpecification = $producerSpecification;
        return $this;
    }
    
    /**
     * Returns Set ProducerSpecification
     *
     * @return \FedEx\SimpleType\NaftaProducerSpecificationType|string
     */
    public function getProducerSpecification()
    {
        return $this->ProducerSpecification;
    }
    
    /**
     * Set Producers
     *
     * @param NaftaProducer[] $producers
     * @return NaftaCertificateOfOriginDetail
     */
    public function setProducers(array $producers)
    {
        $this->__set('Producers', $producers);
        $this->Producers = $producers;
        return $this;
    }
    
    /**
     * Returns Set Producers
     *
     * @return NaftaProducer[]
     */
    public function getProducers()
    {
        return $this->Producers;
    }
    
    /**
     * Set CustomerImageUsages
     *
     * @param CustomerImageUsage[] $customerImageUsages
     * @return NaftaCertificateOfOriginDetail
     */
    public function setCustomerImageUsages(array $customerImageUsages)
    {
        $this->__set('CustomerImageUsages', $customerImageUsages);
        $this->CustomerImageUsages = $customerImageUsages;
        return $this;
    }
    
    /**
     * Returns Set CustomerImageUsages
     *
     * @return CustomerImageUsage[]
     */
    public function getCustomerImageUsages()
    {
        return $this->CustomerImageUsages;
    }
    

    
}