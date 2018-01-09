<?php


use Phinx\Seed\AbstractSeed;

class IngredientSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $data = [
            [
                'name'    => 'barley',
            ],
            [
                'name'    => 'beet',
            ],
            [
                'name'    => 'buckwheat',
            ],
            [
                'name'    => 'cabbage',
            ],
            [
                'name'    => 'carrot',
            ],
            [
                'name'    => 'celery',
            ],
            [
                'name'    => 'corn',
            ],
            [
                'name'    => 'dill',
            ],
            [
                'name'    => 'eggplant',
            ],
            [
                'name'    => 'garlic',
            ]
        ];

        $posts = $this->table('ingredients');
        $posts->insert($data)
            ->save();
    }
}
