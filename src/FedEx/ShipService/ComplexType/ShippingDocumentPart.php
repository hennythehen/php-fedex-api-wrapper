<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * A single part of a shipping document, such as one page of a multiple-page document whose format requires a separate image per page.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ShippingDocumentPart
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'DocumentPartSequenceNumber' => 'positiveInteger',
'Image' => 'base64Binary',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ShippingDocumentPart';

        
    /**
     * @var positiveInteger
     */
    public $DocumentPartSequenceNumber;

        
    /**
     * @var base64Binary
     */
    public $Image;



    /**
     * The one-origin position of this part within a document.
     *
     * @param positiveInteger $documentPartSequenceNumber
     * @return ShippingDocumentPart
     */
    public function setDocumentPartSequenceNumber($documentPartSequenceNumber)
    {
        $this->__set('DocumentPartSequenceNumber', $documentPartSequenceNumber);
        $this->DocumentPartSequenceNumber = $documentPartSequenceNumber;
        return $this;
    }
    
    /**
     * Returns The one-origin position of this part within a document.
     *
     * @return positiveInteger
     */
    public function getDocumentPartSequenceNumber()
    {
        return $this->DocumentPartSequenceNumber;
    }
    
    /**
     * Graphic or printer commands for this image within a document.
     *
     * @param base64Binary $image
     * @return ShippingDocumentPart
     */
    public function setImage($image)
    {
        $this->__set('Image', $image);
        $this->Image = $image;
        return $this;
    }
    
    /**
     * Returns Graphic or printer commands for this image within a document.
     *
     * @return base64Binary
     */
    public function getImage()
    {
        return $this->Image;
    }
    

    
}