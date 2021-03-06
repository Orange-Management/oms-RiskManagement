<?php
/**
 * Orange Management
 *
 * PHP Version 8.0
 *
 * @package   tests
 * @copyright Dennis Eichhorn
 * @license   OMS License 1.0
 * @version   1.0.0
 * @link      https://orange-management.org
 */
declare(strict_types=1);

namespace Modules\RiskManagement\tests\Models;

use Modules\Organization\Models\NullUnit;
use Modules\RiskManagement\Models\NullDepartment;
use Modules\RiskManagement\Models\Process;
use Modules\RiskManagement\Models\ProcessMapper;

/**
 * @internal
 */
class ProcessMapperTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @covers Modules\RiskManagement\Models\ProcessMapper
     * @group module
     */
    public function testCRUD() : void
    {
        $obj                 = new Process();
        $obj->title          = 'Name';
        $obj->descriptionRaw = 'Description';
        $obj->setDepartment(new NullDepartment(2));
        $obj->setResponsible(1);
        $obj->setDeputy(1);
        $obj->setUnit(new NullUnit(1));

        ProcessMapper::create($obj);

        $objR = ProcessMapper::get($obj->getId());
        self::assertEquals($obj->title, $objR->title);
        self::assertEquals($obj->descriptionRaw, $objR->descriptionRaw);
        self::assertEquals($obj->getResponsible(), $objR->getResponsible());
        self::assertEquals($obj->getDeputy(), $objR->getDeputy());
        self::assertEquals($obj->getDepartment()->getId(), $objR->getDepartment()->getId());
        self::assertEquals($obj->getUnit()->getId(), $objR->getUnit()->getId());
    }
}
