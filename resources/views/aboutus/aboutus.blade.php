@extends('templat.index')
@section('title', 'About Us')
@section('style')
    <style>
        .timeline {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
            position: relative;
        }

        .timeline::before {
            content: '';
            position: absolute;
            top: 9%;
            left: 0;
            right: 0;
            height: 4px;
            background: #000;
            z-index: 1;
        }

        .timeline-item {
            position: relative;
            flex: 1;
            padding: 20px;
            box-sizing: border-box;
            text-align: center;
        }

        .timeline-item:not(:last-child)::after {
            content: '';
            position: absolute;
            top: 2%;
            right: 0;
            width: 12px;
            height: 12px;
            background: #000;
            border-radius: 50%;
            z-index: 2;
        }

        .timeline-item h4 {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .title {
            text-align: center;
            margin-bottom: 40px;
        }

        .photo-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .photo-grid img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .photo-grid .photo-item {
            flex: 1 1 calc(33.333% - 10px);
            /* 3 columns with spacing */
            box-sizing: border-box;
        }

        @media (max-width: 768px) {
            .photo-grid .photo-item {
                flex: 1 1 calc(50% - 10px);
                /* 2 columns for smaller screens */
            }
        }

        @media (max-width: 576px) {
            .photo-grid .photo-item {
                flex: 1 1 100%;
                /* 1 column for smallest screens */
            }
        }

        .header {
            text-align: center;
            margin: 20px 0;
        }

        .content {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            padding: 20px 0;
        }

        .content div {
            flex: 1;
            margin: 0 10px;
        }

        .content img {
            max-width: 100%;
            height: auto;
        }

        .banner {
            background-color: #808080;
            padding: 20px;
            text-align: center;
            color: white;
        }

        .footer {
            background-color: #FFFFCC;
            padding: 20px;
            text-align: center;
        }

        .footer p {
            margin: 0;
        }

        .footer .social-icons img {
            margin: 0 10px;
            width: 32px;
            height: 32px;
        }

        .header,
        .content,
        .banner,
        .footer {
            width: 100%;
            padding: 20px 0;
        }
    </style>
@endsection
@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-5">Welcome to the about us Page</h1>
        <h4 class="text-dark mb-12 text-center card-title">Servis Motor Zackk</h4>
        {{-- awal row 1 --}}
        <div class="row">
            <div class="col-md-8">
                <p class="card-text">Zackk adalah toko ritel modern yang mengkhususkan diri dalam menyediakan
                    suku cadang berkualitas tinggi untuk sepeda motor. Dengan fokus utama pada penyediaan ban motor
                    berkualitas dan tahan lama, kami juga menawarkan layanan unggulan seperti Servis Motor, Ganti Oli
                    dan Suku Cadang Otomotif.Komitmen Kami pada Indonesia: Dengan lebih dari 1100 toko Planet Ban
                    tersebar di seluruh Indonesia,kami hadir lebih dekat dengan masyarakat Indonesia. Dukungan dari 7
                    Juta pelanggan di seluruh negeri membuktikan kepercayaan yang diberikan kepada kami untuk memenuhi
                    kebutuhan suku cadang sepeda motor. Ini memotivasi kami untuk terus berinovasi dan menyediakan
                    produk-produk terbaik serta berkualitas bagi pemilik sepeda motor di Indonesia.
                </p>

            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img
                        src="{{ asset('img/baru.jpg') }}"
                        class="card-img-top"
                        alt=""
                        style="height: 300px"
                    >
                </div>
            </div>
        </div>
        {{-- endrow 1 --}}
        {{-- awal row 2 --}}
        <div class="row">
            <div class="container">
                <div class="title">
                    <h1>SEJARAH</h1>
                    <h3>PT. NUSANTARA BATAVIA INTERNATIONAL</h3>
                </div>
                <div class="timeline">
                    <div class="timeline-item">
                        <h4>1995 - 2001</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                            but also the leap into electronic typesetting, remaining essentially unchanged. It was
                            popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                            and more recently with desktop publishing software like Aldus PageMaker including versions of
                            Lorem Ipsum.</p>
                    </div>
                    <div class="timeline-item">
                        <h4>2002 - 2007</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                            but also the leap into electronic typesetting, remaining essentially unchanged. It was
                            popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                            and more recently with desktop publishing software like Aldus PageMaker including versions of
                            Lorem Ipsum.</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- endrow 2 --}}
        {{-- awal row 3 --}}
        <div class="row mb-5">
            <div class="photo-grid">
                <div class="photo-item">
                    <img
                        src="https://via.placeholder.com/300"
                        alt="Photo 1"
                    >
                </div>
                <div class="photo-item">
                    <img
                        src="https://via.placeholder.com/300"
                        alt="Photo 2"
                    >
                </div>
                <div class="photo-item">
                    <img
                        src="https://via.placeholder.com/300"
                        alt="Photo 3"
                    >
                </div>
                <div class="photo-item">
                    <img
                        src="https://via.placeholder.com/300"
                        alt="Photo 4"
                    >
                </div>
                <div class="photo-item">
                    <img
                        src="https://via.placeholder.com/300"
                        alt="Photo 5"
                    >
                </div>
                <div class="photo-item">
                    <img
                        src="https://via.placeholder.com/300"
                        alt="Photo 6"
                    >
                </div>
            </div>
        </div>
        {{-- endrow 3 --}}
        {{-- awal row 4 --}}
        <div class="row text-center">
            <div class="col-md-6">
                <h1>VISI</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book.</p>
            </div>
            <div class="col-md-6">
                <div>
                    <h1>MISI</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book.</p>
                </div>
            </div>
            <div class="banner d-flex px-5 justify-content-between align-items-center">
                <h2>PT. NUSANTARA BATAVIA INTERNATIONAL</h2>

                <div class="text-center">
                    <img
                        class="mb-2"
                        src="https://via.placeholder.com/32"
                        alt="Logo 1"
                    >
                    <br>
                    <img
                        src="https://via.placeholder.com/32"
                        alt="Logo 2"
                    >
                </div>
            </div>
            <div class="footer">
                <address>
                    PT NUSANTARA BATAVIA INTERNATIONAL<br>
                    Jl. Laksda Yos Sudarso - Sunter 1<br>
                    Jakarta 14350, Indonesia<br>
                    Tel. 0811-9-500-989
                </address>
                <div class="social-icons">
                    <img
                        src="https://via.placeholder.com/32"
                        alt="YouTube"
                    >
                    <img
                        src="https://via.placeholder.com/32"
                        alt="Instagram"
                    >
                    <img
                        src="https://via.placeholder.com/32"
                        alt="LinkedIn"
                    >
                    <img
                        src="https://via.placeholder.com/32"
                        alt="Facebook"
                    >
                </div>
                <p>&copy; 2024. Royal Enfield. Images shown here may differ from the actual product.</p>
            </div>
        </div>
        {{-- endrow 4 --}}
    </div>
@endsection
