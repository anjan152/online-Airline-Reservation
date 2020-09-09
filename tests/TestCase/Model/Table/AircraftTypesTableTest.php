<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AircraftTypesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AircraftTypesTable Test Case
 */
class AircraftTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AircraftTypesTable
     */
    protected $AircraftTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.AircraftTypes',
        'app.Flights',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('AircraftTypes') ? [] : ['className' => AircraftTypesTable::class];
        $this->AircraftTypes = $this->getTableLocator()->get('AircraftTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->AircraftTypes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
