<?php
/**
 * File for class DukcapilStructCekStatEKTPResponse
 * @package Dukcapil
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-02-27
 */
/**
 * This class stands for DukcapilStructCekStatEKTPResponse originally named CekStatEKTPResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://dwh.dukcapil.kemendagri.go.id:8000/Webservice/ektpStat/EKTPStat.svc?xsd=xsd0}
 * @package Dukcapil
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-02-27
 */
class DukcapilStructCekStatEKTPResponse extends DukcapilWsdlClass
{
    /**
     * The CekStatEKTPResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var DukcapilStructDataWNI2
     */
    public $CekStatEKTPResult;
    /**
     * Constructor method for CekStatEKTPResponse
     * @see parent::__construct()
     * @param DukcapilStructDataWNI2 $_cekStatEKTPResult
     * @return DukcapilStructCekStatEKTPResponse
     */
    public function __construct($_cekStatEKTPResult = NULL)
    {
        parent::__construct(array('CekStatEKTPResult'=>$_cekStatEKTPResult),false);
    }
    /**
     * Get CekStatEKTPResult value
     * @return DukcapilStructDataWNI2|null
     */
    public function getCekStatEKTPResult()
    {
        return $this->CekStatEKTPResult;
    }
    /**
     * Set CekStatEKTPResult value
     * @param DukcapilStructDataWNI2 $_cekStatEKTPResult the CekStatEKTPResult
     * @return DukcapilStructDataWNI2
     */
    public function setCekStatEKTPResult($_cekStatEKTPResult)
    {
        return ($this->CekStatEKTPResult = $_cekStatEKTPResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DukcapilWsdlClass::__set_state()
     * @uses DukcapilWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DukcapilStructCekStatEKTPResponse
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
