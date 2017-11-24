<?php


use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Disabled Foreign Key');
        Schema::disableForeignKeyConstraints();
        $this->command->info('Truncate Users Table');
        DB::table('users')->truncate();
        $this->command->info('Enabled Foreign Key');
        Schema::enableForeignKeyConstraints();

        DB::table('users')->insert([
            'name' => 'admin',
            'firstname' => 'admin',
            'lastname' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('0000'),
            'status' => 1,
        ]);

        $this->command->info('User admin create whit password 0000');
        factory(App\User::class, 50)->create();
        $this->command->info('Users seeding completed!');
      }


}
