<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FlightSchedulesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FlightSchedulesTable Test Case
 */
class FlightSchedulesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FlightSchedulesTable
     */
    protected $FlightSchedules;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.FlightSchedules',
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
        $config = $this->getTableLocator()->exists('FlightSchedules') ? [] : ['className' => FlightSchedulesTable::class];
        $this->FlightSchedules = $this->getTableLocator()->get('FlightSchedules', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->FlightSchedules);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
