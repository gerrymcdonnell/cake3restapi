<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\QuizzesResult[]|\Cake\Collection\CollectionInterface $quizzesResults
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Quizzes Result'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Quizzes'), ['controller' => 'Quizzes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Quiz'), ['controller' => 'Quizzes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="quizzesResults index large-9 medium-8 columns content">
    <h3><?= __('Quizzes Results') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('quiz_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('started') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($quizzesResults as $quizzesResult): ?>
            <tr>
                <td><?= $quizzesResult->has('quiz') ? $this->Html->link($quizzesResult->quiz->title, ['controller' => 'Quizzes', 'action' => 'view', $quizzesResult->quiz->id]) : '' ?></td>
                <td><?= $quizzesResult->has('user') ? $this->Html->link($quizzesResult->user->username, ['controller' => 'Users', 'action' => 'view', $quizzesResult->user->id]) : '' ?></td>
                <td><?= h($quizzesResult->created) ?></td>
                <td><?= h($quizzesResult->modified) ?></td>
                <td><?= h($quizzesResult->started) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $quizzesResult->quiz_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $quizzesResult->quiz_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $quizzesResult->quiz_id], ['confirm' => __('Are you sure you want to delete # {0}?', $quizzesResult->quiz_id)]) ?>
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
