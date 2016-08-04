<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Used in authentication of the sender's identity.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class WebAuthenticationDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'ParentCredential' => 'WebAuthenticationCredential',
'UserCredential' => 'WebAuthenticationCredential',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'WebAuthenticationDetail';

        
    /**
     * @var WebAuthenticationCredential
     */
    public $ParentCredential;

        
    /**
     * @var WebAuthenticationCredential
     */
    public $UserCredential;



    /**
     * This was renamed from cspCredential.
     *
     * @param WebAuthenticationCredential $parentCredential
     * @return WebAuthenticationDetail
     */
    public function setParentCredential(WebAuthenticationCredential $parentCredential)
    {
        $this->__set('ParentCredential', $parentCredential);
        $this->ParentCredential = $parentCredential;
        return $this;
    }
    
    /**
     * Returns This was renamed from cspCredential.
     *
     * @return WebAuthenticationCredential
     */
    public function getParentCredential()
    {
        return $this->ParentCredential;
    }
    
    /**
     * Credential used to authenticate a specific software application. This value is provided by FedEx after registration.
     *
     * @param WebAuthenticationCredential $userCredential
     * @return WebAuthenticationDetail
     */
    public function setUserCredential(WebAuthenticationCredential $userCredential)
    {
        $this->__set('UserCredential', $userCredential);
        $this->UserCredential = $userCredential;
        return $this;
    }
    
    /**
     * Returns Credential used to authenticate a specific software application. This value is provided by FedEx after registration.
     *
     * @return WebAuthenticationCredential
     */
    public function getUserCredential()
    {
        return $this->UserCredential;
    }
    

    
}