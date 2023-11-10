@extends('sistema.layout')
@section('title', 'JAMB')
@section('content')

    <div class="container" style="margin-left: 15%">
        <div class="col-sm-6" style="margin-left: 30%">
            <p class="h1 text-start"
                style="color: #2B1998; font-size: 70px; margin-left: 90px; margin-top: 40px; font-weight: bolder ">Adoções
            </p>
            <p class="h3 text-start" style="color: #656AA6; font-size: 50px;   font-style: Italic; align-Items: center "></p>

        </div>
        <p class="h1 text-start" style=" font-size: 23px;">Nesta seção você tem acesso aos animais que ainda estão esperando
            por um lar!
            Para cadastrar um animal que também está a procura de um lar ou saber mais sobre como funcionam as adoções
            escolha uma das opções abaixo:
            Ao adotar um bichinho, você estará salvando ele das ruas.
        </p>
        <p class="h1 text-start"
                style="color: #2B1998; font-size: 55px; color: #454545; margin-top: 10px; font-weight: bolder ">Encontre um companheiro
            </p>

        <!-- --<div style="display:flex; flex-direction: row">
            <a class="navbar-brand" href="/sobre">2B1998ize: 26px; color: white; margin-left: 28px">Sobre nós</p>
                </div>
            </a>
            <a class="navbar-brand" href="/cadastros/cadastrar">
                <div class="col-sm-4" id="botoes2" style="display:flex; flex-direction: row">
                    <p class="h4 text-start" style="widht: 255px; font-size: 25px; color: white; margin-left: 15px">Cadastrar um animal</p>
                </div>
            </a>
        </div> -->

        @if (count($cadastro) === 0)
        @else
            <div class="album bg-light">
                <div class="container">
                    <div class="row">
                        @foreach ($cadastro as $item => $value)
                            <div class="col-md-4">
                                <div class="card mb-4 box-shadow">
                                    <img class="card-img-top" src="/storage/{{ $value->arquivo }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h3>{{ $value['nome'] }}</h3>
                                        <p style="font-size:20px" class="card-text">{{ $value['idade'] }} ano(s)</p>
                                        <p style="font-size:19px"class="card-text">{{ $value['raca'] }}</p>
                                        <p style="font-size:19px"class="card-text">{{ $value['sobre'] }}</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group" id="botaonfv">
                                          <button onclick="window.location.href='/favoritos';"  style="color: #ffffff; background-color: ##2B1998; font-size: 18px" type="button" class="btn btn-sm btn-outline">Quero  Adotar</button>
                                          </div>
                                          <div class="btn-group" id="botaofav">
                                          <button onclick="window.location.href='/favoritos';"  style="color: #ffffff; background-color: ##666570; font-size: 20px;" type="button" class="btn btn-sm btn-outline">Favoritar</button>
                                          </div>
                                                <small class="text-muted"></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                        
                </div>
            </div>
          
        @endif
    </div>
@endsection
