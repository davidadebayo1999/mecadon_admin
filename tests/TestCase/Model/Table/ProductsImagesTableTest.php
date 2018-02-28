<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductsImagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductsImagesTable Test Case
 */
class ProductsImagesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductsImagesTable
     */
    public $ProductsImages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.products_images',
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
        $config = TableRegistry::exists('ProductsImages') ? [] : ['className' => 'App\Model\Table\ProductsImagesTable'];
        $this->ProductsImages = TableRegistry::get('ProductsImages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProductsImages);

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
