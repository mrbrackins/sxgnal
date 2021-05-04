@extends('layouts.app')
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">s🙅🏿gnal</a>
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('home') }}">Home</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button style=" background: none!important;
            border: none;
            display:inline;
            padding: 0!important;
            /*optional*/
            font-family: arial, sans-serif;
            /*input has OS specific font-family*/
            color: red;
            cursor: pointer;" type="submit" class="btn btn-primary">
                        Logout
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
</nav>

@section('content')




        <div class="card mb-3">
            <div class="card-header">
                <div class="row align-items-center justify-content-between">
                    <div class="col-4 col-sm-auto d-flex align-items-center pr-0">
                        <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">Orders</h5>
                    </div>
                    <div class="col-8 col-sm-auto ml-auto text-right pl-0">
                        <div class="d-none" id="orders-actions">
                            <div class="input-group input-group-sm" data-children-count="1">
                                <select class="custom-select cus" aria-label="Bulk actions">
                                    <option selected="">Bulk actions</option>
                                    <option value="Refund">Refund</option>
                                    <option value="Delete">Delete</option>
                                    <option value="Archive">Archive</option>
                                </select>
                                <button class="btn btn-falcon-default btn-sm ml-2" type="button">Apply</button>
                            </div>
                        </div>
                        <div id="dashboard-actions">
                            <button class="btn btn-falcon-default btn-sm" type="button"><svg class="svg-inline--fa fa-plus fa-w-14" data-fa-transform="shrink-3 down-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" style="transform-origin: 0.4375em 0.625em;"><g transform="translate(224 256)"><g transform="translate(0, 64)  scale(0.8125, 0.8125)  rotate(0 0 0)"><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" transform="translate(-224 -256)"></path></g></g></svg><!-- <span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span> --><span class="d-none d-sm-inline-block ml-1">New</span></button>
                            <button class="btn btn-falcon-default btn-sm mx-2" type="button"><svg class="svg-inline--fa fa-filter fa-w-16" data-fa-transform="shrink-3 down-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="filter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.625em;"><g transform="translate(256 256)"><g transform="translate(0, 64)  scale(0.8125, 0.8125)  rotate(0 0 0)"><path fill="currentColor" d="M487.976 0H24.028C2.71 0-8.047 25.866 7.058 40.971L192 225.941V432c0 7.831 3.821 15.17 10.237 19.662l80 55.98C298.02 518.69 320 507.493 320 487.98V225.941l184.947-184.97C520.021 25.896 509.338 0 487.976 0z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="fas fa-filter" data-fa-transform="shrink-3 down-2"></span> --><span class="d-none d-sm-inline-block ml-1">Filter</span></button>
                            <button class="btn btn-falcon-default btn-sm" type="button"><svg class="svg-inline--fa fa-external-link-alt fa-w-16" data-fa-transform="shrink-3 down-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="external-link-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.625em;"><g transform="translate(256 256)"><g transform="translate(0, 64)  scale(0.8125, 0.8125)  rotate(0 0 0)"><path fill="currentColor" d="M432,320H400a16,16,0,0,0-16,16V448H64V128H208a16,16,0,0,0,16-16V80a16,16,0,0,0-16-16H48A48,48,0,0,0,0,112V464a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V336A16,16,0,0,0,432,320ZM488,0h-128c-21.37,0-32.05,25.91-17,41l35.73,35.73L135,320.37a24,24,0,0,0,0,34L157.67,377a24,24,0,0,0,34,0L435.28,133.32,471,169c15,15,41,4.5,41-17V24A24,24,0,0,0,488,0Z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="fas fa-external-link-alt" data-fa-transform="shrink-3 down-2"></span> --><span class="d-none d-sm-inline-block ml-1">Export</span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="falcon-data-table">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row mx-1"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="table-responsive"><table class="table table-sm mb-0 table-striped table-dashboard fs--1 data-table border-bottom border-200 dataTable no-footer" data-options="{&quot;searching&quot;:false,&quot;responsive&quot;:false,&quot;info&quot;:false,&quot;lengthChange&quot;:false,&quot;sWrapper&quot;:&quot;falcon-data-table-wrapper&quot;,&quot;dom&quot;:&quot;<'row mx-1'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>><'table-responsive'tr><'row no-gutters px-1 py-3 align-items-center justify-content-center'<'col-auto'p>>&quot;,&quot;language&quot;:{&quot;paginate&quot;:{&quot;next&quot;:&quot;<span class=\&quot;fas fa-chevron-right\&quot;></span>&quot;,&quot;previous&quot;:&quot;<span class=\&quot;fas fa-chevron-left\&quot;></span>&quot;}}}" id="DataTables_Table_0" role="grid">
                                <thead class="bg-200 text-900">
                                <tr role="row"><th class="align-middle no-sort sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="




                      : activate to sort column descending" style="width: 25px;">
                                        <div class="custom-control custom-checkbox" data-children-count="1">
                                            <input class="custom-control-input checkbox-bulk-select" id="checkbox-bulk-purchases-select" type="checkbox" data-checkbox-body="#orders" data-checkbox-actions="#orders-actions" data-checkbox-replaced-element="#dashboard-actions">
                                            <label class="custom-control-label" for="checkbox-bulk-purchases-select"></label>
                                        </div>
                                    </th><th class="align-middle sort sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Order: activate to sort column ascending" style="width: 188.203px;">Name</th><th class="align-middle sort pr-7 sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 74.2031px;">Date</th><th class="align-middle sort sorting" style="min-width: 12.5rem; width: 484.203px;" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Ship To: activate to sort column ascending">Description</th><th class="align-middle sort text-center sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 100.203px;">Status</th><th class="align-middle sort text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 71.2031px;">Amount</th><th class="no-sort sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 56.2031px;"></th></tr>
                                </thead>
                                <tbody id="orders">


                                @foreach ($checklist->items as $item)
                                    <tr is="checklist-item" :item={{$item}}></tr>
                                @endforeach




                                </tbody>
                            </table></div><div class="row no-gutters px-1 py-3 align-items-center justify-content-center"><div class="col-auto"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination pagination-sm"><li class="paginate_button page-item previous" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link"><svg class="svg-inline--fa fa-chevron-left fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg><!-- <span class="fas fa-chevron-left"></span> --></a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link"><svg class="svg-inline--fa fa-chevron-right fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg><!-- <span class="fas fa-chevron-right"></span> --></a></li></ul></div></div></div></div>
                </div>
            </div>
        </div>
        <footer>
            <div class="row no-gutters justify-content-between fs--1 mt-4 mb-3">
                <div class="col-12 col-sm-auto text-center">
                    <p class="mb-0 text-600">Thank you for creating with Falcon <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none"> 2019 © <a href="https://themewagon.com">Themewagon</a></p>
                </div>
                <div class="col-12 col-sm-auto text-center">
                    <p class="mb-0 text-600">v2.3.2</p>
                </div>
            </div>
        </footer>


@endsection
