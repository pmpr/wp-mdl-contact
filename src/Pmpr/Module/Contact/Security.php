<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6801061e4d7a6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Contact; use Pmpr\Common\Foundation\FormGenerator\Frontend\Component\Form; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Security\AbstractSecurity; class Security extends AbstractSecurity { const osoeuigkqaueacqg = 'submission_enable_recaptcha'; public function ikcgmcycisiccyuc() { $this->setting = Setting::symcgieuakksimmu(); } public function kgquecmsgcouyaya() { parent::kgquecmsgcouyaya(); $this->aqaqisyssqeomwom('contact_submission_form', [$this, 'ykesaacoiququoao'])->aqaqisyssqeomwom('security_recaptcha_forms', [$this, 'icqccmmiwamoqgwi'])->aqaqisyssqeomwom('contact_submission_submit_validation', [$this, 'saaiyysakkimmukq'], 10, 2); } public function ukqqqyeyeguuceag() : bool { return (bool) $this->giiuwsmyumqwwiyq(self::osoeuigkqaueacqg, false); } public function ykesaacoiququoao(Form $eaoumsseceiowgsk) { if ($this->ukqqqyeyeguuceag()) { $aiowsaccomcoikus = $this->gusaciukmokcqeik(); if ($aiowsaccomcoikus) { $eaoumsseceiowgsk->mkksewyosgeumwsa($aiowsaccomcoikus); } } return $eaoumsseceiowgsk; } public function icqccmmiwamoqgwi($okkgmqycykeiksgm) { if (is_array($okkgmqycykeiksgm) && $this->ukqqqyeyeguuceag()) { $okkgmqycykeiksgm['contact_form'] = __('Contact form', PR__MDL__CONTACT); } return $okkgmqycykeiksgm; } public function iucqycygmekqcggo() : array { return [$this->wcwmusaouiqaqeww(self::osoeuigkqaueacqg)->gswweykyogmsyawy(__('Enable Recaptcha', PR__MDL__CONTACT))]; } public function saaiyysakkimmukq($sogksuscggsicmac, $icwicymcioeyeyek) { if (!is_wp_error($sogksuscggsicmac) && $this->ukqqqyeyeguuceag()) { $ussowkigumoaoowo = $this->gmcyoyosemugmkgg('contact_submission', true, $icwicymcioeyeyek); if (!$ussowkigumoaoowo[Constants::imqkacyywmmamsqm]) { $sogksuscggsicmac = $ussowkigumoaoowo[Constants::iwyueouqaqegmcas]; } } return $sogksuscggsicmac; } }
