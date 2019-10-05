@extends('backend.layouts.admin')

@section('style')
<!--begin::Page Vendors Styles(used by this page) -->
<link href="{{asset('assets/vendors/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/sweetalert2/6.4.1/sweetalert2.css" rel="stylesheet"/>

<!--end::Page Vendors Styles -->

@endsection

@section('content')


<div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head kt-portlet__head--lg">
        <div class="kt-portlet__head-label">
            <span class="kt-portlet__head-icon">
                <i class="kt-font-brand flatkt-sticky-toolbaricon2-line-chart"></i>
            </span>
            <h3 class="kt-portlet__head-title">
            Services
                    </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-wrapper">
                <div class="kt-portlet__head-actions">
                    <div class="dropdown dropdown-inline">
                        <button type="button" class="btn btn-default btn-icon-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="la la-download"></i> Export
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(117px, 0px, 0px);">
                            <ul class="kt-nav">
                                <li class="kt-nav__section kt-nav__section--first">
                                    <span class="kt-nav__section-text">Choose an option</span>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon la la-print"></i>
                                        <span class="kt-nav__link-text">Print</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon la la-copy"></i>
                                        <span class="kt-nav__link-text">Copy</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                        <span class="kt-nav__link-text">Excel</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon la la-file-text-o"></i>
                                        <span class="kt-nav__link-text">CSV</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                        <span class="kt-nav__link-text">PDF</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    &nbsp;
                    <a href="{{route('admin.services.create')}}" class="btn btn-brand btn-elevate btn-icon-sm">
                        <i class="la la-plus"></i>
                        New Record
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="kt-portlet__body">

        <!--begin: Datatable -->
        <div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer text-center">

            <div class="row">
                <div class="col-sm-12">
                    <table class="table  table-hover table-checkable dataTable no-footer dtr-inline" id="kt_table_1" role="grid" aria-describedby="kt_table_1_info" style="width: 992px;">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 46.25px;" aria-sort="ascending" aria-label="Record ID: activate to sort column descending">Record ID</th>
                                <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 38.25px;" aria-label="Order ID: activate to sort column ascending">Title</th>
                                <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 53.25px;" aria-label="Country: activate to sort column ascending">Description</th>
                                <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 51.25px;" aria-label="Ship City: activate to sort column ascending">Image</th>

                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 68.5px;" aria-label="Actions">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($services as $service)
                            <tr role="row" class="odd">
                                <td class="sorting_1" tabindex="0">{{$service->id}}</td>
                                <td>{{$service->name}}</td>
                                <td>{{$service->description}}</td>
                                <td><img src="{{asset('storage/' . $service->image )}}" height="40" width="50"></td>
                                <td nowrap="">

<a href="{{route('admin.services.edit' , [ 'id' => $service->id ])}}" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Edit"> <i class="la la-edit"></i>
</a>

<a href="#" class="m-portlet__nav-link btn m-btn m-btn hover-danger m-btn--icon m-btn--icon-only m-btn--pill sa-remove" data-id="{{$service->id}}" onclick="deleteConfirmation()"> <i class="la la-trash"></i>
</a>



</td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        <!--end: Datatable -->
    </div>
</div>

@endsection


@section('js')
<!--begin::Page Vendors(used by this page) -->
<script src="{{asset('assets/vendors/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/sweetalert2/6.4.1/sweetalert2.js"></script>

<!--end::Page Vendors -->
<script>
    var KTDatatablesBasicPaginations = function() {
        var initTable1 = function() {
            var table = $('#kt_table_1');
            // begin first table
            table.DataTable({});
        }
        return {

            //main function to initiate the module
            init: function() {
                initTable1();
            }

        };
    }();
    jQuery(document).ready(function() {
        KTDatatablesBasicPaginations.init();

//         /* */
//         $(document).on('click', '.sa-remove', function (e) {
//            // alert("rania");
//     e.preventDefault();
//     var id = $(this).data('id');
//     alert(id);
// //     var url={{url('/admin/services/')}}+"";

// var url='{{URL::to('/admin/services/delete')}}' ;
// // var url='/admin/services/delete';
//    alert(url);


//    swal({
//                         title: "Are you sure?",
//                         text: "You will not be able to recover this imaginary file!",
//                         type: "warning",
//                         showCancelButton: true,
//                         confirmButtonClass: "btn-danger",
//                         confirmButtonText: "Yes, delete it!",
//                         cancelButtonText: "No, cancel plx!",

//                     },
//                     function(isConfirm) {
//                         if (isConfirm) {
//                             $.ajax({
//                                 method: "POST",
//                                 url: url,
//                                 data: {

//                                     id: id

//                                 },
//                                 //,_token:token
//                                 headers: {
//                                     'X-CSRF-TOKEN': $('input[name="_token"]').val()
//                                 },
//                                 success: function(response) {

//                                       alert (response);
//                                     var obj = $.parseJSON(response);
//                                     if (obj.message = "success") {
//                                         swal("Deleted!", "Your imaginary file has been deleted.", "success");
//                                         // current_edit_position.parent().parent().parent().remove()
//                                     } else {


//                                     }

//                                 }
//                             });


//                         } else {
//                             swal("Cancelled", "Your imaginary file is safe :)", "error");
//                         }
//                     });

// });




    });



// Confirmation
//   $(document).on('click', '.sa-remove', function (e) {
//     e.preventDefault();
//     alert(hh);
//     var id = $(this).data('id');
//     alert(id);
//     swal({
//             title: "Are you sure!",
//             type: "error",
//             confirmButtonClass: "btn-danger",
//             confirmButtonText: "Yes!",
//             showCancelButton: true,
//         },
//         function() {
//             $.ajax({
//                 type: "POST",
//                 url: "{{url('admin.news.delete')}}" + '/' + id ,
//                  data : {'_method' : 'DELETE'},
//                 success: function (data) {


//             });
//     });
// });




function deleteConfirmation( ) {
    var id = $(this).data('id');
    alert(id);
    var url='{{URL::to('/admin/services/delete')}}' ;
        swal({
            title: "Delete?",
            text: "Please ensure and then confirm!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            reverseButtons: !0
        }).then(function (e) {
            // e.preventDefault();

            if (e.value === true) {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    type: 'POST',
                    url: "{{url('/admin/services/delete')}}/" + id,
                    data: {_token: CSRF_TOKEN},
                    dataType: 'JSON',
                    success: function (results) {

                        if (results.success === true) {
                            swal("Done!", results.message, "success");
                        } else {
                            swal("Error!", results.message, "error");
                        }
                    }
                });

            } else {
                e.dismiss;
            }

        }, function (dismiss) {
            return false;
        })
    }

</script>
<!--begin::Page Scripts(used by this page) -->
<!-- <script src="{{asset('assets/app/custom/general/crud/datatables/basic/paginations.js')}}" type="text/javascript"></script> -->

<!--end::Page Scripts -->
@endsection
