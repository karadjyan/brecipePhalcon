<?php


use Phinx\Migration\AbstractMigration;

class CreateTableIngredients extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $users = $this->table('ingredients');
        $users->addColumn('name', 'string', ['limit' => 70])
            ->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('ingredients');
    }
}
