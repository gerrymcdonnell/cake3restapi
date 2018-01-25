<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\QuestionsAnswer $questionsAnswer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Questions Answer'), ['action' => 'edit', $questionsAnswer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Questions Answer'), ['action' => 'delete', $questionsAnswer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questionsAnswer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Questions Answers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Questions Answer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="questionsAnswers view large-9 medium-8 columns content">
    <h3><?= h($questionsAnswer->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Question') ?></th>
            <td><?= $questionsAnswer->has('question') ? $this->Html->link($questionsAnswer->question->id, ['controller' => 'Questions', 'action' => 'view', $questionsAnswer->question->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $questionsAnswer->has('user') ? $this->Html->link($questionsAnswer->user->username, ['controller' => 'Users', 'action' => 'view', $questionsAnswer->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($questionsAnswer->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Answerindex') ?></th>
            <td><?= $this->Number->format($questionsAnswer->answerindex) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($questionsAnswer->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($questionsAnswer->modified) ?></td>
        </tr>
    </table>
</div>
