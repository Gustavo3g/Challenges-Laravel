@extends('templates.template')


@section('content')
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="https://imgix.prensa.li/https%3A%2F%2Fstatic.prensa.li%2Fstories%2F19%2F48%2F95%2F97%2F19489597-0edd-4a4b-81d2-7c4d20c2b7a5.png?fit=crop&max-h=450&mh=450&w=800&s=03b86cce1d9b70b45ed1a88889ea75b1" alt="..."></div>
                <div class="col-md-6">
                    <div class="small mb-1"></div>
                    <h1 class="display-5 fw-bolder">Bem vindo aos desafios</h1>
                    <p class="lead">Decidi fazer esse sistema de Challenges no lugar de criar os algoritimos em questão, não consegui ver sentido em faze-los. Mas o sistema não foge muito do que foi pedido, já que é um sistema de criação de perguntas e respostas.</p>

                    <p class="lead"><a href="https://youtu.be/h_0T7VNt8Dk">Exemplo de utilização</a></p>
                    <div class="d-flex">
                        <a href="/challenges"> <button class="btn btn-outline-dark flex-shrink-0" type="button">
                            <i class="bi-cart-fill me-1"></i>
                            Começar
                        </button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
