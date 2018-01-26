<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\QuizzesQuestion $quizzesQuestion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Quizzes Question'), ['action' => 'edit', $quizzesQuestion->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Quizzes Question'), ['action' => 'delete', $quizzesQuestion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quizzesQuestion->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Quizzes Questions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quizzes Question'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Quizzes'), ['controller' => 'Quizzes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quiz'), ['controller' => 'Quizzes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="quizzesQuestions view large-9 medium-8 columns content">
    <h3><?= h($quizzesQuestion->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Question') ?></th>
            <td><?= $quizzesQuestion->has('question') ? $this->Html->link($quizzesQuestion->question->id, ['controller' => 'Questions', 'action' => 'view', $quizzesQuestion->question->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quiz') ?></th>
            <td><?= $quizzesQuestion->has('quiz') ? $this->Html->link($quizzesQuestion->quiz->title, ['controller' => 'Quizzes', 'action' => 'view', $quizzesQuestion->quiz->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($quizzesQuestion->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($quizzesQuestion->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($quizzesQuestion->modified) ?></td>
        </tr>
    </table>
</div>
