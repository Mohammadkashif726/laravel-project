@extends('cms.layouts.app')
@section('content')
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">
                        Edit Tags
                    </h3>
                    <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                        <li class="m-nav__item m-nav__item--home"><a href="#" class="m-nav__link m-nav__link--icon"><i class="m-nav__link-icon la la-home"></i></a></li>
                        <li class="m-nav__item">
                            <a href="{{route('tags.index')}}" class="m-nav__link"><span class="m-nav__link-text">View all tags</span></a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link"><span class="m-nav__link-text">Edit <strong>{{$blogTags->title}}</strong></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END: Subheader -->
        <div class="m-content">
            <div class="row">
                <div class="col-md-12">

                    @if(session()->has('message'))
                        <div class="alert alert-success alert-dismissible fade show">{{session()->get('message')}}</div>
                    @endif
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
                        <form action="{{route('tags.update', $blogTags->id)}}" method="post" class="m-form m-form--fit m-form--label-align-right">
                            @csrf
                            @method('put')
                            <div class="m-portlet__body">
                                <div class="form-group m-form__group">
                                    <label>Title</label>
                                    <input type="text" class="form-control m-input" name="title" id="title" value="{{$blogTags->title}}" aria-describedby="emailHelp" placeholder="Muhammad Owais">
                                </div>

                                <div class="form-group m-form__group">
                                    <label>slug</label>
                                    <input type="text" class="form-control m-input"
                                           name="slug"
                                           id="slug"
                                           value="{{$blogTags->slug}}"
                                           aria-describedby="emailHelp"
                                           placeholder="Enter slug"
                                           onkeyup="this.value=this.value.toLowerCase().replace(/ /g,'-').replace(/[^\w-]+/g,'');"
                                    >
                                </div>

                                <div class="form-group m-form__group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="description" id="description" placeholder="Enter Description">{{$blogTags->description}}</textarea>
                                </div>
                            </div>
                            <div class="m-portlet__foot m-portlet__foot--fit">
                                <div class="m-form__actions">
                                    <a href="{{route('tags.create')}}" class="btn btn-lg btn-secondary">
                                        Create new
                                    </a>
                                    <button type="submit" class="btn btn-lg btn-primary">
                                        Update
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