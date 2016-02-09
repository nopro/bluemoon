<?php
/**
 * NoPro Bluemoon
 * add db-table
 */

$this->startSetup();

if( !$this->getConnection()->isTableExists($this->getTable('nopro_bluemoon/bluemoon')) ):

$table = $this->getConnection()
  ->newTable($this->getTable('nopro_bluemoon/bluemoon'))
  ->addColumn('blue_id', Varien_DB_Ddl_Table::TYPE_INTEGER, null,
	      array(
		    'unsigned' => true,
		    'identity' => true,
		    'nullable' => false,
		    'primary' => true,
		    ),
	      'Entity_id')
  ->addColumn('blue', Varien_DB_Ddl_Table::TYPE_TEXT, 128,
	      array(
		    'nullable' => true,
		    ),
	      'Title')
  ->addColumn('blue_date', Varien_DB_Ddl_Table::TYPE_TIMESTAMP, null,
	      array(
		    'nullable' => true,
		    'default' => null,
		    ),
	      'blue_date')
  ->addIndex($this->getIdxName(
			       $this->getTable(),
			       array('blue_date'),
			       Varien_Db_Adapter_Interface::INDEX_TYPE_INDEX
			       ),
	     array('blue_date'),
	     array('type' => Varien_Db_Adapter_Interface::INDEX_TYPE_INDEX)
	     )
  ->setComment('NoPro Blue item')
  ;
$this->getConnection()->createTable($table);

endif;

$this->endSetup();
