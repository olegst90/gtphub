<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AccessProfilesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AccessProfilesTable Test Case
 */
class AccessProfilesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AccessProfilesTable
     */
    public $AccessProfiles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.access_profiles',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AccessProfiles') ? [] : ['className' => 'App\Model\Table\AccessProfilesTable'];
        $this->AccessProfiles = TableRegistry::get('AccessProfiles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AccessProfiles);

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
