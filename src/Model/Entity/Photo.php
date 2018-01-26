<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Photo Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $photo
 * @property string $photo_dir
 * @property string $photo_size
 * @property string $photo_type
 *
 * @property \App\Model\Entity\User $user
 */
class Photo extends Entity
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
        'user_id' => true,
        'photo' => true,
        'photo_dir' => true,
        'photo_size' => true,
        'photo_type' => true,
        'user' => true
    ];
}
