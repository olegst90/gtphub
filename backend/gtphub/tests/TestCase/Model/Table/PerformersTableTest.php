<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PerformersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PerformersTable Test Case
 */
class PerformersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PerformersTable
     */
    public $Performers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.performers',
        'app.users',
        'app.pub_statuses',
        'app.songs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Performers') ? [] : ['className' => 'App\Model\Table\PerformersTable'];
        $this->Performers = TableRegistry::get('Performers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Performers);

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
