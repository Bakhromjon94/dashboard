@extends('layouts.master')

@section('title') @lang('translation.Saas') @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Bosh sahifa @endslot
        @slot('title') Xisobot @endslot
    @endcomponent


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title"> Do'kon savdosi xisoboti </h4>
                    <br>

                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                        <tr>
                            <th>Mahsulot turi</th>
                            <th>Mahsulot nomi / operativkasi / hotirasi</th>
                            <th>Jami sotilgan</th>
                            <th>Jami naqd savdo</th>
                            <th>Jami nasiya savdo</th>
                            <th>Boshlangich tolovlar</th>
                            <th>Oylik tushum</th>
                            <th>Jami qarzdorlik</th>
                            <th>Filial</th>

                        </tr>
                        </thead>


                        <tbody>
                        <tr>
                            <td>Smartfon</td>
                            <td>Смартфон Apple iPhone 11 / 4 / 128 GB </td>
                            <td> 15 </td>
                            <td>110 000 000 </td>
                            <td>72 000 000</td>
                            <td>21 000 000</td>
                            <td>8 500 000</td>
                            <td>14 500 000</td>
                            <td>Chortoq t.</td>


                        </tr>
                        <tr>
                            <td>Smartfon</td>
                            <td>Смартфон Samsung Galaxy A02 / 2 / 32 GB </td>
                            <td> 12 </td>
                            <td>36 000 000 </td>
                            <td>8 000 000</td>
                            <td>27 000 000</td>
                            <td>7 500 000</td>
                            <td>6 000 000</td>
                            <td>Uychi t.</td>
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
