<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * SearchLocationsReply
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 */
class SearchLocationsReply
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'HighestSeverity' => 'NotificationSeverityType',
'Notifications' => 'Notification',
'TransactionDetail' => 'TransactionDetail',
'Version' => 'VersionId',
'TotalResultsAvailable' => 'nonNegativeInteger',
'ResultsReturned' => 'nonNegativeInteger',
'FormattedAddress' => 'Address',
'AddressToLocationRelationships' => 'AddressToLocationRelationshipDetail',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'SearchLocationsReply';

        
    /**
     * @var \FedEx\LocationsService\SimpleType\NotificationSeverityType|string
     */
    public $HighestSeverity;

        
    /**
     * @var Notification[]
     */
    public $Notifications = array();

        
    /**
     * @var TransactionDetail
     */
    public $TransactionDetail;

        
    /**
     * @var VersionId
     */
    public $Version;

        
    /**
     * @var nonNegativeInteger
     */
    public $TotalResultsAvailable;

        
    /**
     * @var nonNegativeInteger
     */
    public $ResultsReturned;

        
    /**
     * @var Address
     */
    public $FormattedAddress;

        
    /**
     * @var AddressToLocationRelationshipDetail[]
     */
    public $AddressToLocationRelationships = array();



    /**
     * Set HighestSeverity
     *
     * @param \FedEx\LocationsService\SimpleType\NotificationSeverityType|string $highestSeverity
     * @return SearchLocationsReply
     */
    public function setHighestSeverity($highestSeverity)
    {
        $this->__set('HighestSeverity', $highestSeverity);
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * Returns Set HighestSeverity
     *
     * @return \FedEx\LocationsService\SimpleType\NotificationSeverityType|string
     */
    public function getHighestSeverity()
    {
        return $this->HighestSeverity;
    }
    
    /**
     * Set Notifications
     *
     * @param Notification[] $notifications
     * @return SearchLocationsReply
     */
    public function setNotifications(array $notifications)
    {
        $this->__set('Notifications', $notifications);
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * Returns Set Notifications
     *
     * @return Notification[]
     */
    public function getNotifications()
    {
        return $this->Notifications;
    }
    
    /**
     * Set TransactionDetail
     *
     * @param TransactionDetail $transactionDetail
     * @return SearchLocationsReply
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->__set('TransactionDetail', $transactionDetail);
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Returns Set TransactionDetail
     *
     * @return TransactionDetail
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    
    /**
     * Set Version
     *
     * @param VersionId $version
     * @return SearchLocationsReply
     */
    public function setVersion(VersionId $version)
    {
        $this->__set('Version', $version);
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Returns Set Version
     *
     * @return VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    
    /**
     * Specifies total number of location results that are available.
     *
     * @param nonNegativeInteger $totalResultsAvailable
     * @return SearchLocationsReply
     */
    public function setTotalResultsAvailable($totalResultsAvailable)
    {
        $this->__set('TotalResultsAvailable', $totalResultsAvailable);
        $this->TotalResultsAvailable = $totalResultsAvailable;
        return $this;
    }
    
    /**
     * Returns Specifies total number of location results that are available.
     *
     * @return nonNegativeInteger
     */
    public function getTotalResultsAvailable()
    {
        return $this->TotalResultsAvailable;
    }
    
    /**
     * Specifies the number of location results returned in this reply.
     *
     * @param nonNegativeInteger $resultsReturned
     * @return SearchLocationsReply
     */
    public function setResultsReturned($resultsReturned)
    {
        $this->__set('ResultsReturned', $resultsReturned);
        $this->ResultsReturned = $resultsReturned;
        return $this;
    }
    
    /**
     * Returns Specifies the number of location results returned in this reply.
     *
     * @return nonNegativeInteger
     */
    public function getResultsReturned()
    {
        return $this->ResultsReturned;
    }
    
    /**
     * Specifies the address formatted to have correct postal code per USPS standards.
     *
     * @param Address $formattedAddress
     * @return SearchLocationsReply
     */
    public function setFormattedAddress(Address $formattedAddress)
    {
        $this->__set('FormattedAddress', $formattedAddress);
        $this->FormattedAddress = $formattedAddress;
        return $this;
    }
    
    /**
     * Returns Specifies the address formatted to have correct postal code per USPS standards.
     *
     * @return Address
     */
    public function getFormattedAddress()
    {
        return $this->FormattedAddress;
    }
    
    /**
     * The details about the relationship between the address requested and the locations returned.
     *
     * @param AddressToLocationRelationshipDetail[] $addressToLocationRelationships
     * @return SearchLocationsReply
     */
    public function setAddressToLocationRelationships(array $addressToLocationRelationships)
    {
        $this->__set('AddressToLocationRelationships', $addressToLocationRelationships);
        $this->AddressToLocationRelationships = $addressToLocationRelationships;
        return $this;
    }
    
    /**
     * Returns The details about the relationship between the address requested and the locations returned.
     *
     * @return AddressToLocationRelationshipDetail[]
     */
    public function getAddressToLocationRelationships()
    {
        return $this->AddressToLocationRelationships;
    }
    

    
}