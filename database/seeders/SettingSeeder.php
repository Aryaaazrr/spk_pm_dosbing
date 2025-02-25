<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            [
                'key' => 'about_us',
                'value' => '<p><em>Assalamu‘alaikum warohmatullahi wabarokatuh</em></p>
                            <p><br></p>
                            <p><strong>Saibah Mulia Mandiri</strong> adalah biro perjalanan umrah dan haji
                            yang telah berpengalaman melayani para tamu Allah sejak tahun 1995. Saibah didirikan
                            oleh Ustadz Haji Bambang Riyanto dan Ibu Hj Aisyah Abdillah, dimana beliau berdua
                            sering menemani atau mendampingi </p><p>langsung para Jamaah Umroh maupun Haji.</p>
                            <p><br></p>
                            <p>Saibah dengan pembimbing yang sangat berpengalaman, mengutamakan kegiatan ibadah
                            selama di Tanah suci. Insya Allah selain beribadah dengan khusyuk jamaah akan
                            diperkenalkan dengan sejarah peradaban Islam dengan mengunjungi tempat-tempat
                            ibadah dan bersejarah bagi Umat Islam. Semoga Keinginan kita untuk beribadah
                            Umroh dan Haji dikabulkan oleh Allah . Dan semoga Ibadah Haji dan Umroh kita
                            di Mabrurkan oleh Allah. Aamiin Ya Rabbal ‘Aalamiin.</p>
                            <p><br></p>
                            <p><em>Wassalamu‘alaikum warohmatullahi wabarokatuh</em></p>
                            <p><br><br></p>
                            <p><strong>Saibah Mulia Mandiri</strong>, Exclusive Umrah and Hajj Travel</p>
                            <p>Kantor Pusat Semarang: Jl. Hasanudin no. 243 B Semarang 50171, Indonesia</p>
                            <p><br></p>
                            <p>Telp : (024) 3521821, 081225442388</p>
                            <p>Telp/WA 081225442388</p>
                            <p>Telp/Fax (024)3521821,</p>
                            <p>E mail : admin@saibah.co.id</p>'
            ],
            [
                'key' => 'privacy_policy',
                'value' => '<p><strong>
                             Pendukung Keputusan Pemilihan Dosen Pembimbing Skripsi D4-Teknik Informatika Menggunakan Metode Profile Matching
                             </strong>
                            built the SPK app as a Commercial app. This SERVICE is provided by Achmad Zakariya and is intended for use as is.</p>
                            <p><br></p>
                            <p>This page is used to inform visitors regarding our policies with the collection, use, and disclosure of Personal Information if anyone decided to use our Service.</p>
                            <p><br></p>
                            <p>If you choose to use our Service, then you agree to the collection and use of information in relation to this policy. The Personal Information that we collect is
                            used for providing and improving the Service. We will not use or share your information with anyone except as described in this Privacy Policy.</p>
                            <p><br></p>
                            <p>The terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, which is accessible at Saibah unless otherwise defined in this Privacy Policy.</p>
                            <p><br></p>
                            <p><strong>Information Collection and Use</strong></p>
                            <p><br></p>
                            <p>For a better experience, while using our Service, we may require you to provide us with certain personally identifiable information. The information that we request will
                            be retained by us and used as described in this privacy policy.</p>
                            <p><br></p>
                            <p>The app does use third party services that may collect information used to identify you.</p>
                            <p><br></p>
                            <p>Link to privacy policy of third party service providers used by the app</p>
                            <ul>
                                <li>Google Play Services</li>
                                <li>Google</li>
                            </ul>
                            <p><br></p>
                            <p><strong>Log Data</strong></p>
                            <p><br></p>
                            <p>We want to inform you that whenever you use our Service, in a case of an error in the app we collect data and information (through third party products) on your phone called Log Data.
                            This Log Data may include information such as your device Internet Protocol (“IP”) address, device name, operating </p>'
            ]
        ]);

        DB::table('settings')->insert([
            [
                'key' => 'email_setting',
                'json_value' => json_encode([
                    'logo' => '',
                    'footer' => '<p>Mahasiswa Politeknik Negeri Jember, Jawa Timur, Indonesia</p>',
                    'salutation' => "Salam,\r\nAchmad Zakariya"
                ])
            ],
            [
                'key' => 'email_registration',
                'json_value' => json_encode([
                    'from' => 'info.spk-dosbing-profile-matching@gmail.com',
                    'first_message' => '<p><strong>Assalamualaikum</strong>,</p><p>Terimakasih telah mendaftar di platform ini. untuk melakukan proses sistem diharapkan mahasiswa berkenanan mengisi data pribadi guna kelengkapan data pada sistem, sehingga dapat dilakukan proses pemilihan dosen pembimbing dan pengajuan judul anda berjalan dengan lancar.</p><p>Terima Kasih</p>'
                ])
            ]
        ]);

        DB::table('nilai')->insert([
            [
                'value' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'value' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'value' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'value' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'value' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('angkatan')->insert([
            [
                'tahun' => '2021',
                'jumlah_mahasiswa' => '185',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tahun' => '2022',
                'jumlah_mahasiswa' => '169',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tahun' => '2023',
                'jumlah_mahasiswa' => '181',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        DB::table('izin_pengajuan')->insert([
            [
                'izin' => 'off',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}