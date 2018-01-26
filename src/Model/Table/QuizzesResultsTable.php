<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * QuizzesResults Model
 *
 * @property \App\Model\Table\QuizzesTable|\Cake\ORM\Association\BelongsTo $Quizzes
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\QuizzesResult get($primaryKey, $options = [])
 * @method \App\Model\Entity\QuizzesResult newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\QuizzesResult[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\QuizzesResult|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\QuizzesResult patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\QuizzesResult[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\QuizzesResult findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class QuizzesResultsTable extends Table
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

        $this->setTable('quizzes_results');
        $this->setDisplayField('quiz_id');
        $this->setPrimaryKey(['quiz_id', 'user_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('Quizzes', [
            'foreignKey' => 'quiz_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
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
            ->dateTime('started')
            ->requirePresence('started', 'create')
            ->notEmpty('started');

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
        $rules->add($rules->existsIn(['quiz_id'], 'Quizzes'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
