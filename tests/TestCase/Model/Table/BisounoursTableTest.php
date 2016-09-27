<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BisounoursTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BisounoursTable Test Case
 */
class BisounoursTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BisounoursTable
     */
    public $Bisounours;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bisounours'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Bisounours') ? [] : ['className' => 'App\Model\Table\BisounoursTable'];
        $this->Bisounours = TableRegistry::get('Bisounours', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Bisounours);

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
