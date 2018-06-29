<?php

use Phalcon\Db\Column as Column;
use Phalcon\Db\Index as Index;
use Phalcon\Db\Reference as Reference;
use Phalcon\Mvc\Model\Migration;

class UserMigration_100 extends Migration {
  public function up()
  {
    $this->morphTable(
      'user',
      [
        'columns' => [
          new Column(
            'id',
            [
              'type'          => Column::TYPE_INTEGER,
              'size'          => 10,
              'unsigned'      => true,
              'notNull'       => true,
              'autoIncrement' => true,
              'first'         => true,
            ]
          ),
          new Column(
            'username',
            [
              'type'          => Column::TYPE_VARCHAR,
              'size'          => 25,
              'notNull'       => true,
            ]
          ),
          new Column(
            'password',
            [
              'type'          => Column::TYPE_VARCHAR,
              'size'          => 100,
              'notNull'       => true,
            ]
            )
          ],
          'indexes' => [
            new Index(
              'PRIMARY',
              [
                'id',
              ]
            ),
          ],
        ]
      );
    }
  }
