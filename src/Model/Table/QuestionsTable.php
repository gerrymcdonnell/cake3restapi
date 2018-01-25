<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Questions Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\QuestionsCategoriesTable|\Cake\ORM\Association\BelongsTo $QuestionsCategories
 * @property \App\Model\Table\QuestionstypesTable|\Cake\ORM\Association\BelongsTo $Questionstypes
 * @property \App\Model\Table\QuestionsAnswersTable|\Cake\ORM\Association\HasMany $QuestionsAnswers
 *
 * @method \App\Model\Entity\Question get($primaryKey, $options = [])
 * @method \App\Model\Entity\Question newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Question[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Question|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Question patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Question[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Question findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class QuestionsTable extends Table
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

        $this->setTable('questions');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('QuestionsCategories', [
            'foreignKey' => 'questions_categories_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Questionstypes', [
            'foreignKey' => 'questionstypes_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('QuestionsAnswers', [
            'foreignKey' => 'question_id'
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
            ->scalar('question')
            ->maxLength('question', 255)
            ->requirePresence('question', 'create')
            ->notEmpty('question');

        $validator
            ->scalar('ans1')
            ->maxLength('ans1', 255)
            ->requirePresence('ans1', 'create')
            ->notEmpty('ans1');

        $validator
            ->scalar('ans2')
            ->maxLength('ans2', 255)
            ->requirePresence('ans2', 'create')
            ->notEmpty('ans2');

        $validator
            ->scalar('ans3')
            ->maxLength('ans3', 255)
            ->requirePresence('ans3', 'create')
            ->notEmpty('ans3');

        $validator
            ->scalar('ans4')
            ->maxLength('ans4', 255)
            ->requirePresence('ans4', 'create')
            ->notEmpty('ans4');

        $validator
            ->integer('correctans')
            ->requirePresence('correctans', 'create')
            ->notEmpty('correctans');

        $validator
            ->integer('difficulty')
            ->requirePresence('difficulty', 'create')
            ->notEmpty('difficulty');

        $validator
            ->boolean('flag')
            ->requirePresence('flag', 'create')
            ->notEmpty('flag');

        $validator
            ->scalar('photo')
            ->maxLength('photo', 255)
            ->requirePresence('photo', 'create')
            ->notEmpty('photo');

        $validator
            ->scalar('photo_dir')
            ->maxLength('photo_dir', 255)
            ->requirePresence('photo_dir', 'create')
            ->notEmpty('photo_dir');

        $validator
            ->scalar('photo_size')
            ->maxLength('photo_size', 255)
            ->requirePresence('photo_size', 'create')
            ->notEmpty('photo_size');

        $validator
            ->scalar('photo_type')
            ->maxLength('photo_type', 80)
            ->requirePresence('photo_type', 'create')
            ->notEmpty('photo_type');

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
        $rules->add($rules->existsIn(['questions_categories_id'], 'QuestionsCategories'));
        $rules->add($rules->existsIn(['questionstypes_id'], 'Questionstypes'));

        return $rules;
    }
}
