<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Question[]|\Cake\Collection\CollectionInterface $questions
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Question'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questions Categories'), ['controller' => 'QuestionsCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Questions Category'), ['controller' => 'QuestionsCategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questions Answers'), ['controller' => 'QuestionsAnswers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Questions Answer'), ['controller' => 'QuestionsAnswers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="questions index large-9 medium-8 columns content">
    <h3><?= __('Questions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('question') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ans1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ans2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ans3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ans4') ?></th>
                <th scope="col"><?= $this->Paginator->sort('correctans') ?></th>
                <th scope="col"><?= $this->Paginator->sort('difficulty') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('questions_categories_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('questionstypes_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('flag') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo_dir') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo_size') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($questions as $question): ?>
            <tr>
                <td><?= $this->Number->format($question->id) ?></td>
                <td><?= h($question->question) ?></td>
                <td><?= h($question->ans1) ?></td>
                <td><?= h($question->ans2) ?></td>
                <td><?= h($question->ans3) ?></td>
                <td><?= h($question->ans4) ?></td>
                <td><?= $this->Number->format($question->correctans) ?></td>
                <td><?= $this->Number->format($question->difficulty) ?></td>
                <td><?= $question->has('user') ? $this->Html->link($question->user->username, ['controller' => 'Users', 'action' => 'view', $question->user->id]) : '' ?></td>
                <td><?= $question->has('questions_category') ? $this->Html->link($question->questions_category->title, ['controller' => 'QuestionsCategories', 'action' => 'view', $question->questions_category->id]) : '' ?></td>
                <td><?= $this->Number->format($question->questionstypes_id) ?></td>
                <td><?= h($question->flag) ?></td>
                <td><?= h($question->photo) ?></td>
                <td><?= h($question->photo_dir) ?></td>
                <td><?= h($question->photo_size) ?></td>
                <td><?= h($question->photo_type) ?></td>
                <td><?= h($question->created) ?></td>
                <td><?= h($question->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $question->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $question->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $question->id], ['confirm' => __('Are you sure you want to delete # {0}?', $question->id)]) ?>
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
