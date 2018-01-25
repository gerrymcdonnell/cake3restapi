<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QuestionsTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QuestionsTypesTable Test Case
 */
class QuestionsTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\QuestionsTypesTable
     */
    public $QuestionsTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.questions_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('QuestionsTypes') ? [] : ['className' => QuestionsTypesTable::class];
        $this->QuestionsTypes = TableRegistry::get('QuestionsTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->QuestionsTypes);

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
