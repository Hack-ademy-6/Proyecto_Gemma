
<div class="col-12 d-flex justify-content-center h-100">
    @foreach ($categories as $category)
    <button type="button" class="btn btn-dark mx-3 box-radius letter-sep">
        <i class="px-2 h2 text-center links {{$category->icon}}"></i>
        <a class="links text-center text-decoration-none txt-cuerpo" href="{{route('category.ads', ['name'=>$category->name, 'id'=>$category->id])}}">{{$category->name}}</a> 
    </button>
    @endforeach
            

</div>
 