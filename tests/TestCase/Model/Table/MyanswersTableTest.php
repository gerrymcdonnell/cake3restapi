<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MyanswersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MyanswersTable Test Case
 */
class MyanswersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MyanswersTable
     */
    public $Myanswers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.myanswers',
        'app.questions',
        'app.questions_categories',
        'app.users',
        'app.changelogs',
        'app.jokes',
        'app.questions_answers',
        'app.quizzes',
        'app.quizzes_answers',
        'app.quizzes_results',
        'app.quizzes_questions',
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
        $config = TableRegistry::exists('Myanswers') ? [] : ['className' => MyanswersTable::class];
        $this->Myanswers = TableRegistry::get('Myanswers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Myanswers);

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
