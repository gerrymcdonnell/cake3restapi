<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\QuestionsType $questionsType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Questions Type'), ['action' => 'edit', $questionsType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Questions Type'), ['action' => 'delete', $questionsType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questionsType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Questions Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Questions Type'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="questionsTypes view large-9 medium-8 columns content">
    <h3><?= h($questionsType->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($questionsType->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($questionsType->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($questionsType->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($questionsType->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($questionsType->description)); ?>
    </div>
</div>
