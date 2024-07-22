@extends('index')
@section('title', 'Home')

@section('isihalaman')
    <style>
        .content-container {
            display: flex;
            align-items: flex-start;
            gap: 20px;
            margin: 100px;
        }

        .text-content {
            flex: 2;
        }

        .image-content {
            flex: 1;
            text-align: center; /* Optional: Center the image horizontally */
        }

        .image-content img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        /* Optional: Responsive adjustments */
        @media (max-width: 768px) {
            .content-container {
                flex-direction: column;
                align-items: center;
            }

            .text-content,
            .image-content {
                width: 100%;
            }
        }
    </style>

    <div class="content-container">
        <div class="text-content" style="margin-left: 50px; margin-right:5%;">
            <h4>Perpustakaan</h4>
            <p>Perpustakaan Perguruan Tinggi merupakan unit kerja pelaksana teknis (UPT) Perguruan Tinggi yang bersama-sama 
            dengan unit lain turut melaksanakan Tri Dharma Perguruan Tinggi, yaitu: pendidikan, penelitian, dan pengabdian 
            kepada masyarakat dengan cara memilah, menghimpun, mengolah, merawat, serta menyebarluaskan sumber informasi kepada 
            lembaga induknya pada khususnya dan sivitas akademika pada umumnya. Kelima tugas tersebut dilaksanakan dengan 
            tata cara administrasi dan organisasi yang berlaku bagi penyelenggaraan sebuah perpustakaan.</p>
            <h4>Perpustakaan Menurut UU NO 43. THN. 2007</h4>
            <p>Perpustakaan adalah institusi yang mengumpulkan pengetahuan tercetak dan terekam, mengelolanya dengan cara khusus guna
            memenuhi kebutuhan intelektualitas para penggunanya melalui berbagai cara interaksi pengetahuan.</p>
        </div>
        <div class="image-content">
            <img src="{{ asset('gambar') }}/R.jpeg"alt="Deskripsi Gambar">
        </div>
    </div>
@endsection
