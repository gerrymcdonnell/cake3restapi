<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\QuestionsAnswer[]|\Cake\Collection\CollectionInterface $questionsAnswers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Questions Answer'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="questionsAnswers index large-9 medium-8 columns content">
    <h3><?= __('Questions Answers') ?></h3>
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
            <?php foreach ($questionsAnswers as $questionsAnswer): ?>
            <tr>
                <td><?= $this->Number->format($questionsAnswer->id) ?></td>
                <td><?= $questionsAnswer->has('question') ? $this->Html->link($questionsAnswer->question->id, ['controller' => 'Questions', 'action' => 'view', $questionsAnswer->question->id]) : '' ?></td>
                <td><?= $questionsAnswer->has('user') ? $this->Html->link($questionsAnswer->user->username, ['controller' => 'Users', 'action' => 'view', $questionsAnswer->user->id]) : '' ?></td>
                <td><?= $this->Number->format($questionsAnswer->answerindex) ?></td>
                <td><?= h($questionsAnswer->created) ?></td>
                <td><?= h($questionsAnswer->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $questionsAnswer->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $questionsAnswer->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $questionsAnswer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questionsAnswer->id)]) ?>
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
