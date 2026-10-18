@extends('layouts.app')

@section('title', 'Command Center - UmkmHub')

@section('content')
    <header style="margin-bottom: 80px; max-width: 800px;">
        <span class="badge-pill">Secure: Isolated Data Environment</span>
        
        <!-- Tipografi tipis, rapat, dengan aksen Chartreuse (Live Wire) -->
        <h1 class="page-title">Financial & Operational <span class="accent">Telemetry.</span></h1>
        
        <p class="page-subtitle">
            Semua metrik dan log transaksi di bawah ini terisolasi untuk ruang kerja UMKM Anda. 
            Kasir hanya memiliki akses untuk melihat transaksi yang mereka lakukan sendiri.
        </p>
        
        <div style="display: flex; gap: 20px;">
            <a href="#" class="btn-pill-primary">Buka Modul Kasir</a>
            <a href="#" class="btn-pill-secondary">Catat Pengeluaran</a>
        </div>
    </header>

    <!-- Kartu Metrik Obsidian -->
    <section class="metric-grid">
        <div class="obsidian-card">
            <p class="stat-label">Total Pemasukan</p>
            <h2 class="stat-value">Rp {{ number_format($pemasukan ?? 18500000, 0, ',', '.') }}</h2>
        </div>
        
        <div class="obsidian-card">
            <p class="stat-label">Pengeluaran</p>
            <h2 class="stat-value">Rp {{ number_format($pengeluaran ?? 5200000, 0, ',', '.') }}</h2>
        </div>
        
        <div class="obsidian-card">
            <p class="stat-label" style="color: var(--color-signal-violet);">Net Revenue</p>
            <h2 class="stat-value">Rp {{ number_format(($pemasukan ?? 18500000) - ($pengeluaran ?? 5200000), 0, ',', '.') }}</h2>
        </div>
    </section>
@endsection