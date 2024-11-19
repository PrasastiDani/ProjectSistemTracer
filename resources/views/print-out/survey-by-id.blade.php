@extends('layout.print')

@section('content')
    <!-- Print title -->
    <div>
        <h4 class="m-3 text-center fw-bold">Laporan Survey {{ $survey->nama }}</h4>
        <div style="width: 90%; margin:auto">
            <p class="fs-5">Nama: {{ $survey->nama }}</p>
            <p class="fs-5">Angkatan: {{ $survey->angkatan }}</p>
            <p class="fs-5">Tahun Lulus: {{ $survey->thn_lulus }}</p>
        </div>
    </div>
    <!-- End print title -->

    {{-- Table --}}
    <table style="width: 90%; margin:auto; border-collapse: collapse;">
        <thead>
            <tr>
                <th style="width: 50%; text-align: center;">Pertanyaan</th>
                <th style="width: 50%; text-align: center;">Hasil Survey</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: left;">
                    <ul style="list-style-type: none; padding-left: 0;">
                        <li><strong>Kualitas Pengajaran</strong></li>
                        <li><strong>Fasilitas Sekolah</strong></li>
                        <li><strong>Lingkungan Sekolah</strong></li>
                        <li><strong>Dukungan Administrasi</strong></li>
                        <li><strong>Komunikasi</strong></li>
                        <li><strong>Keterlibatan Orang Tua</strong></li>
                        <li><strong>Kesejahteraan Siswa</strong></li>
                        <li><strong>Prestasi Akademik</strong></li>
                        <li><strong>Kegiatan Ekstrakurikuler</strong></li>
                        <li><strong>Pengalaman Keseluruhan</strong></li>
                    </ul>
                </td>
                <td style="text-align: left;">
                    <ul style="list-style-type: none; padding-left: 0;">
                        <li>{{ $survey->kualitas_pengajaran }}</li>
                        <li>{{ $survey->fasilitas_sekolah }}</li>
                        <li>{{ $survey->lingkungan_sekolah }}</li>
                        <li>{{ $survey->dukungan_administrasi }}</li>
                        <li>{{ $survey->komunikasi }}</li>
                        <li>{{ $survey->keterlibatan_ortu }}</li>
                        <li>{{ $survey->kesejahteraan_siswa }}</li>
                        <li>{{ $survey->prestasi_akademik }}</li>
                        <li>{{ $survey->kegiatan_ekskul }}</li>
                        <li>{{ $survey->pengalaman_keseluruhan }}</li>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>
    <!-- Table end -->
@endsection
