<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'autoIncrement' => true, 'precision' => null, 'comment' => null],
        'email' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'collate' => null],
        'password' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'collate' => null],
        'first_name' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'collate' => null],
        'last_name' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'collate' => null],
        'address' => ['type' => 'string', 'length' => 40, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'collate' => null],
        'passport_details' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'collate' => null],
        'state' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'collate' => null],
        'country' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'collate' => null],
        'is_admin' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '0', 'precision' => null, 'comment' => null],
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
                'email' => 'Lorem ipsum dolor ',
                'password' => 'Lorem ipsum d',
                'first_name' => 'Lorem ipsum dolor ',
                'last_name' => 'Lorem ipsum dolor ',
                'address' => 'Lorem ipsum dolor sit amet',
                'passport_details' => 'Lorem ipsum dolor sit amet',
                'state' => 'Lorem ipsum dolor sit amet',
                'country' => 'Lorem ipsum dolor sit amet',
                'is_admin' => 1,
            ],
        ];
        parent::init();
    }
}
