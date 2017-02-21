<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PubStatus Entity
 *
 * @property int $pub_status_id
 * @property string $name
 *
 * @property \App\Model\Entity\PubStatus $pub_status
 */
class PubStatus extends Entity
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
        'pub_status_id' => false
    ];
}
