<?php
namespace FedEx\LocationsService;
    
use FedEx\AbstractRequest;

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 */
class LocationsServiceRequest extends AbstractRequest
{
    /**
     * WSDL Path
     *
     * @var string
     */
    protected $_wsdlPath;

    /**
     * SoapClient object
     *
     * @var SoapClient
     */
    protected $_soapClient;

    /**
     * Constructor
     *
     * @param string $wsdlPath
     */
    public function __construct($wsdlPath = null)
    {
        if (null != $wsdlPath) {
            $this->_wsdlPath = $wsdlPath;
        } else {
            $this->_wsdlPath = realpath(dirname(__FILE__) . '/../_wsdl/LocationsService_v3.wsdl');
        }

        $this->_soapClient = new \SoapClient($this->_wsdlPath, array('trace' => true));
        
        $this->subpackageNamespace = __NAMESPACE__;
    }

    /**
     * Returns the SoapClient instance
     *
     * @return \SoapClient
     */
    public function getSoapClient()
    {
        return $this->_soapClient;
    }

    /**
     * Sends the SearchLocationsRequest and returns the response
     *
     * @param ComplexType\SearchLocationsRequest $searchLocationsRequest 
     * @return stdClass
     */
    public function getSearchLocationsReply(ComplexType\SearchLocationsRequest $searchLocationsRequest)
    {
        return $this->_soapClient->searchLocations($searchLocationsRequest->toArray());
    }
   

}

   