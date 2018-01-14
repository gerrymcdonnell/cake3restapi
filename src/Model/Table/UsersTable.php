<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \Cake\ORM\Association\HasMany $Changelogs
 * @property \Cake\ORM\Association\HasMany $Jokes
 * @property \Cake\ORM\Association\HasMany $Questions
 * @property \Cake\ORM\Association\HasMany $QuestionsAnswers
 * @property \Cake\ORM\Association\HasMany $QuestionsCategories
 * @property \Cake\ORM\Association\HasMany $Quizzes
 * @property \Cake\ORM\Association\HasMany $QuizzesAnswers
 */
class UsersTable extends Table
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

        $this->table('users');
        $this->displayField('username');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Changelogs', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Jokes', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Questions', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('QuestionsAnswers', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('QuestionsCategories', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Quizzes', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('QuizzesAnswers', [
            'foreignKey' => 'user_id'
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
            ->requirePresence('username', 'create')
            ->notEmpty('username');

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');
		
		/*
        $validator
            ->requirePresence('role', 'create')
            ->notEmpty('role');
		*/
		
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
        $rules->add($rules->isUnique(['username']));
        return $rules;
    }
	

	/**
	the user loogged in is the user who owns the profile
	profile to be viewed edited and the auth user id (logged in user)
	**/
	/*
    public function isOwnedBy($edited_useridid, $loggedin_userid)
    {
        return $this->exists(['id' => $edited_useridid, 'id' => $loggedin_userid]);
    }
	*/
	
}
