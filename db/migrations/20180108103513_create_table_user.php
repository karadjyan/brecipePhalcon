<?php

use Phinx\Db\Adapter\MysqlAdapter;
use Phinx\Migration\AbstractMigration;

class CreateTableUser extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $users = $this->table('users');
        $users->addColumn('name', 'string', ['limit' => 70])
            ->addColumn('email', 'string', ['limit' => 70])
            ->addColumn('password', 'string', ['limit' => 70])
            ->addColumn('admin', 'integer', ['limit' => MysqlAdapter::INT_TINY])
            ->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('users');
    }
}
