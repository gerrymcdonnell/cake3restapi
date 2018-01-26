<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Photo $photo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Photo'), ['action' => 'edit', $photo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Photo'), ['action' => 'delete', $photo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $photo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Photos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Photo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="photos view large-9 medium-8 columns content">
    <h3><?= h($photo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $photo->has('user') ? $this->Html->link($photo->user->username, ['controller' => 'Users', 'action' => 'view', $photo->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($photo->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo Dir') ?></th>
            <td><?= h($photo->photo_dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo Size') ?></th>
            <td><?= h($photo->photo_size) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo Type') ?></th>
            <td><?= h($photo->photo_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($photo->id) ?></td>
        </tr>
    </table>
</div>
