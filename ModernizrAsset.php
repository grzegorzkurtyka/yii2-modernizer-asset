<?php

/**
 * Modernizr Asset
 * @author Grzegorz Kurtyka <grzegorz.kurtyka@gmail.com>
 */

namespace grzegorzkurtyka\modernizr;

use yii\web\AssetBundle;

class ModernizrAsset extends AssetBundle {

    public $sourcePath = '@bower/modernizr';
    public $js = ['modernizr.js'];
    public $jsOptions = [
      'position' => \yii\web\View::POS_BEGIN
    ];
}
