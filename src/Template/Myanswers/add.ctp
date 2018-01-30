<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Myanswer $myanswer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Myanswers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="myanswers form large-9 medium-8 columns content">
    <?= $this->Form->create($myanswer) ?>
    <fieldset>
        <legend><?= __('Add Myanswer') ?></legend>
        <?php
            echo $this->Form->control('question_id', ['options' => $questions]);
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('answerindex');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
