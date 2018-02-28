<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LengthsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LengthsTable Test Case
 */
class LengthsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LengthsTable
     */
    public $Lengths;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.lengths',
        'app.products',
        'app.products_lengths'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Lengths') ? [] : ['className' => 'App\Model\Table\LengthsTable'];
        $this->Lengths = TableRegistry::get('Lengths', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Lengths);

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
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
