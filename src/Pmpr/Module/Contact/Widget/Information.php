<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c83a3d6ddd0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Contact\Widget; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Widget; class Information extends Widget { const ckwssiecokouqwma = 'show_icon'; const qoikaakymkggecmo = 'single_show'; public function __construct() { parent::__construct(__('Contact Information', PR__MDL__CONTACT), __('Display the contact information.', PR__MDL__CONTACT)); } public function ykwqaukkycogooii() { $ugakwukqcuqqsmsi = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw('icon_sizes'), []); $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::ackcaikowcokggsc)->gswweykyogmsyawy(__('Include', PR__MDL__CONTACT))->gucwmccyimoagwcm(__('Leave empty if you want to show all items.', PR__MDL__CONTACT))->acauweqyyugwisqc($this->kmuweyayaqoeqiyw()->eqiocgwwikkieygw())->oikgogcweiiaocka())->mkksewyosgeumwsa($uuyucgkyusckoaeq->wcwmusaouiqaqeww(self::qoikaakymkggecmo)->gswweykyogmsyawy(__('Single Show', PR__MDL__CONTACT)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->wcwmusaouiqaqeww(self::ckwssiecokouqwma)->gswweykyogmsyawy(__('Show Icon', PR__MDL__CONTACT))->agywyaaquwawwuiy(Constants::ceyqggmwsusggwok))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::ceyqggmwsusggwok)->gswweykyogmsyawy(__('Icon Size', PR__MDL__CONTACT))->acauweqyyugwisqc($ugakwukqcuqqsmsi)->wywmmeyauqkeskeq(!empty($ugakwukqcuqqsmsi))); } public function gayqqwwuycceosii($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = []) : array { $qookweymeqawmcwo = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ooiewiwkegguusum = $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, Constants::ackcaikowcokggsc, []); if ($oammesyieqmwuwyi = $this->kmuweyayaqoeqiyw()->eqiocgwwikkieygw([Constants::ackcaikowcokggsc => $ooiewiwkegguusum, Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym])) { $qookweymeqawmcwo = [Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi, Constants::ceyqggmwsusggwok => $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, Constants::ceyqggmwsusggwok)]; } $qookweymeqawmcwo[self::ckwssiecokouqwma] = $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, self::ckwssiecokouqwma, false); $qookweymeqawmcwo[self::qoikaakymkggecmo] = $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, self::qoikaakymkggecmo, false); return $qookweymeqawmcwo; } }
