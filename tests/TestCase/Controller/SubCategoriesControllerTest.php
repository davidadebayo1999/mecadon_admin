<?php
namespace App\Test\TestCase\Controller;

use App\Controller\SubCategoriesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\SubCategoriesController Test Case
 */
class SubCategoriesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sub_categories',
        'app.main_categories',
        'app.products',
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
        'app.sizes',
        'app.products_sizes'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
