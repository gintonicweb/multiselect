<?php
namespace Multiselect\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 *
 */
class ArticlesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'featured' => ['type' => 'boolean', 'null' => false, 'default' => 0, 'comment' => '', 'precision' => null, 'fixed' => null],
        'approved' => ['type' => 'boolean', 'null' => false, 'default' => 0, 'comment' => '', 'precision' => null, 'fixed' => null],
        'published' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'featured' => true,
            'approved' => true,
            'published' => '2015-09-02 00:00:00',
        ],
        [
            'featured' => true,
            'approved' => true,
            'published' => '2015-09-01 00:00:00',
        ],
        [
            'featured' => false,
            'approved' => false,
            'published' => '2015-09-01 00:00:00',
        ],
    ];
}
