@extends('layouts.app')

@section('content')
<div class="container-fluid admin-panel">
    <div class="row justify-content-center">
        <div class="admin-panel-header col-md-12">
            <h2>Painel Administrativo</h2>
        </div>
        <div class="d-flex flex-column col-md-8 m-auto">

            <h3 class="admin-panel-upload__title">
                Inserir Tabela de classificação
            </h3>

            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif

            <form class="d-flex flex-column admin-panel-upload__form" action="/admin" method="POST" enctype="multipart/form-data" class="d-flex">
                @csrf
                <input type="file" name="file">
                <button type="submit">Enviar Arquivo</button>
            </form>
     
    </div>
</div>
@endsection
