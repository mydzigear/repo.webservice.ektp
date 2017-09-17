<?php
/**
 * File for class DukcapilStructCekStatEKTP
 * @package Dukcapil
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-02-27
 */
/**
 * This class stands for DukcapilStructCekStatEKTP originally named CekStatEKTP
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://dwh.dukcapil.kemendagri.go.id:8000/Webservice/ektpStat/EKTPStat.svc?xsd=xsd0}
 * @package Dukcapil
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-02-27
 */
class DukcapilStructCekStatEKTP extends DukcapilWsdlClass
{
    /**
     * The UserName
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $UserName;
    /**
     * The password
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $password;
    /**
     * The NIK
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $NIK;
    /**
     * Constructor method for CekStatEKTP
     * @see parent::__construct()
     * @param string $_userName
     * @param string $_password
     * @param string $_nIK
     * @return DukcapilStructCekStatEKTP
     */
    public function __construct($_userName = NULL,$_password = NULL,$_nIK = NULL)
    {
        parent::__construct(array('UserName'=>$_userName,'password'=>$_password,'NIK'=>$_nIK),false);
    }
    /**
     * Get UserName value
     * @return string|null
     */
    public function getUserName()
    {
        return $this->UserName;
    }
    /**
     * Set UserName value
     * @param string $_userName the UserName
     * @return string
     */
    public function setUserName($_userName)
    {
        return ($this->UserName = $_userName);
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $_password the password
     * @return string
     */
    public function setPassword($_password)
    {
        return ($this->password = $_password);
    }
    /**
     * Get NIK value
     * @return string|null
     */
    public function getNIK()
    {
        return $this->NIK;
    }
    /**
     * Set NIK value
     * @param string $_nIK the NIK
     * @return string
     */
    public function setNIK($_nIK)
    {
        return ($this->NIK = $_nIK);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DukcapilWsdlClass::__set_state()
     * @uses DukcapilWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DukcapilStructCekStatEKTP
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
