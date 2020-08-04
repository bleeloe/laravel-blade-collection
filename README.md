# laravel-blade-collection
Collection blade component for reuseable, 


## How to use?
Here some example you can use in your code

## Dropdown
Instead writing full html this you can use:
`@include('layouts.components.dropdown',['field'=>'field_name','data'=>'yourlist','default'=>'default value')`

**Example:**

    <div class="form-group row">
        <label for="toko" class="col-md-2 col-form-label text-md-left">{{ __('Toko') }}</label>
        <div class="col-md-6">
            <div class="form-group">
                @include('layouts.components.dropdown',['field'=>'toko','data'=>$toko,'default'=>'')
            </div>
        </div>
    </div>

## Text

`@include('layouts.components.input-text',['field'=>'filename','help'=>'help description'])`

**Example** 

    <div class="form-group row">
        <label for="kode" class="col-md-2 col-form-label text-md-left">{{ __('Kode') }}</label>
        <div class="col-md-8">
            @include('layouts.components.input-text',['field'=>'kode','help'=>'Kode unik, setiap produk tidak boleh ada yang sama'])
        </div>
    </div>
