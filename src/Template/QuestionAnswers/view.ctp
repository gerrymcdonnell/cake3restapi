<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\QuestionAnswer $questionAnswer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Question Answer'), ['action' => 'edit', $questionAnswer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Question Answer'), ['action' => 'delete', $questionAnswer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questionAnswer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Question Answers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question Answer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="questionAnswers view large-9 medium-8 columns content">
    <h3><?= h($questionAnswer->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Question') ?></th>
            <td><?= $questionAnswer->has('question') ? $this->Html->link($questionAnswer->question->id, ['controller' => 'Questions', 'action' => 'view', $questionAnswer->question->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $questionAnswer->has('user') ? $this->Html->link($questionAnswer->user->username, ['controller' => 'Users', 'action' => 'view', $questionAnswer->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($questionAnswer->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Answerindex') ?></th>
            <td><?= $this->Number->format($questionAnswer->answerindex) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($questionAnswer->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($questionAnswer->modified) ?></td>
        </tr>
    </table>
</div>
