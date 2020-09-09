<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SpecialFaresTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SpecialFaresTable Test Case
 */
class SpecialFaresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SpecialFaresTable
     */
    protected $SpecialFares;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.SpecialFares',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('SpecialFares') ? [] : ['className' => SpecialFaresTable::class];
        $this->SpecialFares = $this->getTableLocator()->get('SpecialFares', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->SpecialFares);

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
