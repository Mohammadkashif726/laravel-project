@extends('cms.layouts.app')
@section('content')
    <!-- END: Left Aside -->
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">
                        Add new Tag
                    </h3>
                    <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                        <li class="m-nav__item m-nav__item--home"><a href="#" class="m-nav__link m-nav__link--icon"><i class="m-nav__link-icon la la-home"></i></a></li>
                        <li class="m-nav__item">
                            <a href="{{route('tags.index')}}" class="m-nav__link"><span class="m-nav__link-text">Tags</span></a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link"><span class="m-nav__link-text">Add new Tag</span></a>
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
                                    <h3 class="m-portlet__head-text">Enter tag detail</h3>
                                </div>
                            </div>
                        </div>
                        <!--begin::Form-->
                        <form action="{{route('tags.store')}}" method="post" class="m-form m-form--fit m-form--label-align-right">
                            @csrf
                            @if($errors->all())
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </div>
                            @endif
                            <div class="m-portlet__body">
                                <div class="form-group m-form__group">
                                    <label>Title</label>
                                    <input type="text" class="form-control m-input" name="title" id="title" aria-describedby="emailHelp" placeholder="Muhammad Owais">
                                </div>

                                <div class="form-group m-form__group">
                                    <label>slug</label>
                                    <input type="text"
                                           class="form-control m-input"
                                           name="slug" id="slug"
                                           aria-describedby="emailHelp"
                                           placeholder="Enter slug"
                                           onkeyup="this.value=this.value.toLowerCase().replace(/ /g,'-').replace(/[^\w-]+/g,'');"
                                    >
                                </div>

                                <div class="form-group m-form__group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="description" id="description" placeholder="Enter Description"></textarea>
                                </div>
                            </div>
                            <div class="m-portlet__foot m-portlet__foot--fit">
                                <div class="m-form__actions">
                                    <button type="submit" class="btn btn-lg btn-primary">
                                        Create
                                    </button>
                                    <button type="reset" class="btn btn-lg btn-secondary">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Portlet-->
                </div>
            </div>
        </div>
    </div>
@endsection