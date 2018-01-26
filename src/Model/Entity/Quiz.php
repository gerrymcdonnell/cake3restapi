<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Quiz Entity
 *
 * @property int $id
 * @property string $title
 * @property int $user_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\QuizzesAnswer[] $quizzes_answers
 * @property \App\Model\Entity\QuizzesResult[] $quizzes_results
 * @property \App\Model\Entity\Question[] $questions
 */
class Quiz extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'title' => true,
        'user_id' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'quizzes_answers' => true,
        'quizzes_results' => true,
        'questions' => true
    ];
}
