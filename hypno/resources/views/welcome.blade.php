<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    </style>

    @vite('resources/css/app.css')
</head>
<header class="bg-white py-16 px-32 shadow-xl fixed top-0 w-full z-50 tablet:py-8 tablet:px-16 ">
    <nav class="flex justify-between ">
    <div class="flex items-center gap-3">
    <img class="w-12 tablet:w-6" src="assets\prahipti.png" alt="prahipti">
    <a href="#" class="text-3xl hover:text-custom-second-color tablet:text-base"><h1>Hypno<span class="font-bold">Teraphy</span></h1></a>
    </div>
    <ul class="text-2xl flex gap-16 text-gray-500 tablet:gap-8">
        <a href="#"><li class="font-normal hover:text-custom-second-color tablet:text-base">Home</li></a>
        <a href="#about"><li class="font-normal hover:text-custom-second-color tablet:text-base">About Me</li></a>
        <a href="#"><li class="font-normal hover:text-custom-second-color tablet:text-base">HypnoTeraphy</li></a>
        <a href="/service"><li class="font-normal hover:text-custom-second-color tablet:text-base">Services</li></a>
    </ul>
    <a href="#" class="text-s text-white bg-gradient-to-br from-cyan-400 to-cyan-800 py-2 px-5 
    tablet:py-1.5 rounded-full hover:bg-gradient-to-tl from cyan-400 to cyan-800 tablet:text-[8px]">Contact Me</a>
    </nav>
</header>                                               

<body class="bg-custom-main-color ">
    <!-- SECTION WELCOME START -->
    <section id="welcome" class="flex items-center justify-center h-screen bg-black-400 mt-32 tablet:mt-20">
        <div class="flex flex-col items-center gap-10">
            <img src="assets\logo-ibh.png" alt="logo">
            <h1 class="text-white text-6xl font-bold">HypnoTeraphy</h1>
            <p class="text-white font-normal text-xl">"Efektivitas Terapy Penyakit Kejiwaan"</p>
            <a class="text-white bg-gradient-to-br from-cyan-400 to-cyan-800 py-1.5 px-8 rounded-full hover:bg-gradient-to-tl from cyan-400 to cyan-800" href="#">Pelajari</a>
        </div>
    </section>
        <!-- SECTION WELCOME END -->

        <!-- SECTION ABOUT ME START -->
    <section id="about" class="h-auto">
        <div class="flex flex-col items-center gap-20 tablet:gap-10 bg-white shadow-2xl rounded-3xl py-20 px-16 my-32 mx-60 tablet:mx-20 tablet:justify-center tablet:text-center">
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
                <a href="#" class="text-s text-white bg-gradient-to-br from-cyan-400 to-cyan-800 py-3 px-7  
                tablet:py-1.5 rounded-full hover:bg-gradient-to-tl from cyan-400 to cyan-800">Let's Get Started</a>
            </div>
    </section>
        {{-- SECTION HYPNOTERAPHY END --}}


    {{-- SECTION TUJUAN START --}}
    <section id="tujuan" class="w-auto my-40 flex justify-center mt-64">
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
        <div class="flex flex-wrap px-48 gap-28 tablet:justify-center tablet:text-center items-center">
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



</body>
</html>