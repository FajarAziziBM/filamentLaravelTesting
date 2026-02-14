php artisan list | grep filament

📌 Penjelasan Modul / Perintah Filament
1. filament:about

Menampilkan informasi dasar tentang paket Filament yang terinstall.

Berguna untuk mengetahui versi dan dependensi Filament di proyek.

2. filament:assets

Mengatur asset Filament (CSS, JS, icon).

Dipakai ketika ingin rebuild asset atau publish asset baru.

3. filament:cache-components

Cache semua komponen Filament untuk meningkatkan performa.

4. filament:check-translations

Mengecek apakah ada translation yang hilang atau sudah dihapus.

5. filament:clear-cached-components

Menghapus cache semua komponen Filament.

Berguna jika perubahan UI tidak muncul karena cache.

6. filament:install

Install Filament lengkap di proyek Laravel.

Membuat folder panel, migration, config, admin user default.

7. filament:optimize

Cache komponen + blade icon untuk performa lebih cepat.

8. filament:optimize-clear

Hapus cache dari optimize sebelumnya.

9. filament:upgrade

Upgrade Filament ke versi terbaru.

🔹 Make Commands (CRUD / Component / Resource)
Perintah	Fungsi Utama
make:filament-cluster	Buat cluster → grup resource di menu Filament
make:filament-exporter	Buat class exporter → export data CSV / Excel / PDF
make:filament-form	Buat schema form → reusable form class
make:filament-form-field	Buat form field custom untuk digunakan di forms
make:filament-importer	Buat class importer → import data dari CSV / Excel
make:filament-infolist-entry	Buat infolist entry → item info detail di halaman resource
make:filament-issue	Buat link untuk membuka halaman issue Filament dengan versi project terisi
make:filament-livewire-form	Buat Livewire component dengan Filament form
make:filament-livewire-schema	Buat Livewire component dengan schema (form / infolist)
make:filament-livewire-table	Buat Livewire component dengan table
make:filament-page	Buat halaman custom → standalone atau terhubung ke resource
make:filament-panel	Buat panel Filament baru → bisa multi-panel
make:filament-relation-manager	Buat relation manager untuk resource (relasi tabel, hasMany, etc)
make:filament-resource	Buat resource CRUD lengkap → model + pages (List, Create, Edit, Show)
make:filament-rich-content-custom-block	Buat custom block untuk rich editor
make:filament-schema	Buat schema class → reusable layout atau infolist
make:filament-schema-component	Buat component schema → layout/form/infolist component
make:filament-table	Buat table class → reusable table layout
make:filament-table-column	Buat custom column untuk table resource
make:filament-theme	Buat theme → custom CSS / styling untuk panel
make:filament-user	Buat admin user untuk login panel
make:filament-widget	Buat widget dashboard → card / chart / stats


📌 Ringkasan Tabel Modul Filament
Modul / Perintah	Fungsi Utama	Catatan
filament:about	Info paket Filament	Menampilkan versi dan package info
filament:assets	Setup asset Filament	CSS, JS, icon
filament:cache-components	Cache komponen	Untuk performa
filament:check-translations	Cek translation	Cek yang hilang / terhapus
filament:clear-cached-components	Hapus cache komponen	Refresh UI
filament:install	Install Filament	Config, migration, admin user
filament:optimize	Cache komponen & blade icon	Performa
filament:optimize-clear	Hapus cache optimize	Reset performa
filament:upgrade	Upgrade Filament	Versi terbaru
make:filament-cluster	Buat cluster	Grup resource di menu
make:filament-exporter	Buat exporter	Export data CSV / Excel / PDF
make:filament-form	Buat form schema	Reusable form class
make:filament-form-field	Buat form field custom	Digunakan di forms
make:filament-importer	Buat importer	Import data CSV / Excel
make:filament-infolist-entry	Buat infolist entry	Detail info item
make:filament-issue	Buat link issue	Pre-fill versi project
make:filament-livewire-form	Livewire form	Component + form
make:filament-livewire-schema	Livewire schema	Component schema
make:filament-livewire-table	Livewire table	Component table
make:filament-page	Halaman custom	Standalone atau resource
make:filament-panel	Panel baru	Multi-panel support
make:filament-relation-manager	Relation manager	Relasi resource
make:filament-resource	CRUD resource	Model + Pages (List/Create/Edit/Show)
make:filament-rich-content-custom-block	Custom block rich editor	Editor block
make:filament-schema	Schema class	Reusable layout / infolist
make:filament-schema-component	Schema component	Layout/form/infolist component
make:filament-table	Table class	Reusable table layout
make:filament-table-column	Custom table column	Untuk resource table
make:filament-theme	Theme	Custom CSS panel
make:filament-user	Buat admin user	Login panel
make:filament-widget	Widget dashboard	Card/chart/stats