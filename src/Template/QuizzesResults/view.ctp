<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\QuizzesResult $quizzesResult
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Quizzes Result'), ['action' => 'edit', $quizzesResult->quiz_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Quizzes Result'), ['action' => 'delete', $quizzesResult->quiz_id], ['confirm' => __('Are you sure you want to delete # {0}?', $quizzesResult->quiz_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Quizzes Results'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quizzes Result'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Quizzes'), ['controller' => 'Quizzes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quiz'), ['controller' => 'Quizzes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="quizzesResults view large-9 medium-8 columns content">
    <h3><?= h($quizzesResult->quiz_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Quiz') ?></th>
            <td><?= $quizzesResult->has('quiz') ? $this->Html->link($quizzesResult->quiz->title, ['controller' => 'Quizzes', 'action' => 'view', $quizzesResult->quiz->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $quizzesResult->has('user') ? $this->Html->link($quizzesResult->user->username, ['controller' => 'Users', 'action' => 'view', $quizzesResult->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($quizzesResult->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($quizzesResult->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Started') ?></th>
            <td><?= h($quizzesResult->started) ?></td>
        </tr>
    </table>
</div>
