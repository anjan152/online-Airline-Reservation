<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FlightClassesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FlightClassesTable Test Case
 */
class FlightClassesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FlightClassesTable
     */
    protected $FlightClasses;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.FlightClasses',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('FlightClasses') ? [] : ['className' => FlightClassesTable::class];
        $this->FlightClasses = $this->getTableLocator()->get('FlightClasses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->FlightClasses);

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
