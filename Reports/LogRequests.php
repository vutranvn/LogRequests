<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Plugins\LogRequests\Reports;

/**
 * This class defines a new report.
 *
 * See {@link http://developer.piwik.org/api-reference/Piwik/Plugin/Report} for more information.
 */
class LogRequests extends Base
{
	protected function init()
	{
		parent::init();

		$this->subcategoryId = 'LogRequests_LogRequests';
		$this->order = 1;
	}
}
