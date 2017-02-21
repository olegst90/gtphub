<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Song Entity
 *
 * @property int $id
 * @property string $name
 * @property int $performer_id
 * @property int $pub_status_id
 * @property \Cake\I18n\Time $last_change
 *
 * @property \App\Model\Entity\Performer $performer
 * @property \App\Model\Entity\PubStatus $pub_status
 * @property \App\Model\Entity\Folder[] $folders
 */
class Song extends Entity
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
        'id' => false
    ];
}
