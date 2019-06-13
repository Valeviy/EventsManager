<?php

namespace Valeviy\EventManager\Commands;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = 'eventmanager:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install the eventmanager package';

    /**
     * Install directory.
     *
     * @var string
     */
    protected $directory = '';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->initDatabase();
    }

    /**
     * Create tables and seed it.
     *
     * @return void
     */
    public function initDatabase()
    {
        $this->call('migrate');

        $rolesModel = config('eventmanager.table-models.roles_model');

        if ($rolesModel::count() == 0) {
            $this->call('db:seed', ['--class' => \Valeviy\EventManager\database\seeders\RoleSeeder::class]);
        }
    }

}