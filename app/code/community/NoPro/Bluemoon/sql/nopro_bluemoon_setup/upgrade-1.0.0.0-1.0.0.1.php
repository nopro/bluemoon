<?php
/**
 * NoPro Bluemoon v1.0.0.1
 * add column to db-table nopro_bluemoon
 */

$this->startSetup();

$table = $this->getTable('nopro_bluemoon/bluemoon');
$newfields = array(
		   (object)array('name' => 'n_feld_halt',
				 'type' => Varien_DB_Ddl_Table::TYPE_INTEGER,
				 'size' => null,
				 'spec' => array(
						 'unsigned' => true,
						 'identity' => true,
						 ),
				 'nick' => 'noch_ne_id'
				 ),
		   (object)array('name' => 'nochn_feld',
				 'type' => Varien_DB_Ddl_Table::TYPE_INTEGER,
				 'size' => null,
				 'spec' => array(
						 'unsigned' => true,
						 'identity' => true,
						 ),
				 'nick' => 'nochmal_ne_id'
				 ),
		   );
$pdo = $this->getConnection();
foreach($newfields as $f) {
  if(!$pdo->tableColumnExists($table, $f->name))
    $pdo->addColumn($table, $f->name, $f->type, $f->size, $f->spec, $f->nick);
}

$this->endSetup();
