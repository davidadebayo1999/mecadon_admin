<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductsBrandsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductsBrandsTable Test Case
 */
class ProductsBrandsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductsBrandsTable
     */
    public $ProductsBrands;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.products_brands',
        'app.products',
        'app.sub_categories',
        'app.order_items',
        'app.orders',
        'app.users',
        'app.brands',
        'app.colors',
        'app.products_colors',
        'app.hands',
        'app.products_hands',
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
        $config = TableRegistry::exists('ProductsBrands') ? [] : ['className' => 'App\Model\Table\ProductsBrandsTable'];
        $this->ProductsBrands = TableRegistry::get('ProductsBrands', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProductsBrands);

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
