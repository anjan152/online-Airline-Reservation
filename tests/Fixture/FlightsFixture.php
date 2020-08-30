<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FlightsFixture
 */
class FlightsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'autoIncrement' => true, 'precision' => null, 'comment' => null],
        'aircraft_type_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'autoIncrement' => null],
        'price' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => null],
        'date' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'collate' => null],
        'from_date' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'collate' => null],
        'to_date' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'collate' => null],
        'counter' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'collate' => null],
        'departs' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'collate' => null],
        'arrives' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'collate' => null],
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
                'aircraft_type_id' => 1,
                'price' => 1,
                'date' => 'Lorem ipsum dolor sit amet',
                'from_date' => 'Lorem ipsum dolor sit amet',
                'to_date' => 'Lorem ipsum dolor sit amet',
                'counter' => 'Lorem ipsum dolor sit amet',
                'departs' => 'Lorem ipsum dolor sit amet',
                'arrives' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
