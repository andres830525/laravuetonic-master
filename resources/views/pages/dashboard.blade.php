{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}
    <div class="row">
        {{-- test component vue --}}
        {{-- <test></test> --}}

        {{-- <div class="col-lg-6 col-xxl-4">
            @include('pages.widgets._widget-1', ['class' => 'card-stretch gutter-b'])
        </div> --}}

        {{-- <div class="col-lg-6 col-xxl-4">
            @include('pages.widgets._widget-2', ['class' => 'card-stretch gutter-b'])
        </div> --}}

       {{--  <div class="col-lg-6 col-xxl-4">
            @include('pages.widgets._widget-3', ['class' => 'card-stretch card-stretch-half gutter-b'])
            @include('pages.widgets._widget-4', ['class' => 'card-stretch card-stretch-half gutter-b'])
        </div>

        <div class="order-1 col-lg-6 col-xxl-4 order-xxl-1">
            @include('pages.widgets._widget-5', ['class' => 'card-stretch gutter-b'])
        </div>

        <div class="order-2 col-xxl-8 order-xxl-1">
            @include('pages.widgets._widget-6', ['class' => 'card-stretch gutter-b'])
        </div>

        <div class="order-1 col-lg-6 col-xxl-4 order-xxl-2">
            @include('pages.widgets._widget-7', ['class' => 'card-stretch gutter-b'])
        </div>

        <div class="order-1 col-lg-6 col-xxl-4 order-xxl-2">
            @include('pages.widgets._widget-8', ['class' => 'card-stretch gutter-b'])
        </div>

        <div class="order-1 col-lg-12 col-xxl-4 order-xxl-2">
            @include('pages.widgets._widget-9', ['class' => 'card-stretch gutter-b'])
        </div>--}}
    </div>

    <div class="card card-custom">
 <div class="card-header">
  <h3 class="card-title">
   Crear Nuevo documento
  </h3>
 </div>
 <!--begin::Form-->
 <form class="form">
  <div class="card-body">
   <div class="form-group form-group-last">

   <div class="form-group">
    <label>Nombre</label>
    <input type="email" class="form-control form-control-lg"  placeholder="Ingrese el Nombre del Documento"/>
   </div>
    <div class="form-group">
    <label for="exampleTextarea">Textarea</label>
    <textarea class="form-control form-control-solid" rows="3"></textarea>
   </div>
   <div class="form-group">
    <label>Small Input</label>
    <input type="email" class="form-control form-control-sm"  placeholder="Large input"/>
   </div>
   <div class="form-group">
    <label for="exampleSelectl">Large Select</label>
    <select class="form-control form-control-lg" id="exampleSelectl">
     <option>1</option>
     <option>2</option>
     <option>3</option>
     <option>4</option>
     <option>5</option>
    </select>
   </div>
   <div class="form-group">
    <label for="exampleSelectd">Default Select</label>
    <select class="form-control" id="exampleSelectd">
     <option>1</option>
     <option>2</option>
     <option>3</option>
     <option>4</option>
     <option>5</option>
    </select>
   </div>
   <div class="form-group">
    <label for="exampleSelects">Small Select</label>
    <select class="form-control form-control-sm" id="exampleSelects">
     <option>1</option>
     <option>2</option>
     <option>3</option>
     <option>4</option>
     <option>5</option>
    </select>


   </div>
 <div class="form-group">
    <label>File Browser</label>
    <div></div>
    <div class="custom-file">
     <input type="file" class="custom-file-input" id="customFile"/>
     <label class="custom-file-label" for="customFile">Choose file</label>
    </div>
   </div>
  </div>

  <div class="card-footer">
   <button type="reset" class="btn btn-success mr-2">Submit</button>
   <button type="reset" class="btn btn-secondary">Cancel</button>
  </div>
 </form>
 <!--end::Form-->
</div>
 <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">HTML Table
                    <div class="text-muted pt-2 font-size-sm">Datatable initialized from HTML table</div>
                </h3>
            </div>
            <div class="card-toolbar">
                <!--begin::Dropdown-->
                <div class="dropdown dropdown-inline mr-2">
                    <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="svg-icon svg-icon-md">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3"/>
                                <path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000"/>
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>Export
                    </button>
                    <!--begin::Dropdown Menu-->
                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                        <!--begin::Navigation-->
                        <ul class="navi flex-column navi-hover py-2">
                            <li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">Choose an option:</li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="la la-print"></i>
                                    </span>
                                    <span class="navi-text">Print</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="la la-copy"></i>
                                    </span>
                                    <span class="navi-text">Copy</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="la la-file-excel-o"></i>
                                    </span>
                                    <span class="navi-text">Excel</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="la la-file-text-o"></i>
                                    </span>
                                    <span class="navi-text">CSV</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="la la-file-pdf-o"></i>
                                    </span>
                                    <span class="navi-text">PDF</span>
                                </a>
                            </li>
                        </ul>
                        <!--end::Navigation-->
                    </div>
                    <!--end::Dropdown Menu-->
                </div>
                <!--end::Dropdown-->
                <!--begin::Button-->
                <a href="#" class="btn btn-primary font-weight-bolder">
                <span class="svg-icon svg-icon-md">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"/>
                            <circle fill="#000000" cx="9" cy="15" r="6"/>
                            <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"/>
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>New Record</a>
                <!--end::Button-->
            </div>
        </div>

        <div class="card-body">

            <!--begin::Search Form-->
            <div class="mt-2 mb-5 mt-lg-5 mb-lg-10">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-xl-8">
                        <div class="row align-items-center">
                            <div class="col-md-4 my-2 my-md-0">
                                <div class="input-icon">
                                    <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query"/>
                                    <span><i class="flaticon2-search-1 text-muted"></i></span>
                                </div>
                            </div>

                            <div class="col-md-4 my-2 my-md-0">
                                <div class="d-flex align-items-center">
                                    <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                                    <select class="form-control" id="kt_datatable_search_status">
                                        <option value="">All</option>
                                        <option value="1">Pending</option>
                                        <option value="2">Delivered</option>
                                        <option value="3">Canceled</option>
                                        <option value="4">Success</option>
                                        <option value="5">Info</option>
                                        <option value="6">Danger</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 my-2 my-md-0">
                                <div class="d-flex align-items-center">
                                    <label class="mr-3 mb-0 d-none d-md-block">Type:</label>
                                    <select class="form-control" id="kt_datatable_search_type">
                                        <option value="">All</option>
                                        <option value="1">Online</option>
                                        <option value="2">Retail</option>
                                        <option value="3">Direct</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                        <a href="#" class="btn btn-light-primary px-6 font-weight-bold">
                            Search
                        </a>
                    </div>
                </div>
            </div>
            <!--end::Search Form-->

            <table class="table table-bordered table-hover" id="kt_datatable">
                <thead>
                <tr>
                    <th>Record ID</th>
                    <th>Order ID</th>
                    <th>Country</th>
                    <th>Ship City</th>
                    <th>Ship Address</th>
                    <th>Company Agent</th>
                    <th>Company Name</th>
                    <th>Ship Date</th>
                    <th>Status</th>
                    <th>Type</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>61715-075</td>
                    <td>China</td>
                    <td>Tieba</td>
                    <td>746 Pine View Junction</td>
                    <td>Nixie Sailor</td>
                    <td>Gleichner, Ziemann and Gutkowski</td>
                    <td>2/12/2018</td>
                    <td>Activo</td>
                    <td>Activo</td>
                    <td nowrap></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>63629-4697</td>
                    <td>Indonesia</td>
                    <td>Cihaur</td>
                    <td>01652 Fulton Trail</td>
                    <td>Emelita Giraldez</td>
                    <td>Rosenbaum-Reichel</td>
                    <td>8/6/2017</td>
                    <td>3</td>
                    <td>3</td>
                    <td nowrap></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>68084-123</td>
                    <td>Argentina</td>
                    <td>Puerto Iguazú</td>
                    <td>2 Pine View Park</td>
                    <td>Ula Luckin</td>
                    <td>Kulas, Cassin and Batz</td>
                    <td>5/26/2016</td>
                    <td>1</td>
                    <td>2</td>
                    <td nowrap></td>
                </tr>

                </tbody>
            </table>

        </div>

    </div>

@endsection

{{-- Styles Section --}}
@section('styles')
   <link href="{{ asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>
@endsection


{{-- Scripts Section --}}
@section('scripts')
    {{-- vendors --}}
    <script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>

    {{-- page scripts --}}
    <script src="{{ asset('js/pages/crud/datatables/basic/basic.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
@endsection
