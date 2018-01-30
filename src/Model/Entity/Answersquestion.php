<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Answersquestion Entity
 *
 * @property int $id
 * @property int $question_id
 * @property int $user_id
 * @property int $answerindex
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Question $question
 * @property \App\Model\Entity\User $user
 */
class Answersquestion extends Entity
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
        'user_id' => true,
        'answerindex' => true,
        'created' => true,
        'modified' => true,
        'question' => true,
        'user' => true
    ];
}
