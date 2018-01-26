<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\QuizzesAnswer $quizzesAnswer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Quizzes Answer'), ['action' => 'edit', $quizzesAnswer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Quizzes Answer'), ['action' => 'delete', $quizzesAnswer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quizzesAnswer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Quizzes Answers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quizzes Answer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Quizzes'), ['controller' => 'Quizzes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quiz'), ['controller' => 'Quizzes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="quizzesAnswers view large-9 medium-8 columns content">
    <h3><?= h($quizzesAnswer->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Quiz') ?></th>
            <td><?= $quizzesAnswer->has('quiz') ? $this->Html->link($quizzesAnswer->quiz->title, ['controller' => 'Quizzes', 'action' => 'view', $quizzesAnswer->quiz->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Question') ?></th>
            <td><?= $quizzesAnswer->has('question') ? $this->Html->link($quizzesAnswer->question->id, ['controller' => 'Questions', 'action' => 'view', $quizzesAnswer->question->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $quizzesAnswer->has('user') ? $this->Html->link($quizzesAnswer->user->username, ['controller' => 'Users', 'action' => 'view', $quizzesAnswer->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($quizzesAnswer->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Answerindex') ?></th>
            <td><?= $this->Number->format($quizzesAnswer->answerindex) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($quizzesAnswer->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($quizzesAnswer->modified) ?></td>
        </tr>
    </table>
</div>
