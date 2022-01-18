<?php
use App\User;
use App\Role;
use App\Permission;
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
        // ketua
        $ketua = factory(User::class)->create([
            'nisn'      => '199312102018081001',
            'name'     => 'Udin',
            'email'    => 'Udin@absensi.com',
            'email_verified_at' => now(),
            'password' => bcrypt('absensi'),
        ]);

        $ketua->assignRole('admin');

        $this->command->info('>_ Here is your admin details to login:');
        $this->command->warn($ketua->email);
        $this->command->warn('Password is "absensi"');

        // bendahara
        $walikelas = factory(User::class)->create([
            'nisn'      => '199312102018081002',
            'name'     => 'miftah',
            'email'    => 'walikelas@absensi.com',
            'email_verified_at' => now(),
            'password' => bcrypt('absensi'),
        ]);

        $walikelas->assignRole('walikelas');

        $this->command->info('>_ Here is your walikelas details to login:');
        $this->command->warn($walikelas->email);
        $this->command->warn('Password is "absensi"');

        // anggota
        $siswa = factory(User::class)->create([
            'nisn'      => '199312102018081004',
            'name'     => 'siswa',
            'email'    => 'siswa@absensi.com',
            'email_verified_at' => now(),
            'password' => bcrypt('absensi'),
        ]);

        $siswa->assignRole('siswa');

        $this->command->info('>_ Here is your siswa details to login:');
        $this->command->warn($siswa->email);
        $this->command->warn('Password is "absensi"');

        // bersihkan cache
        $this->command->call('cache:clear');
    }
}
