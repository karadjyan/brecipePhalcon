<?php


use Phinx\Migration\AbstractMigration;

class CreateTableMenuContent extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $users = $this->table('menu_content');
        $users->addColumn('id_menu', 'integer')
            ->addColumn('id_recipe', 'integer')
            ->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('menu_content');
    }
}
