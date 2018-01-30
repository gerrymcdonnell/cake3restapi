<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Myjsontest[]|\Cake\Collection\CollectionInterface $myjsontest
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Myjsontest'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="myjsontest index large-9 medium-8 columns content">
    <h3><?= __('Myjsontest') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('question_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('answerindex') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($myjsontest as $myjsontest): ?>
            <tr>
                <td><?= $this->Number->format($myjsontest->id) ?></td>
                <td><?= h($myjsontest->title) ?></td>
                <td><?= $myjsontest->has('user') ? $this->Html->link($myjsontest->user->username, ['controller' => 'Users', 'action' => 'view', $myjsontest->user->id]) : '' ?></td>
                <td><?= $myjsontest->has('question') ? $this->Html->link($myjsontest->question->id, ['controller' => 'Questions', 'action' => 'view', $myjsontest->question->id]) : '' ?></td>
                <td><?= $this->Number->format($myjsontest->answerindex) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $myjsontest->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $myjsontest->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $myjsontest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $myjsontest->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
