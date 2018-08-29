<?php 
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\TableRegistry;

class SkillsTable extends Table
{
	$articles = TableRegistry::getTableLocator()->get('Skills');
	$query = $articles->find();

	foreach ($query as $row) {
    // Each row is now an instance of our Article class.
		echo $row->title;
	}
}
?>