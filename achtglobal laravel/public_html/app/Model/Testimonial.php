<?php
App::uses('AppModel', 'Model');
/**
 * Testimonial Model
 *
 * @property Status $Status
 */
class Testimonial extends AppModel {

  public $validate = array(
        'name' => array(
            'rule1' => array(
                'rule' => array('notempty'),
                'message' => 'Name is required',
                'allowEmpty' => false,
                'required' => false,
            ),
            'rule2' => array(
                'rule' => array('isUnique'),
                'message' => 'Name already exists',
                'allowEmpty' => false,
                'required' => false,
            ),
        ), 
    );
}

