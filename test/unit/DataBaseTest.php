<?php
namespace Berkayoztunc\LaravelProfile\Test\Unit;


use Berkayoztunc\LaravelProfile\Test\TestCase;
use Illuminate\Support\Facades\Schema;

class DataBaseTest extends TestCase
{

    public function setUp()
    {
        parent::setUp();
        $this->artisan('migrate', ['--database' => 'testing']);
    }

    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'testing');
        $app['config']->set('database.default','sqlite');
        $app['config']->set('database.connections.sqlite.database', ':memory:');
    }

    public function test_user_update_api()
    {
        $this->assertTrue(Schema::hasColumn('users', 'about'));
    }
}