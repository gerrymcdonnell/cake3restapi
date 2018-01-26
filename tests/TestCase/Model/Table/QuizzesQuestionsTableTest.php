<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QuizzesQuestionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QuizzesQuestionsTable Test Case
 */
class QuizzesQuestionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\QuizzesQuestionsTable
     */
    public $QuizzesQuestions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.quizzes_questions',
        'app.questions',
        'app.questions_categories',
        'app.users',
        'app.changelogs',
        'app.jokes',
        'app.questions_answers',
        'app.quizzes',
        'app.quizzes_answers',
        'app.quizzes_results',
        'app.questionstypes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('QuizzesQuestions') ? [] : ['className' => QuizzesQuestionsTable::class];
        $this->QuizzesQuestions = TableRegistry::get('QuizzesQuestions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->QuizzesQuestions);

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
