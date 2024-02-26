<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="style/hm.css">
    <link href="style/font.css" rel="stylesheet">

    <title>HypnoTeraphy</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        html{
            scroll-behavior: smooth;
        }

        *{
            font-family: "Poppins", sans-serif;
            font-weight: 400;
        }
        #welcome{
            background-image: url("assets/Hypno-bg.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            
        }

  .active-carousel-dot {
    width: 10px;
    height: 10px;
  }
</style>

    </style>

    @vite('resources/css/app.css')
</head>
<header class="bg-white py-16 px-32 shadow-xl fixed top-0 w-full z-50 tablet:py-8 tablet:px-16 ">
    <nav class="flex justify-between items-center">
    <div class="flex items-center gap-3">
    <a href="#" class="text-3xl hover:text-custom-second-color tablet:text-base"><h1>Hypno<span class="font-bold">Teraphy</span></h1></a>
    </div>
    <ul class="text-2xl flex gap-16 text-gray-500 tablet:gap-8">
        <a href="#"><li class="font-normal hover:text-custom-second-color tablet:text-base">Home</li></a>
        <a href="#about"><li class="font-normal hover:text-custom-second-color tablet:text-base">About Me</li></a>
        <a href="#hypnoteraphy"><li class="font-normal hover:text-custom-second-color tablet:text-base">HypnoTeraphy</li></a>
        <a href="#pricelist"><li class="font-normal hover:text-custom-second-color tablet:text-base">Services</li></a>
    </ul>
    <a href="#footer" class="text-s text-white bg-gradient-to-br from-cyan-400 to-cyan-800 py-2 px-4 
    tablet:py-1.5 rounded-full hover:bg-gradient-to-tl from cyan-400 to cyan-800 tablet:text-[8px]">Contact Me</a>
    </nav>
</header>                                               

<body class="bg-custom-main-color ">
    <!-- SECTION WELCOME START -->
    <section id="welcome" class="flex items-center justify-center h-screen bg-black-400 mt-32 tablet:mt-20">
        <div class="flex flex-col items-center gap-10">
            <h1 class="text-white text-6xl font-bold">HypnoTeraphy</h1>
            <p class="text-white font-normal text-xl">"Efektivitas Terapy Penyakit Kejiwaan"</p>
            <a class="text-white bg-gradient-to-br from-cyan-400 to-cyan-800 py-1.5 px-8 rounded-full hover:bg-gradient-to-tl from cyan-400 to cyan-800" href="#">Pelajari</a>
        </div>
    </section>
        <!-- SECTION WELCOME END -->

        <!-- SECTION ABOUT ME START -->
    <section id="about" class="h-auto">
        <div class="flex flex-col items-center gap-20 tablet:gap-10 bg-white shadow-2xl rounded-3xl py-20 px-16 my-32 mx-24 tablet:mx-20 tablet:justify-center tablet:text-center">
            <div class="flex flex-wrap items-center justify-between gap-12 tablet:gap-1 tablet:justify-center">
                <img src="assets\pas-foto.png" alt="pas-foto">
                <div class="flex flex-col gap-10 justify-center mt-24">
                    <div class="bg-gradient-to-r from-cyan-400 to-cyan-800 text-transparent bg-clip-text">
                    <h1 class="text-5xl font-bold">Terapis Bersertifikasi</h1>
                    </div>
                    <p class="text-white bg-gradient-to-r from-cyan-400 to-cyan-800 py-3 px-8 rounded-full 
                    text-center max-w-[530px] text-2xl ">Muhamad Rifki Septian.,A.Md.,CHt</p>
                    <p class="text-gray-500 max-w-[530px] text-xl leading-loose">Ditangani oleh perawat berpengalaman dalam bidang 
                        Psikoterapist dan Hypnoteraphy.</p>
                </div>
            </div>
            <div class="flex flex-wrap items-center gap-9 tablet:gap-20 ml-5 tablet:ml-0 tablet:justify-center">
                <img class="w-[395px] ml-5 tablet:ml-0" src="assets\sertifikat.png" alt="sertifikat">
                <div class="flex flex-col bg-gradient-to-br from-cyan-400 to-cyan-800 text-white px-10 py-7 gap-10 rounded-3xl ml-4 tablet:ml-0">
                    <h1 class="text-5xl font-semibold">Jadwal Konsultasi</h1>
                    <div class="flex gap-3 text-3xl items-center">
                        <img class="w-10" src="assets\time-circle.png" alt="time-circle">
                        <p>Setiap Hari, 08:00 - 20:00 WIB</p>
                    </div>
                    <a href="#" class="text-xl font-semibold text-blue-900 bg-white text-center py-4 rounded-full max-w-48 hover:shadow-2xl">Download CV</a>
                </div>
            </div>
        </div>
    </section>

        {{-- SECTION ABOUT ME END --}}

        {{-- SECTION HYPNOTERAPHY START --}}
    <section id="hypnoteraphy" class="h-auto  flex items-center justify-center my-40">
            <div class="flex flex-col text-center items-center justify-center gap-10 bg-white rounded-3xl px-32 py-16 shadow-2xl tablet:mx-20">
                <h1 class="text-5xl font-bold text-blue-900 tablet:text-4xl">Apa itu <span class="bg-gradient-to-r from-cyan-400 to-cyan-800 text-transparent bg-clip-text"><span class="text-5xl font-bold tablet:text-4xl">HypnoTeraphy?</span></span></h1>
                <p class="max-w-5xl text-xl text-gray-500">Booth (dalam Negara, 2011) menjelaskan terapis dalam hal ini membimbing klien memiliki perubahan positif untuk mengurangi 
                    kecemasan ketika klien mengalami relaksasi mendalam dimana keadaan tersebut memiliki tingkat tinggi untuk masukannya sugesti, 
                    keadaan tersebut disebut trance</p>
                <a href="#tujuan" class="text-s text-white bg-gradient-to-br from-cyan-400 to-cyan-800 py-3 px-7  
                tablet:py-1.5 rounded-full hover:bg-gradient-to-tl from cyan-400 to cyan-800">Pelajari</a>
            </div>
    </section>
        {{-- SECTION HYPNOTERAPHY END --}}


    {{-- SECTION TUJUAN START --}}
    <section id="tujuan" class="h-auto my-40 flex justify-center mt-64">
        <div class="flex flex-wrap gap-40 items-center justify-center tablet:text-center tablet:gap-24">
            <div class="flex flex-col gap-12 items-center">
                <h1 class="text-5xl font-bold text-blue-900">Tujuan <span class="bg-gradient-to-r from-cyan-400 to-cyan-800 text-transparent bg-clip-text"><span class="font-bold">Hypnoteraphy</span></span></h1>
                <p class="max-w-lg text-xl text-gray-700 leading-loose">Untuk membantu seseorang mengontrol keadaan 
                    kesadaran dengan lebih baik. Pada kasus depresi, 
                    terapi ini difokuskan untuk membantu pengidapnya 
                    agar lebih rileks. Saat rileks, orang tersebut dapat 
                    mendiskusikan perasaan dan emosinya tanpa ada
                    rasa stress dan cemas.</p>
            </div>
            <img src="assets\10.png" alt="ilustrasi">
        </div>
    </section>
    {{-- SECTION TUJUAN END --}}

    {{-- SECTION PENYAKIT START--}}
    <section id="penyakit" class=" h-auto my-48 flex justify-center tablet:my-72">
        <div class="flex flex-wrap px-16 gap-28 tablet:justify-center tablet:text-center items-center">
            <row class="flex flex-col gap-8">
                <h1 class="text-5xl font-bold text-blue-900">Jenis <span class="bg-gradient-to-r from-cyan-400 to-cyan-800 text-transparent bg-clip-text"><span class="font-bold">Penyakit</span></span></h1>
                <p class="max-w-lg text-gray-500 leading-loose text-xl">Hypnoteraphy bisa membantu berbagai penyakit 
                    kejiwaan diantaranya:</p>
                <div class="flex gap-20 tablet:justify-center">
                <div class="flex flex-col gap-5">
                <div class="flex items-center gap-3">
                <img src="assets\ellips-number\1.png" alt="1">
                <span class="text-lg font-semibold">Stress</span>
                </div>
                <div class="flex items-center gap-3">
                <img src="assets\ellips-number\2.png" alt="1">
                <span class="text-lg font-semibold">Phobia</span>
                </div>
                <div class="flex items-center gap-3">
                <img src="assets\ellips-number\3.png" alt="1">
                <span class="text-lg font-semibold">Trauma</span>
                </div>
                <div class="flex items-center gap-3">
                <img src="assets\ellips-number\4.png" alt="1">
                <span class="text-lg font-semibold">Depresi</span>
                </div>
                </div>
                <div class="flex flex-col gap-5">
                <div class="flex items-center gap-3">
                <img src="assets\ellips-number\5.png" alt="1">
                <span class="text-lg font-semibold">Harga Diri Rendah</span>
                </div>
                <div class="flex items-center gap-3">
                <img src="assets\ellips-number\6.png" alt="1">
                <span class="text-lg font-semibold">Resiko Kekerasan</span>
                </div>
                <div class="flex items-center gap-3">
                <img src="assets\ellips-number\7.png" alt="1">
                <span class="text-lg font-semibold">Anxiety (Kecemasan)</span>
                </div>
                <div class="flex items-center gap-3">
                <img src="assets\ellips-number\8.png" alt="1">
                <span class="text-lg font-semibold">Masalah Rumah Tangga</span>
                </div>
                </div>
                </div>
            </row>
            <row class="flex flex-col gap-8">
                <h1 class="text-5xl font-bold text-blue-900">Efektivitas <span class="bg-gradient-to-r from-cyan-400 to-cyan-800 text-transparent bg-clip-text"><span class="font-bold">Terapi</span></span></h1>
                <p class="max-w-lg text-xl leading-loose text-gray-500">Terapi Hypnoteraphy ini sangat efektif digunakan dalam
                    penyakit kejiwaan. Bahkan salah satu contoh dengan 
                    pasien Trauma Bisa sembuh dengan Terapi Hypnotheraphy 
                    ini dengan 2 jam dan penyakit lain juga seperti cemas 
                    berlebihan, trauma depresi itu bisa dengan 21 hari dengan 3
                    pertemuan dalam 1-3 jam di terapis. (Gunawan, W Adi 2012).
                </p>
            </row>
        </div>
    </section>
    {{-- SECTION PENYAKIT END--}}

    {{-- SECTION PRICELIST START--}}
    <section class="pricelist" id="pricelist">
        <div class="price-container">
            <div class="price-content">
                <h1 class="poppins-bold text-center hs">Price List</h1>

                <div class="price-list m-2 mt-4 p-3 py-2 rounded-4">
                    <div class="row text-start">
                        <div class="col d-flex align-items-center">
                        <div class="form-check ms-3 mt-2">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="border: 2px solid black">
                            <label class="form-check-label" for="flexCheckDefault">
                                <p class="poppins-semibold">Paket konsultasi Self Mental Health</p>
                            </label>
                        </div>
                        </div>
                        <div class="col">
                            <div class="row justify-content-end">
                                <div class="col d-flex flex-column align-items-end">
                                    <h5 class="text-end me-4 poppins-bold ">Rp.400.000 / 3x Pertemuan</h5>
                                    <a href="https://wa.me/+6283169153860?text=permisi,%20saya%20ingin%20memesan%20paket%20Konsultasi%20Self%20Mental%20Health%20melalui%20transaksi%20blank"><button class="ubt btn btn-info mt-2 me-4 p-1 px-3 rounded-pill shadow-sm text-white poppins-regular">lihat Detail</button></a>                                 
                                </div>                                 
                            </div>
                        </div>
                    </div>
                </div>

                <div class="price-list m-2 mt-4 p-3 py-2 rounded-4">
                    <div class="row text-start">
                        <div class="col d-flex align-items-center">
                        <div class="form-check ms-3 mt-2">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="border: 2px solid black">
                            <label class="form-check-label" for="flexCheckDefault">
                                <p class="poppins-semibold">Slimming Diet</p>
                            </label>
                          </div>
                        </div>
                        <div class="col">
                            <div class="row justify-content-end">
                                <div class="col d-flex flex-column align-items-end">
                                    <h5 class="text-end me-4 poppins-bold">Rp.200.000 / 1x Pertemuan</h5>
                                    <a href="https://wa.me/+6283169153860?text=permisi,%20saya%20ingin%20memesan%20paket%20slimming%20diet%20melalui%20transaksi%20blank"><button class="ubt btn btn-info mt-2 me-4 p-1 px-3 rounded-pill shadow-sm text-white poppins-regular">lihat Detail</button></a>                                
                                </div>                                 
                            </div>
                        </div>
                    </div>
                </div>

                <div class="price-list m-2 mt-4 p-3 py-2 rounded-4">
                    <div class="row text-start">
                        <div class="col d-flex align-items-center">
                        <div class="form-check ms-3 mt-2">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="border: 2px solid black">
                            <label class="form-check-label" for="flexCheckDefault">
                                <p class="poppins-semibold">Paket Hemat Berhenti Merokok</p>
                            </label>
                          </div>
                        </div>
                        <div class="col">
                            <div class="row justify-content-end">
                                <div class="col d-flex flex-column align-items-end">
                                    <h5 class="text-end me-4 poppins-bold">Rp.130.000 / 1x Pertemuan</h5>
                                    <a href="https://wa.me/+6283169153860?text=permisi,%20saya%20ingin%20memesan%20paket%20hemat%20Self%20berhenti%20merokok%20melalui%20transaksi%20blank"><button class="ubt btn btn-info mt-2 me-4 p-1 px-3 rounded-pill shadow-sm text-white poppins-regular">lihat Detail</button></a>                                  
                                </div>                                 
                            </div>
                        </div>
                    </div>
                </div>

                <div class="price-list m-2 mt-4 p-3 py-2 rounded-4">
                    <div class="row text-start">
                        <div class="col d-flex align-items-center">
                        <div class="form-check ms-3 mt-2">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="border: 2px solid black">
                            <label class="form-check-label" for="flexCheckDefault">
                                <p class="poppins-semibold">Konsulti Pasutri</p>
                            </label>
                          </div>
                        </div>
                        <div class="col">
                            <div class="row justify-content-end">
                                <div class="col d-flex flex-column align-items-end">
                                    <h5 class="text-end me-4 poppins-bold">Rp.140.000 / 1x Pertemuan</h5>
                                    <a href="https://wa.me/+6283169153860?text=permisi,%20saya%20ingin%20memesan%20paket%20Konsultasi%20pasutri%20melalui%20transaksi%20blank"><button class="ubt btn btn-info mt-2 me-4 p-1 px-3 rounded-pill shadow-sm text-white poppins-regular">lihat Detail</button></a>                                  
                                </div>                                 
                            </div>
                        </div>
                    </div>
                </div>

                <div class="price-list m-2 mt-4 p-3 py-2 rounded-4">
                    <div class="row text-start">
                        <div class="col d-flex align-items-center">
                        <div class="form-check ms-3 mt-2">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="border: 2px solid black">
                            <label class="form-check-label" for="flexCheckDefault">
                                <p class="poppins-semibold">Kangen Water</p>
                            </label>
                          </div>
                        </div>
                        <div class="col">
                            <div class="row justify-content-end">
                                <div class="col d-flex flex-column align-items-end">
                                    <h5 class="text-end me-4 poppins-bold">Rp.6.000 / botol 600ml</h5>
                                    <a href="https://wa.me/+6283169153860?text=permisi,%20saya%20ingin%20memesan%20paket%20kangen%20water%20melalui%20transaksi%20blank"><button class="ubt btn btn-info mt-2 me-4 p-1 px-3 rounded-pill shadow-sm text-white poppins-regular">lihat Detail</button></a>                                     
                                </div>                                 
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- SECTION PRICELIST END --}}

    {{-- SECTION ALAMAT START --}}
    <section class="alamat" id="alamat">
        <div class="alamat-container">
            <h1 class="poppins-bold text-center hs mb-5 me-4">Alamat</h1>
            <div class="alamat-content container">
                <div class="row container">
                    <div class="col d-flex justify-content-center"> {{-- map 1 --}}
                        <div class="row align-items-center shadow ms-5" style="background-color: white; width: 65%">
                                <div class="col mx-1 d-flex justify-content-center py-3">
                                    <div class="mapouter">
                                        <div class="gmap_canvas rounded-4">
                                            <iframe width="450" height="173" id="gmap_canvas" src="https://maps.google.com/maps?q=Hipnoterapi+Cibalong&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                            <a href="https://online.stopwatch-timer.net/">timer for kids</a><br><a href="https://textcaseconvert.com/"></a><br><style>.mapouter{position: relative;text-align: right;height: 173px;width: 344px;}</style><a href="https://www.mapembed.net">map box</a>
                                            <style>.gmap_canvas{overflow: hidden;background: none !important;height: 173px;width: 344px;}</style>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="text-start poppins-semibold ps-4 py-2">Hipnoterapi Cibalong</h4>
                                <p class="text-start ps-4 poppins-light pb-4">Kp. Bantarpayung, RT.002/RW.003,
                                    Singajaya, Kec. Cibalong, Kabupaten Tasikmalaya, Jawa Barat 46185</p>
                                <div class="ps-4 p-2 pb-4">
                                    <i></i><a class="link-primary" style="cursor: pointer">View Larger map</a>                                        
                                </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center"> {{-- map 1 --}}
                        <div class="row align-items-center shadow me-5" style="background-color: white; width: 65%">
                                <div class="col mx-1 d-flex justify-content-center py-3">
                                    <div class="mapouter">
                                        <div class="gmap_canvas rounded-4">
                                            <iframe width="344" height="173" id="gmap_canvas" src="https://maps.google.com/maps?q=Praktik+dr.+Ade+Ilyas+Mukmin%2C+Jl.+Ranca+Senggang%2C+RT.05%2FRW.08%2C+Cibunigeulis%2C+Bungursari%2C+Tasikmalaya+Regency%2C%C2%A0West%C2%A0Java%C2%A046151&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                            <a href="https://online.stopwatch-timer.net/">timer for kids</a><br><a href="https://textcaseconvert.com/"></a><br><style>.mapouter{position: relative;text-align: right;height: 173px;width: 344px;}</style><a href="https://www.mapembed.net">embedding maps in website</a>
                                            <style>.gmap_canvas{overflow: hidden;background: none !important;height: 173px;width: 344px;}</style>
                                        </div>
                                    </div>                    
                                </div>
                                <h4 class="text-start poppins-semibold ps-4 py-2">Praktik dr. Ade Ilyas Mukmin</h4>
                                <p class="text-start ps-4 poppins-light pb-4">Jl. Ranca Senggang, RT.05/RW.08, Cibunigeulis, Kec. Bungursari, Kab. Tasikmalaya, Jawa Barat 46151</p>
                                <div class="ps-4 p-2 pb-4">
                                    <i></i><a class="link-primary" style="cursor: pointer">View Larger map</a>                                        
                                </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
    {{-- SECTION ALAMAT END --}}

    {{-- SECTION UCAPAN START --}}
    <section id="ucapan" class="h-auto my-64">
        <div class="flex flex-col items-center text-center bg-white mx-28 py-32 shadow-2xl gap-10 rounded-3xl tablet:mx-10">
            <h1 class="bg-gradient-to-r from-cyan-400 to-cyan-800 text-transparent bg-clip-text text-5xl"><span class="font-bold">Terima Kasih</span></h1>
            <p class="max-w-5xl text-2xl text-gray-500 tablet:text-lg tablet:max-w-xl">“Pikiran yang tenang membawa kekuatan batin dan rasa percaya diri sehingga itu sangat penting untuk kesehatan yang baik”. (Dalai Lama XIV)</p>
            <div class="flex gap-20 tablet:items-center tablet:gap-5">
                <img class="w-44 tablet:w-32 tablet:h-32" src="assets\prahipti-2.png" alt="prahipti">
            <p class="text-2xl text-gray-500 tablet:text-lg">Kesehatan mentalmu adalah prioritas <br> <br>
                Kebahagiaanmu adalah penting <br> <br>
                Perawatan dirimu adalah suatu kebutuhan
            </p>
                <img class="w-40 tablet:w-36 tablet:h-36" src="assets\logo-ibh.png" alt="logo-ibh">
            </div>
        </div>
    </section>
    {{-- SECTION UCAPAN END --}}


    {{-- SECTION ULASAN START --}}
    <section class="h-auto" id="ulasan">
        <div class="flex flex-col items-center gap-10 relative">
            <h1 class="bg-gradient-to-r from-cyan-400 to-cyan-800 text-transparent bg-clip-text"><span class="text-4xl font-bold">Ulasan Pasien</span></h1>
            <div class="flex flex-wrap gap-10 justify-center max-w-[1200px] overflow-x mx-4" id="wrapper-card">  {{-- wrapper card  --}}
                <div class="bg-white border-2 px-10 py-5 rounded-xl">
                    <div class="flex">
                        <img src="assets\stars.png" alt="stars">
                        <img src="assets\stars.png" alt="stars">
                        <img src="assets\stars.png" alt="stars">
                        <img src="assets\stars.png" alt="stars">
                        <img src="assets\stars.png" alt="stars">
                    </div>
                    <p class="w-64 my-4 leading-7 font-semibold text-gray-600">Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                        Voluptate voluptatum neque perspiciatis.
                    </p>
                    <div class="flex items-center gap-3">
                        <img class="w-10 h-10 rounded-full" src="assets\akbar.JPG" alt="foto-customer">
                        <p class="font-bold text-gray-600">Akbar Bengkel</p>
                    </div>
                </div>
                <div class="bg-white border-2 px-10 py-5 rounded-xl">
                    <div class="flex">
                        <img src="assets\stars.png" alt="stars">
                        <img src="assets\stars.png" alt="stars">
                        <img src="assets\stars.png" alt="stars">
                        <img src="assets\stars.png" alt="stars">
                        <img src="assets\stars.png" alt="stars">
                    </div>
                    <p class="w-64 my-4 leading-7 font-semibold text-gray-600">Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                        Voluptate voluptatum neque perspiciatis.
                    </p>
                    <div class="flex items-center gap-3">
                        <img class="w-10 h-10 rounded-full" src="assets\yosep.JPG" alt="foto-customer">
                        <p class="font-bold text-gray-600">Yosep Knalpot</p>
                    </div>
                </div>
                <div class="bg-white border-2 px-10 py-5 rounded-xl">
                    <div class="flex">
                        <img src="assets\stars.png" alt="stars">
                        <img src="assets\stars.png" alt="stars">
                        <img src="assets\stars.png" alt="stars">
                        <img src="assets\stars.png" alt="stars">
                        <img src="assets\stars.png" alt="stars">
                    </div>
                    <p class="w-64 my-4 leading-7 font-semibold text-gray-600">Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                        Voluptate voluptatum neque perspiciatis.
                    </p>
                    <div class="flex items-center gap-3">
                        <img class="w-10 h-10 rounded-full" src="assets\fahri.JPG" alt="foto-customer">
                        <p class="font-bold text-gray-600">Fahri Cilok</p>
                    </div>
                </div>
            </div>
            {{-- <div class="flex">
                <svg id="back-button" class="cursor-pointer w-10 absolute top-1/2 transform -translate-y-1/2 left-14 hover:text-cyan-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                </svg>
                <svg id="next-button" class="cursor-pointer w-10 absolute top-1/2 transform -translate-y-1/2 right-14 hover:text-cyan-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
            </div>     --}}
        </div>
    </section>
    {{-- SECTION ULASAN END --}}

    {{-- SECTION FEEDBACK START --}}
        <section id="feedback">
            <div class="flex flex-col items-center gap-14">
                <h1 class="bg-gradient-to-r from-cyan-400 to-cyan-800 text-transparent bg-clip-text"><span class="text-4xl font-bold">Feedback</span></h1>
                <div class="flex flex-col gap-10">
                    <form>
                        <select class="bg-transparent w-[82vw] border-b-2 p-2" name="help" id="help">
                            <option value="how">How Can I Help You?</option>
                            <option value="pelayanan">Pelayanan</option>
                            <option value="biaya">Biaya</option>
                            <option value="penyakit">Penyakit</option>
                        </select>
                    </form> 
                    <div class="flex items-center gap-4 flex-wrap">
                        <input  class="bg-transparent w-[40vw] border-b-2 p-2 outline-none" type="text" id="name" name="name" placeholder="Name*">
                        <input class="bg-transparent w-[40vw] border-b-2 p-2  outline-none" type="email" id="email" name="email" placeholder="Email*">
                    </div>
                    <div class="flex items-center gap-4 flex-wrap">
                        <input class="bg-transparent w-[40vw] border-b-2 p-2 outline-none" type="number" id="phone" name="phone" placeholder="Phone*">
                        <input class="bg-transparent w-[40vw] border-b-2 p-2 outline-none" type="text" id="organization" name="organization" placeholder="Organization*">
                    </div>
                    <div>
                        <input class="bg-transparent w-[82vw] border-b-2 p-2 py-6 outline-none" type="text" name="message" id="message" placeholder="Message">
                    </div>
                </div>
                <a href="#" class="bg-gradient-to-r from-cyan-400 to-cyan-800 text-white px-8 py-2 rounded-full hover:bg-gradient-to-tl from cyan-400 to cyan-800">Kirim</a>
            </div>
        </section>
    {{-- SECTION FEEDBACK END --}}

    {{-- FOOTER SECTION START --}}
    <footer class="h-auto bg-white" id="footer">
    <div class="flex flex-col items-center py-20 gap-16">
        <h1 class="bg-gradient-to-r from-cyan-400 to-cyan-800 text-transparent bg-clip-text"><span class="text-4xl font-bold">Contact Me</span></h1>
        <div class="flex items-center justify-evenly gap-24">
            <a class="w-20 h-20 grayscale hover:grayscale-0" href="#" target="blank"><img src="assets\email.png" alt="email"   ></a>            
            <a class="w-20 h-20 grayscale hover:grayscale-0" href="https://wa.me/6283169153860"  target="blank"><img src="assets\whatsapp.png"  alt="wa"></a>            
            <a class="w-20 h-20 grayscale hover:grayscale-0" href="https://www.instagram.com/baitusyifa_hipnoterapi/"   target="blank"><img src="assets\instagram.png" alt="ig"></a>            
        </div>
    </div>
    </footer>
    {{-- FOOTER SECTION END --}}
    <script src="public\js\script.js"></script>
</body>
</html>