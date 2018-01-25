<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * QuestionsTypes Model
 *
 * @method \App\Model\Entity\QuestionsType get($primaryKey, $options = [])
 * @method \App\Model\Entity\QuestionsType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\QuestionsType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\QuestionsType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\QuestionsType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\QuestionsType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\QuestionsType findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class QuestionsTypesTable extends Table
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

        $this->setTable('questions_types');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('title')
            ->maxLength('title', 50)
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        return $validator;
    }
}
