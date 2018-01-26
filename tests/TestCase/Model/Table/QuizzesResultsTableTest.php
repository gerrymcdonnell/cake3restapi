<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QuizzesResultsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QuizzesResultsTable Test Case
 */
class QuizzesResultsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\QuizzesResultsTable
     */
    public $QuizzesResults;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.quizzes_results',
        'app.quizzes',
        'app.users',
        'app.changelogs',
        'app.jokes',
        'app.questions',
        'app.questions_categories',
        'app.questionstypes',
        'app.questions_answers',
        'app.quizzes_answers',
        'app.quizzes_questions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('QuizzesResults') ? [] : ['className' => QuizzesResultsTable::class];
        $this->QuizzesResults = TableRegistry::get('QuizzesResults', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->QuizzesResults);

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
