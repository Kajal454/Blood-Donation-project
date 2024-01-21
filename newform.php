<?php
$form = new form('fg-form', 'horizontal', 'novalidate', 'bs4');
$form->addHtml('<h2>Become a Donor</h2>');
$form->addInput('text', 'name', '', 'Name', 'required');
$form->addRadio('gender', 'Male', 'm');
$form->addRadio('gender', 'Female', 'f');
$form->printRadioGroup('gender', 'Gender', true, 'required');
$form->addInput('text', 'bday', '', 'Date of Birth', 'required');
$form->addPlugin('pickadate', '#bday', 'default');
$form->addSelectList('blood_group', 'Blood Group', '', array('A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'), 'required');
$form->addInput('text', 'contact', '', 'Contact ', 'required');
$form->addInput('text', 'address', '', 'Address', 'required');
$form->addInput('text', 'id_proof', '', 'ID Proof', 'required');
$form->addCheckbox('terms', 'I accept terms and conditions', '1', 'required');
$form->printCheckboxGroup('terms', 'Confirmation', true, 'required');
$form->setCols(0, 12);
$form->centerButtons(true);
$form->addBtn('submit', 'submit-btn', 1, 'Submit', 'class=btn btn-success');
$form->addPlugin('icheck', '#terms', 'default', array('%theme%' => 'square', '%color%' => 'blue'));

echo $form->render();
?>
