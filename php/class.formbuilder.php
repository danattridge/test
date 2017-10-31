<?php

/**
 * class.formbuilder.php
 *
 * @category   CategoryName
 * @package    PackageName
 * @author     Daniel Attridge
 * @copyright  2017 Daniel Attridge
 * @license    http://www.php.net/license/3_0.txt  PHP License 3.0
 * @version    CVS: $Id:$
 * @link       http://pear.php.net/package/PackageName
 * @see        NetOther, Net_Sample::Net_Sample()
 * @since      File available since Release 1.2.0
 * @deprecated File deprecated in Release 2.0.0
 */
 
 class FormBuilder {
	 
	private $formAction;
	 
	function __construct()
	{
		$this->isFormSubmitted();
	}
	
	public function setFormAction($action)
	{
		$this->formAction = $action;
	}
	
	public function getFormAction()
	{
		return $this->formAction;
	}
	
	public function printForm($controls)
	{
		$formHtml = '';
		
		if (is_array($controls)){
			
			$formHtml .= '<form action="'.$this->formAction.'" method="post">';
			
			foreach ($controls as $control){
			
				switch($control['type']){
					case 'text':
						$formHtml .= '<div><label for"'.$control['name'].'">'.$control['label'].'</label><input type="text" name="'.$control['name'].'" id="'.$control['id'].'" class="'.$control['class'].'" value="'.$control['value'].'" /></div>';
						break;
					case 'password':
						$formHtml .= '<div><label for"'.$control['name'].'">'.$control['label'].'</label><input type="password" name="'.$control['name'].'" id="'.$control['id'].'" class="'.$control['class'].'" value="'.$control['value'].'" /></div>';
						break;
					case 'select':
						break;
					case 'checkbox':
						break;
					case 'radio':
						break;
					case 'textarea':
						break;
					case 'file':
						break;
					case 'hidden':
						break;
					case 'submit':
						$formHtml .= '<div><input type="submit" name="'.$control['name'].'" id="'.$control['id'].'" class="'.$control['class'].'" value="'.$control['value'].'" /></div>';
						break;
					case 'button':
						$formHtml .= '<div><input type="submit" name="'.$control['name'].'" id="'.$control['id'].'" class="'.$control['class'].'" value="'.$control['value'].'" /></div>';
						break;
				}
			}
			
			$formHtml .= '<input type="hidden" name="formsubmitted" value="true" />';
			
			$formHtml .= '</form>';
			
		}
		
		return $formHtml;
	}
	
	protected function isFormSubmitted()
	{
		if (isset($_POST['formsubmitted'])){
			echo 'form submitted';	
		}
	}
 }
 
$myForm = new FormBuilder;

$myForm->setFormAction('');
 
$formArr = array( 
					array(
				       'type' => 'select',
				       'name' => 'title',
				       'id' => 'title',
				       'class' => '',
				       'values' => array('Mr','Mrs','Ms','Miss','Dr'),
					   'selected' => '',
					   'label' => '',
					   'required' => true,
					   'error_message' => ''),
					array(
				       'type' => 'text',
				       'name' => 'firstname',
				       'id' => 'firstname',
				       'class' => '',
				       'value' => '',
					   'label' => 'Firstname',
					   'required' => true,
					   'error_message' => '',
					   'rules' => array(
									)),
					array(
				       'type' => 'text',
				       'name' => 'lastname',
				       'id' => 'lastname',
				       'class' => '',
				       'value' => '',
					   'label' => 'Surname',
					   'required' => true,
					   'error_message' => ''),
					array(
				       'type' => 'password',
				       'name' => 'password',
				       'id' => 'password',
				       'class' => '',
				       'value' => '',
					   'label' => 'Password',
					   'required' => true,
					   'error_message' => ''),
					array(
				       'type' => 'submit',
				       'name' => 'submit',
				       'id' => '',
				       'class' => '',
				       'value' => 'Submit')
				);
				
print $myForm->printForm($formArr);

print $myForm->getFormAction();
				   

			

?>