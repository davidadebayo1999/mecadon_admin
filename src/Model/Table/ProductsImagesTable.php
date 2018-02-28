<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProductsImages Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Products
 * @property \Cake\ORM\Association\BelongsTo $Images
 *
 * @method \App\Model\Entity\ProductsImage get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProductsImage newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProductsImage[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProductsImage|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductsImage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProductsImage[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProductsImage findOrCreate($search, callable $callback = null, $options = [])
 */
class ProductsImagesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('products_images');
        $this->displayField('product_id');
        $this->primaryKey(['product_id', 'image_id']);

        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Images', [
            'foreignKey' => 'image_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['product_id'], 'Products'));
        $rules->add($rules->existsIn(['image_id'], 'Images'));

        return $rules;
    }
}
