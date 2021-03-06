<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Performers Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $PubStatuses
 * @property \Cake\ORM\Association\HasMany $Songs
 *
 * @method \App\Model\Entity\Performer get($primaryKey, $options = [])
 * @method \App\Model\Entity\Performer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Performer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Performer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Performer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Performer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Performer findOrCreate($search, callable $callback = null, $options = [])
 */
class PerformersTable extends Table
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

        $this->table('performers');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsTo('PubStatuses', [
            'foreignKey' => 'pub_status_id'
        ]);
        $this->hasMany('Songs', [
            'foreignKey' => 'performer_id'
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
            ->allowEmpty('name');

        $validator
            ->allowEmpty('description');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['pub_status_id'], 'PubStatuses'));

        return $rules;
    }
}
