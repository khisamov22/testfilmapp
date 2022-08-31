@extends('layout')

@section('main_content')

<h1>Добавление фильма</h1>
<div class="box">
    <form action="/add/check" method="POST">
        @csrf
        <div class="form-group pt-2">
            <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Название фильма">

        </div>
        <div class="form-group pt-2">
            <textarea class="form-control" name="description" id="description" rows="3" placeholder="Описание фильма"></textarea>

        </div>
        <div class="form-group pt-2">
            <input type="text" class="form-control" name="imgsrc" id="imgsrc" aria-describedby="emailHelp" placeholder="Ссылка на изображение">
            <small id="emailHelp" class="form-text text-muted">Ставим конечную ссылку, на сервере картинки не храним</small>

        </div>
        <div class="form-group pt-2">
            <input type="text" class="form-control" name="date" id="date" aria-describedby="emailHelp" placeholder="Дата выхода">
        </div>
        <br>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="comedy" id="comedy" value="1">
            <label class="form-check-label" for="comedy">Комедия</label> 
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="cartoons" id="cartoons" value="1">
            <label class="form-check-label" for="cartoons">Мультфильмы</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="horror" id="horror" value="1">
            <label class="form-check-label" for="horror">Ужасы</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="fiction" id="fiction" value="1">
            <label class="form-check-label" for="fiction">Фентази</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="thrillers" id="thrillers" value="1">
            <label class="form-check-label" for="thrillers">Триллеры</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="militants" id="militants" value="1">
            <label class="form-check-label" for="militants">военные</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="melodramas" id="melodramas" value="1">
            <label class="form-check-label" for="melodramas">Мелодраммы</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="adventure" id="adventure" value="1">
            <label class="form-check-label" for="adventure">Приключения</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="anime" id="anime" value="1">
            <label class="form-check-label" for="anime">Аниме</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="dramas" id="dramas" value="1">
            <label class="form-check-label" for="dramas">Драммы</label>
        </div>

        <br>
        <button type="submit" class="btn btn-primary mt-3">Добавить</button>
    </form>

</div>

@endsection