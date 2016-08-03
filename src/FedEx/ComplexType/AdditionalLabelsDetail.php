<?php
namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies additional labels to be produced. All required labels for shipments will be produced without the need to request additional labels. These are only available as thermal labels.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class AdditionalLabelsDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Type' => 'AdditionalLabelsType',
'Count' => 'nonNegativeInteger',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'AdditionalLabelsDetail';

        
    /**
     * @var \FedEx\SimpleType\AdditionalLabelsType|string
     */
    public $Type;

        
    /**
     * @var nonNegativeInteger
     */
    public $Count;



    /**
     * The type of additional labels to return.
     *
     * @param \FedEx\SimpleType\AdditionalLabelsType|string $type
     * @return AdditionalLabelsDetail
     */
    public function setType($type)
    {
        $this->__set('Type', $type);
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Returns The type of additional labels to return.
     *
     * @return \FedEx\SimpleType\AdditionalLabelsType|string
     */
    public function getType()
    {
        return $this->Type;
    }
    
    /**
     * The number of this type label to return
     *
     * @param nonNegativeInteger $count
     * @return AdditionalLabelsDetail
     */
    public function setCount($count)
    {
        $this->__set('Count', $count);
        $this->Count = $count;
        return $this;
    }
    
    /**
     * Returns The number of this type label to return
     *
     * @return nonNegativeInteger
     */
    public function getCount()
    {
        return $this->Count;
    }
    

    
}