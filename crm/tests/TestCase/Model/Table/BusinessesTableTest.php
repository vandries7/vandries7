<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BusinessesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BusinessesTable Test Case
 */
class BusinessesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BusinessesTable
     */
    protected $Businesses;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Businesses',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Businesses') ? [] : ['className' => BusinessesTable::class];
        $this->Businesses = $this->getTableLocator()->get('Businesses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Businesses);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BusinessesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
