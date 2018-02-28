<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductsSizesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductsSizesTable Test Case
 */
class ProductsSizesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductsSizesTable
     */
    public $ProductsSizes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.products_sizes',
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
        'app.products_lengths',
        'app.sizes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ProductsSizes') ? [] : ['className' => 'App\Model\Table\ProductsSizesTable'];
        $this->ProductsSizes = TableRegistry::get('ProductsSizes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProductsSizes);

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
