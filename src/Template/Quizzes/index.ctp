<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Quiz[]|\Cake\Collection\CollectionInterface $quizzes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Quiz'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Quizzes Answers'), ['controller' => 'QuizzesAnswers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Quizzes Answer'), ['controller' => 'QuizzesAnswers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Quizzes Results'), ['controller' => 'QuizzesResults', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Quizzes Result'), ['controller' => 'QuizzesResults', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="quizzes index large-9 medium-8 columns content">
    <h3><?= __('Quizzes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($quizzes as $quiz): ?>
            <tr>
                <td><?= $this->Number->format($quiz->id) ?></td>
                <td><?= h($quiz->title) ?></td>
                <td><?= $quiz->has('user') ? $this->Html->link($quiz->user->username, ['controller' => 'Users', 'action' => 'view', $quiz->user->id]) : '' ?></td>
                <td><?= h($quiz->created) ?></td>
                <td><?= h($quiz->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $quiz->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $quiz->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $quiz->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quiz->id)]) ?>
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
