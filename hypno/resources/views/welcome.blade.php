<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @extends('vendor.asse')

    <title>Hipnoterapi</title>
</head>
<body class="poppins-regular">
    <img src="images/Hypno-bg.jpg" class="position-absolute">

    <div class="container px-0 py-0 m-0 position-absolute top-50 start-50 translate-middle">
        <div class="row mx-auto d-flex justify-content-center text-center" style="width: 75vw">
            <div class="col my-auto me-5 text-start" style="width: 20vw">
                <h1 class="text-white">Hipnoterapi</h1>
                <h4 class="mt-3 text-white">"Efektifitas Terapi Penyakit Kejiwaan"</h4>
                <button class="ubt btn btn-info mt-4 p-2 px-4 rounded-pill shadow-sm text-white">Pelajari</button>
            </div>
            <div class="col">
                <div class="containerr rounded-4 mx-auto" style="height: 70vh; width: 70%;">
                    <form class="mx-4">
                    @csrf
                    <h2 class="pt-3">Place Holder</h2>
                    <div class="mb-2 pt-4 text-start">
                        <label for="exampleInputname" class="form-label">Nama</label>
                        <input type="name" class="form-control" placeholder="Nama Lengkap">
                    </div>
                    <div class="mb-2 pt-1 text-start">
                        <label for="exampleInputEmail1" class="form-label">Alamat Email</label>
                        <input type="email" class="form-control" placeholder="contoh@gmail.com">
                    </div>
                    <div class="mb-2 pt-1 text-start">
                        <label for="exampleInputEmail1" class="form-label">Nomor Telepon</label>
                        <input type="number" class="form-control" placeholder="+62">
                    </div>
                    <div class="mb-2 pt-1 text-start">
                        <label for="exampleInputPassword1" class="form-label text-start">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="*****">
                    </div>
                    <button type="submit" class="vbt btn btn-info mt-4 w-100 text-white">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>