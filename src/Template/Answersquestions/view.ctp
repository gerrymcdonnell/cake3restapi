<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Answersquestion $answersquestion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Answersquestion'), ['action' => 'edit', $answersquestion->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Answersquestion'), ['action' => 'delete', $answersquestion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $answersquestion->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Answersquestions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Answersquestion'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="answersquestions view large-9 medium-8 columns content">
    <h3><?= h($answersquestion->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Question') ?></th>
            <td><?= $answersquestion->has('question') ? $this->Html->link($answersquestion->question->id, ['controller' => 'Questions', 'action' => 'view', $answersquestion->question->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $answersquestion->has('user') ? $this->Html->link($answersquestion->user->username, ['controller' => 'Users', 'action' => 'view', $answersquestion->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($answersquestion->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Answerindex') ?></th>
            <td><?= $this->Number->format($answersquestion->answerindex) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($answersquestion->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($answersquestion->modified) ?></td>
        </tr>
    </table>
</div>
