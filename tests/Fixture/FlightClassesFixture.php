<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FlightClassesFixture
 */
class FlightClassesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'autoIncrement' => true, 'precision' => null, 'comment' => null],
        'class' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'collate' => null],
        'additional_charge' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => null],
        'additional_facilities' => ['type' => 'string', 'length' => 40, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'collate' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'class' => 'Lorem ipsum dolor ',
                'additional_charge' => 1,
                'additional_facilities' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
