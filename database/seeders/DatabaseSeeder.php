<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Barang;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Barang::create([
            'namaBarang' => 'Skintific',
            'harga' => 127000,
            'stok' => 99,
            'keterangan' => '5x Ceremide Barier Repair',
            'ulasan' => 'Moisturizer 5x Ceremide Barier Repair Moisturize Gel Moisturizer yang menggabungkan 3 kandungan aktif Ceramide, Hyaluronic Acid, dan Centella Asiatica, untuk mengatasi permasalahan skin barrier yang rusak seperti jerawat, kemerahan, kulit bertekstur, dan juga kulit kering secara cepat namun tetap aman untuk skin barrier. Diperkaya dengan teknolog 5X Ceramide, yang merupakan gabungan 5 jenis Ceramide untuk melembabkan secara mendalam dan memperkuat lapisan kulit. 5X Ceramide ini membantu untuk memperbaiki dan melindungi skin barrier dengan menjaga kelembaban dan melindungi kulit dari faktor eksternal.',
            'photo' => 'skintific.jpg'
        ]);
        Barang::create([
            'namaBarang' => 'Dorskin',
            'harga' => 99000,
            'stok' => 65,
            'keterangan' => 'Matcha Glow Dream Mask',
            'ulasan' => 'Matcha Glow Dream Mask, 2 in 1 Moisturizer dan sleeping mask yang ringan membuat kulit terasa lebih sehat dari hari sebelumnya dengan tiga kandungan antioxidant untuk meredakan dan megurangi bekas jerawat kemerahan. Bekerja saat kamu tidur untuk menghidrasi, menenangkan dan mencerahkan dipagi hari ',
            'photo' => 'dorskin.jpg'
        ]);
        Barang::create([
            'namaBarang' => 'The Originote',
            'harga' => 40000,
            'stok' => 78,
            'keterangan' => 'Watery Gel Moisturizer',
            'ulasan' => 'Moisturizer yang diformulasikan untuk menjaga skin barrier dengan menggunakan gabungan dari bahan aktif laboratorium kimia yang teruji secara klinis aman dan bahan natural dari alam. Diformulasikan dengan Hyaluronic Acid dan Ceramide yang dapat memperbaiki dan menjaga skin barrier, mengunci hidrasi pada kulit, menjaga elastisitas kulit serta membantu menyembuhkan breakout. Mengandung Chlorelina gabungan antara chlorella dan spirulina yang berfungsi untuk menjaga elastisitas, sebagai antioksidan bagi kulit, sebagai oil control dan teksturnya yang gel membuat moisturizer ini cocok untuk segala jenis kulit.',
            'photo' => 'originote.jpg'
        ]);
        Barang::create([
            'namaBarang' => 'Eiem Beauty',
            'harga' => 38000,
            'stok' => 75,
            'keterangan' => 'Water Bank Moisturizer Gel',
            'ulasan' => 'Eiem Beauty ini adalah moisturizer yang memiliki tekstur creamy dan diformulasikan secara khusus untuk membantu mencerahkan kulit wajah kamu, dengan kandungan 10% Niacinamide. Selain itu, varian ini juga bermanfaat untuk memperbaiki kondisi kulit, serta memperbaiki skin barrier dan membantu meningkatkan kekenyalan kulit.',
            'photo' => 'eiem.jpg'
        ]);
    }
}
