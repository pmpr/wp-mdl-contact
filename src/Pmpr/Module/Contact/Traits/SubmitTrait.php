<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64327291ce7ff             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Contact\Traits; use Exception; use Pmpr\Module\Contact\Model\Submission; use Pmpr\Module\Contact\Setting; trait SubmitTrait { public function ygkskmsksmmiqaqu(&$uamcoiueqaamsqma, array $icwicymcioeyeyek = []) : bool { $occymigcemkqucuw = false; if ($icwicymcioeyeyek) { goto goacqqsgaaigyuaw; } $icwicymcioeyeyek = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(); goacqqsgaaigyuaw: try { $yeccawueyssugoko = Submission::symcgieuakksimmu(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $icwicymcioeyeyek = $gkyciwoiiisgywcs->gucyquqwoimkiiaq($icwicymcioeyeyek, [$yeccawueyssugoko::NAME, $yeccawueyssugoko::muqaqimusmckkieq, $yeccawueyssugoko::memskaacyikisggk, $yeccawueyssugoko::qkimemawswowsmoa, $yeccawueyssugoko::oeoceeacyascgkai, $yeccawueyssugoko::eoskkkieowogacws], true, "\x65\x73\143\x5f\163\x71\x6c"); $icwicymcioeyeyek[$yeccawueyssugoko::ioksewgkgwwikiwo] = $this->caokeucsksukesyo()->issssuygyewuaswa()->mmscegoieayuaguo(); $icwicymcioeyeyek[$yeccawueyssugoko::iockmgiyoygcswog] = $this->caokeucsksukesyo()->issssuygyewuaswa()->kuswmimkgmyuymiu($gkyciwoiiisgywcs->get($icwicymcioeyeyek, $yeccawueyssugoko::iockmgiyoygcswog)); $sogksuscggsicmac = $yeccawueyssugoko->gscuuyuyauokoyuo($icwicymcioeyeyek); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto meawswgwagoqgkye; } $uamcoiueqaamsqma = $sogksuscggsicmac[self::iwyueouqaqegmcas]; goto wcesymwqykqoyuqk; meawswgwagoqgkye: $uamcoiueqaamsqma = Setting::eiwcuqigayigimak(Setting::aiyeuymiomaukaaa); $occymigcemkqucuw = true; wcesymwqykqoyuqk: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = $this->kyacickkomkioeyu($wgaoewqkwgomoaai); } return $occymigcemkqucuw; } }
