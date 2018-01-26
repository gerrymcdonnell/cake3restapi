<?php
namespace App\Test\TestCase\Controller;

use App\Controller\QuizzesAnswersController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\QuizzesAnswersController Test Case
 */
class QuizzesAnswersControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.quizzes_answers',
        'app.quizzes',
        'app.users',
        'app.changelogs',
        'app.jokes',
        'app.questions',
        'app.questions_categories',
        'app.questionstypes',
        'app.questions_answers',
        'app.quizzes_questions',
        'app.quizzes_results'
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
