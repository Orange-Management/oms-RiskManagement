<?php
/**
 * Orange Management
 *
 * PHP Version 8.0
 *
 * @package   Modules\RiskManagement\Models
 * @copyright Dennis Eichhorn
 * @license   OMS License 1.0
 * @version   1.0.0
 * @link      https://orange-management.org
 */
declare(strict_types=1);

namespace Modules\RiskManagement\Models;

use phpOMS\Stdlib\Base\Enum;

/**
 * Permision state enum.
 *
 * @package Modules\RiskManagement\Models
 * @license OMS License 1.0
 * @link    https://orange-management.org
 * @since   1.0.0
 */
abstract class PermissionState extends Enum
{
    public const COCKPIT = 1;

    public const RISK = 2;

    public const CAUSE = 3;

    public const SOLUTION = 4;

    public const UNIT = 5;

    public const DEPARTMENT = 6;

    public const CATEGORY = 7;

    public const PROJECT = 8;

    public const PROCESS = 9;

    public const SETTINGS = 10;
}
