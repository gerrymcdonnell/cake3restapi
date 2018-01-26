<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * QuizzesAnswers Model
 *
 * @property \App\Model\Table\QuizzesTable|\Cake\ORM\Association\BelongsTo $Quizzes
 * @property \App\Model\Table\QuestionsTable|\Cake\ORM\Association\BelongsTo $Questions
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\QuizzesAnswer get($primaryKey, $options = [])
 * @method \App\Model\Entity\QuizzesAnswer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\QuizzesAnswer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\QuizzesAnswer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\QuizzesAnswer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\QuizzesAnswer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\QuizzesAnswer findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class QuizzesAnswersTable extends Table
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

        $this->setTable('quizzes_answers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Quizzes', [
            'foreignKey' => 'quiz_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Questions', [
            'foreignKey' => 'question_id',
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('answerindex')
            ->requirePresence('answerindex', 'create')
            ->notEmpty('answerindex');

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
        $rules->add($rules->existsIn(['question_id'], 'Questions'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
