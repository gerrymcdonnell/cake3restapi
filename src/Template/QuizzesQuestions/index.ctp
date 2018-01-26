<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\QuizzesQuestion[]|\Cake\Collection\CollectionInterface $quizzesQuestions
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Quizzes Question'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Quizzes'), ['controller' => 'Quizzes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Quiz'), ['controller' => 'Quizzes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="quizzesQuestions index large-9 medium-8 columns content">
    <h3><?= __('Quizzes Questions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('question_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quiz_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($quizzesQuestions as $quizzesQuestion): ?>
            <tr>
                <td><?= $this->Number->format($quizzesQuestion->id) ?></td>
                <td><?= $quizzesQuestion->has('question') ? $this->Html->link($quizzesQuestion->question->id, ['controller' => 'Questions', 'action' => 'view', $quizzesQuestion->question->id]) : '' ?></td>
                <td><?= $quizzesQuestion->has('quiz') ? $this->Html->link($quizzesQuestion->quiz->title, ['controller' => 'Quizzes', 'action' => 'view', $quizzesQuestion->quiz->id]) : '' ?></td>
                <td><?= h($quizzesQuestion->created) ?></td>
                <td><?= h($quizzesQuestion->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $quizzesQuestion->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $quizzesQuestion->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $quizzesQuestion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quizzesQuestion->id)]) ?>
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
