<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Myanswer[]|\Cake\Collection\CollectionInterface $myanswers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Myanswer'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="myanswers index large-9 medium-8 columns content">
    <h3><?= __('Myanswers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('question_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('answerindex') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($myanswers as $myanswer): ?>
            <tr>
                <td><?= $this->Number->format($myanswer->id) ?></td>
                <td><?= $myanswer->has('question') ? $this->Html->link($myanswer->question->id, ['controller' => 'Questions', 'action' => 'view', $myanswer->question->id]) : '' ?></td>
                <td><?= $myanswer->has('user') ? $this->Html->link($myanswer->user->username, ['controller' => 'Users', 'action' => 'view', $myanswer->user->id]) : '' ?></td>
                <td><?= $this->Number->format($myanswer->answerindex) ?></td>
                <td><?= h($myanswer->created) ?></td>
                <td><?= h($myanswer->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $myanswer->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $myanswer->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $myanswer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $myanswer->id)]) ?>
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