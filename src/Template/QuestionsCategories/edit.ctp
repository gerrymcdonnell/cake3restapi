<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\QuestionsCategory $questionsCategory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $questionsCategory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $questionsCategory->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Questions Categories'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="questionsCategories form large-9 medium-8 columns content">
    <?= $this->Form->create($questionsCategory) ?>
    <fieldset>
        <legend><?= __('Edit Questions Category') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
