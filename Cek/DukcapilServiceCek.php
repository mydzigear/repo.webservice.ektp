<?php
/**
 * File for class DukcapilServiceCek
 * @package Dukcapil
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-02-27
 */
/**
 * This class stands for DukcapilServiceCek originally named Cek
 * @package Dukcapil
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-02-27
 */
class DukcapilServiceCek extends DukcapilWsdlClass
{
    /**
     * Method to call the operation originally named CekStatEKTP
     * @uses DukcapilWsdlClass::getSoapClient()
     * @uses DukcapilWsdlClass::setResult()
     * @uses DukcapilWsdlClass::saveLastError()
     * @param DukcapilStructCekStatEKTP $_dukcapilStructCekStatEKTP
     * @return DukcapilStructCekStatEKTPResponse
     */
    public function CekStatEKTP(DukcapilStructCekStatEKTP $_dukcapilStructCekStatEKTP)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->CekStatEKTP($_dukcapilStructCekStatEKTP));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see DukcapilWsdlClass::getResult()
     * @return DukcapilStructCekStatEKTPResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
