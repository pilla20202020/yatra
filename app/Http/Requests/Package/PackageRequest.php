<?php

namespace App\Http\Requests\Package;

use Illuminate\Foundation\Http\FormRequest;

class PackageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required'
        ];
    }

    public function data()
    {
        $data = [
            'title'    => $this->get('title'),
            'category_id'  => $this->get('category_id'),
            'subcategory_id'  => $this->get('subcategory_id'),
            'description'  => $this->get('description'),
            'rank'  => $this->get('rank'),
            'trip_duration'  => $this->get('trip_duration'),
            'max_altitude'  => $this->get('max_altitude'),
            'departure'  => $this->get('departure'),
            'price'  => $this->get('price'),
            'departure_time'  => $this->get('departure_time'),
            'max_group_size'  => $this->get('max_group_size'),
            'min_group_size'  => $this->get('min_group_size'),
            'cost_includes'  => $this->get('cost_includes'),
            'package_type'  => $this->get('package_type'),
            'cost_excludes'  => $this->get('cost_excludes'),
            'location_map'  => $this->get('location_map'),
            'is_featured' => ($this->get('is_featured') ? $this->get('is_featured') : '') == 'on' ? '1' : '0',
            'is_trending' => ($this->get('is_trending') ? $this->get('is_trending') : '') == 'on' ? '1' : '0',
            'status' => ($this->get('status') ? $this->get('status') : '') == 'on' ? '1' : '0',
        ];

        return $data;
    }
}
