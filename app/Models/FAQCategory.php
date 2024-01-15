<?php

// app/Models/FAQCategory.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    protected $table = 'faq_categories'; 

    public function faqs()
    {
        return $this->hasMany(FAQ::class, 'category_id');
    }
}
