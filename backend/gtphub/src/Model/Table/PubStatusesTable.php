<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PubStatuses Model
 *
 * @property \Cake\ORM\Association\BelongsTo $PubStatuses
 *
 * @method \App\Model\Entity\PubStatus get($primaryKey, $options = [])
 * @method \App\Model\Entity\PubStatus newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PubStatus[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PubStatus|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PubStatus patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PubStatus[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PubStatus findOrCreate($search, callable $callback = null, $options = [])
 */
class PubStatusesTable extends Table
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

        $this->table('pub_statuses');
        $this->displayField('name');
        $this->primaryKey('pub_status_id');

        $this->belongsTo('PubStatuses', [
            'foreignKey' => 'pub_status_id',
            'joinType' => 'INNER'
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

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
        $rules->add($rules->existsIn(['pub_status_id'], 'PubStatuses'));

        return $rules;
    }
}
