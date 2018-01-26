<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * QuizzesQuestion Entity
 *
 * @property int $id
 * @property int $question_id
 * @property int $quiz_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Question $question
 * @property \App\Model\Entity\Quiz $quiz
 */
class QuizzesQuestion extends Entity
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
        'question_id' => true,
        'quiz_id' => true,
        'created' => true,
        'modified' => true,
        'question' => true,
        'quiz' => true
    ];
}
