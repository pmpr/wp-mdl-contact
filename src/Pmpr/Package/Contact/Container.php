<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c369c3596ec             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Contact; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Container extends BaseClass { public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function wywyecaauygmwewe() : bool { return (bool) $this->weysguygiseoukqw(Setting::ggoymkamgwwomoeg); } public function ikiwgimsoiwswmeo($ggauoeuaesiymgee = null) { $qmcuiciekkawmmms = null; if (!$this->wywyecaauygmwewe()) { goto mswsoaimesegiiic; } $qmcuiciekkawmmms = $this->weysguygiseoukqw(Setting::kicoscymgmgqeqgy, $ggauoeuaesiymgee); mswsoaimesegiiic: return $qmcuiciekkawmmms; } public function wiwcgumsygqcomeo($ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::ackcaikowcokggsc => [], self::aisguagukaewucii => self::emgcgiseaoouacge, self::ascagqcquwgmygkm => '']); $uusmaiomayssaecw = $ywmkwiwkosakssii[self::ascagqcquwgmygkm]; $aqykuigiuwmmcieu = $ywmkwiwkosakssii[self::aisguagukaewucii]; $ooiewiwkegguusum = $ywmkwiwkosakssii[self::ackcaikowcokggsc]; $naiuumgusmkcowsa = ManipulateArray::sagscekukkacqaaw($this->weysguygiseoukqw(Setting::awgyeicugseiscuq, []), self::iuqumwggccmcuyem); $sogksuscggsicmac = []; if (!($naiuumgusmkcowsa && is_array($naiuumgusmkcowsa))) { goto ickcmqoiosquugwe; } foreach ($naiuumgusmkcowsa as $kyocyoemugcyqqyu) { if (ManipulateArray::uuegkqwagymmusiy($kyocyoemugcyqqyu, [self::auqoykcmsiauccao, self::ascagqcquwgmygkm, self::qgqyauaqwqmqseim, self::qescuiwgsyuikume])) { goto eiawsoasmscmqswa; } $esoqqaumyukywmmy = ManipulateArray::get($kyocyoemugcyqqyu, self::ascagqcquwgmygkm); if (!($uusmaiomayssaecw && $esoqqaumyukywmmy == $uusmaiomayssaecw)) { goto qgegkeomwscwwiuw; } return $kyocyoemugcyqqyu; qgegkeomwscwwiuw: if (!($ooiewiwkegguusum && is_array($ooiewiwkegguusum) && !in_array($esoqqaumyukywmmy, $ooiewiwkegguusum))) { goto qmiwsequckckoaei; } goto kecwuwwcwokuksyq; qmiwsequckckoaei: if (!($aqykuigiuwmmcieu === self::emgcgiseaoouacge)) { goto goeoymmqqqeeoime; } $kyocyoemugcyqqyu = $kyocyoemugcyqqyu[self::qescuiwgsyuikume]; goeoymmqqqeeoime: $sogksuscggsicmac[$esoqqaumyukywmmy] = $kyocyoemugcyqqyu; eiawsoasmscmqswa: kecwuwwcwokuksyq: } egasokooagakisiy: ickcmqoiosquugwe: return $sogksuscggsicmac; } public function ycesyyguqyyecywm($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::ackcaikowcokggsc => [], self::aisguagukaewucii => self::emgcgiseaoouacge, self::squoamkioomemiyi => '', self::ascagqcquwgmygkm => '']); $uusmaiomayssaecw = $ywmkwiwkosakssii[self::ascagqcquwgmygkm]; $sqeykgyoooqysmca = $ywmkwiwkosakssii[self::squoamkioomemiyi]; $aqykuigiuwmmcieu = $ywmkwiwkosakssii[self::aisguagukaewucii]; $ooiewiwkegguusum = $ywmkwiwkosakssii[self::ackcaikowcokggsc]; $oammesyieqmwuwyi = []; if (!$this->weysguygiseoukqw(Setting::oawkyuooiqukeuuu)) { goto eyiamcekkgkiawqy; } $qcokcugqceckmigs = $this->weysguygiseoukqw(Setting::qmcgaquwsgaoeuoi, []); foreach ($qcokcugqceckmigs as $yyimiwcuegayoskq) { if (ManipulateArray::uuegkqwagymmusiy($yyimiwcuegayoskq, [self::ascagqcquwgmygkm, self::qescuiwgsyuikume, self::ciyoccqkiamemcmm, self::qgqyauaqwqmqseim])) { goto mqccmesakuemceqi; } $amkeygycoeasmacg = ManipulateArray::get($yyimiwcuegayoskq, self::ascagqcquwgmygkm); if (!($uusmaiomayssaecw && $amkeygycoeasmacg == $uusmaiomayssaecw)) { goto cuoqqgaygogsmmic; } return $yyimiwcuegayoskq; cuoqqgaygogsmmic: if (!($ooiewiwkegguusum && is_array($ooiewiwkegguusum) && !in_array($amkeygycoeasmacg, $ooiewiwkegguusum))) { goto cgewcsueoyaeikgm; } goto ygkcacsyyckescqs; cgewcsueoyaeikgm: $ggieqgskosocamou = ManipulateArray::get($yyimiwcuegayoskq, self::squoamkioomemiyi); if (!($sqeykgyoooqysmca && $ggieqgskosocamou !== $sqeykgyoooqysmca)) { goto sukskmcwsoysiuqu; } goto ygkcacsyyckescqs; sukskmcwsoysiuqu: if (!($aqykuigiuwmmcieu === self::emgcgiseaoouacge)) { goto igymseewwyiocoug; } $yyimiwcuegayoskq = $yyimiwcuegayoskq[self::qescuiwgsyuikume]; igymseewwyiocoug: $oammesyieqmwuwyi[$amkeygycoeasmacg] = $yyimiwcuegayoskq; mqccmesakuemceqi: ygkcacsyyckescqs: } qmeoaqmsuseueqiy: eyiamcekkgkiawqy: return $oammesyieqmwuwyi; } public function ceegukcouccwicus($ggauoeuaesiymgee = 1) { return $this->weysguygiseoukqw(Setting::qskksqisocqqqayg, $ggauoeuaesiymgee); } public function wgwyskmsyqawcoky($ggauoeuaesiymgee = null) { return $this->weysguygiseoukqw(Setting::omscksekmkuoguow, $ggauoeuaesiymgee); } public function rkwyoeqieaoggqus($ggauoeuaesiymgee = null) { return $this->weysguygiseoukqw(Setting::aiyeuymiomaukaaa, $ggauoeuaesiymgee); } public function mmouaqgeagummsqc($ggauoeuaesiymgee = null) : string { $uuyoeicyoayimaoa = ManipulateArray::get(Setting::suesuewiciggeaau, $this->ceegukcouccwicus()); return sprintf($this->weysguygiseoukqw(Setting::aqowcgkssgcoumum, $ggauoeuaesiymgee), $uuyoeicyoayimaoa); } }
