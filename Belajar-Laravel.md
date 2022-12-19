# === Belajar-Laravel-8 === #

# 1.)Struktur Folder, Routes & View

[Folder-App] : Merupakan Folder Core pada aplikasi yang menyimpan Controller dan Model
[Folder-Resources] : Merupakan Folder yang menyimpan Folder Views yang dimana merupakan UI 
[Folder-Routes] : Merupakan Folder yang berisi semua rute aplikasi
[Folder-Public] : Merupakan Folder yang berisi asset statis yang bisa diakses oleh user 

# 2.)Blade Templating Engine

[Blade-Templating-Engine] : Adalah fitur Laravel untuk proses templating yang tidak membatasi penggunaan kode PHP biasa dalam tampilan 
_Fitur Blade_
[@extends] : Berguna untuk memanggil layouts pada child view
[@yield] : Berguna untuk memberi tanda bagian yang akan digunakan oleh child view
[@section] : Berguna untuk membuat bagian pada child yang extend pada layouts
[@include] : Berguna untuk memanggil baris kode 

# 3.)Model, Collection & Controller

[Model] : Model merupakan bagian yang mengolah data dalam paradigma OOP
[Controller] : Controller adalah jembatan yang mengatur proses logika, data, dan lain lain antara View dan Model
[Collection] : Collection adalah fitur pada Laravel yang memudahkan developer mengatur dan mengolala Data Array
[Eloquent-ORM] : Eloquent merupakan fitur Laravel yang merupakan sebuah ORM yaitu Object Relational Mapper yang membuat developer lebih mudah berinteraksi dengan Database