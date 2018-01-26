<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\QuizzesAnswer[]|\Cake\Collection\CollectionInterface $quizzesAnswers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Quizzes Answer'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Quizzes'), ['controller' => 'Quizzes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Quiz'), ['controller' => 'Quizzes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="quizzesAnswers index large-9 medium-8 columns content">
    <h3><?= __('Quizzes Answers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quiz_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('question_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('answerindex') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($quizzesAnswers as $quizzesAnswer): ?>
            <tr>
                <td><?= $this->Number->format($quizzesAnswer->id) ?></td>
                <td><?= $quizzesAnswer->has('quiz') ? $this->Html->link($quizzesAnswer->quiz->title, ['controller' => 'Quizzes', 'action' => 'view', $quizzesAnswer->quiz->id]) : '' ?></td>
                <td><?= $quizzesAnswer->has('question') ? $this->Html->link($quizzesAnswer->question->id, ['controller' => 'Questions', 'action' => 'view', $quizzesAnswer->question->id]) : '' ?></td>
                <td><?= $quizzesAnswer->has('user') ? $this->Html->link($quizzesAnswer->user->username, ['controller' => 'Users', 'action' => 'view', $quizzesAnswer->user->id]) : '' ?></td>
                <td><?= $this->Number->format($quizzesAnswer->answerindex) ?></td>
                <td><?= h($quizzesAnswer->created) ?></td>
                <td><?= h($quizzesAnswer->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $quizzesAnswer->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $quizzesAnswer->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $quizzesAnswer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quizzesAnswer->id)]) ?>
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
