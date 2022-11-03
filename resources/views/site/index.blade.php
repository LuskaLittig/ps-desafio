@extends('layouts.site.site')

@section('titulo')
    Index
@endsection

@section('conteudos')
    <div id="sobrenos">
        <p>Sobre-Nos</p>    
    </div>
    
    <section id="index-card-section">
        @if(isset($clientes))
            @foreach ($clientes as $cliente)
                <div class="index-cliente" key="{{$cliente['name']}}"> 
                    <img src="{{asset("site/img/desenho-xicara-de-cafe-e-graos-de-cafe_247824-2.webp")}}" alt="Foto do café">
                    <p>{{ $cliente['name'] }}</p>
                    <p>{{ $cliente['idade'] }}</p>
            
                </div>
            @endforeach
        @endif
    </section>       
    
    {{-- <div style= "width: 100%; height: 50vh; background-color: rgb(255, 102, 0)"></div>
    <div style= "width: 100%; height: 50vh; background-color: rgb(128, 0, 0)"></div>
    <div style= "width: 100%; height: 50vh; background-color: black"></div> --}}
    
@endsection