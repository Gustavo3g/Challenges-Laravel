@extends('templates.template')


@section('content')


    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)


                <div class="alert alert-danger" role="alert">
                    <li>{{$error}}</li>
                </div>




            @endforeach
        </ul>
    @endif
    <div class="container">

        <div class="card mt-4">
            <div class="card-body">
                <form action="{{route('challenges.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="titulo">Titulo</label>
                        <input type="text" class="form-control" id="titulo" name="title" value="{{old('titulo')}}"
                               placeholder="Titulo">
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <input name="description" type="text" class="form-control" id="descricao"
                               placeholder="Descrição">
                    </div>
                    <div class="form-group">
                        <label for="path_image">Path da Imagem</label>
                        <input name="path_image" type="text" class="form-control" id="path_image">
                        <div id="emailHelp" class="form-text">Opcional.</div>
                    </div>
                    <input hidden name="status" value="pending">
                    <br><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>

@endsection
