<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BusinessTypesFixture
 */
class BusinessTypesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'type_id' => 1,
                'type_name' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-08-07 17:12:46',
                'modified' => '2023-08-07 17:12:46',
                'created_by' => 'c87f3c16-3c26-4709-81c2-1f64ef77f7c8',
                'modified_by' => '5935a59f-aec8-48bd-b4b2-13a19b98a1ed',
            ],
        ];
        parent::init();
    }
}
