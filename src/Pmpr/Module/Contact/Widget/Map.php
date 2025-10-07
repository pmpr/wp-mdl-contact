<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             68e598cae04bd             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Contact\Widget; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Widget; class Map extends Widget { public function __construct() { parent::__construct(__('Map', PR__MDL__CONTACT), __('Display the map.', PR__MDL__CONTACT)); } public function ykwqaukkycogooii() { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::sogmkkcwuamuqegw)->gswweykyogmsyawy(__('Height', PR__MDL__CONTACT))->escqqisecooswqgo()); } public function gayqqwwuycceosii($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = []) : array { $qookweymeqawmcwo = []; if ($qmcuiciekkawmmms = $this->kmuweyayaqoeqiyw()->weuacucqmawwaswo()) { $cswemwoyesycwkuq = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($owgumcsyqsamiemg, Constants::sogmkkcwuamuqegw, 300); try { $qmcuiciekkawmmms = $this->caokeucsksukesyo()->gkksucgseqqemesc()->qcgocuceocquqcuw($qmcuiciekkawmmms, ['iframe' => [Constants::sogmkkcwuamuqegw => $cswemwoyesycwkuq]]); } catch (Exception $wgaoewqkwgomoaai) { } $qookweymeqawmcwo['map'] = $qmcuiciekkawmmms; } return $qookweymeqawmcwo; } }
