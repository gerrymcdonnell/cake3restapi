<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\QuizzesQuestion $quizzesQuestion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Quizzes Questions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Quizzes'), ['controller' => 'Quizzes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Quiz'), ['controller' => 'Quizzes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="quizzesQuestions form large-9 medium-8 columns content">
    <?= $this->Form->create($quizzesQuestion) ?>
    <fieldset>
        <legend><?= __('Add Quizzes Question') ?></legend>
        <?php
            echo $this->Form->control('question_id', ['options' => $questions]);
            echo $this->Form->control('quiz_id', ['options' => $quizzes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
