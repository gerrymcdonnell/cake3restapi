<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QuestionsAnswersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QuestionsAnswersTable Test Case
 */
class QuestionsAnswersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\QuestionsAnswersTable
     */
    public $QuestionsAnswers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.questions_answers',
        'app.questions',
        'app.users',
        'app.changelogs',
        'app.jokes',
        'app.questions_categories',
        'app.quizzes',
        'app.quizzes_answers',
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
        $config = TableRegistry::exists('QuestionsAnswers') ? [] : ['className' => QuestionsAnswersTable::class];
        $this->QuestionsAnswers = TableRegistry::get('QuestionsAnswers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->QuestionsAnswers);

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
