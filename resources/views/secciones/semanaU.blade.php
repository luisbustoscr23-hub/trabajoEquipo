@extends('base.padre')

@section('titulo', 'Semana U')

@section('hero')
@endsection

@section('contenido')
    <section id="hero" class="py-5 text-center bg-light">
        <h1>Ir a configuracion</h1>
                            <li">
                        <a href="{{ url('/admin') }}">Panel de administracion</a>
                    </li>
    </section>

        <section id="hero" class="py-5 text-center bg-light">
        <h1>Ir a la pagina Web</h1>
        <li">
                        <a href="{{ url('/home') }}">WebSite</a>
        </li>
    </section>

@endsection
