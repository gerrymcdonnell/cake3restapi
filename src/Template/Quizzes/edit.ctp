<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Quiz $quiz
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $quiz->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $quiz->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Quizzes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Quizzes Answers'), ['controller' => 'QuizzesAnswers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Quizzes Answer'), ['controller' => 'QuizzesAnswers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Quizzes Results'), ['controller' => 'QuizzesResults', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Quizzes Result'), ['controller' => 'QuizzesResults', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="quizzes form large-9 medium-8 columns content">
    <?= $this->Form->create($quiz) ?>
    <fieldset>
        <legend><?= __('Edit Quiz') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('questions._ids', ['options' => $questions]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
