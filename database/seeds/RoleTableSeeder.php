<?php
use App\Rol;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Rol();
        $role->name = 'jefe_admin';
        $role->save();

        $role = new Rol();
        $role->name = 'admin';
        $role->save();

        $role = new Rol();
        $role->name = 'juez';
        $role->save();

        $role = new Rol();
        $role->name = 'secretario';
        $role->save();

        $role = new Rol();
        $role->name = 'oficial';
        $role->save();
    }
}
