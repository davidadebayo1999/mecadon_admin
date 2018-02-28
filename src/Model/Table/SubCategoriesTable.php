<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SubCategories Model
 *
 * @property \Cake\ORM\Association\BelongsTo $MainCategories
 * @property \Cake\ORM\Association\HasMany $Products
 *
 * @method \App\Model\Entity\SubCategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\SubCategory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SubCategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SubCategory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SubCategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SubCategory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SubCategory findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SubCategoriesTable extends Table
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

        $this->table('sub_categories');
        $this->displayField('categoryname');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('MainCategories', [
            'foreignKey' => 'main_category_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Products', [
            'foreignKey' => 'sub_category_id'
        ]);

        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'category_logo' => [
                 // This can also be in a class that implements
                // the TransformerInterface or any callable type.
                'transformer' => function (\Cake\Datasource\RepositoryInterface $table, \Cake\Datasource\EntityInterface $entity, $data, $field, $settings) {
                    // get the extension from the file
                    // there could be better ways to do this, and it will fail
                    // if the file has no extension
                    $extension = pathinfo($data['name'], PATHINFO_EXTENSION);
                    // Store the thumbnail in a temporary file
                    $tmp = tempnam(sys_get_temp_dir(), 'upload') . '.' . $extension;
                    // Use the Imagine library to DO THE THING
                    $size = new \Imagine\Image\Box(500, 100);
                    
                    $mode = \Imagine\Image\ImageInterface::THUMBNAIL_INSET;
                    $imagine = new \Imagine\Gd\Imagine();
                    // Save that modified file to our temp file
                    $imagine->open($data['tmp_name'])
                            ->thumbnail($size, $mode)
                            ->save($tmp);
                    // Now return the original *and* the thumbnail
                    return [
                        $data['tmp_name'] => $data['name'],
                        $tmp => 'thumbnail-' . $data['name'],
                    ];
                },
            ],
        ]);


    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('categoryname', 'create')
            ->notEmpty('categoryname');

        $validator
            ->allowEmpty('category_logo');

        return $validator;
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
        $rules->add($rules->existsIn(['main_category_id'], 'MainCategories'));

        return $rules;
    }
}
