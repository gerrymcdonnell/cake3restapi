<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Quiz $quiz
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Quiz'), ['action' => 'edit', $quiz->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Quiz'), ['action' => 'delete', $quiz->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quiz->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Quizzes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quiz'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Quizzes Answers'), ['controller' => 'QuizzesAnswers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quizzes Answer'), ['controller' => 'QuizzesAnswers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Quizzes Results'), ['controller' => 'QuizzesResults', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quizzes Result'), ['controller' => 'QuizzesResults', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="quizzes view large-9 medium-8 columns content">
    <h3><?= h($quiz->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($quiz->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $quiz->has('user') ? $this->Html->link($quiz->user->username, ['controller' => 'Users', 'action' => 'view', $quiz->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($quiz->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($quiz->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($quiz->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Questions') ?></h4>
        <?php if (!empty($quiz->questions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Question') ?></th>
                <th scope="col"><?= __('Ans1') ?></th>
                <th scope="col"><?= __('Ans2') ?></th>
                <th scope="col"><?= __('Ans3') ?></th>
                <th scope="col"><?= __('Ans4') ?></th>
                <th scope="col"><?= __('Correctans') ?></th>
                <th scope="col"><?= __('Difficulty') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Questions Categories Id') ?></th>
                <th scope="col"><?= __('Questionstypes Id') ?></th>
                <th scope="col"><?= __('Flag') ?></th>
                <th scope="col"><?= __('Photo') ?></th>
                <th scope="col"><?= __('Photo Dir') ?></th>
                <th scope="col"><?= __('Photo Size') ?></th>
                <th scope="col"><?= __('Photo Type') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($quiz->questions as $questions): ?>
            <tr>
                <td><?= h($questions->id) ?></td>
                <td><?= h($questions->question) ?></td>
                <td><?= h($questions->ans1) ?></td>
                <td><?= h($questions->ans2) ?></td>
                <td><?= h($questions->ans3) ?></td>
                <td><?= h($questions->ans4) ?></td>
                <td><?= h($questions->correctans) ?></td>
                <td><?= h($questions->difficulty) ?></td>
                <td><?= h($questions->user_id) ?></td>
                <td><?= h($questions->questions_categories_id) ?></td>
                <td><?= h($questions->questionstypes_id) ?></td>
                <td><?= h($questions->flag) ?></td>
                <td><?= h($questions->photo) ?></td>
                <td><?= h($questions->photo_dir) ?></td>
                <td><?= h($questions->photo_size) ?></td>
                <td><?= h($questions->photo_type) ?></td>
                <td><?= h($questions->created) ?></td>
                <td><?= h($questions->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Questions', 'action' => 'view', $questions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Questions', 'action' => 'edit', $questions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Questions', 'action' => 'delete', $questions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Quizzes Answers') ?></h4>
        <?php if (!empty($quiz->quizzes_answers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Quiz Id') ?></th>
                <th scope="col"><?= __('Question Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Answerindex') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($quiz->quizzes_answers as $quizzesAnswers): ?>
            <tr>
                <td><?= h($quizzesAnswers->id) ?></td>
                <td><?= h($quizzesAnswers->quiz_id) ?></td>
                <td><?= h($quizzesAnswers->question_id) ?></td>
                <td><?= h($quizzesAnswers->user_id) ?></td>
                <td><?= h($quizzesAnswers->answerindex) ?></td>
                <td><?= h($quizzesAnswers->created) ?></td>
                <td><?= h($quizzesAnswers->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'QuizzesAnswers', 'action' => 'view', $quizzesAnswers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'QuizzesAnswers', 'action' => 'edit', $quizzesAnswers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'QuizzesAnswers', 'action' => 'delete', $quizzesAnswers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quizzesAnswers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Quizzes Results') ?></h4>
        <?php if (!empty($quiz->quizzes_results)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Quiz Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Started') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($quiz->quizzes_results as $quizzesResults): ?>
            <tr>
                <td><?= h($quizzesResults->quiz_id) ?></td>
                <td><?= h($quizzesResults->user_id) ?></td>
                <td><?= h($quizzesResults->created) ?></td>
                <td><?= h($quizzesResults->modified) ?></td>
                <td><?= h($quizzesResults->started) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'QuizzesResults', 'action' => 'view', $quizzesResults->quiz_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'QuizzesResults', 'action' => 'edit', $quizzesResults->quiz_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'QuizzesResults', 'action' => 'delete', $quizzesResults->quiz_id], ['confirm' => __('Are you sure you want to delete # {0}?', $quizzesResults->quiz_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
