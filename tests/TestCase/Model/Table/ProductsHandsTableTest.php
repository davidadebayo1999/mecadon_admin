<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductsHandsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductsHandsTable Test Case
 */
class ProductsHandsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductsHandsTable
     */
    public $ProductsHands;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.products_hands',
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
        'app.images',
        'app.products_images',
        'app.lengths',
        'app.products_lengths',
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
        $config = TableRegistry::exists('ProductsHands') ? [] : ['className' => 'App\Model\Table\ProductsHandsTable'];
        $this->ProductsHands = TableRegistry::get('ProductsHands', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProductsHands);

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
