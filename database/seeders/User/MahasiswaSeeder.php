<?php

namespace Database\Seeders\User;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mahasiswa = [
            ["Shilmia Madina", "E41210069", 2021],
            ["Aulia Ummatul Hassanah", "E41221789", 2022],
            ["Nike Wulan Avrilia", "E41220772", 2022],
            ["Muhammad Adani Maulidan", "E41222844", 2022],
            ["Ananta Ghaisani", "E41220438", 2022],
            ["Nilla Putri Rosidania", "E41211496", 2021],
            ["Babylina Vindarosita", "E41210096", 2021],
            ["Daffa Afifi Syahrony", "E41210089", 2021],
            ["Duwi Wirda", "E41210558", 2021],
            ["Ilham Ibnu Ahmad", "E41210178", 2021],
            ["Septian Galih Prasetyo", "E41230866", 2023],
            ["Candi Agusta Islamiano", "E41212152", 2021],
            ["Deo Andreas Syaputra", "E41212022", 2021],
            ["DWI RASYARI PUTRA", "E41230573", 2023],
            ["Bimaa Achmad Fill Ardhi", "E41231099", 2023],
            ["Greta Wahyu Dhita Mehdaliya", "E41210693", 2022],
            ["Fajar Dwi Firmansyah", "E41220021", 2022],
            ["ADI HARIYANTO", "E41220809", 2022],
            ["Restu Aji Prasetyo Saputra", "E41210002", 2021],
            ["Ida Sevia", "E41210731", 2021],
            ["Khofifah Ainurrohmah", "E41210716", 2021],
            ["Mohammad Rizal Maulana Najib", "E41210704", 2021],
            ["Diega Putra", "E41231324", 2023],
            ["Arindi Nabila Virnanda", "E41232235", 2023],
            ["Rodiyah", "E41220797", 2022],
            ["Lubna Jamila", "E41220950", 2022],
            ["Sugeng Budisaputra", "E41211307", 2021],
            ["Daffa Fauzi Rahman", "E41211408", 2021],
            ["Sagita Putri Agustin", "E41232221", 2023],
            ["MUHAMMAD ZIDANE JULIAN SAPUTRA", "E41232150", 2023],
            ["Ines Soraya Azwa Auliya", "E41230379", 2023],
            ["Regina Qothrun Nada", "E41232479", 2023],
            ["David Ardian", "E41221857", 2022],
            ["Maulana Malik Ibrahim", "E41211639", 2021],
            ["Rina Wulandhari", "E41211473", 2021],
            ["Dwi Farhan", "E41230875", 2023],
            ["Insan Hidayah", "E41220849", 2022],
            ["Rahmatulloh", "E41221006", 2022],
            ["Febri Ardiyanto", "E41220760", 2022],
            ["Andrean Maulana Ibnu Fauzi", "E41211491", 2021],
            ["Moch. Ariansyah Abidin", "E412211942", 2021],
            ["Sugeng Budi Ariansyah", "E41211943", 2021],
            ["Ira Amelia Agasta", "E41210501", 2021],
            ["Yudistira Prakoso", "E41223730", 2022],
            ["Irhas Maulana Setiaji", "E41211600", 2021],
            ["Achmad Dwi Baskoro", "E41211730", 2021],
            ["Muhammad Ilham Ikhwanul Akram", "E41211257", 2021],
            ["Jessicha Dwi Alvina", "E41230154", 2023],
            ["Fahmi Fahreza", "E41222253", 2022],
            ["Achmad Bahaqi", "E41212046", 2021],
            ["Mahesa Sura Arifianto", "E41210424", 2021],
            ["Dewi Ika Ratnawati", "E41210662", 2021],
            ["Maulana Najib", "E41211239", 2022],
            ["Nabila Zhafarina", "E41210905", 2021],
            ["Freda Adi Fardana", "E41211349", 2021],
            ["M. Aditiya Gilang Romadhon", "E41211492", 2021],
            ["Gymnastiar Alma Ghifari", "E41211478", 2021],
            ["RAHMATULLAH", "E41231016", 2023],
            ["Apsarika Elysia Augisti", "E41211789", 2021],
            ["Akbar Ramadhani Firdaus", "E41210766", 2021],
            ["Regina Juniantika", "E41210026", 2021]
        ];

        foreach ($mahasiswa as $data) {
            $name = $data[0];
            $nim = strtolower($data[1]);
            $angkatan = $data[2];
            $id_angkatan = $angkatan - 2020;

            $user = User::create([
                'nim' => $data[1],
                'name' => $name,
                'email' => "$nim@student.polije.ac.id",
                'password' => bcrypt($nim),
                'id_angkatan' => $id_angkatan,
                'email_verified_at' => now(),
            ]);

            $user->assignRole(User::ROLE_MAHASISWA);
        }
    }
}
