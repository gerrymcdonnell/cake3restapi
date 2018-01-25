<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Question $question
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $question->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $question->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Questions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questions Categories'), ['controller' => 'QuestionsCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Questions Category'), ['controller' => 'QuestionsCategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questions Answers'), ['controller' => 'QuestionsAnswers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Questions Answer'), ['controller' => 'QuestionsAnswers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="questions form large-9 medium-8 columns content">
    <?= $this->Form->create($question) ?>
    <fieldset>
        <legend><?= __('Edit Question') ?></legend>
        <?php
            echo $this->Form->control('question');
            echo $this->Form->control('ans1');
            echo $this->Form->control('ans2');
            echo $this->Form->control('ans3');
            echo $this->Form->control('ans4');
            echo $this->Form->control('correctans');
            echo $this->Form->control('difficulty');
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('questions_categories_id', ['options' => $questionsCategories]);
            echo $this->Form->control('questionstypes_id');
            echo $this->Form->control('flag');
            echo $this->Form->control('photo');
            echo $this->Form->control('photo_dir');
            echo $this->Form->control('photo_size');
            echo $this->Form->control('photo_type');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
