@extends('layouts.main')
@section('content')
    <head>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
    <!-- Bagian Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-mdb-ride="carousel">
        <div class="carousel-indicators">
        <button
            type="button"
            data-mdb-target="#carouselExampleIndicators"
            data-mdb-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
        ></button>
        <button
            type="button"
            data-mdb-target="#carouselExampleIndicators"
            data-mdb-slide-to="1"
            aria-label="Slide 2"
        ></button>
        <button
            type="button"
            data-mdb-target="#carouselExampleIndicators"
            data-mdb-slide-to="2"
            aria-label="Slide 3"
        ></button>
        </div>
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img
            src="{{ url('gambar/tw1.png') }}"
            class="d-block w-100"
            alt="..."
            />
        </div>
        <div class="carousel-item">
            <img
            src="{{ url('gambar/tw2.png') }}"
            class="d-block w-100"
            alt="..."
            />
        </div>
        <div class="carousel-item">
            <img
            src="{{ url('gambar/tw3.png') }}"
            class="d-block w-100"
            alt="..."
            />
        </div>
        </div>
        <button
        class="carousel-control-prev"
        type="button"
        data-mdb-target="#carouselExampleIndicators"
        data-mdb-slide="prev"
        >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>

        <button
        class="carousel-control-next"
        type="button"
        data-mdb-target="#carouselExampleIndicators"
        data-mdb-slide="next"
        >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Bagian Produk -->
    <!-- Produk 1-->
    <div class="container">
        <h1 class="text-center" style="margin-top: 50px;"> Koleksi Album  </h1>
    <div class="row row-cols-1 row-cols-md-4 g-5" style="margin-top: 20px">
        <div class="col">
          <div class="card h-100">
            <img
              src="{{ url('gambar/twa1.png') }}"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Dance The Night Away</h5>
              <p class="card-text">
                Rilis pada 9 juli 2018
                <br>
                Harga Rp 165.000
              </p>
            </div>
          </div>
        </div>

        <!-- Produk 2-->
        <div class="col">
          <div class="card h-100">
            <img
              src="{{ url('gambar/twa2.png') }}"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">More and More</h5>
              <p class="card-text">
                Rilis pada 1 juni 2020
                <br>
                Harga Rp 182.000
              </p>
            </div>
          </div>
        </div>

        <!-- Produk 3-->
        <div class="col">
          <div class="card h-100">
            <img
              src="{{ url('gambar/twa3.png') }}"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Signal</h5>
              <p class="card-text">
                Rilis pada 15 may 2017
                <br>
                Harga Rp 152.000
              </p>
            </div>
          </div>
        </div>

        <!-- Produk 4-->
        <div class="col">
          <div class="card h-100">
            <img
              src="{{ url('gambar/twa4.png') }}"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Feel Special</h5>
              <p class="card-text">
                Rilis pada 23 Desember 2019
                <br>
                Harga Rp 176.000
              </p>
            </div>
          </div>
        </div>

        <!-- Produk 5-->
        <div class="col">
            <div class="card h-100">
              <img
                src="{{ url('gambar/twa5.png') }}"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Eyes Wide Open</h5>
                <p class="card-text">
                    Rilis pada 26 Oktober 2020
                    <br>
                    Harga Rp 184.000
                </p>
              </div>
            </div>
          </div>

          <!-- Produk 6-->
          <div class="col">
            <div class="card h-100">
              <img
                src="{{ url('gambar/twa6.png') }}"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">What is Love?</h5>
                <p class="card-text">
                    Rilis pada 9 April 2018
                    <br>
                    Harga Rp 163.000
                </p>
              </div>
            </div>
          </div>

          <!-- Produk 7-->
          <div class="col">
            <div class="card h-100">
              <img
                src="{{ url('gambar/twa7.png') }}"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Yes or Yes</h5>
                <p class="card-text">
                    Rilis pada 5 November 2018
                    <br>
                    Harga Rp 175.000
                </p>
              </div>
            </div>
          </div>

          <!-- Produk 8-->
          <div class="col">
            <div class="card h-100">
              <img
                src="{{ url('gambar/twa8.png') }}"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Taste of Love</h5>
                <p class="card-text">
                    Rilis pada 11 Juni 2021
                    <br>
                    Harga Rp 195.000
                </p>
              </div>
            </div>
          </div>
    </div>
    </div>
    </body>
@endsection
