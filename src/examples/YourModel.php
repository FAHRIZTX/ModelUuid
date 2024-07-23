<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YourModel extends Model
{
    use HasFactory;
    use \Fahriztx\ModelUuid\Uuid; // <-- Insert this line on top of your model
}
