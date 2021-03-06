<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Content Record.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ContentRecord
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'PartNumber' => 'string',
'ItemNumber' => 'string',
'ReceivedQuantity' => 'nonNegativeInteger',
'Description' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ContentRecord';

        
    /**
     * @var string
     */
    public $PartNumber;

        
    /**
     * @var string
     */
    public $ItemNumber;

        
    /**
     * @var nonNegativeInteger
     */
    public $ReceivedQuantity;

        
    /**
     * @var string
     */
    public $Description;



    /**
     * Part Number.
     *
     * @param string $partNumber
     * @return ContentRecord
     */
    public function setPartNumber($partNumber)
    {
        $this->__set('PartNumber', $partNumber);
        $this->PartNumber = $partNumber;
        return $this;
    }
    
    /**
     * Returns Part Number.
     *
     * @return string
     */
    public function getPartNumber()
    {
        return $this->PartNumber;
    }
    
    /**
     * Item Number.
     *
     * @param string $itemNumber
     * @return ContentRecord
     */
    public function setItemNumber($itemNumber)
    {
        $this->__set('ItemNumber', $itemNumber);
        $this->ItemNumber = $itemNumber;
        return $this;
    }
    
    /**
     * Returns Item Number.
     *
     * @return string
     */
    public function getItemNumber()
    {
        return $this->ItemNumber;
    }
    
    /**
     * Received Quantity.
     *
     * @param nonNegativeInteger $receivedQuantity
     * @return ContentRecord
     */
    public function setReceivedQuantity($receivedQuantity)
    {
        $this->__set('ReceivedQuantity', $receivedQuantity);
        $this->ReceivedQuantity = $receivedQuantity;
        return $this;
    }
    
    /**
     * Returns Received Quantity.
     *
     * @return nonNegativeInteger
     */
    public function getReceivedQuantity()
    {
        return $this->ReceivedQuantity;
    }
    
    /**
     * Description.
     *
     * @param string $description
     * @return ContentRecord
     */
    public function setDescription($description)
    {
        $this->__set('Description', $description);
        $this->Description = $description;
        return $this;
    }
    
    /**
     * Returns Description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }
    

    
}