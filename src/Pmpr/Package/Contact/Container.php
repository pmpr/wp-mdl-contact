<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62128d21c9849             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Contact; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Container extends BaseClass { public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function wywyecaauygmwewe() : bool { return (bool) $this->weysguygiseoukqw(Setting::ggoymkamgwwomoeg); } public function ikiwgimsoiwswmeo($ggauoeuaesiymgee = null) { $qmcuiciekkawmmms = null; if (!$this->wywyecaauygmwewe()) { goto cggowoquuiwqkyew; } $qmcuiciekkawmmms = $this->weysguygiseoukqw(Setting::kicoscymgmgqeqgy, $ggauoeuaesiymgee); cggowoquuiwqkyew: return $qmcuiciekkawmmms; } public function wiwcgumsygqcomeo($ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::ackcaikowcokggsc => [], self::aisguagukaewucii => self::emgcgiseaoouacge, self::ascagqcquwgmygkm => '']); $uusmaiomayssaecw = $ywmkwiwkosakssii[self::ascagqcquwgmygkm]; $aqykuigiuwmmcieu = $ywmkwiwkosakssii[self::aisguagukaewucii]; $ooiewiwkegguusum = $ywmkwiwkosakssii[self::ackcaikowcokggsc]; $naiuumgusmkcowsa = ManipulateArray::sagscekukkacqaaw($this->weysguygiseoukqw(Setting::awgyeicugseiscuq, []), self::iuqumwggccmcuyem); $sogksuscggsicmac = []; if (!($naiuumgusmkcowsa && is_array($naiuumgusmkcowsa))) { goto mswsoaimesegiiic; } foreach ($naiuumgusmkcowsa as $kyocyoemugcyqqyu) { if (ManipulateArray::uuegkqwagymmusiy($kyocyoemugcyqqyu, [self::auqoykcmsiauccao, self::ascagqcquwgmygkm, self::qgqyauaqwqmqseim, self::qescuiwgsyuikume])) { goto usqgaogkqgemuima; } $esoqqaumyukywmmy = ManipulateArray::get($kyocyoemugcyqqyu, self::ascagqcquwgmygkm); if (!($uusmaiomayssaecw && $esoqqaumyukywmmy == $uusmaiomayssaecw)) { goto goacqqsgaaigyuaw; } return $kyocyoemugcyqqyu; goacqqsgaaigyuaw: if (!($ooiewiwkegguusum && is_array($ooiewiwkegguusum) && !in_array($esoqqaumyukywmmy, $ooiewiwkegguusum))) { goto meawswgwagoqgkye; } goto yiwiqaqmwiogawym; meawswgwagoqgkye: if (!($aqykuigiuwmmcieu === self::emgcgiseaoouacge)) { goto wcesymwqykqoyuqk; } $kyocyoemugcyqqyu = $kyocyoemugcyqqyu[self::qescuiwgsyuikume]; wcesymwqykqoyuqk: $sogksuscggsicmac[$esoqqaumyukywmmy] = $kyocyoemugcyqqyu; usqgaogkqgemuima: yiwiqaqmwiogawym: } ocokwuuquaokmasc: mswsoaimesegiiic: return $sogksuscggsicmac; } public function ycesyyguqyyecywm($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::ackcaikowcokggsc => [], self::osiogououyayqyck => '', self::aisguagukaewucii => self::emgcgiseaoouacge, self::squoamkioomemiyi => '', self::ascagqcquwgmygkm => '']); $uusmaiomayssaecw = $ywmkwiwkosakssii[self::ascagqcquwgmygkm]; $sqeykgyoooqysmca = $ywmkwiwkosakssii[self::squoamkioomemiyi]; $aqykuigiuwmmcieu = $ywmkwiwkosakssii[self::aisguagukaewucii]; $ooiewiwkegguusum = $ywmkwiwkosakssii[self::ackcaikowcokggsc]; $mgkceomocowocqyo = ManipulateArray::get($ywmkwiwkosakssii, self::osiogououyayqyck); $oammesyieqmwuwyi = []; if (!$this->weysguygiseoukqw(Setting::oawkyuooiqukeuuu)) { goto sukskmcwsoysiuqu; } $qcokcugqceckmigs = $this->weysguygiseoukqw(Setting::qmcgaquwsgaoeuoi, []); foreach ($qcokcugqceckmigs as $yyimiwcuegayoskq) { if (ManipulateArray::uuegkqwagymmusiy($yyimiwcuegayoskq, [self::ascagqcquwgmygkm, self::qescuiwgsyuikume, self::ciyoccqkiamemcmm, self::qgqyauaqwqmqseim])) { goto cgewcsueoyaeikgm; } $amkeygycoeasmacg = ManipulateArray::get($yyimiwcuegayoskq, self::ascagqcquwgmygkm); if (!($ooiewiwkegguusum && is_array($ooiewiwkegguusum) && !in_array($amkeygycoeasmacg, $ooiewiwkegguusum))) { goto qgegkeomwscwwiuw; } goto kecwuwwcwokuksyq; qgegkeomwscwwiuw: $ggieqgskosocamou = ManipulateArray::get($yyimiwcuegayoskq, self::squoamkioomemiyi); if (!($sqeykgyoooqysmca && $ggieqgskosocamou !== $sqeykgyoooqysmca)) { goto qmiwsequckckoaei; } goto kecwuwwcwokuksyq; qmiwsequckckoaei: if (self::emgcgiseaoouacge == $aqykuigiuwmmcieu && !$uusmaiomayssaecw) { goto qmeoaqmsuseueqiy; } if (!($mgkceomocowocqyo == self::uwycywkimsycqwcy)) { goto ickcmqoiosquugwe; } if (!($ggieqgskosocamou == self::muqaqimusmckkieq)) { goto eiawsoasmscmqswa; } $eqgoocgaqwqcimie = $yyimiwcuegayoskq[self::ciyoccqkiamemcmm]; if (!(is_string($eqgoocgaqwqcimie) && $eqgoocgaqwqcimie)) { goto goeoymmqqqeeoime; } $yyimiwcuegayoskq[self::ciyoccqkiamemcmm] = ManipulateHTML::gmqyuaqwgiayskei(implode("\x3c\57\163\x70\x61\x6e\76\x3c\163\x70\x61\x6e\x3e", str_split($eqgoocgaqwqcimie, 3))); goeoymmqqqeeoime: eiawsoasmscmqswa: ickcmqoiosquugwe: goto ygkcacsyyckescqs; qmeoaqmsuseueqiy: $yyimiwcuegayoskq = $yyimiwcuegayoskq[self::qescuiwgsyuikume]; ygkcacsyyckescqs: if (!($uusmaiomayssaecw && $amkeygycoeasmacg == $uusmaiomayssaecw)) { goto cuoqqgaygogsmmic; } return $yyimiwcuegayoskq; cuoqqgaygogsmmic: $oammesyieqmwuwyi[$amkeygycoeasmacg] = $yyimiwcuegayoskq; cgewcsueoyaeikgm: kecwuwwcwokuksyq: } egasokooagakisiy: sukskmcwsoysiuqu: return $oammesyieqmwuwyi; } public function baiiqkieecqyougq($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::ackcaikowcokggsc => [], self::aisguagukaewucii => self::emgcgiseaoouacge, self::ascagqcquwgmygkm => '']); $uusmaiomayssaecw = $ywmkwiwkosakssii[self::ascagqcquwgmygkm]; $aqykuigiuwmmcieu = $ywmkwiwkosakssii[self::aisguagukaewucii]; $ooiewiwkegguusum = $ywmkwiwkosakssii[self::ackcaikowcokggsc]; $oammesyieqmwuwyi = []; if (!$this->weysguygiseoukqw(Setting::ggoymkamgwwomoeg)) { goto qcessicwuikwqsis; } $ueyoukswywwkumcg = $this->weysguygiseoukqw(Setting::easaowoskesqimam, []); foreach ($ueyoukswywwkumcg as $ecysmcqmumqmaagg) { if (ManipulateArray::uuegkqwagymmusiy($ecysmcqmumqmaagg, [self::ascagqcquwgmygkm, self::qescuiwgsyuikume, self::auqoykcmsiauccao, self::qgqyauaqwqmqseim])) { goto qwcegcuowwgiccos; } $oiakcwiwwkuaowuu = ManipulateArray::get($ecysmcqmumqmaagg, self::ascagqcquwgmygkm); if (!($ooiewiwkegguusum && is_array($ooiewiwkegguusum) && !in_array($oiakcwiwwkuaowuu, $ooiewiwkegguusum))) { goto eyiamcekkgkiawqy; } goto mqccmesakuemceqi; eyiamcekkgkiawqy: if (!(self::emgcgiseaoouacge == $aqykuigiuwmmcieu && !$uusmaiomayssaecw)) { goto twkmiuomimomscew; } $ecysmcqmumqmaagg = $ecysmcqmumqmaagg[self::qescuiwgsyuikume]; twkmiuomimomscew: if (!($uusmaiomayssaecw && $oiakcwiwwkuaowuu == $uusmaiomayssaecw)) { goto kooskuwkuayiuose; } return $ecysmcqmumqmaagg; kooskuwkuayiuose: $oammesyieqmwuwyi[$oiakcwiwwkuaowuu] = $ecysmcqmumqmaagg; qwcegcuowwgiccos: mqccmesakuemceqi: } igymseewwyiocoug: qcessicwuikwqsis: return $oammesyieqmwuwyi; } public function ceegukcouccwicus($ggauoeuaesiymgee = 1) { return $this->weysguygiseoukqw(Setting::qskksqisocqqqayg, $ggauoeuaesiymgee); } public function wgwyskmsyqawcoky($ggauoeuaesiymgee = null) { return $this->weysguygiseoukqw(Setting::omscksekmkuoguow, $ggauoeuaesiymgee); } public function rkwyoeqieaoggqus($ggauoeuaesiymgee = null) { return $this->weysguygiseoukqw(Setting::aiyeuymiomaukaaa, $ggauoeuaesiymgee); } public function mmouaqgeagummsqc($ggauoeuaesiymgee = null) : string { $uuyoeicyoayimaoa = ManipulateArray::get(Setting::suesuewiciggeaau, $this->ceegukcouccwicus()); return sprintf($this->weysguygiseoukqw(Setting::aqowcgkssgcoumum, $ggauoeuaesiymgee), $uuyoeicyoayimaoa); } }
