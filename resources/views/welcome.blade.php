@extends("/default")


@section('titre')
  Ma machine à Café
@endsection

@include('parts/gestionStockBdd')


@section('content')

  @include('parts/sucres')
  {{-- @include('parts/choixBoissons') --}}
  {{-- @include('parts/maBoisson') --}}
  @include('parts/pieces')

@endsection
