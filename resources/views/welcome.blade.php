@extends('layout')

@section('main_content')
<div class="row  row-cols-sm-1 row-cols-md-2 row-cols-lg-3 ">













@foreach($reviews as $el)
<div class="card">

    <figure>
        <img src="{{$el->imgsrc}}" class="card-img-top" alt="...">
    </figure>
   
    <div class="card-body">
        <h4 class="card-title">{{$el->title}}</h4>
        
        <h6 class="card-title"> <?php 
        if(App\Http\Controllers\MainController::getGanre($el->id)->comedy) echo " Комедии" ;
        if(App\Http\Controllers\MainController::getGanre($el->id)->cartoons ) echo " Мультфильмы" ;
        if(App\Http\Controllers\MainController::getGanre($el->id)->fiction) echo " Фентези" ;
        if(App\Http\Controllers\MainController::getGanre($el->id)->horror) echo " Ужасы" ;
        if(App\Http\Controllers\MainController::getGanre($el->id)->thrillers) echo " Триллеры" ;
        if(App\Http\Controllers\MainController::getGanre($el->id)->militants) echo " Военные" ;
        if(App\Http\Controllers\MainController::getGanre($el->id)->melodramas) echo " Мелодрамма" ;
        if(App\Http\Controllers\MainController::getGanre($el->id)->adventure) echo " Приключения" ;
        if(App\Http\Controllers\MainController::getGanre($el->id)->anime) echo " Аниме" ;
        if(App\Http\Controllers\MainController::getGanre($el->id)->dramas) echo " Драмма" ;
        ?></h6>
        <p class="card-text pt-1">{{$el->description}}</p>
        
    </div>
</div>
@endforeach
</div>
@endsection

