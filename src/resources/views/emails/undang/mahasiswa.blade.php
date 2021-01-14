@component('mail::message')
# Introduction

Silahkan Gabung ke kelas

@component('mail::button', ['url' => route("kelas.join.mahasiswa",["kode" => $kodekelas])])
Gabung Kelas
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
