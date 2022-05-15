@extends('templates.template')


@section('content')

    @if($challenge->status == 'pending')
        <div class="container">

            <div class="card mt-4">
                <div class="card-body">
                    <form action="{{route('resolution.done',$challenge->id)}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="titulo">TITULO</label>
                            <input disabled type="text" class="form-control" id="titulo" name="title"
                                   value="{{$challenge->title}}"
                                   placeholder="Titulo">
                        </div>
                        <div class="form-group">
                            <textarea disabled class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                      style="height: 100px">{{$challenge->description}}</textarea>
                            <label for="floatingTextarea2"></label>
                        </div>
                        <div class="form-group">
                             <textarea class="form-control" name="resolution" placeholder="Escreva a solução do problema aqui" id="floatingTextarea2"
                                       style="height: 100px"></textarea>
                            <label for="floatingTextarea2"></label>
                        </div>
                        <input hidden name="status" value="concluded">
                        <br><br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    @else

        <div class="container">

            <div class="card mt-4">
                <div class="card-body">
                    <form action="{{route('resolution.done',$challenge->id)}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="titulo">TITULO</label>
                            <input disabled type="text" class="form-control" id="titulo" name="title"
                                   value="{{$challenge->title}}"
                                   placeholder="Titulo">
                        </div>
                        <div class="form-group">
                            <textarea disabled class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                      style="height: 100px">{{$challenge->description}}</textarea>
                            <label for="floatingTextarea2"></label>
                        </div>
                        <div class="form-group">
                             <textarea disabled class="form-control" placeholder="" id="floatingTextarea2"
                                       style="height: 100px">{{$challenge->resolution ?? ''}}</textarea>
                            <label for="floatingTextarea2"></label>
                        </div>
                        <input hidden name="status" value="pending">
                        <br><br>
                    </form>
                </div>
            </div>

        </div>

    @endif
@endsection
