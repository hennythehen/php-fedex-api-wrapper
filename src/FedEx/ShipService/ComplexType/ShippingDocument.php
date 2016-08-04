<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * All package-level shipping documents (other than labels and barcodes).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ShippingDocument
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Type' => 'ReturnedShippingDocumentType',
'Localizations' => 'Localization',
'Grouping' => 'ShippingDocumentGroupingType',
'ShippingDocumentDisposition' => 'ShippingDocumentDispositionType',
'AccessReference' => 'string',
'ImageType' => 'ShippingDocumentImageType',
'Resolution' => 'nonNegativeInteger',
'CopiesToPrint' => 'nonNegativeInteger',
'Parts' => 'ShippingDocumentPart',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ShippingDocument';

        
    /**
     * @var \FedEx\ShipService\SimpleType\ReturnedShippingDocumentType|string
     */
    public $Type;

        
    /**
     * @var Localization[]
     */
    public $Localizations = array();

        
    /**
     * @var \FedEx\ShipService\SimpleType\ShippingDocumentGroupingType|string
     */
    public $Grouping;

        
    /**
     * @var \FedEx\ShipService\SimpleType\ShippingDocumentDispositionType|string
     */
    public $ShippingDocumentDisposition;

        
    /**
     * @var string
     */
    public $AccessReference;

        
    /**
     * @var \FedEx\ShipService\SimpleType\ShippingDocumentImageType|string
     */
    public $ImageType;

        
    /**
     * @var nonNegativeInteger
     */
    public $Resolution;

        
    /**
     * @var nonNegativeInteger
     */
    public $CopiesToPrint;

        
    /**
     * @var ShippingDocumentPart[]
     */
    public $Parts = array();



    /**
     * Shipping Document Type
     *
     * @param \FedEx\ShipService\SimpleType\ReturnedShippingDocumentType|string $type
     * @return ShippingDocument
     */
    public function setType($type)
    {
        $this->__set('Type', $type);
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Returns Shipping Document Type
     *
     * @return \FedEx\ShipService\SimpleType\ReturnedShippingDocumentType|string
     */
    public function getType()
    {
        return $this->Type;
    }
    
    /**
     * The localizations are populated if multiple language versions of a shipping document are returned.
     *
     * @param Localization[] $localizations
     * @return ShippingDocument
     */
    public function setLocalizations(array $localizations)
    {
        $this->__set('Localizations', $localizations);
        $this->Localizations = $localizations;
        return $this;
    }
    
    /**
     * Returns The localizations are populated if multiple language versions of a shipping document are returned.
     *
     * @return Localization[]
     */
    public function getLocalizations()
    {
        return $this->Localizations;
    }
    
    /**
     * Specifies how this document image/file is organized.
     *
     * @param \FedEx\ShipService\SimpleType\ShippingDocumentGroupingType|string $grouping
     * @return ShippingDocument
     */
    public function setGrouping($grouping)
    {
        $this->__set('Grouping', $grouping);
        $this->Grouping = $grouping;
        return $this;
    }
    
    /**
     * Returns Specifies how this document image/file is organized.
     *
     * @return \FedEx\ShipService\SimpleType\ShippingDocumentGroupingType|string
     */
    public function getGrouping()
    {
        return $this->Grouping;
    }
    
    /**
     * Set ShippingDocumentDisposition
     *
     * @param \FedEx\ShipService\SimpleType\ShippingDocumentDispositionType|string $shippingDocumentDisposition
     * @return ShippingDocument
     */
    public function setShippingDocumentDisposition($shippingDocumentDisposition)
    {
        $this->__set('ShippingDocumentDisposition', $shippingDocumentDisposition);
        $this->ShippingDocumentDisposition = $shippingDocumentDisposition;
        return $this;
    }
    
    /**
     * Returns Set ShippingDocumentDisposition
     *
     * @return \FedEx\ShipService\SimpleType\ShippingDocumentDispositionType|string
     */
    public function getShippingDocumentDisposition()
    {
        return $this->ShippingDocumentDisposition;
    }
    
    /**
     * The name under which a STORED, DEFERRED or EMAILED document is written.
     *
     * @param string $accessReference
     * @return ShippingDocument
     */
    public function setAccessReference($accessReference)
    {
        $this->__set('AccessReference', $accessReference);
        $this->AccessReference = $accessReference;
        return $this;
    }
    
    /**
     * Returns The name under which a STORED, DEFERRED or EMAILED document is written.
     *
     * @return string
     */
    public function getAccessReference()
    {
        return $this->AccessReference;
    }
    
    /**
     * Specifies the image type of this shipping document.
     *
     * @param \FedEx\ShipService\SimpleType\ShippingDocumentImageType|string $imageType
     * @return ShippingDocument
     */
    public function setImageType($imageType)
    {
        $this->__set('ImageType', $imageType);
        $this->ImageType = $imageType;
        return $this;
    }
    
    /**
     * Returns Specifies the image type of this shipping document.
     *
     * @return \FedEx\ShipService\SimpleType\ShippingDocumentImageType|string
     */
    public function getImageType()
    {
        return $this->ImageType;
    }
    
    /**
     * Specifies the image resolution in DPI (dots per inch).
     *
     * @param nonNegativeInteger $resolution
     * @return ShippingDocument
     */
    public function setResolution($resolution)
    {
        $this->__set('Resolution', $resolution);
        $this->Resolution = $resolution;
        return $this;
    }
    
    /**
     * Returns Specifies the image resolution in DPI (dots per inch).
     *
     * @return nonNegativeInteger
     */
    public function getResolution()
    {
        return $this->Resolution;
    }
    
    /**
     * Can be zero for documents whose disposition implies that no content is included.
     *
     * @param nonNegativeInteger $copiesToPrint
     * @return ShippingDocument
     */
    public function setCopiesToPrint($copiesToPrint)
    {
        $this->__set('CopiesToPrint', $copiesToPrint);
        $this->CopiesToPrint = $copiesToPrint;
        return $this;
    }
    
    /**
     * Returns Can be zero for documents whose disposition implies that no content is included.
     *
     * @return nonNegativeInteger
     */
    public function getCopiesToPrint()
    {
        return $this->CopiesToPrint;
    }
    
    /**
     * One or more document parts which make up a single logical document, such as multiple pages of a single form.
     *
     * @param ShippingDocumentPart[] $parts
     * @return ShippingDocument
     */
    public function setParts(array $parts)
    {
        $this->__set('Parts', $parts);
        $this->Parts = $parts;
        return $this;
    }
    
    /**
     * Returns One or more document parts which make up a single logical document, such as multiple pages of a single form.
     *
     * @return ShippingDocumentPart[]
     */
    public function getParts()
    {
        return $this->Parts;
    }
    

    
}