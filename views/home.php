<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="wrapper">
    <div class="header">
        <div class="logo">
            <img src="<?=site_url('assets/img/logo.png')?>" alt="Logo">
        </div>
        <h1>Arsip Digital Siswa</h1>
        <h3>SMK Negeri 1 Simpang Kanan</h3>
        <p>Cari data siswa yang sudah/belum melengkapi data administrasi sekolah.</p>
    </div>
    <div class="center">
        <?=form_open($action, 'class="form-inline"')?>
            <div class="form-group">
                <div class="input-group">
                <div class="input-group-addon md"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></div>
                    <input type="text" class="form-control md search" id="search" placeholder="NISN / Nama / Tanggal Lahir" autocomplete="off" required>
                </div>
            </div>
            <div id="hint">
                <p class="help-block">Masukkan NISN / nama / tanggal lahir dan hasil akan otomatis ditampilkan disini.<br>
                <small>Contoh format tanggal lahir 1998-11-20.</small></p>
            </div>
        <?=form_close()?>
    </div>
</div>
