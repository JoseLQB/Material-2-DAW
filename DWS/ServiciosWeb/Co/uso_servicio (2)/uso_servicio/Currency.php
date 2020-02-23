<?php

class AdminLoad{
var $licenseKey;//string
var $file;//string
}
class AdminLoadResponse{
}
class AdminMessage{
var $licenseKey;//string
var $text;//string
var $type;//int
}
class AdminMessageResponse{
}
class AdminSave{
var $licenseKey;//string
var $file;//string
}
class AdminSaveResponse{
}
class AdminUpdateNow{
var $licenseKey;//string
}
class AdminUpdateNowResponse{
}
class ConvertToNum{
var $licenseKey;//string
var $fromCurrency;//string
var $toCurrency;//string
var $amount;//double
var $rounding;//boolean
var $date;//string
var $type;//string
}
class ConvertToNumResponse{
var $ConvertToNumResult;//double
}
class ConvertToStr{
var $licenseKey;//string
var $fromCurrency;//string
var $toCurrency;//string
var $amount;//double
var $rounding;//boolean
var $format;//string
var $date;//string
var $type;//string
}
class ConvertToStrResponse{
var $ConvertToStrResult;//string
}
class CountryToCurrency{
var $licenseKey;//string
var $country;//string
var $activeOnly;//boolean
}
class CountryToCurrencyResponse{
var $CountryToCurrencyResult;//string
}
class Currencies{
var $licenseKey;//string
}
class CurrenciesResponse{
var $CurrenciesResult;//string
}
class CurrencyCustom{
var $licenseKey;//string
var $currency;//string
var $locale;//string
}
class CurrencyCustomResponse{
var $CurrencyCustomResult;//string
}
class CurrencyExists{
var $licenseKey;//string
var $currency;//string
}
class CurrencyExistsResponse{
var $CurrencyExistsResult;//boolean
}
class CurrencyHits{
var $licenseKey;//string
var $currency;//string
}
class CurrencyHitsResponse{
var $CurrencyHitsResult;//long
}
class CurrencyLastChangeTimeLocal{
var $licenseKey;//string
var $currency;//string
}
class CurrencyLastChangeTimeLocalResponse{
var $CurrencyLastChangeTimeLocalResult;//string
}
class CurrencyLastChangeTimeUT{
var $licenseKey;//string
var $currency;//string
}
class CurrencyLastChangeTimeUTResponse{
var $CurrencyLastChangeTimeUTResult;//string
}
class CurrencyLegalTender{
var $licenseKey;//string
var $currency;//string
}
class CurrencyLegalTenderResponse{
var $CurrencyLegalTenderResult;//boolean
}
class CurrencyName{
var $licenseKey;//string
var $currency;//string
var $locale;//string
var $titleStyle;//boolean
}
class CurrencyNameResponse{
var $CurrencyNameResult;//string
}
class CurrencyPhysical{
var $licenseKey;//string
var $currency;//string
}
class CurrencyPhysicalResponse{
var $CurrencyPhysicalResult;//boolean
}
class CurrencyRegime{
var $licenseKey;//string
var $currency;//string
}
class CurrencyRegimeResponse{
var $CurrencyRegimeResult;//string
}
class CurrencySecondsSinceLastChange{
var $licenseKey;//string
var $currency;//string
}
class CurrencySecondsSinceLastChangeResponse{
var $CurrencySecondsSinceLastChangeResult;//long
}
class CurrencyServers{
var $licenseKey;//string
var $currency;//string
}
class CurrencyServersResponse{
var $CurrencyServersResult;//long
}
class CurrencySmallestUnit{
var $licenseKey;//string
var $currency;//string
}
class CurrencySmallestUnitResponse{
var $CurrencySmallestUnitResult;//string
}
class CurrencySubUnit{
var $licenseKey;//string
var $currency;//string
}
class CurrencySubUnitResponse{
var $CurrencySubUnitResult;//boolean
}
class CurrencySymbol{
var $licenseKey;//string
var $currency;//string
var $locale;//string
}
class CurrencySymbolResponse{
var $CurrencySymbolResult;//string
}
class CurrencyWarning{
var $licenseKey;//string
var $currency;//string
}
class CurrencyWarningResponse{
var $CurrencyWarningResult;//boolean
}
class CurrentTimeLocal{
var $licenseKey;//string
}
class CurrentTimeLocalResponse{
var $CurrentTimeLocalResult;//string
}
class CurrentTimeUT{
var $licenseKey;//string
}
class CurrentTimeUTResponse{
var $CurrentTimeUTResult;//string
}
class DomainToCurrency{
var $licenseKey;//string
var $domain;//string
var $activeOnly;//boolean
}
class DomainToCurrencyResponse{
var $DomainToCurrencyResult;//string
}
class InformationCopyright{
var $licenseKey;//string
}
class InformationCopyrightResponse{
var $InformationCopyrightResult;//string
}
class InformationCreationTimeLocal{
var $licenseKey;//string
}
class InformationCreationTimeLocalResponse{
var $InformationCreationTimeLocalResult;//string
}
class InformationCreationTimeUT{
var $licenseKey;//string
}
class InformationCreationTimeUTResponse{
var $InformationCreationTimeUTResult;//string
}
class InformationExpirationTimeLocal{
var $licenseKey;//string
}
class InformationExpirationTimeLocalResponse{
var $InformationExpirationTimeLocalResult;//string
}
class InformationExpirationTimeUT{
var $licenseKey;//string
}
class InformationExpirationTimeUTResponse{
var $InformationExpirationTimeUTResult;//string
}
class InformationMessage{
var $licenseKey;//string
}
class InformationMessageResponse{
var $InformationMessageResult;//string
}
class InformationSource{
var $licenseKey;//string
}
class InformationSourceResponse{
var $InformationSourceResult;//string
}
class LastChangeTimeLocal{
var $licenseKey;//string
}
class LastChangeTimeLocalResponse{
var $LastChangeTimeLocalResult;//string
}
class LastChangeTimeUT{
var $licenseKey;//string
}
class LastChangeTimeUTResponse{
var $LastChangeTimeUTResult;//string
}
class LocaleToCurrency{
var $licenseKey;//string
var $locale;//string
var $activeOnly;//boolean
}
class LocaleToCurrencyResponse{
var $LocaleToCurrencyResult;//string
}
class RateNum{
var $licenseKey;//string
var $baseCurrency;//string
var $toCurrency;//string
var $rounding;//boolean
var $date;//string
var $type;//string
}
class RateNumResponse{
var $RateNumResult;//double
}
class RateStr{
var $licenseKey;//string
var $baseCurrency;//string
var $toCurrency;//string
var $rounding;//boolean
var $format;//string
var $date;//string
var $type;//string
}
class RateStrResponse{
var $RateStrResult;//string
}
class RateTimeLocal{
var $licenseKey;//string
var $baseCurrency;//string
var $toCurrency;//string
var $priority;//string
var $date;//string
var $type;//string
}
class RateTimeLocalResponse{
var $RateTimeLocalResult;//string
}
class RateTimeUT{
var $licenseKey;//string
var $baseCurrency;//string
var $toCurrency;//string
var $priority;//string
var $date;//string
var $type;//string
}
class RateTimeUTResponse{
var $RateTimeUTResult;//string
}
class SecondsSinceLastChange{
var $licenseKey;//string
}
class SecondsSinceLastChangeResponse{
var $SecondsSinceLastChangeResult;//long
}
class Version{
var $licenseKey;//string
}
class VersionResponse{
var $VersionResult;//string
}
class Currency
 {
 var $soapClient;
 
private static $classmap = array('AdminLoad'=>'AdminLoad'
,'AdminLoadResponse'=>'AdminLoadResponse'
,'AdminMessage'=>'AdminMessage'
,'AdminMessageResponse'=>'AdminMessageResponse'
,'AdminSave'=>'AdminSave'
,'AdminSaveResponse'=>'AdminSaveResponse'
,'AdminUpdateNow'=>'AdminUpdateNow'
,'AdminUpdateNowResponse'=>'AdminUpdateNowResponse'
,'ConvertToNum'=>'ConvertToNum'
,'ConvertToNumResponse'=>'ConvertToNumResponse'
,'ConvertToStr'=>'ConvertToStr'
,'ConvertToStrResponse'=>'ConvertToStrResponse'
,'CountryToCurrency'=>'CountryToCurrency'
,'CountryToCurrencyResponse'=>'CountryToCurrencyResponse'
,'Currencies'=>'Currencies'
,'CurrenciesResponse'=>'CurrenciesResponse'
,'CurrencyCustom'=>'CurrencyCustom'
,'CurrencyCustomResponse'=>'CurrencyCustomResponse'
,'CurrencyExists'=>'CurrencyExists'
,'CurrencyExistsResponse'=>'CurrencyExistsResponse'
,'CurrencyHits'=>'CurrencyHits'
,'CurrencyHitsResponse'=>'CurrencyHitsResponse'
,'CurrencyLastChangeTimeLocal'=>'CurrencyLastChangeTimeLocal'
,'CurrencyLastChangeTimeLocalResponse'=>'CurrencyLastChangeTimeLocalResponse'
,'CurrencyLastChangeTimeUT'=>'CurrencyLastChangeTimeUT'
,'CurrencyLastChangeTimeUTResponse'=>'CurrencyLastChangeTimeUTResponse'
,'CurrencyLegalTender'=>'CurrencyLegalTender'
,'CurrencyLegalTenderResponse'=>'CurrencyLegalTenderResponse'
,'CurrencyName'=>'CurrencyName'
,'CurrencyNameResponse'=>'CurrencyNameResponse'
,'CurrencyPhysical'=>'CurrencyPhysical'
,'CurrencyPhysicalResponse'=>'CurrencyPhysicalResponse'
,'CurrencyRegime'=>'CurrencyRegime'
,'CurrencyRegimeResponse'=>'CurrencyRegimeResponse'
,'CurrencySecondsSinceLastChange'=>'CurrencySecondsSinceLastChange'
,'CurrencySecondsSinceLastChangeResponse'=>'CurrencySecondsSinceLastChangeResponse'
,'CurrencyServers'=>'CurrencyServers'
,'CurrencyServersResponse'=>'CurrencyServersResponse'
,'CurrencySmallestUnit'=>'CurrencySmallestUnit'
,'CurrencySmallestUnitResponse'=>'CurrencySmallestUnitResponse'
,'CurrencySubUnit'=>'CurrencySubUnit'
,'CurrencySubUnitResponse'=>'CurrencySubUnitResponse'
,'CurrencySymbol'=>'CurrencySymbol'
,'CurrencySymbolResponse'=>'CurrencySymbolResponse'
,'CurrencyWarning'=>'CurrencyWarning'
,'CurrencyWarningResponse'=>'CurrencyWarningResponse'
,'CurrentTimeLocal'=>'CurrentTimeLocal'
,'CurrentTimeLocalResponse'=>'CurrentTimeLocalResponse'
,'CurrentTimeUT'=>'CurrentTimeUT'
,'CurrentTimeUTResponse'=>'CurrentTimeUTResponse'
,'DomainToCurrency'=>'DomainToCurrency'
,'DomainToCurrencyResponse'=>'DomainToCurrencyResponse'
,'InformationCopyright'=>'InformationCopyright'
,'InformationCopyrightResponse'=>'InformationCopyrightResponse'
,'InformationCreationTimeLocal'=>'InformationCreationTimeLocal'
,'InformationCreationTimeLocalResponse'=>'InformationCreationTimeLocalResponse'
,'InformationCreationTimeUT'=>'InformationCreationTimeUT'
,'InformationCreationTimeUTResponse'=>'InformationCreationTimeUTResponse'
,'InformationExpirationTimeLocal'=>'InformationExpirationTimeLocal'
,'InformationExpirationTimeLocalResponse'=>'InformationExpirationTimeLocalResponse'
,'InformationExpirationTimeUT'=>'InformationExpirationTimeUT'
,'InformationExpirationTimeUTResponse'=>'InformationExpirationTimeUTResponse'
,'InformationMessage'=>'InformationMessage'
,'InformationMessageResponse'=>'InformationMessageResponse'
,'InformationSource'=>'InformationSource'
,'InformationSourceResponse'=>'InformationSourceResponse'
,'LastChangeTimeLocal'=>'LastChangeTimeLocal'
,'LastChangeTimeLocalResponse'=>'LastChangeTimeLocalResponse'
,'LastChangeTimeUT'=>'LastChangeTimeUT'
,'LastChangeTimeUTResponse'=>'LastChangeTimeUTResponse'
,'LocaleToCurrency'=>'LocaleToCurrency'
,'LocaleToCurrencyResponse'=>'LocaleToCurrencyResponse'
,'RateNum'=>'RateNum'
,'RateNumResponse'=>'RateNumResponse'
,'RateStr'=>'RateStr'
,'RateStrResponse'=>'RateStrResponse'
,'RateTimeLocal'=>'RateTimeLocal'
,'RateTimeLocalResponse'=>'RateTimeLocalResponse'
,'RateTimeUT'=>'RateTimeUT'
,'RateTimeUTResponse'=>'RateTimeUTResponse'
,'SecondsSinceLastChange'=>'SecondsSinceLastChange'
,'SecondsSinceLastChangeResponse'=>'SecondsSinceLastChangeResponse'
,'Version'=>'Version'
,'VersionResponse'=>'VersionResponse'

);

 function __construct($url='http://fx.currencysystem.com/webservices/CurrencyServer4.asmx?WSDL')
 {
  $this->soapClient = new SoapClient($url,array("classmap"=>self::$classmap,"trace" => true,"exceptions" => true));
 }
 
function AdminLoad($AdminLoad)
{

$AdminLoadResponse = $this->soapClient->AdminLoad($AdminLoad);
return $AdminLoadResponse;

}
function AdminMessage($AdminMessage)
{

$AdminMessageResponse = $this->soapClient->AdminMessage($AdminMessage);
return $AdminMessageResponse;

}
function AdminSave($AdminSave)
{

$AdminSaveResponse = $this->soapClient->AdminSave($AdminSave);
return $AdminSaveResponse;

}
function AdminUpdateNow($AdminUpdateNow)
{

$AdminUpdateNowResponse = $this->soapClient->AdminUpdateNow($AdminUpdateNow);
return $AdminUpdateNowResponse;

}
function ConvertToNum($ConvertToNum)
{

$ConvertToNumResponse = $this->soapClient->ConvertToNum($ConvertToNum);
return $ConvertToNumResponse;

}
function ConvertToStr($ConvertToStr)
{

$ConvertToStrResponse = $this->soapClient->ConvertToStr($ConvertToStr);
return $ConvertToStrResponse;

}
function CountryToCurrency($CountryToCurrency)
{

$CountryToCurrencyResponse = $this->soapClient->CountryToCurrency($CountryToCurrency);
return $CountryToCurrencyResponse;

}
function Currencies($Currencies)
{

$CurrenciesResponse = $this->soapClient->Currencies($Currencies);
return $CurrenciesResponse;

}
function CurrencyCustom($CurrencyCustom)
{

$CurrencyCustomResponse = $this->soapClient->CurrencyCustom($CurrencyCustom);
return $CurrencyCustomResponse;

}
function CurrencyExists($CurrencyExists)
{

$CurrencyExistsResponse = $this->soapClient->CurrencyExists($CurrencyExists);
return $CurrencyExistsResponse;

}
function CurrencyHits($CurrencyHits)
{

$CurrencyHitsResponse = $this->soapClient->CurrencyHits($CurrencyHits);
return $CurrencyHitsResponse;

}
function CurrencyLastChangeTimeLocal($CurrencyLastChangeTimeLocal)
{

$CurrencyLastChangeTimeLocalResponse = $this->soapClient->CurrencyLastChangeTimeLocal($CurrencyLastChangeTimeLocal);
return $CurrencyLastChangeTimeLocalResponse;

}
function CurrencyLastChangeTimeUT($CurrencyLastChangeTimeUT)
{

$CurrencyLastChangeTimeUTResponse = $this->soapClient->CurrencyLastChangeTimeUT($CurrencyLastChangeTimeUT);
return $CurrencyLastChangeTimeUTResponse;

}
function CurrencyLegalTender($CurrencyLegalTender)
{

$CurrencyLegalTenderResponse = $this->soapClient->CurrencyLegalTender($CurrencyLegalTender);
return $CurrencyLegalTenderResponse;

}
function CurrencyName($CurrencyName)
{

$CurrencyNameResponse = $this->soapClient->CurrencyName($CurrencyName);
return $CurrencyNameResponse;

}
function CurrencyPhysical($CurrencyPhysical)
{

$CurrencyPhysicalResponse = $this->soapClient->CurrencyPhysical($CurrencyPhysical);
return $CurrencyPhysicalResponse;

}
function CurrencyRegime($CurrencyRegime)
{

$CurrencyRegimeResponse = $this->soapClient->CurrencyRegime($CurrencyRegime);
return $CurrencyRegimeResponse;

}
function CurrencySecondsSinceLastChange($CurrencySecondsSinceLastChange)
{

$CurrencySecondsSinceLastChangeResponse = $this->soapClient->CurrencySecondsSinceLastChange($CurrencySecondsSinceLastChange);
return $CurrencySecondsSinceLastChangeResponse;

}
function CurrencyServers($CurrencyServers)
{

$CurrencyServersResponse = $this->soapClient->CurrencyServers($CurrencyServers);
return $CurrencyServersResponse;

}
function CurrencySmallestUnit($CurrencySmallestUnit)
{

$CurrencySmallestUnitResponse = $this->soapClient->CurrencySmallestUnit($CurrencySmallestUnit);
return $CurrencySmallestUnitResponse;

}
function CurrencySubUnit($CurrencySubUnit)
{

$CurrencySubUnitResponse = $this->soapClient->CurrencySubUnit($CurrencySubUnit);
return $CurrencySubUnitResponse;

}
function CurrencySymbol($CurrencySymbol)
{

$CurrencySymbolResponse = $this->soapClient->CurrencySymbol($CurrencySymbol);
return $CurrencySymbolResponse;

}
function CurrencyWarning($CurrencyWarning)
{

$CurrencyWarningResponse = $this->soapClient->CurrencyWarning($CurrencyWarning);
return $CurrencyWarningResponse;

}
function CurrentTimeLocal($CurrentTimeLocal)
{

$CurrentTimeLocalResponse = $this->soapClient->CurrentTimeLocal($CurrentTimeLocal);
return $CurrentTimeLocalResponse;

}
function CurrentTimeUT($CurrentTimeUT)
{

$CurrentTimeUTResponse = $this->soapClient->CurrentTimeUT($CurrentTimeUT);
return $CurrentTimeUTResponse;

}
function DomainToCurrency($DomainToCurrency)
{

$DomainToCurrencyResponse = $this->soapClient->DomainToCurrency($DomainToCurrency);
return $DomainToCurrencyResponse;

}
function InformationCopyright($InformationCopyright)
{

$InformationCopyrightResponse = $this->soapClient->InformationCopyright($InformationCopyright);
return $InformationCopyrightResponse;

}
function InformationCreationTimeLocal($InformationCreationTimeLocal)
{

$InformationCreationTimeLocalResponse = $this->soapClient->InformationCreationTimeLocal($InformationCreationTimeLocal);
return $InformationCreationTimeLocalResponse;

}
function InformationCreationTimeUT($InformationCreationTimeUT)
{

$InformationCreationTimeUTResponse = $this->soapClient->InformationCreationTimeUT($InformationCreationTimeUT);
return $InformationCreationTimeUTResponse;

}
function InformationExpirationTimeLocal($InformationExpirationTimeLocal)
{

$InformationExpirationTimeLocalResponse = $this->soapClient->InformationExpirationTimeLocal($InformationExpirationTimeLocal);
return $InformationExpirationTimeLocalResponse;

}
function InformationExpirationTimeUT($InformationExpirationTimeUT)
{

$InformationExpirationTimeUTResponse = $this->soapClient->InformationExpirationTimeUT($InformationExpirationTimeUT);
return $InformationExpirationTimeUTResponse;

}
function InformationMessage($InformationMessage)
{

$InformationMessageResponse = $this->soapClient->InformationMessage($InformationMessage);
return $InformationMessageResponse;

}
function InformationSource($InformationSource)
{

$InformationSourceResponse = $this->soapClient->InformationSource($InformationSource);
return $InformationSourceResponse;

}
function LastChangeTimeLocal($LastChangeTimeLocal)
{

$LastChangeTimeLocalResponse = $this->soapClient->LastChangeTimeLocal($LastChangeTimeLocal);
return $LastChangeTimeLocalResponse;

}
function LastChangeTimeUT($LastChangeTimeUT)
{

$LastChangeTimeUTResponse = $this->soapClient->LastChangeTimeUT($LastChangeTimeUT);
return $LastChangeTimeUTResponse;

}
function LocaleToCurrency($LocaleToCurrency)
{

$LocaleToCurrencyResponse = $this->soapClient->LocaleToCurrency($LocaleToCurrency);
return $LocaleToCurrencyResponse;

}
function RateNum($RateNum)
{

$RateNumResponse = $this->soapClient->RateNum($RateNum);
return $RateNumResponse;

}
function RateStr($RateStr)
{

$RateStrResponse = $this->soapClient->RateStr($RateStr);
return $RateStrResponse;

}
function RateTimeLocal($RateTimeLocal)
{

$RateTimeLocalResponse = $this->soapClient->RateTimeLocal($RateTimeLocal);
return $RateTimeLocalResponse;

}
function RateTimeUT($RateTimeUT)
{

$RateTimeUTResponse = $this->soapClient->RateTimeUT($RateTimeUT);
return $RateTimeUTResponse;

}
function SecondsSinceLastChange($SecondsSinceLastChange)
{

$SecondsSinceLastChangeResponse = $this->soapClient->SecondsSinceLastChange($SecondsSinceLastChange);
return $SecondsSinceLastChangeResponse;

}
function Version($Version)
{

$VersionResponse = $this->soapClient->Version($Version);
return $VersionResponse;

}
}


?>