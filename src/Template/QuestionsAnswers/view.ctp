<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Questionsanswer $questionsanswer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Questionsanswer'), ['action' => 'edit', $questionsanswer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Questionsanswer'), ['action' => 'delete', $questionsanswer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questionsanswer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Questionsanswers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Questionsanswer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="questionsanswers view large-9 medium-8 columns content">
    <h3><?= h($questionsanswer->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Question') ?></th>
            <td><?= $questionsanswer->has('question') ? $this->Html->link($questionsanswer->question->id, ['controller' => 'Questions', 'action' => 'view', $questionsanswer->question->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $questionsanswer->has('user') ? $this->Html->link($questionsanswer->user->username, ['controller' => 'Users', 'action' => 'view', $questionsanswer->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($questionsanswer->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Answerindex') ?></th>
            <td><?= $this->Number->format($questionsanswer->answerindex) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($questionsanswer->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($questionsanswer->modified) ?></td>
        </tr>
    </table>
</div>
