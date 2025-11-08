@extends('layouts.app')
@section('title', 'Nova Palestra')
@section('content')
 <div class="row">
 <div class="col-lg-8">
 <div class="card">
 <div class="card-header">Cadastrar Palestra</div>
 <div class="card-body">
 <form action="{{ route('palestras.store') }}" method="POST"
class="vstack gap-3">
 @include('palestras._form')
 <div class="d-flex gap-2">
 <button type="submit" class="btn btn-primary">
 <i class="bi bi-check-circle"></i> Salvar
 </button>
 <a class="btn btn-outline-secondary" href="{{
route('palestras.index') }}">Cancelar</a>
 </div>
 </form>
 </div>
 </div>
 </div>
 </div>
@endsection