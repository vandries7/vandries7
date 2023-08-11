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
                'created' => '2023-08-08 10:19:03',
                'modified' => '2023-08-08 10:19:03',
                'created_by' => 'b68631be-3643-4770-8fd0-abe94b453654',
                'modified_by' => '01dffb19-6834-4591-868e-6da0499999b3',
            ],
        ];
        parent::init();
    }
}
