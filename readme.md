# Model Uuid

A Laravel Package to handle Primary Key using UUID

## Requirements

 * Laravel 10.x

## Easy Installation

Run the following command in your Laravel project:

```bash
composer require fahriztx/model-uuid
```

Make sure your migration file has a column with the type of UUID (using `$table->uuid`) as primary key.

Example:

```php
    public function up(): void
    {
        Schema::create('your_migration', function (Blueprint $table) {
            $table->uuid('id')->primary();  // Primary Key using $table->uuid('your_primary_column')->primary();
            ...
            $table->timestamps();
        });
    }
```

## Usage

Add `use \Fahriztx\ModelUuid\Uuid;` to your model.

Example `Models/YourModel.php`:

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YourModel extends Model
{
    use HasFactory;
    use \Fahriztx\ModelUuid\Uuid; // <-- Insert this line on top of your model
}
```