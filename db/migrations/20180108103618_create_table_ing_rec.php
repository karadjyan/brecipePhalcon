<?php


use Phinx\Migration\AbstractMigration;

class CreateTableIngRec extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $users = $this->table('ing_rec');
        $users->addColumn('id_recipe', 'integer')
            ->addColumn('id_ingredient', 'integer')
            ->addColumn('name', 'string', ['limit' => 70])
            ->addColumn('count', 'string', ['limit' => 25])
            ->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('ing_rec');
    }
}
