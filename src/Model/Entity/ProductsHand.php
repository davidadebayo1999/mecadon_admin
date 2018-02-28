<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProductsHand Entity
 *
 * @property int $product_id
 * @property int $hand_id
 *
 * @property \App\Model\Entity\Product $product
 * @property \App\Model\Entity\Hand $hand
 */
class ProductsHand extends Entity
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
        'product_id' => false,
        'hand_id' => false
    ];
}
