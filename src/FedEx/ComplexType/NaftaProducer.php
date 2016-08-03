<?php
namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * NaftaProducer
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class NaftaProducer
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Id' => 'string',
'Producer' => 'Party',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'NaftaProducer';

        
    /**
     * @var string
     */
    public $Id;

        
    /**
     * @var Party
     */
    public $Producer;



    /**
     * Set Id
     *
     * @param string $id
     * @return NaftaProducer
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
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }
    
    /**
     * Set Producer
     *
     * @param Party $producer
     * @return NaftaProducer
     */
    public function setProducer(Party $producer)
    {
        $this->__set('Producer', $producer);
        $this->Producer = $producer;
        return $this;
    }
    
    /**
     * Returns Set Producer
     *
     * @return Party
     */
    public function getProducer()
    {
        return $this->Producer;
    }
    

    
}