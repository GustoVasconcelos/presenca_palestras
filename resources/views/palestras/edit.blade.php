@extends('layouts.app')
@section('title', 'Editar Palestra')
@section('content')
 <div class="row">
 <div class="col-lg-8">
 <div class="card">
 <div class="card-header">Editar Palestra</div>
 <div class="card-body">
 <form action="{{ route('palestras.update', $palestra) }}"
method="POST" class="vstack gap-3">
 @csrf
 @method('PUT')
 @include('palestras._form', ['palestra' => $palestra])
 <div class="d-flex gap-2">
 <button type="submit" class="btn btn-primary">
 <i class="bi bi-check-circle"></i> Atualizar
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