<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Plugins\LogRequests;

class LogRequests extends \Piwik\Plugin
{
    /**
     * @see Piwik\Plugin::registerEvents
     */
    public function registerEvents()
    {
        return array(
            'AssetManager.getStylesheetFiles'        => 'getStylesheetFiles',
            'AssetManager.getJavaScriptFiles'        => 'getJsFiles'
        );
    }

    public function getStylesheetFiles(&$stylesheets)
    {
        $stylesheets[] = "plugins/LogRequests/assets/style.css";
    }

    public function getJsFiles(&$jsFiles)
    {
        $jsFiles[] = "plugins/LogRequests/assets/log_requests.js";
    }
}
