<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductsLengthsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductsLengthsTable Test Case
 */
class ProductsLengthsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductsLengthsTable
     */
    public $ProductsLengths;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.products_lengths',
        'app.products',
        'app.sub_categories',
        'app.order_items',
        'app.orders',
        'app.users',
        'app.brands',
        'app.products_brands',
        'app.colors',
        'app.products_colors',
        'app.hands',
        'app.products_hands',
        'app.images',
        'app.products_images',
        'app.lengths',
        'app.sizes',
        'app.products_sizes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ProductsLengths') ? [] : ['className' => 'App\Model\Table\ProductsLengthsTable'];
        $this->ProductsLengths = TableRegistry::get('ProductsLengths', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProductsLengths);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
