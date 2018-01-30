<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Myjsontest $myjsontest
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Myjsontest'), ['action' => 'edit', $myjsontest->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Myjsontest'), ['action' => 'delete', $myjsontest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $myjsontest->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Myjsontest'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Myjsontest'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="myjsontest view large-9 medium-8 columns content">
    <h3><?= h($myjsontest->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($myjsontest->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $myjsontest->has('user') ? $this->Html->link($myjsontest->user->username, ['controller' => 'Users', 'action' => 'view', $myjsontest->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Question') ?></th>
            <td><?= $myjsontest->has('question') ? $this->Html->link($myjsontest->question->id, ['controller' => 'Questions', 'action' => 'view', $myjsontest->question->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($myjsontest->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Answerindex') ?></th>
            <td><?= $this->Number->format($myjsontest->answerindex) ?></td>
        </tr>
    </table>
</div>
