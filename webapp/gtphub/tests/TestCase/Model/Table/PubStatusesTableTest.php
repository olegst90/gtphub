<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PubStatusesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PubStatusesTable Test Case
 */
class PubStatusesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PubStatusesTable
     */
    public $PubStatuses;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pub_statuses'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PubStatuses') ? [] : ['className' => 'App\Model\Table\PubStatusesTable'];
        $this->PubStatuses = TableRegistry::get('PubStatuses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PubStatuses);

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
