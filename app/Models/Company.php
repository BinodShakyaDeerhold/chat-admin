<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Company
 *
 * @property $id
 * @property $name
 * @property $representative_name
 * @property $address
 * @property $contact_no
 * @property $person_in_charge
 * @property $theme
 * @property $product_name
 * @property $description
 * @property $summary
 * @property $input_date_related_to_product
 * @property $date_for
 * @property $date
 *
 */
class Company extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
    'representative_name',
    'address',
    'contact_no',
    'person_in_charge',
    'theme',
    'product_name',
    'description',
    'summary',
    'input_date_related_to_product',
    'date_for',
    'date'
];

    public function companyUsers(){
        return $this->hasMany(User::class);
    }
}
