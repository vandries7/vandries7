<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BusinessTypesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BusinessTypesTable Test Case
 */
class BusinessTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BusinessTypesTable
     */
    protected $BusinessTypes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.BusinessTypes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('BusinessTypes') ? [] : ['className' => BusinessTypesTable::class];
        $this->BusinessTypes = $this->getTableLocator()->get('BusinessTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->BusinessTypes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BusinessTypesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
