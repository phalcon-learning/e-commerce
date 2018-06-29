<?php

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

class TransactionMigration_100 extends Migration
{
    public function morph()
    {
        $this->morphTable('transaction', [
                'columns' => [
                    new Column(
                        'id',
                        [
                            'type'          => Column::TYPE_INTEGER,
                            'unsigned'      => true,
                            'notNull'       => true,
                            'autoIncrement' => true,
                            'size'          => 10,
                            'first'         => true
                        ]
                    ),
                    new Column(
                        'created_at',
                        [
                            'type'      => Column::TYPE_DATETIME,
                            'notNull'   => true
                        ]
                    ),
                    new Column(
                        'updated_at',
                        [
                            'type'      => Column::TYPE_DATETIME,
                            'notNull'   => true
                        ]
                    ),
                    new Column(
                        'created_by',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'unsigned' => true,
                            'notNull' => true,
                            'size' => 10,
                        ]
                    ),
                    new Column(
                        'updated_by',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'unsigned' => true,
                            'notNull' => true,
                            'size' => 10,

                        ]
                    ),
                ],
                'indexes' => [
                    new Index('PRIMARY', ['id'], 'PRIMARY'),
                    new Index('created_by', ['created_by']),
                    new Index('updated_by', ['updated_by'])
                ],
                'references' => [
                    new Reference(
                        'created_by_ibfk_1',
                        [
                            'referencedSchema'  => 'invo',
                            'referencedTable'   => 'user',
                            'columns'           => ['created_by'],
                            'referencedColumns'  => ['id'],
                            
                        ]
                    ),
                    new Reference(
                        'updated_by_ibfk_1',
                        [
                            'referencedSchema'  => 'invo',
                            'referencedTable'   => 'user',
                            'columns'           => ['updated_by'],
                            'referencedColumns'  => ['id'],
                        ]
                    ),
                ],
                'options' => [
                    'TABLE_TYPE'        => 'BASE_TABLE',
                    'AUTO_INCREMENT'    => '1',
                    'ENGINE'            => 'InnoDB',
                    'TABLE_COLLATION'   => 'latin1_swedish_ci'
                ],
            ]
        );
    }

    public function up()
    {
        $this->morph();
    }

    public function down()
    {

    }
}

