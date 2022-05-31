@extends('admin.layout.table_form')

@section('table')
@if(isset($product_categories))
<table>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Creado</th>
    </tr>

    @foreach($product_categories as $product_category_element)
    <tr>
        <td>{{$product_category_element->id}}</td>
        <td>{{$product_category_element->name}}</td>
        <td>{{$product_category_element->created_at}}</td>
        <td>
            <div class="desktop-two-columns">
                <div class="column">
                    <div class="panel-button-table edit-button"
                        data-url="{{route('product_categories_edit', ['product_category' => $product_category_element->id])}}">
                        <svg viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" />
                        </svg>
                    </div>
                </div>
                <div class="column">
                    <div class="panel-button-table delete-button"
                        data-url="{{route('product_categories_destroy', ['product_category'=> $product_category_element->id])}}">
                        <svg viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" />
                        </svg>
                    </div>
                </div>
            </div>
        </td>
    </tr>
    @endforeach
</table>
@endif
@endsection

@section('form')

@if(isset($product_category))

<form class="admin-form" action="{{route("product_categories_store")}}">
    <input type="hidden" name="id" value="{{isset($product_category->id) ? $product_category->id : ''}}">
    <div class="material-designs">
        <div class="guardado">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24"
                height="24" viewBox="0 0 24 24">
                <path
                    d="M15,9H5V5H15M12,19A3,3 0 0,1 9,16A3,3 0 0,1 12,13A3,3 0 0,1 15,16A3,3 0 0,1 12,19M17,3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V7L17,3Z" />
            </svg>
        </div>
        <div class="escoba" data-url="{{route('product_categories_create')}}">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24"
                height="24" viewBox="0 0 24 24">
                <path
                    d="M19.36,2.72L20.78,4.14L15.06,9.85C16.13,11.39 16.28,13.24 15.38,14.44L9.06,8.12C10.26,7.22 12.11,7.37 13.65,8.44L19.36,2.72M5.93,17.57C3.92,15.56 2.69,13.16 2.35,10.92L7.23,8.83L14.67,16.27L12.58,21.15C10.34,20.81 7.94,19.58 5.93,17.57Z" />
            </svg>
        </div>
        <div class="on-off">
            <div class="container">
                <div class="onoffswitch">
                    <input type="checkbox" name="visible" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                    <label class="onoffswitch-label" for="myonoffswitch">
                        <div class="onoffswitch-inner"></div>
                        <div class="onoffswitch-switch"></div>
                    </label>
                </div>
            </div>
        </div>
    </div>

    <div class="desktop-two-columns">
        <div class="column">
            <div class="form-element">
                <div class="form-element-label">
                    <label>Nombre</label>
                </div>
                <div class="form-element-input">
                    <input class="name" type="text" name="name" value="{{isset($product_category->name) ? $product_category->name : ''}}">
                </div>
            </div>
        </div>
    </div>

    <div class="column">
        <div class="form-element">
            <div class="form-element-label">
                <label>Título</label>
            </div>
            <div class="form-element-input">
                <input class="title" type=" text" name="title" value="{{isset($product_category->title) ? $product_category->title : ''}}">
            </div>
        </div>

       
    </div>


   
</form>

@endif

@endsection