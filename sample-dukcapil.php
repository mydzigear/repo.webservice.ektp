<?php
/**
 * Test with Dukcapil for 'http://dwh.dukcapil.kemendagri.go.id:8000/Webservice/ektpStat/EKTPStat.svc?wsdl'
 * @package Dukcapil
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-02-27
 */
ini_set('memory_limit','512M');
ini_set('display_errors',true);
error_reporting(-1);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/DukcapilAutoload.php';
/**
 * Wsdl instanciation infos. By default, nothing has to be set.
 * If you wish to override the SoapClient's options, please refer to the sample below.
 * 
 * This is an associative array as:
 * - the key must be a DukcapilWsdlClass constant beginning with WSDL_
 * - the value must be the corresponding key value
 * Each option matches the {@link http://www.php.net/manual/en/soapclient.soapclient.php} options
 * 
 * Here is below an example of how you can set the array:
 * $wsdl = array();
 * $wsdl[DukcapilWsdlClass::WSDL_URL] = 'http://dwh.dukcapil.kemendagri.go.id:8000/Webservice/ektpStat/EKTPStat.svc?wsdl';
 * $wsdl[DukcapilWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
 * $wsdl[DukcapilWsdlClass::WSDL_TRACE] = true;
 * $wsdl[DukcapilWsdlClass::WSDL_LOGIN] = 'myLogin';
 * $wsdl[DukcapilWsdlClass::WSDL_PASSWD] = '**********';
 * etc....
 * Then instantiate the Service class as: 
 * - $wsdlObject = new DukcapilWsdlClass($wsdl);
 */
/**
 * Examples
 */


/********************************
 * Example for DukcapilServiceCek
 */
$dukcapilServiceCek = new DukcapilServiceCek();
// sample call for DukcapilServiceCek::CekStatEKTP()
if($dukcapilServiceCek->CekStatEKTP(new DukcapilStructCekStatEKTP(/*** update parameters list ***/)))
    print_r($dukcapilServiceCek->getResult());
else
    print_r($dukcapilServiceCek->getLastError());
