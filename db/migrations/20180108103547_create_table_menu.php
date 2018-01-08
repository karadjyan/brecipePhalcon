<?php


use Phinx\Migration\AbstractMigration;

class CreateTableMenu extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $users = $this->table('menus');
        $users->addColumn('name', 'string', ['limit' => 70])
            ->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('menus');
    }
}
