<?php
/**
 * NoPro Bluemoon v1.0.1.1
 * add columns to db-table nopro_bluemoon
 */

$this->startSetup();

$table = $this->getTable('nopro_bluemoon/bluemoon');
$newfields = array(
		   (object)array('name' => 'blue3',
				 'type' => Varien_DB_Ddl_Table::TYPE_INTEGER,
				 'size' => null,
				 'spec' => array(
						 'unsigned' => true,
						 'identity' => true,
						 ),
				 'nick' => 'blue_3'
				 ),
		   );
$dbo = $this->getConnection();
foreach($newfields as $f) {
  if(!$dbo->tableColumnExists($table, $f->name))
    $dbo->addColumn($table, $f->name, $f->type, $f->size, $f->spec, $f->nick);
}

$this->endSetup();
