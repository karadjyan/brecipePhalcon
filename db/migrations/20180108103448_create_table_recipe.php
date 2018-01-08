<?php


use Phinx\Migration\AbstractMigration;

class CreateTableRecipe extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $users = $this->table('recipes');
        $users->addColumn('name', 'string', ['limit' => 70])
            ->addColumn('description', 'string', ['limit' => 5000])
            ->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('recipes');
    }
}
