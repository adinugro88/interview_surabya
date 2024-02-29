@extends('layouts.admin')

@section('content')
    @livewire('pembelian.index')
@endsection


@section('script')
<script>
    window.addEventListener('close-modal', event => {
        $('#exampleModal').modal('hide');

    })
</script>
@endsection
