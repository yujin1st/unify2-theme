<?php
/**
 * @author Evgeniy Bobrov <yujin1st@gmail.com>
 * @link http://yujin1st.ru
 */

namespace yujin1st\unify2theme;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
  public $sourcePath = '@yujin1st/unify2theme/assets';

  public $css = [
    'assets/vendor/bootstrap/bootstrap.min.css',
    'assets/css/unify-core.css',
    'assets/css/unify-components.css',
    'assets/css/unify-globals.css',
    'css/style.css',
  ];

  public $js = [
    'assets/vendor/jquery/jquery.min.js',
    'assets/vendor/jquery-migrate/jquery-migrate.min.js',
    'assets/vendor/popper.min.js',
    'assets/vendor/bootstrap/bootstrap.min.js',
    'assets/js/hs.core.js',
  ];

  public $depends = [
    // 'yii\bootstrap\BootstrapPluginAsset',
    // 'yii\web\YiiAsset',
  ];
}
