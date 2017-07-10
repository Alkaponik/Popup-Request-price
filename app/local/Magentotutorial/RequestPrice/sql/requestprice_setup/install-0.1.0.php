<?php
$installer = $this;
$installer->startSetup();
$table = $installer->getConnection()->newTable($installer->getTable('requestprice/price')) //price берем из config/xml entity
    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'unsigned' => true,
        'nullable' => false,
        'primary' => true,
        'identity' => true,
    ))
    ->addColumn('ProductId', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'nullable' => false,
    ))
    ->addColumn('Name', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable' => false,
    ))
    ->addColumn('Email', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable' => true,
    ))
    ->addColumn('Comment', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable' => true,
    ))
    ->addColumn('Created_At', Varien_Db_Ddl_Table::TYPE_DATETIME, null, array(
    ))
    ->addColumn('Status', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable' => true,
    ));
$installer->getConnection()->createTable($table);

$installer->endSetup();