<?php
require_once('include/MVC/View/views/view.list.php');
class ee_ProfesoresViewList extends ViewList
{
 	public function preDisplay()
 	{
 		parent::preDisplay();
 		$this->lv->targetList = true;
 	}
}
?>
