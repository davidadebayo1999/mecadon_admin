<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProductsHands Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Products
 * @property \Cake\ORM\Association\BelongsTo $Hands
 *
 * @method \App\Model\Entity\ProductsHand get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProductsHand newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProductsHand[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProductsHand|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductsHand patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProductsHand[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProductsHand findOrCreate($search, callable $callback = null, $options = [])
 */
class ProductsHandsTable extends Table
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

        $this->table('products_hands');
        $this->displayField('product_id');
        $this->primaryKey(['product_id', 'hand_id']);

        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Hands', [
            'foreignKey' => 'hand_id',
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
        $rules->add($rules->existsIn(['hand_id'], 'Hands'));

        return $rules;
    }
}
