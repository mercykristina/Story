-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2019 pada 14.26
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `story`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cerita`
--

CREATE TABLE `cerita` (
  `id_cerita` varchar(64) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `sinopsis` text NOT NULL,
  `cerita` text NOT NULL,
  `penulis` varchar(64) NOT NULL,
  `tahun` varchar(5) NOT NULL,
  `genre` varchar(15) NOT NULL,
  `id_user` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cerita`
--

INSERT INTO `cerita` (`id_cerita`, `judul`, `image`, `sinopsis`, `cerita`, `penulis`, `tahun`, `genre`, `id_user`) VALUES
('5dda437cc2dfc', 'Edelweiss', '5dda437cc2dfc.jpg', 'Aku melihatnya lagi pagi ini. Dia terlihat sibuk mengobrol dengan teman-temannya. Senyumnya selalu terukir ketika dia berbicara. Matanya pun berbinar ketika dia berkata. Aku tahu pasti, dia sedang membicarakan rencana untuk mendaki gunung bersama-sama.', 'Aku melihatnya lagi pagi ini. Dia terlihat sibuk mengobrol dengan teman-temannya. Senyumnya selalu terukir ketika dia berbicara. Matanya pun berbinar ketika dia berkata. Aku tahu pasti, dia sedang membicarakan rencana untuk mendaki gunung bersama-sama.\r\nDia terobsesi pada gunung, sama sepertiku.\r\nAku berjalan menghampirinya ketika teman-temannya berlalu pergi.\r\n“Hei,” sapaku.\r\nDia tersenyum menatapku. “Hei juga, aku sudah memberitahu mereka. Jika kita lebih baik berangkat tanggal 7, mereka semua setuju.”\r\nAku mengangguk.\r\n“Kau ada kelas siang nanti?” tanyanya.\r\nAku mengingat-ingat, kemudian berkata, “Tidak, ada apa?”\r\n“Makan siang bersama?” tawarnya.\r\n“Oke,” jawabku.\r\nKita duduk di kafe dekat kampus. Suasana ramai kafe cukup mengangguku. Jika boleh jujur, aku tak suka keramaian. Aku suka sunyi yang membuatku damai. Aku lebih suka menghabiskan jam kosongku di perpustakaan. Membaca buku-buku tentang geografi.\r\n“Kau pernah ke Gunung Rinjani?” tanyanya menatapku.\r\nSelain membaca buku-buku tentang geografi. Aku suka mendaki gunung. Papaku memiliki hobby mendaki gunung. Jadi, terkadang dia mengajakku untuk ikut bersamanya. Tentu saja aku setuju. Lagi pula apa yang membuat seseorang tak menyukai tantangan mendaki gunung?\r\n“Pernah, dulu waktu aku masih SMA. Aku pergi bersama Papa dan teman-temannya.” jawabku.\r\nDia terlihat kagum. “Kupikir kau lebih berpengalaman dariku.”\r\nAku terkekeh. “Tidak juga, omong-omong aku suka melihat bunga edelweiss. Kurasa aku akan melihatnya lagi di pendakian kita nanti.”\r\n“Tentu saja, kita akan melihatnya.”\r\nDia, lelaki yang berbicara padaku merupakan teman satu angkatanku. Kita dekat karena kita memiliki hobby yang sama, mendaki gunung. Aku bertemu dengannya beberapa bulan yang lalu, saat kita mendaki bersama dengan teman-teman yang lain.\r\nSejak itu, kita jadi sering berkomunikasi dan berbicara tentang segala hal. Dia lelaki yang baik dan menyenangkan.\r\n“Aku hampir menghabiskan waktu liburanku dengan mendaki gunung,” ceritaku.\r\nDia menatapku, tersenyum dengan mata berbinar. “Itu keren. Aku tebak kau bukan tipe perempuan yang suka keramaian, bukankah begitu?”\r\nAku mengangguk membenarkan. Aku memang lebih menyukai gunung dengan segala kedamaiannya bukan mall dengan segala keramaiannya.\r\n—\r\n“Kau lelah?” tanyanya saat kita sudah beberapa lama mendaki Gunung Rinjani. Salah satu gunung yang memilik bunga keabadian, bunga edelweiss.\r\nAku menggeleng. Jujur saja, aku tak terlalu lelah. Aku sudah cukup sering melakukan hal ini. Jika pun aku lelah tidak ada yang bisa dilakukan selain tetap mendaki hingga kita sampai di pos peristirahatan. Jika kau berpikir bahwa mendaki itu hal yang keren, aku setuju. Tapi jika kau berpikir bahwa mendaki itu hal yang mudah, aku belum tentu setuju.\r\nAku mengusap keringat yang menetes di dahiku ketika sampai di pos peristirahatan. Beberapa teman yang lain meminum air botol mereka. Beberapa lagi, menyiapkan tenda. Yah, kita memutuskan untuk beristirahat karena memang waktu sudah cukup sore dan akan melanjutkan pendakian esok pagi.\r\n—\r\n“Ayo semangat!” teriak salah satu temanku saat kita mulai mendaki lagi.\r\nAku menarik napas, bermaksud mengumpulkan tenaga.\r\nDia menghampiriku dan tangannya terulur, “Ayo!”\r\nAku menyambut uluran tangannya dan berjalan bersama-sama. Kita berada di barisan paling belakang. Teman-teman yang lain terlihat lebih bersemangat. Karena memang, sebentar lagi kita akan melewati hamparan tanah yang dipenuhi bunga edelweiss. Yang katanya, bunga edelweiss merupakan simbol cinta.\r\nSesampainya disana, aku tersenyum. Hamparan tanah tersebut terlihat sangat indah. Hingga pandangan mataku tak mau pindah.\r\n“Aku pernah baca, kelopak bunga edelweiss itu akan gugur menjadi serbuk dalam 3-4 hari jika kita memetik dan membawanya pulang.” katanya.\r\nAku menoleh padanya dengan terkejut.\r\nDia menyadari arti pandanganku. “Tenang saja, mana mungkin aku memetik bunga edelweiss. Bisa-bisa, aku dipenjara.”\r\nAku tertawa mendengar jawabannya. “Kau tahu mengapa bunga edelweiss disebut bunga keabadian? Karena bunga itu selalu mekar selama 10 tahun lamanya. Ada zat yang namanya etilen, yang menyebabkan kelopaknya tetap bermekaran.”\r\n“Kau keren,” pujinya.\r\nAku merasa pipiku memanas. Pujiannya tak berlebihan, tetapi mampu memberi efek yang berat padaku. Perutku seolah bergejolak.\r\nAku mencoba untuk mengabaikan perasaan itu dan bersuara, “Papa pernah berkata padaku. Jika kamu ingin menunjukkan keindahan bunga edelweiss, jangan bawa bunga itu turun dari gunung, tapi ajaklah orang-orang untuk melihat langsung keindahan edelweiss di atas gunung. Karena keindahan bunga edelweiss yang sebenarnya adalah ketika melihat tangkainya bergoyang tertiup angin pegunungan, bukan ketika berada di tangan.”\r\nDia menatapku. Kedua tangannya meraih jari-jemariku. Dia terlihat menarik napas dan berkata, “Kau tau, darahku terasa membeku setiap melihatmu. Napasku terasa tercekat setiap melihat senyummu. Jantungku terasa tak berdetak setiap mendengar suaramu. Dan seluruhku organ tubuhku terasa tak berfungsi setiap kau menghilang dari pandanganku.”\r\nAku terpaku, aku bahkan tak menyangka dia dapat berkata seperti itu. Apa baru saja dia berkata dia menyukaiku?\r\n“Banyak hal yang tidak kita ketahui tentang dunia ini. Maukah kau belajar bersama denganku untuk memahami arti dunia sesungguhnya? Maukah kau menjadi rumah tempat dimana aku akan selalu pulang? Maukah kau menjadi milikku?” tambahnya.\r\nAku tak pernah membayangkan bahwa ada seseorang yang indah yang berani berkata-kata indah di tempat yang paling indah, tak pernah sekalipun. Tapi hal ini terjadi, saat ini, di tempat ini.\r\nAku tak tahu, dia akan berkata seperti itu. Tapi yang kutahu, aku berkata, “Ya, aku mau.”', 'Sinta', '2019', 'romance', ''),
('5dda449ebbe5a', 'Jumat Kliwon', '5dda449ebbe5a.jpg', 'Rembulan malam bersinar remang “An katam gak lo?” Tanya Deni memecahkan keheningan malam “katam donk Andi gitu!” jawab Andi dengan begitu sombong. Saat Andi dan Deni asik berbicara tiba-tiba mereka tersentak diam saat mendengar lolongan anjing yang begitu panjang.', 'Rembulan malam bersinar remang “An katam gak lo?” Tanya Deni memecahkan keheningan malam “katam donk Andi gitu!” jawab Andi dengan begitu sombong.\r\nSaat Andi dan Deni asik berbicara tiba-tiba mereka tersentak diam saat mendengar lolongan anjing yang begitu panjang. Gubrakkkk suara kaki mereka berusaha mengiringi langkah kakiku. “Rum kenapa sih lo diem aja dari tadi?” tanya Deni padaku. “gak papa kak” jawabku. “gak mungkin gak ada masalah tapi lo diem aja” cerocos Andi sewot. “kalian gak takut apa?” tanyaku. “huh! Takut siapa emang yang berani melawan Andi si preman kampung” ucap Andi sambil menunjukan kepalan. “kalian tuh sadar gak sih ini malam apa?” tanyaku. “ya sadarlah ini malam jumat kan!” jawab mereka serempak. “malam jumat benar sekali jumat kliwon!” tegasku berusaha mengulangi kalimat mereka. “hahhhhh APA jumat kliwon?” ucap Andi amat terkejut saat menyadari bahwa ini adalah malam jumat kliwon. Malam yang terkenal angker para syetan dan hantu berkeliaran.\r\nSeketika itu nyali mereka menciut, Andi dan Deni terus mengiringi langkah kakiku. Gemetar di tangan mereka semakin menggambarkan rasa takut yang teramat. Tiba-tiba angin datang dengan begitu deras, lolongan anjing semakin jelas terdengar di telinga “itu artinya ada hannnn”\r\n“hantuuuu!!!” teriak Andi dan Deni sambil lari tunggang langgang meninggalkan aku sendirian di tengah kegelapan malam. Tanpa menghiraukan tas dan sandal mereka yang porak poranda mereka ngicir lari tak tentu arah.\r\n“seperti apa hantu itu?” batinku bertanya-tanya. Rasa penasaran mengalahkan segala ketakutanku. Dengan keyakinan yang kuat bahwa manusia lebih sempurna kuhadapkan wajahku ke arah pembibitan yang terkenal angker itu. Dan iya ternyata betul disana terlihat sosok putih yang melambai-lambai mengikuti arah angin. “hanya seperti itukah sosok hantu yang membuat Andi dan Deni ngacir ketakutan?”\r\nKembali kuamati sudut komplek gelap itu datanglah sosok hitam mendekatiku. Semakin dekat jatungku seolah berhenti berdegup, kaki ini seakan tak mampu menompang tubuh nyalikupun mulai menciut. “ha…ha…hann” ucapku ketakutan\r\n“huaaaaa” ucap makhluk itu. Seketika itu aku terduduk.\r\n“rum pingsan ya?” tanya makhluk hitam itu? “heee jangan pingsan ini pak kus bukan hantu!” saat mendengar penjelasan darinya aku langsung berdiri. Kuamati ternyata benar itu pak kus yang sedang keliling mengecek perkebunan.\r\nDan kesokan hari karena masih merasa penasaran aku kembali ke kompek itu berniat melihat sosok putih yang semalam melambai-lambai ternyata oh, tenyata itu adalah sebuah karung pupuk yang sengaja diletakan di atas tumbuhan. Itu artinya tidak ada hantu di dunia ini yang ada hanya halusinasi yang membuat rasa takut yang berlebihan.', 'Kusuma Ningrum', '2019', 'comedy', ''),
('5ddcfd2044866', 'Recommender', 'default.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Kusuma Ningrum', '2018', 'adventure', '5ddcdfa9230fc'),
('5ddd0aba14447', 'coba', 'default.jpg', 'Lorem ipsum', 'lorem ipsum', 'arizal lorem ipsum', '<2017', 'fiction', '5ddcdfa9230fc');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating`
--

CREATE TABLE `rating` (
  `id_rating` varchar(20) NOT NULL,
  `id_user` varchar(40) NOT NULL,
  `rating` int(6) NOT NULL,
  `komentar` text,
  `id_cerita` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rating`
--

INSERT INTO `rating` (`id_rating`, `id_user`, `rating`, `komentar`, `id_cerita`) VALUES
('5ddd221b2f00c', '5ddcdfa9230fc', 5, 'nice', '5dda437cc2dfc'),
('5ddd24b61d2ac', '5ddcd7daf1e61', 5, 'mantab', '5dda437cc2dfc'),
('5ddd24c956886', '5ddcd7daf1e61', 5, 'woooooah', '5dda449ebbe5a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(64) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `username`, `password`) VALUES
('100001', 'Jono', 'jon@mail.com', 'jono', 'e10adc3949ba59abbe56e057f20f883e'),
('100002', 'Dasha', 'das@mail.com', 'dasha', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
('5ddcd7daf1e61', 'arizal', 'gmail@arizal.com', 'arizal', '202cb962ac59075b964b07152d234b70'),
('5ddcdfa9230fc', 'Mercy Kristina Possumah', 'coba@coba.com', 'coba', 'c3ec0f7b054e729c5a716c8125839829'),
('5ddcec5fdb3ae', 'a', 'a@a.com', 'a', '0cc175b9c0f1b6a831c399e269772661');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cerita`
--
ALTER TABLE `cerita`
  ADD PRIMARY KEY (`id_cerita`);

--
-- Indeks untuk tabel `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id_rating`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `first_name` (`nama`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
