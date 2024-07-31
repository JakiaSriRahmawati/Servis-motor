<?php

namespace Database\Seeders;

use App\Models\artikel;
use App\Models\barang;
use App\Models\booking;
use App\Models\detail_transaksi;
use App\Models\mekanik;
use App\Models\rating;
use App\Models\transaksi;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name'=>'jek',
            'email'=>'jek@gmail.com',
            'password'=>bcrypt('123'),
            'role'=>'admin',
            'kontak'=>'0805050505',
            'cover'=>'img/mtr4.jpg',

        ]);
        User::create([
            'name'=>'zack',
            'email'=>'zack@gmail.com',
            'password'=>bcrypt('444'),
            'role'=>'pengguna',
            'kontak'=>'0812121212',
            'cover'=>'img/mtr4.jpg',
        ]);
        User::create([
            'name'=>'jki',
            'email'=>'jki@gmail.com',
            'password'=>bcrypt('222'),
            'role'=>'mekanik',
            'kontak'=>'0807070707',
            'cover'=>'img/mtr4.jpg',

        ]); 
        User::create([
            'name'=>'jack',
            'email'=>'jack@gmail.com',
            'password'=>bcrypt('111'),
            'role'=>'owner',
            'kontak'=>'0802020202',
            'cover'=>'img/mtr4.jpg',

        ]);
        User::create([
            'name'=>'sri',
            'email'=>'sri@gmail.com',
            'password'=>bcrypt('333'),
            'role'=>'kasir',
            'kontak'=>'0803030303',
            'cover'=>'img/mtr4.jpg',

        ]);

        booking::create([
            'user_id'=>1,
            'merk_motor'=>'honda',
            'mesin_motor'=>'laa',
            'seri_motor'=>'pcx',
            'no_plat'=>'082hg',
            'jenis_service'=>'nanana',
            'tgl_booking'=>'2007-07-07',
            'deskripsi'=>'jhghjfhyfryh',
            'status'=>'',
        ]);

        mekanik::create([
            'booking_id'=>1,
            'nama'=>'daaa',
            'email'=>'daa@gmail.com',
            'password'=>bcrypt('12345'),
            'kontak'=>'082375787',
        ]);

        barang::create([
            'booking_id'=>1,
            'nama_barang'=>'agdjhgadj',
            'harga'=>'500',
        ]);

        detail_transaksi::create([
            'user_id'=>1,
            'barang_id'=>1,
        ]);

        transaksi::create([
            'user_id'=>1,
            'booking_id'=>1,
            'total_harga'=>'7000',
            'tgl_transaksi'=>'2002-02-02',
        ]);

        artikel::create([
            'user_id'=>1,
            'gambar'=>'img/see.jpg',
            'judul'=>'Ganti Oli Mesin',
            'berita'=>'Pengecekan oli mesin adalah salah satu aspek penting dalam perawatan rutin motor. Ini membantu memastikan bahwa mesin beroperasi dalam kondisi optimal dan mencegah kerusakan yang dapat timbul akibat kurangnya pelumasan.  ',
        ]);
        artikel::create([
            'user_id'=>1,
            'gambar'=>'img/vaa.jpg',
            'judul'=>'Servis Ban',
            'berita'=>'Ban adalah satu-satunya titik kontak antara kendaraan dan jalan. Oleh karena itu, keadaan ban sangat berpengaruh terhadap daya cengkram, handling, dan keamanan kendaraan. Melakukan perawatan secara teratur tak  hanya untuk menjaga performa ban, tetapi juga untuk mengurangi risiko kecelakaan yang mungkin terjadi akibat ban yang aus atau kurang terawat. Berikut ini merupakan detil-detil dari perawatan ban motor.',
        ]);
        artikel::create([
            'user_id'=>1,
            'gambar'=>'img/dua.jpg',
            'judul'=>'Servis Knalpot',
            'berita'=>'Knalpot merupakan salah satu komponen penting pada sepeda motor yang berfungsi sebagai sistem pembuangan gas hasil pembakaran di ruang mesin. Knalpot dibangun dengan menggunakan beberapa komponen yang dirancang untuk mengurangi kadar polusi zat beracun dan mengurangi tingkat kebisingan suara. Selain itu, sistem pembuangan juga membantu meningkatkan aspek kinerja output mesin. Namun knalpot jadi bagian yang rawan terserang korosi dan karat karena posisinya yang sangat mudah terkena kotoran. ',
        ]);
        artikel::create([
            'user_id'=>1,
            'gambar'=>'img/satu.jpg',
            'judul'=>'Servis Mesin',
            'berita'=>'Servis rutin adalah langkah penting dalam menjaga performa sepeda motor Anda tetap optimal. Dengan melakukan servis berkala, Anda dapat memastikan bahwa motor Anda beroperasi dengan baik dan awet.  ',
        ]);

        rating::create([
            'user_id'=>1,
            'rating'=>'1',
            'deskripsi'=>'nanananana',
        ]);
    }
}
