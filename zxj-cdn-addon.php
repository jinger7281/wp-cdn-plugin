<?php

/**
 * Plugin Name: CDN附加组件
 * Plugin URI: http://www.zhengxiaojing.cn
 * Description: 将网站所有素材资源，样式、脚本、字体，图片上传到CDN中
 * Version: 0.0.1
 * Requires PHP: 7.4
 * Author: jinger7281
 * License: Apache License V2.0
 * License URI: https://www.apache.org/licenses/LICENSE-2.0
 */

namespace zxj\cdn;

$ns = 'zxj\cdn\\';
function cdn_main_menu_page()
{
    global $ns;
    \add_menu_page('CDN设置', 'CDN设置', 'manage_options', 'cdn-settings', $ns . 'cdn_main_page', 'dashicons-rest-api', 100);
}
\add_action('admin_menu', $ns . 'cdn_main_menu_page');
function cdn_main_page()
{
    $url = plugin_dir_url(__FILE__);
    require plugin_dir_path(__FILE__).'/templates/setting-page.php';
}
