<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BusinessUsersFixture
 */
class BusinessUsersFixture extends TestFixture
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
                'id' => 1,
                'business_id' => 1,
                'user_id' => '',
                'created_at' => 1691678221,
                'updated_at' => 1691678221,
            ],
        ];
        parent::init();
    }
}
