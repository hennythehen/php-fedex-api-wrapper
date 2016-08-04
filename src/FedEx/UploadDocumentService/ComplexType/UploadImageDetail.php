<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * UploadImageDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class UploadImageDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Id' => 'ImageId',
'Image' => 'base64Binary',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'UploadImageDetail';

        
    /**
     * @var \FedEx\UploadDocumentService\SimpleType\ImageId|string
     */
    public $Id;

        
    /**
     * @var base64Binary
     */
    public $Image;



    /**
     * Set Id
     *
     * @param \FedEx\UploadDocumentService\SimpleType\ImageId|string $id
     * @return UploadImageDetail
     */
    public function setId($id)
    {
        $this->__set('Id', $id);
        $this->Id = $id;
        return $this;
    }
    
    /**
     * Returns Set Id
     *
     * @return \FedEx\UploadDocumentService\SimpleType\ImageId|string
     */
    public function getId()
    {
        return $this->Id;
    }
    
    /**
     * Set Image
     *
     * @param base64Binary $image
     * @return UploadImageDetail
     */
    public function setImage($image)
    {
        $this->__set('Image', $image);
        $this->Image = $image;
        return $this;
    }
    
    /**
     * Returns Set Image
     *
     * @return base64Binary
     */
    public function getImage()
    {
        return $this->Image;
    }
    

    
}