<?php
namespace App\Test\TestCase\Controller;

use App\Controller\QuestionsAnswersController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\QuestionsAnswersController Test Case
 */
class QuestionsAnswersControllerTest extends IntegrationTestCase
{

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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
