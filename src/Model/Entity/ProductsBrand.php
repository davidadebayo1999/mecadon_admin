<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProductsBrand Entity
 *
 * @property int $product_id
 * @property int $brand_id
 *
 * @property \App\Model\Entity\Product $product
 * @property \App\Model\Entity\Brand $brand
 */
class ProductsBrand extends Entity
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
        'brand_id' => false
    ];
}
