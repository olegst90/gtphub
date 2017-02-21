<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FileFormats Model
 *
 * @method \App\Model\Entity\FileFormat get($primaryKey, $options = [])
 * @method \App\Model\Entity\FileFormat newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FileFormat[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FileFormat|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FileFormat patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FileFormat[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FileFormat findOrCreate($search, callable $callback = null, $options = [])
 */
class FileFormatsTable extends Table
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

        $this->table('file_formats');
        $this->displayField('name');
        $this->primaryKey('id');
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        return $validator;
    }
}
