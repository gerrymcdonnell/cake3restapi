<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Myanswer $myanswer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Myanswer'), ['action' => 'edit', $myanswer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Myanswer'), ['action' => 'delete', $myanswer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $myanswer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Myanswers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Myanswer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="myanswers view large-9 medium-8 columns content">
    <h3><?= h($myanswer->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Question') ?></th>
            <td><?= $myanswer->has('question') ? $this->Html->link($myanswer->question->id, ['controller' => 'Questions', 'action' => 'view', $myanswer->question->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $myanswer->has('user') ? $this->Html->link($myanswer->user->username, ['controller' => 'Users', 'action' => 'view', $myanswer->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($myanswer->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Answerindex') ?></th>
            <td><?= $this->Number->format($myanswer->answerindex) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($myanswer->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($myanswer->modified) ?></td>
        </tr>
    </table>
</div>
