<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Word[]|\Cake\Collection\CollectionInterface $words
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Word'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="words index large-9 medium-8 columns content">
    <h3><?= __('Words') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('wordtitle') ?></th>
                <th scope="col"><?= $this->Paginator->sort('word_syllables') ?></th>
                <th scope="col"><?= $this->Paginator->sort('picture') ?></th>
                <th scope="col"><?= $this->Paginator->sort('picture_dir') ?></th>
                <th scope="col"><?= $this->Paginator->sort('soundfile') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($words as $word): ?>
            <tr>
                <td><?= $this->Number->format($word->id) ?></td>
                <td><?= h($word->wordtitle) ?></td>
                <td><?= h($word->word_syllables) ?></td>
                <td><?= h($word->picture) ?></td>
                <td><?= h($word->picture_dir) ?></td>
                <td><?= h($word->soundfile) ?></td>
                <td><?= $this->Number->format($word->user_id) ?></td>
                <td><?= h($word->created) ?></td>
                <td><?= h($word->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $word->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $word->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $word->id], ['confirm' => __('Are you sure you want to delete # {0}?', $word->id)]) ?>
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
