@extends('layouts.app')

@section('title', 'Kelola Produk - UmkmHub')

@section('content')
    <header class="page-header" style="margin-bottom: 56px;">
        <p class="eyebrow"><span class="status-pulse"></span> INVENTARIS UMKM</p>
        <!-- Judul halaman dengan font Geist 36px, berat 400, dan tracking negatif -->
        <h1 class="display" style="font-size: 36px; letter-spacing: -1.12px;">Daftar Produk</h1>
        <p class="subtitle" style="color: var(--color-warm-granite);">
            Menampilkan data produk yang terisolasi khusus untuk UMKM Anda. Kasir UMKM lain tidak memiliki akses ke halaman ini.
        </p>
        
        <div style="margin-top: 24px;">
            <!-- Primary Action Button: #1d1a18 fill, #eeeeee text, 3px radius -->
            <a href="#" class="btn-dark-filled" style="display: inline-block; text-decoration: none;">+ Tambah Produk Baru</a>
        </div>
    </header>

    <!-- Kartu Terang (Light Surface Card) untuk Tabel Data -->
    <section class="light-card" style="background: var(--color-bone); border-radius: 10px; padding: 24px; color: var(--color-obsidian-canvas);">
        
        <table style="width: 100%; border-collapse: collapse; text-align: left;">
            <thead>
                <tr>
                    <!-- Header kolom dengan Geist Mono 12px uppercase -->
                    <th style="font-family: var(--font-geist-mono); font-size: 12px; text-transform: uppercase; padding-bottom: 16px; border-bottom: 1px solid var(--color-ash-stroke); letter-spacing: -0.24px;">Kode SKU</th>
                    <th style="font-family: var(--font-geist-mono); font-size: 12px; text-transform: uppercase; padding-bottom: 16px; border-bottom: 1px solid var(--color-ash-stroke); letter-spacing: -0.24px;">Nama Produk</th>
                    <th style="font-family: var(--font-geist-mono); font-size: 12px; text-transform: uppercase; padding-bottom: 16px; border-bottom: 1px solid var(--color-ash-stroke); letter-spacing: -0.24px;">Kategori</th>
                    <th style="font-family: var(--font-geist-mono); font-size: 12px; text-transform: uppercase; padding-bottom: 16px; border-bottom: 1px solid var(--color-ash-stroke); letter-spacing: -0.24px;">Stok</th>
                    <th style="font-family: var(--font-geist-mono); font-size: 12px; text-transform: uppercase; padding-bottom: 16px; border-bottom: 1px solid var(--color-ash-stroke); letter-spacing: -0.24px;">Harga</th>
                    <th style="font-family: var(--font-geist-mono); font-size: 12px; text-transform: uppercase; padding-bottom: 16px; border-bottom: 1px solid var(--color-ash-stroke); letter-spacing: -0.24px; text-align: right;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data Simulasi (Pastikan variabel $produk hanya memuat data milik Owner ini) -->
                <tr>
                    <td style="padding: 16px 0; border-bottom: 1px solid #d1cdcb; font-family: var(--font-geist-mono); font-size: 14px;">PRD-001</td>
                    <td style="padding: 16px 0; border-bottom: 1px solid #d1cdcb; font-weight: 500;">Kopi Arabica 200g</td>
                    <td style="padding: 16px 0; border-bottom: 1px solid #d1cdcb;">Minuman</td>
                    <td style="padding: 16px 0; border-bottom: 1px solid #d1cdcb;">
                        <!-- Indikator stok aman menggunakan warna dekoratif hijau -->
                        <span style="color: var(--color-metric-green);">●</span> 45
                    </td>
                    <td style="padding: 16px 0; border-bottom: 1px solid #d1cdcb;">Rp 65.000</td>
                    <td style="padding: 16px 0; border-bottom: 1px solid #d1cdcb; text-align: right;">
                        <a href="#" style="color: var(--color-obsidian-canvas); text-decoration: underline; margin-right: 12px;">Edit</a>
                        <a href="#" style="color: var(--color-signal-orange); text-decoration: underline;">Hapus</a>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 16px 0; border-bottom: 1px solid #d1cdcb; font-family: var(--font-geist-mono); font-size: 14px;">PRD-002</td>
                    <td style="padding: 16px 0; border-bottom: 1px solid #d1cdcb; font-weight: 500;">Gula Aren Cair 500ml</td>
                    <td style="padding: 16px 0; border-bottom: 1px solid #d1cdcb;">Bahan Baku</td>
                    <td style="padding: 16px 0; border-bottom: 1px solid #d1cdcb;">
                        <!-- Indikator stok tipis menggunakan warna dekoratif oranye -->
                        <span style="color: var(--color-signal-orange);">●</span> 5
                    </td>
                    <td style="padding: 16px 0; border-bottom: 1px solid #d1cdcb;">Rp 35.000</td>
                    <td style="padding: 16px 0; border-bottom: 1px solid #d1cdcb; text-align: right;">
                        <a href="#" style="color: var(--color-obsidian-canvas); text-decoration: underline; margin-right: 12px;">Edit</a>
                        <a href="#" style="color: var(--color-signal-orange); text-decoration: underline;">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
        
    </section>
@endsection