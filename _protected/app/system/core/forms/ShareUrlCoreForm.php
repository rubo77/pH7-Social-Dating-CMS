<?php
/**
 * @author         Pierre-Henry Soria <ph7software@gmail.com>
 * @copyright      (c) 2012-2014, Pierre-Henry Soria. All Rights Reserved.
 * @license        GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package        PH7 / App / System / Core / Form
 */
namespace PH7;

use PH7\Framework\Mvc\Request\Http;

class ShareUrlCoreForm
{

    /**
     * @param $sUrl The URL to share. If you enter nothing, it will be the current url. Default value NULL
     * @return void
     */
    public static function display($sUrl = null)
    {
        $sUrl = (!empty($sUrl)) ? $sUrl : (new Http)->currentUrl();

        $oForm = new \PFBC\Form('form_share_url', 350);
        $oForm->configure(array('class' => 'center'));
        $oForm->addElement(new \PFBC\Element\Url(t('Share URL:'), 'share', array('value'=>$sUrl, 'readonly'=>'readonly', 'onclick'=>'this.select()')));
        $oForm->addElement(new \PFBC\Element\HTMLExternal('<br />'));
        $oForm->render();
    }

}
