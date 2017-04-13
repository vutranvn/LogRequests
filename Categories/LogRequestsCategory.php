<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */
namespace Piwik\Plugins\LogRequests\Categories;

use Piwik\Category\Category;

class LogRequestsCategory extends Category
{
    protected $id = 'LogRequests_Diagnostic';
    protected $order = 90;
    protected $icon = 'icon-annotation';
}