@extends('templates.template')


@section('content')

    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <a href="{{route('challenges.create')}}">
                <button class="btn btn-success mb-4 p-3">Criar Challenge</button>
            </a>

            <a href="{{route('challenges.auto')}}">
                <button class="btn btn-warning mb-4 p-3">
                    Questões do desafio </button>
            </a>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                @if(!empty($challenges))
                    @foreach($challenges as $challenge)
                        <div class="col mb-5">
                            <div class="card h-100">
                                <img class="card-img-top" src="{{$challenge->path_image}}"
                                     alt="...">
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-bolder">{{$challenge->title}}</h5>
                                        @if($challenge->status == 'concluded')
                                            <button class="btn-success disabled">{{$challenge->status}}</button>
                                        @elseif($challenge->status == 'pending')
                                            <button class="btn-warning disabled">{{$challenge->status}}</button>
                                        @else
                                            <button class="btn-danger disabled">{{$challenge->status}}</button>
                                        @endif

                                    </div>
                                </div>
                                <!-- Product actions-->

                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    @if($challenge->status == 'concluded')
                                        <div class="text-center"><a class="btn btn-outline-success mt-auto" href="{{route('resolution.index',$challenge->id)}}">Vizualizar
                                                solução</a></div>
                                    @elseif($challenge->status == 'pending')
                                        <div class="text-center"><a class="btn btn-outline-danger mt-auto" href="{{route('resolution.index',$challenge->id)}}">Solucionar Problema</a></div>
                                    @endif
                                        <form method="POST" action="{{route('challenges.destroy',$challenge->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <div class="text-center"><a class="btn btn-danger mt-3" href="{{route('challenges.destroy',$challenge->id)}}"><button class="btn btn-danger" type="submit">Excluir</button></a></div>
                                        </form>

                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </section>








    {{--    <div class="row">--}}
    {{--        <div class="col-12 grid-margin">--}}
    {{--            <div class="card">--}}
    {{--                <div class="card-body"><h4 class="card-title">Recent Tickets</h4>--}}
    {{--                    <div class="table-responsive">--}}
    {{--                        <table class="table">--}}
    {{--                            <thead>--}}
    {{--                            <tr>--}}
    {{--                                <th> Titulo</th>--}}
    {{--                                <th> Descrição</th>--}}
    {{--                                <th> Status</th>--}}
    {{--                                <th> Data de criação</th>--}}
    {{--                                <th> Ver resolução</th>--}}
    {{--                            </tr>--}}
    {{--                            </thead>--}}
    {{--                            <tbody>--}}
    {{--                            @foreach($challenges ?? '' as $challenge)--}}
    {{--                                <tr>--}}
    {{--                                    <td> {{$challenge->title}}</td>--}}
    {{--                                    <td>{{$challenge->description}}</td>--}}
    {{--                                    @if($challenge->status == 'concluded')--}}
    {{--                                        <td><strong style="color: green">CONCLUIDO</strong></td>--}}
    {{--                                    @elseif($challenge->status == 'pending')--}}
    {{--                                        <td><strong style="color: yellow">PENDENTE</strong></td>--}}
    {{--                                    @else--}}
    {{--                                        <td><strong style="color: red">TAREFA VENCIDA</strong></td>--}}
    {{--                                    @endif--}}
    {{--                                    <td> {{$challenge->created_at}}</td>--}}
    {{--                                    <td> <button class="btn btn-warning"><a href="{{url('/challenges/'.$challenge->id.'/resolution')}}">Ver resolução</a></button> </td>--}}
    {{--                                </tr>--}}
    {{--                            @endforeach--}}
    {{--                            </tbody>--}}
    {{--                        </table>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}


@endsection
