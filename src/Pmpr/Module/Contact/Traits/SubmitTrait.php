<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62b88570185ea             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Contact\Traits; use Exception; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Contact\Setting; use Pmpr\Module\Contact\Submission; trait SubmitTrait { public function ygkskmsksmmiqaqu(&$uamcoiueqaamsqma, array $icwicymcioeyeyek = []) : bool { $occymigcemkqucuw = false; if ($icwicymcioeyeyek) { goto cggowoquuiwqkyew; } $icwicymcioeyeyek = ManipulateServer::yyqgamuwwakgciey(); cggowoquuiwqkyew: try { if ($yeccawueyssugoko = Submission::symcgieuakksimmu()) { goto goacqqsgaaigyuaw; } $uamcoiueqaamsqma = $this->aqgegcykekmuggsu(); goto meawswgwagoqgkye; goacqqsgaaigyuaw: $icwicymcioeyeyek = ManipulateArray::gucyquqwoimkiiaq($icwicymcioeyeyek, [$yeccawueyssugoko::NAME, $yeccawueyssugoko::muqaqimusmckkieq, $yeccawueyssugoko::memskaacyikisggk, $yeccawueyssugoko::qkimemawswowsmoa, $yeccawueyssugoko::oeoceeacyascgkai, $yeccawueyssugoko::eoskkkieowogacws], true, "\x65\x73\143\x5f\163\161\x6c"); $icwicymcioeyeyek[$yeccawueyssugoko::ioksewgkgwwikiwo] = ManipulateUser::meymqemgekqiawec(); $icwicymcioeyeyek[$yeccawueyssugoko::iockmgiyoygcswog] = ManipulateUser::kuswmimkgmyuymiu(ManipulateArray::get($icwicymcioeyeyek, $yeccawueyssugoko::iockmgiyoygcswog)); $sogksuscggsicmac = $yeccawueyssugoko->gscuuyuyauokoyuo($icwicymcioeyeyek); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto ocokwuuquaokmasc; } $uamcoiueqaamsqma = $sogksuscggsicmac[self::iwyueouqaqegmcas]; goto yiwiqaqmwiogawym; ocokwuuquaokmasc: $uamcoiueqaamsqma = Setting::eiwcuqigayigimak(Setting::aiyeuymiomaukaaa); $occymigcemkqucuw = true; yiwiqaqmwiogawym: meawswgwagoqgkye: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = $this->kyacickkomkioeyu($wgaoewqkwgomoaai); } return $occymigcemkqucuw; } }
