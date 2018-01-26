<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * QuizzesResult Entity
 *
 * @property int $quiz_id
 * @property int $user_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenTime $started
 *
 * @property \App\Model\Entity\Quiz $quiz
 * @property \App\Model\Entity\User $user
 */
class QuizzesResult extends Entity
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
        'created' => true,
        'modified' => true,
        'started' => true,
        'quiz' => true,
        'user' => true
    ];
}
