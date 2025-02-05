<?php
App::uses('AppModel', 'Model');
class User extends AppModel {

////////////////////////////////////////////////////////////

    public $validate = array(
        'name' => array(
            'rule1' => array(
                'rule' => array('notBlank'),
                'message' => 'name is required',
                //'allowEmpty' => false,
                //'required' => false,
            ),
        ),
        'username' => array(
            'rule1' => array(
                'rule' => array('notBlank'),
                'message' => 'username is required',
                'allowEmpty' => false,
                'required' => false,
            ),
            'rule2' => array(
                'rule' => array('isUnique'),
                'message' => 'username already exists',
                'allowEmpty' => false,
                'required' => false,
            ),
        ),
		
		'email' => array(
            'rule1' => array(
                'rule' => array('notBlank'),
                'message' => 'Email is required',
                'allowEmpty' => false,
                'required' => false,
            ),
            'rule2' => array(
                'rule' => array('isUnique'),
                'message' => 'Email already exists',
                'allowEmpty' => false,
                'required' => false,
            ),
			
        ),
		
        'password' => array(
		    'rule1' => array(
                'rule' => array('notBlank'),
                'message' => 'password is required',
                'allowEmpty' => false,
                'required' => false,
            ),
            'rule2' => array(
                'rule' => array('lengthBetween', 1, 30),
                'message' => 'password too short'
            ),
        ),

    );

////////////////////////////////////////////////////////////

    public function beforeSave($options = array()) {
        if(isset($this->data[$this->alias]['password'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
        return true;
    }

////////////////////////////////////////////////////////////

}
