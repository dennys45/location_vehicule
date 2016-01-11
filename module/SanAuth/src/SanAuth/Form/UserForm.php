<?php
namespace SanAuth\Form;

 use Zend\Form\Form;

 class UserForm extends Form
 {
     public function __construct($name = null)
     {
         // we want to ignore the name passed
         parent::__construct('user');
         
         $this->add(array(
             'name' => 'username',
             'type' => 'Text',
             'options' => array(
                 'label' => 'Login ',
             ),
         ));
         $this->add(array(
             'name' => 'password',
             'type' => 'Text',
             'options' => array(
                 'label' => 'Mdp ',
             ),
         ));
         $this->add(array(
             'name' => 'submit',
             'type' => 'Submit',
             'attributes' => array(
                 'value' => 'Valider ',
                 'id' => 'submitbutton',
             ),
         ));
     }
 }