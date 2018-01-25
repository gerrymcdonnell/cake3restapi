<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Question $question
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Question'), ['action' => 'edit', $question->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Question'), ['action' => 'delete', $question->id], ['confirm' => __('Are you sure you want to delete # {0}?', $question->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Questions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questions Categories'), ['controller' => 'QuestionsCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Questions Category'), ['controller' => 'QuestionsCategories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questions Answers'), ['controller' => 'QuestionsAnswers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Questions Answer'), ['controller' => 'QuestionsAnswers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="questions view large-9 medium-8 columns content">
    <h3><?= h($question->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Question') ?></th>
            <td><?= h($question->question) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ans1') ?></th>
            <td><?= h($question->ans1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ans2') ?></th>
            <td><?= h($question->ans2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ans3') ?></th>
            <td><?= h($question->ans3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ans4') ?></th>
            <td><?= h($question->ans4) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $question->has('user') ? $this->Html->link($question->user->username, ['controller' => 'Users', 'action' => 'view', $question->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Questions Category') ?></th>
            <td><?= $question->has('questions_category') ? $this->Html->link($question->questions_category->title, ['controller' => 'QuestionsCategories', 'action' => 'view', $question->questions_category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($question->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo Dir') ?></th>
            <td><?= h($question->photo_dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo Size') ?></th>
            <td><?= h($question->photo_size) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo Type') ?></th>
            <td><?= h($question->photo_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($question->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Correctans') ?></th>
            <td><?= $this->Number->format($question->correctans) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Difficulty') ?></th>
            <td><?= $this->Number->format($question->difficulty) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Questionstypes Id') ?></th>
            <td><?= $this->Number->format($question->questionstypes_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($question->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($question->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Flag') ?></th>
            <td><?= $question->flag ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Questions Answers') ?></h4>
        <?php if (!empty($question->questions_answers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Question Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Answerindex') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($question->questions_answers as $questionsAnswers): ?>
            <tr>
                <td><?= h($questionsAnswers->id) ?></td>
                <td><?= h($questionsAnswers->question_id) ?></td>
                <td><?= h($questionsAnswers->user_id) ?></td>
                <td><?= h($questionsAnswers->answerindex) ?></td>
                <td><?= h($questionsAnswers->created) ?></td>
                <td><?= h($questionsAnswers->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'QuestionsAnswers', 'action' => 'view', $questionsAnswers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'QuestionsAnswers', 'action' => 'edit', $questionsAnswers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'QuestionsAnswers', 'action' => 'delete', $questionsAnswers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questionsAnswers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
