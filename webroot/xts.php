<?php
/**
 * Created by PhpStorm.
 * User: rek
 * Date: 6/23/14
 * Time: 12:35 PM
 */
defined('X_DEBUG') or define('X_DEBUG', true);
define('X_PROJECT_ROOT', dirname(__DIR__));
require_once(X_PROJECT_ROOT.'/framework/x.php');
require_once(X_PROJECT_ROOT.'/protected/common.php');

/**
 * Class X
 * @method static \xts\View view()
 * @method static \xts\Redis redis()
 */
class X extends \xts\XComponentFactory {
    public static $conf;
    public static function assignConf() {
        self::$conf =& parent::$_conf;
    }
}
X::conf(require(X_PROJECT_ROOT.'/protected/config/debug.php'));
if(!X_DEBUG) {
    X::conf(require(X_PROJECT_ROOT.'/protected/config/release.php'));
}

X::assignConf();
