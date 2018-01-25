<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Question Entity
 *
 * @property int $id
 * @property string $question
 * @property string $ans1
 * @property string $ans2
 * @property string $ans3
 * @property string $ans4
 * @property int $correctans
 * @property int $difficulty
 * @property int $user_id
 * @property int $questions_categories_id
 * @property int $questionstypes_id
 * @property bool $flag
 * @property string $photo
 * @property string $photo_dir
 * @property string $photo_size
 * @property string $photo_type
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\QuestionsCategory $questions_category
 * @property \App\Model\Entity\Questionstype $questionstype
 * @property \App\Model\Entity\QuestionsAnswer[] $questions_answers
 */
class Question extends Entity
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
        'question' => true,
        'ans1' => true,
        'ans2' => true,
        'ans3' => true,
        'ans4' => true,
        'correctans' => true,
        'difficulty' => true,
        'user_id' => true,
        'questions_categories_id' => true,
        'questionstypes_id' => true,
        'flag' => true,
        'photo' => true,
        'photo_dir' => true,
        'photo_size' => true,
        'photo_type' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'questions_category' => true,
        'questionstype' => true,
        'questions_answers' => true
    ];
}
