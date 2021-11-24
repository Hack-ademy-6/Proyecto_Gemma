
<div class="col-12 d-flex justify-content-center h-100">
    @foreach ($categories as $category)
    <a type="button" class="btn btn-cambio btn-transparent mx-3 box-radius letter-sep"  href="{{route('category.ads', ['name'=>$category->name, 'id'=>$category->id])}}">
        <div class="btn-cambio">
            <i class="px-2 py-2 h2 text-center {{$category->icon}}">
            <h5 class="text-center py-2 text-decoration-none txt-cuerpo"><b>{{__("{$category->name}")}}</b></h5></i>
        </div>
    </a>
    @endforeach
            

</div>
 