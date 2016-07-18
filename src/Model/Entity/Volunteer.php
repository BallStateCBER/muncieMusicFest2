<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Volunteer Entity.
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $availability
 * @property string $shirt_size
 * @property string $emergency_contact
 * @property string $message
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property \App\Model\Entity\Job[] $jobs
 */
class Volunteer extends Entity
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
        '*' => true,
        'id' => false,
    ];
}
