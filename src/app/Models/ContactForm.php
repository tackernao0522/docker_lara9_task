<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'email',
        'url',
        'gender',
        'age',
        'contact',
    ];

    public function scopeSearch($query, $search)
    {
        if ($search !== null) {
            // 全角スペースを半角スペースに変換し、空白で区切る
            $search_split = mb_convert_kana($search, 's');
            $search_split2 = preg_split('/[\s]+/', $search_split);

            $query->where(function ($query) use ($search_split2) {
                foreach ($search_split2 as $value) {
                    $query->where('name', 'like', '%' . $value . '%');
                }
            })
                ->orWhere('title', 'like', '%' . $search . '%')
                ->orWhere('created_at', 'like', '%' . $search . '%');
        }
        return $query;
    }
}
