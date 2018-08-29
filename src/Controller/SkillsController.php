<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;


class SkillsController extends AppController
{
	public function index() {
		

		$articles = TableRegistry::getTableLocator()->get('Skills');

		$query = $articles->find();

		foreach ($query as $row) {
			echo $row->title;
		}
	}

	public function add() {

	}
}






?>
