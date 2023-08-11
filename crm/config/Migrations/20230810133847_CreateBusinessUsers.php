<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateBusinessUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('business_users');
        $table->addColumn('business_id', 'integer')
            ->addForeignKey('business_id', 'businesses', 'business_id', ['delete' => 'CASCADE', 'update' => 'CASCADE'])
            ->addColumn('user_id', 'char')
            ->addForeignKey('user_id', 'users', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE'])
            ->addTimestamps()
            ->create();
        $table->create();
    }
}
