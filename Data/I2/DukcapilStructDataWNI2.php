<?php
/**
 * File for class DukcapilStructDataWNI2
 * @package Dukcapil
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-02-27
 */
/**
 * This class stands for DukcapilStructDataWNI2 originally named DataWNI2
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://dwh.dukcapil.kemendagri.go.id:8000/Webservice/ektpStat/EKTPStat.svc?xsd=xsd2}
 * @package Dukcapil
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-02-27
 */
class DukcapilStructDataWNI2 extends DukcapilWsdlClass
{
    /**
     * The CURRENT_STATUS_CODE
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $CURRENT_STATUS_CODE;
    /**
     * The NIK
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $NIK;
    /**
     * The Nama_Lengkap
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $Nama_Lengkap;
    /**
     * Constructor method for DataWNI2
     * @see parent::__construct()
     * @param string $_cURRENT_STATUS_CODE
     * @param string $_nIK
     * @param string $_nama_Lengkap
     * @return DukcapilStructDataWNI2
     */
    public function __construct($_cURRENT_STATUS_CODE = NULL,$_nIK = NULL,$_nama_Lengkap = NULL)
    {
        parent::__construct(array('CURRENT_STATUS_CODE'=>$_cURRENT_STATUS_CODE,'NIK'=>$_nIK,'Nama_Lengkap'=>$_nama_Lengkap),false);
    }
    /**
     * Get CURRENT_STATUS_CODE value
     * @return string|null
     */
    public function getCURRENT_STATUS_CODE()
    {
        return $this->CURRENT_STATUS_CODE;
    }
    /**
     * Set CURRENT_STATUS_CODE value
     * @param string $_cURRENT_STATUS_CODE the CURRENT_STATUS_CODE
     * @return string
     */
    public function setCURRENT_STATUS_CODE($_cURRENT_STATUS_CODE)
    {
        return ($this->CURRENT_STATUS_CODE = $_cURRENT_STATUS_CODE);
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
     * Get Nama_Lengkap value
     * @return string|null
     */
    public function getNama_Lengkap()
    {
        return $this->Nama_Lengkap;
    }
    /**
     * Set Nama_Lengkap value
     * @param string $_nama_Lengkap the Nama_Lengkap
     * @return string
     */
    public function setNama_Lengkap($_nama_Lengkap)
    {
        return ($this->Nama_Lengkap = $_nama_Lengkap);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DukcapilWsdlClass::__set_state()
     * @uses DukcapilWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DukcapilStructDataWNI2
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
