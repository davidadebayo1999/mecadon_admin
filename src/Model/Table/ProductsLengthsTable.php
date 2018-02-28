<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProductsLengths Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Products
 * @property \Cake\ORM\Association\BelongsTo $Lengths
 *
 * @method \App\Model\Entity\ProductsLength get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProductsLength newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProductsLength[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProductsLength|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductsLength patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProductsLength[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProductsLength findOrCreate($search, callable $callback = null, $options = [])
 */
class ProductsLengthsTable extends Table
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

        $this->table('products_lengths');
        $this->displayField('product_id');
        $this->primaryKey(['product_id', 'length_id']);

        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Lengths', [
            'foreignKey' => 'length_id',
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
        $rules->add($rules->existsIn(['length_id'], 'Lengths'));

        return $rules;
    }
}
