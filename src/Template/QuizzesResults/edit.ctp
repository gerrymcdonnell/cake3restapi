<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\QuizzesResult $quizzesResult
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $quizzesResult->quiz_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $quizzesResult->quiz_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Quizzes Results'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Quizzes'), ['controller' => 'Quizzes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Quiz'), ['controller' => 'Quizzes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="quizzesResults form large-9 medium-8 columns content">
    <?= $this->Form->create($quizzesResult) ?>
    <fieldset>
        <legend><?= __('Edit Quizzes Result') ?></legend>
        <?php
            echo $this->Form->control('started');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
