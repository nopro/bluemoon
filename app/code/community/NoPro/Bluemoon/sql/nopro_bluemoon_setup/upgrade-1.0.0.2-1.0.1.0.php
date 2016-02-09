<?php
/**
 * NoPro Bluemoon v1.0.1.0
 * convert 2 fields and drop them from table
 */

$this->startSetup();

$table = $this->getTable('nopro_bluemoon/bluemoon');
$newfields = array(
		   (object)array('name' => 'blue2',
				 'type' => Varien_DB_Ddl_Table::TYPE_INTEGER,
				 'size' => null,
				 'spec' => array(
						 'unsigned' => true,
						 'identity' => true,
						 ),
				 'nick' => 'blue2'
				 ),
		   );
$pdo = $this->getConnection();
foreach($newfields as $f) {
  if(!$pdo->tableColumnExists($table, $f->name))
    $pdo->addColumn($table, $f->name, $f->type, $f->size, $f->spec, $f->nick);
}

// convert n_feld_halt, nochn_feld  -->  blue2


$dropfields = array('n_feld_halt','nochn_feld');
foreach($dropfields as $f) {
  if($pdo->tableColumnExists($table, $f))
    $pdo->dropColumn($table, $f);
}

$this->endSetup();
