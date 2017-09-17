<?php
/**
 * File for the class which returns the class map definition
 * @package Dukcapil
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-02-27
 */
/**
 * Class which returns the class map definition by the static method DukcapilClassMap::classMap()
 * @package Dukcapil
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-02-27
 */
class DukcapilClassMap
{
    /**
     * This method returns the array containing the mapping between WSDL structs and generated classes
     * This array is sent to the SoapClient when calling the WS
     * @return array
     */
    final public static function classMap()
    {
        return array (
  'CekStatEKTP' => 'DukcapilStructCekStatEKTP',
  'CekStatEKTPResponse' => 'DukcapilStructCekStatEKTPResponse',
  'DataWNI2' => 'DukcapilStructDataWNI2',
);
    }
}
