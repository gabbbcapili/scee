<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    use HasFactory;

    protected $table = 'article';

    protected $fillable = ['title', 'description'];

    protected $appends = ['createdAtFormatted'];

    public function getCreatedAtFormattedAttribute(){
        return $this->created_at->format('M d, Y H:i');
    }
}
