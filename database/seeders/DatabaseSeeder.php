<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Membuat User Marsa
        $marsa = User::create([
            'name' => 'Marsa',
            'email' => 'marsa@gmail.com',
            'password' => bcrypt('password'),
        ]);

        // Membuat Users lainnya
        $user1 = User::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => bcrypt('password'),
        ]);

        $user2 = User::create([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'password' => bcrypt('password'),
        ]);

        // Membuat Categories
        $categoryKesehatan = Category::create(['name' => 'Kesehatan']);
        $categoryTeknologi = Category::create(['name' => 'Teknologi']);
        $categoryPendidikan = Category::create(['name' => 'Pendidikan']);
        $categoryLifestyle = Category::create(['name' => 'Lifestyle']);
        $categoryBisnis = Category::create(['name' => 'Bisnis']);

        // Membuat 10 Posts untuk Marsa
        Post::create([
            'title' => 'Manfaat Olahraga Pagi untuk Kesehatan',
            'slug' => 'manfaat-olahraga-pagi-untuk-kesehatan',
            'excerpt' => 'Olahraga pagi memiliki banyak manfaat untuk kesehatan tubuh dan pikiran.',
            'body' => 'Olahraga pagi adalah salah satu kebiasaan terbaik yang bisa Anda lakukan untuk kesehatan. Dengan berolahraga di pagi hari, tubuh akan lebih segar sepanjang hari. Manfaatnya antara lain meningkatkan metabolisme, memperbaiki kualitas tidur, mengurangi stres, dan meningkatkan mood. Cobalah untuk mulai dengan olahraga ringan seperti jogging, jalan santai, atau yoga selama 30 menit setiap pagi.',
            'user_id' => $marsa->id,
            'category_id' => $categoryKesehatan->id,
        ]);

        Post::create([
            'title' => 'Perkembangan Artificial Intelligence di 2025',
            'slug' => 'perkembangan-artificial-intelligence-di-2025',
            'excerpt' => 'AI semakin berkembang pesat dan mengubah berbagai aspek kehidupan manusia.',
            'body' => 'Artificial Intelligence atau kecerdasan buatan telah mengalami perkembangan yang sangat pesat di tahun 2025. Teknologi AI kini digunakan dalam berbagai bidang seperti kesehatan, pendidikan, transportasi, hingga industri kreatif. Machine learning dan deep learning menjadi fondasi utama dalam pengembangan sistem AI modern. Dengan kemampuan untuk belajar dari data dan pengalaman, AI dapat membantu manusia dalam mengambil keputusan yang lebih baik dan efisien.',
            'user_id' => $marsa->id,
            'category_id' => $categoryTeknologi->id,
        ]);

        Post::create([
            'title' => 'Tips Belajar Efektif untuk Mahasiswa',
            'slug' => 'tips-belajar-efektif-untuk-mahasiswa',
            'excerpt' => 'Metode belajar yang tepat dapat meningkatkan produktivitas dan pemahaman.',
            'body' => 'Belajar efektif adalah kunci sukses dalam dunia akademik. Beberapa tips yang dapat diterapkan antara lain: membuat jadwal belajar yang konsisten, menggunakan teknik pomodoro untuk manajemen waktu, membuat catatan dengan metode Cornell, belajar kelompok untuk diskusi, dan menggunakan berbagai sumber belajar. Jangan lupa untuk istirahat yang cukup dan menjaga kesehatan agar otak dapat bekerja optimal.',
            'user_id' => $marsa->id,
            'category_id' => $categoryPendidikan->id,
        ]);

        Post::create([
            'title' => 'Gaya Hidup Minimalis: Less is More',
            'slug' => 'gaya-hidup-minimalis-less-is-more',
            'excerpt' => 'Hidup minimalis membantu kita fokus pada hal-hal yang benar-benar penting.',
            'body' => 'Gaya hidup minimalis bukan hanya tentang memiliki sedikit barang, tetapi lebih kepada memiliki barang-barang yang benar-benar kita butuhkan dan nilai. Dengan menerapkan prinsip minimalis, kita dapat mengurangi stres, menghemat uang, memiliki lebih banyak waktu, dan meningkatkan kualitas hidup. Mulailah dengan membersihkan rumah dari barang-barang yang tidak terpakai, lalu terapkan prinsip one in one out untuk menjaga kesederhanaan.',
            'user_id' => $marsa->id,
            'category_id' => $categoryLifestyle->id,
        ]);

        Post::create([
            'title' => 'Strategi Digital Marketing untuk UMKM',
            'slug' => 'strategi-digital-marketing-untuk-umkm',
            'excerpt' => 'Panduan lengkap memanfaatkan digital marketing untuk mengembangkan bisnis UMKM.',
            'body' => 'Digital marketing adalah kunci sukses UMKM di era digital. Strategi yang dapat diterapkan meliputi: membuat konten berkualitas di media sosial, memanfaatkan SEO untuk website, menggunakan email marketing, berkolaborasi dengan influencer mikro, dan memanfaatkan marketplace. Dengan budget terbatas, UMKM tetap bisa bersaing dengan memanfaatkan tools gratis dan fokus pada engagement dengan customer.',
            'user_id' => $marsa->id,
            'category_id' => $categoryBisnis->id,
        ]);

        Post::create([
            'title' => 'Pentingnya Kesehatan Mental di Tempat Kerja',
            'slug' => 'pentingnya-kesehatan-mental-di-tempat-kerja',
            'excerpt' => 'Kesehatan mental karyawan berpengaruh besar pada produktivitas perusahaan.',
            'body' => 'Kesehatan mental karyawan sering diabaikan, padahal sangat penting untuk produktivitas dan kepuasan kerja. Perusahaan perlu menciptakan lingkungan kerja yang supportif, menyediakan program employee assistance, memberikan work-life balance, dan mengurangi stigma terhadap masalah kesehatan mental. Karyawan juga perlu proaktif dalam menjaga kesehatan mental dengan olahraga, meditasi, dan berkomunikasi dengan atasan jika menghadapi tekanan berlebih.',
            'user_id' => $marsa->id,
            'category_id' => $categoryKesehatan->id,
        ]);

        Post::create([
            'title' => 'Bahasa Pemrograman Terpopuler di 2025',
            'slug' => 'bahasa-pemrograman-terpopuler-di-2025',
            'excerpt' => 'Mengenal bahasa pemrograman yang paling banyak digunakan dan dipelajari tahun ini.',
            'body' => 'Di tahun 2025, beberapa bahasa pemrograman mendominasi industri teknologi. Python tetap menjadi favorit untuk data science dan AI. JavaScript masih yang terdepan untuk web development. Go semakin populer untuk backend systems. Rust dipilih untuk aplikasi yang membutuhkan performa tinggi. Sedangkan Kotlin dan Swift tetap menjadi pilihan utama untuk mobile development. Memilih bahasa yang tepat tergantung pada tujuan dan jenis proyek yang akan dikerjakan.',
            'user_id' => $marsa->id,
            'category_id' => $categoryTeknologi->id,
        ]);

        Post::create([
            'title' => 'Metode Pembelajaran Berbasis Proyek',
            'slug' => 'metode-pembelajaran-berbasis-proyek',
            'excerpt' => 'Project-based learning mengembangkan kemampuan praktis dan problem solving.',
            'body' => 'Pembelajaran berbasis proyek (Project-Based Learning) adalah metode pembelajaran yang mengutamakan pengalaman langsung siswa dalam mengerjakan proyek nyata. Metode ini mengembangkan critical thinking, collaboration, creativity, dan communication skills. Siswa tidak hanya belajar teori, tetapi juga mengaplikasikannya dalam konteks dunia nyata. Guru berperan sebagai fasilitator yang membimbing siswa dalam proses pembelajaran, bukan hanya sebagai pemberi informasi.',
            'user_id' => $marsa->id,
            'category_id' => $categoryPendidikan->id,
        ]);

        Post::create([
            'title' => 'Cara Membangun Personal Branding yang Kuat',
            'slug' => 'cara-membangun-personal-branding-yang-kuat',
            'excerpt' => 'Personal branding penting untuk meningkatkan kredibilitas dan peluang karir.',
            'body' => 'Personal branding adalah cara kita mempresentasikan diri dan keahlian kepada publik. Untuk membangun personal branding yang kuat, tentukan niche atau bidang expertise, konsisten dalam membagikan konten berkualitas, bangun network yang luas, tunjukkan value yang unik, dan maintain reputasi baik. Platform seperti LinkedIn, Twitter, dan blog pribadi dapat digunakan untuk membangun presence online. Ingat, personal branding adalah marathon, bukan sprint.',
            'user_id' => $marsa->id,
            'category_id' => $categoryLifestyle->id,
        ]);

        Post::create([
            'title' => 'Panduan Memulai Bisnis Online dari Nol',
            'slug' => 'panduan-memulai-bisnis-online-dari-nol',
            'excerpt' => 'Langkah-langkah praktis untuk memulai bisnis online dengan modal minimal.',
            'body' => 'Memulai bisnis online tidak selalu membutuhkan modal besar. Yang penting adalah ide yang jelas dan eksekusi yang konsisten. Langkah-langkahnya: riset pasar dan kompetitor, tentukan produk atau jasa yang akan dijual, buat brand identity yang menarik, pilih platform yang tepat (marketplace, website, atau social media), buat strategi marketing, dan mulai berjualan. Fokus pada customer service yang excellent dan terus belajar dari feedback. Mulai dari kecil, dan scale up secara bertahap.',
            'user_id' => $marsa->id,
            'category_id' => $categoryBisnis->id,
        ]);

        // Membuat beberapa posts untuk user lain
        Post::create([
            'title' => 'Tips Fotografi untuk Pemula',
            'slug' => 'tips-fotografi-untuk-pemula',
            'excerpt' => 'Panduan dasar fotografi untuk menghasilkan foto yang menarik.',
            'body' => 'Fotografi adalah seni menangkap momen. Untuk pemula, pahami exposure triangle (ISO, aperture, shutter speed), pelajari komposisi rule of thirds, manfaatkan cahaya alami, dan praktik secara konsisten. Tidak perlu kamera mahal untuk memulai, yang penting adalah skill dan kreativitas.',
            'user_id' => $user1->id,
            'category_id' => $categoryLifestyle->id,
        ]);

        Post::create([
            'title' => 'Manfaat Membaca Buku Setiap Hari',
            'slug' => 'manfaat-membaca-buku-setiap-hari',
            'excerpt' => 'Membaca buku secara rutin membawa banyak manfaat untuk perkembangan diri.',
            'body' => 'Membaca buku adalah investasi terbaik untuk diri sendiri. Manfaatnya termasuk meningkatkan pengetahuan, mengasah critical thinking, mengurangi stres, meningkatkan fokus dan konsentrasi, serta memperluas wawasan. Sisihkan minimal 30 menit setiap hari untuk membaca, dan lihat perubahan positif dalam hidup Anda.',
            'user_id' => $user2->id,
            'category_id' => $categoryPendidikan->id,
        ]);
    }
}
