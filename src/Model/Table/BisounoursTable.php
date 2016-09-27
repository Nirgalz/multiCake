<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bisounours Model
 *
 * @method \App\Model\Entity\Bisounour get($primaryKey, $options = [])
 * @method \App\Model\Entity\Bisounour newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Bisounour[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Bisounour|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bisounour patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Bisounour[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Bisounour findOrCreate($search, callable $callback = null)
 */
class BisounoursTable extends Table
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

        $this->table('bisounours');
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

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->requirePresence('image', 'create')
            ->notEmpty('image');

        return $validator;
    }
}
