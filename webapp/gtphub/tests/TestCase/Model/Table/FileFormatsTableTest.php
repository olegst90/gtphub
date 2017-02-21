<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FileFormatsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FileFormatsTable Test Case
 */
class FileFormatsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FileFormatsTable
     */
    public $FileFormats;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.file_formats'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('FileFormats') ? [] : ['className' => 'App\Model\Table\FileFormatsTable'];
        $this->FileFormats = TableRegistry::get('FileFormats', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FileFormats);

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
