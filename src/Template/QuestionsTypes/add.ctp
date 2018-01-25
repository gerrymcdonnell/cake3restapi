<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\QuestionsType $questionsType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Questions Types'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="questionsTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($questionsType) ?>
    <fieldset>
        <legend><?= __('Add Questions Type') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
