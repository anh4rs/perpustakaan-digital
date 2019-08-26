 <!-- CONTENT
    ================================================== -->
 <section class="pt-8 pt-md-11">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-12 col-md">

                 <!-- Link -->
                 <a href="#!" class="font-weight-bold font-size-sm text-decoration-none mb-3">
                     <i class="fe fe-arrow-left mr-3"></i> Kembali
                 </a>

                 <!-- Heading -->
                 <h1 class="display-4 mb-2">
                     {{ ucwords($result->judul) }}
                 </h1>

                 <!-- Text -->
                 <p class="font-size-lg text-gray-700 mb-5 mb-md-0">
                     @foreach ($result->buku_transaksi as $p)
                     {{ ucwords($p->pengarang->nama_pengarang) }},
                     @endforeach
                 </p>

             </div>
             <div class="col-auto">

                 <!-- Buttons -->
                 <a href="#!" class="btn btn-primary-soft mr-1">
                     Pinjam
                 </a>
                 <a href="#!" class="btn btn-primary">
                     Baca
                 </a>

             </div>
         </div> <!-- / .row -->
         <div class="row">
             <div class="col-12">

                 <!-- Divider -->
                 <hr class="my-6 my-md-8 border-gray-300">

             </div>
         </div> <!-- / .row -->
         <div class="row">
             <div class="col-12 col-md-8">

                 <!-- Heading -->
                 <h3>
                     Who we are
                 </h3>

                 <!-- Text -->
                 <p class="text-gray-800 mb-6 mb-md-8">
                     We believe lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus feugiat elit vitae
                     enim lacinia semper. Cras nulla lectus, porttitor vitae urna iaculis, malesuada tincidunt lectus.
                     Proin nec tellus sit amet massa auctor imperdiet id vitae diam. Aenean gravida est nec diam
                     suscipit iaculis. Praesent urna velit, auctor nec turpis et, vehicula lobortis sem. Vivamus
                     convallis mi sagittis eleifend laoreet. Praesent vitae venenatis enim. Nulla tincidunt felis et
                     lectus rhoncus laoreet.
                 </p>

                 <!-- Heading -->
                 <h3>
                     What we’re looking for
                 </h3>

                 <!-- Text -->
                 <p class="text-gray-800 mb-5">
                     Aenean gravida est nec diam suscipit iaculis. Praesent urna velit, auctor nec turpis et, vehicula
                     lobortis sem. Vivamus convallis mi sagittis eleifend laoreet. Praesent vitae venenatis enim. Nulla
                     tincidunt felis et lectus rhoncus laoreet.
                 </p>

                 <!-- List -->
                 <div class="d-flex">

                     <!-- Badge -->
                     <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                         <i class="fe fe-check"></i>
                     </div>

                     <!-- Text -->
                     <p class="text-gray-800">
                         Work through complex design problems to create beautiful and thoughtful interactions for our
                         marketing web platform
                     </p>

                 </div>
                 <div class="d-flex">

                     <!-- Badge -->
                     <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                         <i class="fe fe-check"></i>
                     </div>

                     <!-- Text -->
                     <p class="text-gray-800">
                         Demonstrate an expertise in typography, composition, layout, design thinking, and content
                         strategy in the design solutions you create
                     </p>

                 </div>
                 <div class="d-flex">

                     <!-- Badge -->
                     <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                         <i class="fe fe-check"></i>
                     </div>

                     <!-- Text -->
                     <p class="text-gray-800">
                         Consider UX from a user journey level across several brand touchpoints, as well as within
                         specific interactions
                     </p>

                 </div>
                 <div class="d-flex">

                     <!-- Badge -->
                     <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                         <i class="fe fe-check"></i>
                     </div>

                     <!-- Text -->
                     <p class="text-gray-800">
                         Design at a systems level, where components can be re-used and built to scale, optimized across
                         different screen sizes and devices
                     </p>

                 </div>
                 <div class="d-flex">

                     <!-- Badge -->
                     <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                         <i class="fe fe-check"></i>
                     </div>

                     <!-- Text -->
                     <p class="text-gray-800 mb-6 mb-md-8">
                         Iterate quickly and communicate ideas across various levels of fidelity, with the ability to
                         receive feedback constructively as well as provide feedback to other’s work
                     </p>

                 </div>

                 <!-- Heading -->
                 <h3 class="mb-5">
                     Applicant requirements
                 </h3>

                 <!-- List -->
                 <div class="d-flex">

                     <!-- Badge -->
                     <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                         <i class="fe fe-check"></i>
                     </div>

                     <!-- Text -->
                     <p class="text-gray-800">
                         Work through complex design problems to create beautiful and thoughtful interactions for our
                         marketing web platform
                     </p>

                 </div>
                 <div class="d-flex">

                     <!-- Badge -->
                     <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                         <i class="fe fe-check"></i>
                     </div>

                     <!-- Text -->
                     <p class="text-gray-800 mb-6 mb-md-0">
                         Demonstrate an expertise in typography, composition, layout, design thinking, and content
                         strategy in the design solutions you create
                     </p>

                 </div>

             </div>
             <div class="col-12 col-md-4">

                 <!-- Card -->
                 {{-- <div class="card shadow-light-lg mb-5"> --}}
                 <div class="text-center">
                     <img src="{{ url('storage/cover/'. $result->gambar_sampul) }}" alt="...">
                 </div>
                 {{-- </div> --}}

                 <!-- Card -->
                 <div class="card shadow-light-lg mt-4">
                     <div class="card-body">

                         <!-- Heading -->

                         <div class="list-group list-group-flush pt-2">
                             @isset($no)
                             <div class="list-group-item d-flex align-items-center">

                                 <!-- Text -->
                                 <div class="mr-auto">

                                     <!-- Heading -->
                                     <p class="font-weight-bold mb-1">
                                         No Panggil
                                     </p>

                                     <!-- Text -->
                                     <p class="font-size-sm text-muted mb-0">
                                         We don't charge per seat, just per service.
                                     </p>

                                 </div>



                             </div>
                             @endisset
                             @isset($result->bibliobigrafi)
                             <div class="list-group-item d-flex align-items-center">

                                 <!-- Text -->
                                 <div class="mr-auto">

                                     <!-- Heading -->
                                     <p class="font-weight-bold mb-1">
                                         Jumlah Buku Tersedia
                                     </p>

                                     <!-- Text -->
                                     <p class="font-size-sm text-muted mb-0">
                                         {{ $result->bibliobigrafi->count() }} Sampel
                                     </p>

                                 </div>



                             </div>
                             @endisset
                             @isset($result->buku_transaksi[0]->penerbit)
                             <div class="list-group-item d-flex align-items-center">

                                 <!-- Text -->
                                 <div class="mr-auto">

                                     <!-- Heading -->
                                     <p class="font-weight-bold mb-1">
                                         Penerbit
                                     </p>

                                     <!-- Text -->
                                     <p class="font-size-sm text-muted mb-0">
                                         {{ $result->buku_transaksi[0]->penerbit->nama_penerbit }}
                                     </p>

                                 </div>



                             </div>
                             @endisset

                             @isset($result->isbn_isnn)
                             <div class="list-group-item d-flex align-items-center">

                                 <!-- Text -->
                                 <div class="mr-auto">

                                     <!-- Heading -->
                                     <p class="font-weight-bold mb-1">
                                         ISBN ISNN
                                     </p>

                                     <!-- Text -->
                                     <p class="font-size-sm text-muted mb-0">
                                         {{ $result->isbn_isnn }}
                                     </p>

                                 </div>




                             </div>
                             @endisset

                             @isset($result->deskripsi_fisik)
                             <div class="list-group-item d-flex align-items-center">

                                 <!-- Text -->
                                 <div class="mr-auto">

                                     <!-- Heading -->
                                     <p class="font-weight-bold mb-1">
                                         Deskripsi Fisik
                                     </p>

                                     <!-- Text -->
                                     <p class="font-size-sm text-muted mb-0">
                                         {{ $result->deskripsi_fisik }}
                                     </p>

                                 </div>



                             </div>
                             @endisset

                             @isset($result->bibliobigrafi[0]->gmd)
                             <div class="list-group-item d-flex align-items-center">

                                 <!-- Text -->
                                 <div class="mr-auto">

                                     <!-- Heading -->
                                     <p class="font-weight-bold mb-1">
                                         GMD
                                     </p>

                                     <!-- Text -->
                                     <p class="font-size-sm text-muted mb-0">
                                         {{ $result->bibliobigrafi[0]->gmd->nama_gmd}}
                                     </p>

                                 </div>



                             </div>
                             @endisset

                             @isset($result->tahun_terbit)
                             <div class="list-group-item d-flex align-items-center">

                                 <!-- Text -->
                                 <div class="mr-auto">

                                     <!-- Heading -->
                                     <p class="font-weight-bold mb-1">
                                         Tahun Terbit
                                     </p>

                                     <!-- Text -->
                                     <p class="font-size-sm text-muted mb-0">
                                         {{ $result->tahun_terbit }}
                                     </p>

                                 </div>



                             </div>
                             @endisset

                             @isset($result->buku_transaksi[0]->kota)
                             <div class="list-group-item d-flex align-items-center">

                                 <!-- Text -->
                                 <div class="mr-auto">

                                     <!-- Heading -->
                                     <p class="font-weight-bold mb-1">
                                         Tempat Terbit

                                         <!-- Text -->
                                         <p class="font-size-sm text-muted mb-0">
                                             {{ $result->buku_transaksi[0]->kota->nama_kota }}
                                         </p>

                                 </div>



                             </div>
                             @endisset

                             @isset($result->bibliobigrafi[0]->klasifikasi)
                             <div class="list-group-item d-flex align-items-center">

                                 <!-- Text -->
                                 <div class="mr-auto">

                                     <!-- Heading -->
                                     <p class="font-weight-bold mb-1">
                                         Klasifikasi
                                     </p>

                                     <!-- Text -->
                                     <p class="font-size-sm text-muted mb-0">
                                         {{ $result->bibliobigrafi[0]->klasifikasi->tipe_klasifikasi }}
                                     </p>

                                 </div>



                             </div>
                             @endisset

                             @isset($result->edisi)
                             <div class="list-group-item d-flex align-items-center">

                                 <!-- Text -->
                                 <div class="mr-auto">

                                     <!-- Heading -->
                                     <p class="font-weight-bold mb-1">
                                         Edisi
                                     </p>

                                     <!-- Text -->
                                     <p class="font-size-sm text-muted mb-0">
                                         {{ $result->edisi }}
                                     </p>

                                 </div>



                             </div>
                             @endisset

                             @isset($result->buku_transaksi[0]->bahasa)
                             <div class="list-group-item d-flex align-items-center">

                                 <!-- Text -->
                                 <div class="mr-auto">

                                     <!-- Heading -->
                                     <p class="font-weight-bold mb-1">
                                         Bahasa
                                     </p>

                                     <!-- Text -->
                                     <p class="font-size-sm text-muted mb-0">
                                        {{ ucwords($result->buku_transaksi[0]->bahasa->jenis_bahasa) }}
                                     </p>

                                 </div>



                             </div>
                             @endisset
                         </div>


                         {{-- <!-- Heading -->
                         <a href="#!" class="font-weight-bold font-size-sm text-decoration-none">
                             Let us know <i class="fe fe-arrow-right ml-3"></i>
                         </a> --}}

                     </div>
                 </div>

             </div>
         </div> <!-- / .row -->
     </div> <!-- / .container -->
 </section>

 <!-- FORM
          ================================================== -->
 <section class="pt-8 pt-md-11 pb-8 pb-md-14">
     <div class="container">
         <div class="row">
             <div class="col-12">

                 <!-- Card -->
                 <div class="card card-border border-primary shadow-light-lg">
                     <div class="card-body">

                         <!-- Form -->
                         <form>
                             <div class="row">
                                 <div class="col-12 col-md-6">

                                     <div class="form-group mb-5">
                                         <label for="applyName">
                                             Full name
                                         </label>
                                         <input type="text" class="form-control" id="applyName" placeholder="Full name">
                                     </div>

                                 </div>
                                 <div class="col-12 col-md-6">

                                     <div class="form-group mb-5">
                                         <label for="applyEmail">
                                             Email
                                         </label>
                                         <input type="text" class="form-control" id="applyEmail"
                                             placeholder="hello@domain.com">
                                     </div>

                                 </div>
                             </div> <!-- / .row -->
                             <div class="row">
                                 <div class="col-12 col-md-6">

                                     <div class="form-group mb-5">
                                         <p class="mb-2">
                                             Cover letter
                                         </p>
                                         <div class="custom-file">
                                             <input type="file" class="custom-file-input" id="applyCover">
                                             <label class="custom-file-label" for="applyCover">
                                                 Choose file
                                             </label>
                                         </div>
                                     </div>

                                 </div>
                                 <div class="col-12 col-md-6">

                                     <div class="form-group mb-5">
                                         <p class="mb-2">
                                             Resume
                                         </p>
                                         <div class="custom-file">
                                             <input type="file" class="custom-file-input" id="applyResume">
                                             <label class="custom-file-label" for="applyResume">
                                                 Choose file
                                             </label>
                                         </div>
                                     </div>

                                 </div>
                             </div> <!-- / .row -->
                             <div class="row">
                                 <div class="col-12">

                                     <div class="form-group mb-5">
                                         <label for="applyMessage">
                                             Why is Landkit important to you?
                                         </label>
                                         <textarea id="applyMessage" rows="5" class="form-control"
                                             placeholder="Let us know!"></textarea>
                                     </div>

                                 </div>
                             </div> <!-- / .row -->
                             <div class="row align-items-center">
                                 <div class="col-12 col-md">

                                     <!-- Submit -->
                                     <button class="btn btn-primary mb-6 mb-md-0 lift">
                                         Apply now <i class="fe fe-arrow-right ml-3"></i>
                                     </button>

                                 </div>
                                 <div class="col-12 col-md-auto">

                                     <p class="font-size-sm text-muted mb-0">
                                         Application will be send securely and remain private
                                     </p>

                                 </div>
                             </div> <!-- / .row -->
                         </form>

                     </div>
                 </div>

             </div>
         </div> <!-- / .row -->
     </div> <!-- / .container -->
 </section>

 <!-- SHAPE
          ================================================== -->
 <div class="position-relative">
     <div class="shape shape-bottom shape-fluid-x svg-shim text-dark">
         <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
             <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor" />
         </svg>
     </div>
 </div>