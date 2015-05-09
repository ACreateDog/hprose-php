<?php
/**********************************************************\
|                                                          |
|                          hprose                          |
|                                                          |
| Official WebSite: http://www.hprose.com/                 |
|                   http://www.hprose.org/                 |
|                                                          |
\**********************************************************/

/**********************************************************\
 *                                                        *
 * Hprose.php                                             *
 *                                                        *
 * hprose for php 5.3+                                    *
 *                                                        *
 * LastModified: May 9, 2015                              *
 * Author: Ma Bingyao <andot@hprose.com>                  *
 *                                                        *
\**********************************************************/

spl_autoload_register(function($className) {
    spl_autoload(str_replace("\\", "/", $className));
});

if (!extension_loaded('hprose')) {
    function hprose_serialize($var, $simple = false) {
        return \Hprose\Formatter::serialize($var, $simple);
    }
    function hprose_unserialize($data, $simple = false) {
        return \Hprose\Formatter::unserialize($data, $simple);
    }
}
