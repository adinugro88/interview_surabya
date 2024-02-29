@extends('layouts.admin')

@section('content')
    @livewire('penjualan.index')
@endsection


@section('script')
<script>
    window.addEventListener('close-modal', event => {
        $('#exampleModal').modal('hide');
    })
</script>
@endsection
