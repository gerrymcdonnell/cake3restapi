<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QuestionsCategoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QuestionsCategoriesTable Test Case
 */
class QuestionsCategoriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\QuestionsCategoriesTable
     */
    public $QuestionsCategories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.questions_categories',
        'app.users',
        'app.changelogs',
        'app.jokes',
        'app.questions',
        'app.questionstypes',
        'app.questions_answers',
        'app.quizzes',
        'app.quizzes_answers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('QuestionsCategories') ? [] : ['className' => QuestionsCategoriesTable::class];
        $this->QuestionsCategories = TableRegistry::get('QuestionsCategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->QuestionsCategories);

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
