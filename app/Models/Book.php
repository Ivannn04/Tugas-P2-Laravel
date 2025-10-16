<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';
    protected $fillable = [
        'title',
        'description',
        'price',
        'stock',
        'cover_photo',
        'genre_id',
        'author_id'
    ];
    public $timestamps = false;

    // Relasi ke Author
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    // Relasi ke Genre
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    // Data contoh (dummy)
    public static function allData()
    {
        return [
            [
                'id' => 1,
                'title' => 'Langit Jingga di Ujung Hari',
                'description' => 'Novel romantis yang menggambarkan perjalanan cinta dan kehilangan.',
                'price' => 85000.00,
                'stock' => 20,
                'cover_photo' => 'https://picsum.photos/200/300?random=1',
                'genre_id' => 3,
                'author_id' => 1,
            ],
            [
                'id' => 2,
                'title' => 'Bayangan Sang Pejuang',
                'description' => 'Cerita aksi menegangkan tentang perjuangan mempertahankan kebenaran.',
                'price' => 95000.00,
                'stock' => 15,
                'cover_photo' => 'https://picsum.photos/200/300?random=2',
                'genre_id' => 1,
                'author_id' => 2,
            ],
            [
                'id' => 3,
                'title' => 'Kafka on the Shore',
                'description' => 'Karya surreal dari Haruki Murakami yang menyelami batas antara mimpi dan kenyataan.',
                'price' => 120000.00,
                'stock' => 10,
                'cover_photo' => 'https://picsum.photos/200/300?random=3',
                'genre_id' => 2,
                'author_id' => 3,
            ],
            [
                'id' => 4,
                'title' => 'It',
                'description' => 'Novel horor klasik tentang ketakutan masa kecil yang kembali menghantui.',
                'price' => 110000.00,
                'stock' => 8,
                'cover_photo' => 'https://picsum.photos/200/300?random=4',
                'genre_id' => 4,
                'author_id' => 4,
            ],
            [
                'id' => 5,
                'title' => 'Rindu',
                'description' => 'Kisah spiritual penuh makna dan perjalanan hati menuju kedamaian.',
                'price' => 78000.00,
                'stock' => 25,
                'cover_photo' => 'https://picsum.photos/200/300?random=5',
                'genre_id' => 3,
                'author_id' => 5,
            ],
        ];
    }
}
