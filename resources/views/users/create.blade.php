@extends('layouts.app')

@section('content')

            <div class="m-grid__item m-grid__item--fluid m-wrapper">
                <!-- BEGIN: Subheader -->
                <div class="m-subheader ">
                    <div class="d-flex align-items-center">
                        <div class="mr-auto">
                            <h3 class="m-subheader__title m-subheader__title--separator">
                                Add new User
                            </h3>
                            <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                                <li class="m-nav__item m-nav__item--home"><a href="#" class="m-nav__link m-nav__link--icon"><i class="m-nav__link-icon la la-home"></i></a></li>
                                <li class="m-nav__item">
                                    <a href="/cms/users/list" class="m-nav__link"><span class="m-nav__link-text">Users list</span></a>
                                </li>
                                <li class="m-nav__separator">-</li>
                                <li class="m-nav__item">
                                    <a href="" class="m-nav__link"><span class="m-nav__link-text">Add new user</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- END: Subheader -->
                <div class="m-content">
                    <div class="row">
                        <div class="col-md-12">
                            <!--begin::Portlet-->
                            <div class="m-portlet m-portlet--tab">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title">
                                            <span class="m-portlet__head-icon m--hide"><i class="la la-gear"></i></span>
                                            <h3 class="m-portlet__head-text">Enter User Detail</h3>
                                        </div>
                                    </div>
                                </div>
                                <!--begin::Form-->
                            {!! Form::open(['route' => 'users.store']) !!}
                                @include('users.fields')
                            {!! Form::close() !!}
                                <!--end::Form-->
                            </div>
                            <!--end::Portlet-->
                        </div>
                    </div>
                </div>
            </div>



@endsection

@section('extra-footer')
    <script src="{{asset('js/datatables/base/html-table.js')}}" type="text/javascript"></script>
@endsection