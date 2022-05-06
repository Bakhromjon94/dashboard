@extends('layouts.master')

@section('title') @lang('translation.Saas') @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Bosh sahifa @endslot
@slot('title') Mahsulotlar ombori @endslot
@endcomponent


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Mahsulotlar va ularning narxlari </h4>
                <br>

                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                    <thead>
                    <tr>
                        <th>Mahsulot turi</th>
                        <th>Mahsulot nomi / operativkasi / hotirasi</th>
                        <th>Soni</th>
                        <th>Narxi</th>
                        <th>kirim sanasi</th>

                    </tr>
                    </thead>


                    <tbody>
                    <tr>
                        <td>Smartfon</td>
                        <td>Смартфон Apple iPhone 11 / 4 / 128 GB </td>
                        <td>6 </td>
                        <td>10 000 000</td>
                        <td>2022/05/04</td>

                    </tr>
                    <tr>
                        <td>Smartfon</td>
                        <td>Смартфон Apple iPhone 11 / 4 / 64 GB </td>
                        <td>7 </td>
                        <td>9 000 000</td>
                        <td>2022/05/04</td>

                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection
@section('script')
    <!-- Required datatable js -->
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
@endsection
