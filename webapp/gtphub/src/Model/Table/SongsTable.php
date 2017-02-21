<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Songs Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Performers
 * @property \Cake\ORM\Association\BelongsTo $PubStatuses
 * @property \Cake\ORM\Association\HasMany $Folders
 *
 * @method \App\Model\Entity\Song get($primaryKey, $options = [])
 * @method \App\Model\Entity\Song newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Song[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Song|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Song patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Song[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Song findOrCreate($search, callable $callback = null, $options = [])
 */
class SongsTable extends Table
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

        $this->table('songs');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsTo('Performers', [
            'foreignKey' => 'performer_id'
        ]);
        $this->belongsTo('PubStatuses', [
            'foreignKey' => 'pub_status_id'
        ]);
        $this->hasMany('Folders', [
            'foreignKey' => 'song_id'
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
            ->dateTime('last_change')
            ->allowEmpty('last_change');

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
        $rules->add($rules->existsIn(['performer_id'], 'Performers'));
        $rules->add($rules->existsIn(['pub_status_id'], 'PubStatuses'));

        return $rules;
    }
}
