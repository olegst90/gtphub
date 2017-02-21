<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AccessProfiles Model
 *
 * @property \Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\AccessProfile get($primaryKey, $options = [])
 * @method \App\Model\Entity\AccessProfile newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AccessProfile[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AccessProfile|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AccessProfile patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AccessProfile[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AccessProfile findOrCreate($search, callable $callback = null, $options = [])
 */
class AccessProfilesTable extends Table
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

        $this->table('access_profiles');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('Users', [
            'foreignKey' => 'access_profile_id'
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
            ->allowEmpty('access');

        return $validator;
    }
}
