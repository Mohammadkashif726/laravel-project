<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Laravel</title>
        @include('cms/partials/head')
    </head>
    <body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
        <div class="m-grid m-grid--hor m-grid--root m-page">
            @include('cms/partials/header')
            <!-- begin::Body -->
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
                @include('cms/partials/sidebar')
                <!-- END: Left Aside -->
                <div class="m-grid__item m-grid__item--fluid m-wrapper">
                    <!-- BEGIN: Subheader -->
                    <div class="m-subheader ">
                        <div class="d-flex align-items-center">
                            <div class="mr-auto">
                                <h3 class="m-subheader__title m-subheader__title--separator">
                                    Local Data
                                </h3>
                                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                                    <li class="m-nav__item m-nav__item--home">
                                        <a href="#" class="m-nav__link m-nav__link--icon">
                                            <i class="m-nav__link-icon la la-home"></i>
                                        </a>
                                    </li>
                                    <li class="m-nav__separator">
                                        -
                                    </li>
                                    <li class="m-nav__item">
                                        <a href="" class="m-nav__link">
                                        <span class="m-nav__link-text">
                                            Datatables
                                        </span>
                                        </a>
                                    </li>
                                    <li class="m-nav__separator">
                                        -
                                    </li>
                                    <li class="m-nav__item">
                                        <a href="" class="m-nav__link">
                                        <span class="m-nav__link-text">
                                            Base
                                        </span>
                                        </a>
                                    </li>
                                    <li class="m-nav__separator">
                                        -
                                    </li>
                                    <li class="m-nav__item">
                                        <a href="" class="m-nav__link">
                                        <span class="m-nav__link-text">
                                            Local Data
                                        </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                    <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                        <i class="la la-plus m--hide"></i>
                                        <i class="la la-ellipsis-h"></i>
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                        <div class="m-dropdown__inner">
                                            <div class="m-dropdown__body">
                                                <div class="m-dropdown__content">
                                                    <ul class="m-nav">
                                                        <li class="m-nav__section m-nav__section--first m--hide">
                                                        <span class="m-nav__section-text">
                                                            Quick Actions
                                                        </span>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                <span class="m-nav__link-text">
                                                                Activity
                                                            </span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                <span class="m-nav__link-text">
                                                                Messages
                                                            </span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                                <span class="m-nav__link-text">
                                                                FAQ
                                                            </span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                <span class="m-nav__link-text">
                                                                Support
                                                            </span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__separator m-nav__separator--fit"></li>
                                                        <li class="m-nav__item">
                                                            <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                                                Submit
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Subheader -->
                    <div class="m-content">
                        <div class="m-portlet m-portlet--mobile">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            Datatable initilized from HTML table
                                        </h3>
                                    </div>
                                </div>
                                <div class="m-portlet__head-tools">
                                    <ul class="m-portlet__nav">
                                        <li class="m-portlet__nav-item">
                                            <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                                <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                                    <i class="la la-ellipsis-h m--font-brand"></i>
                                                </a>
                                                <div class="m-dropdown__wrapper">
                                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                    <div class="m-dropdown__inner">
                                                        <div class="m-dropdown__body">
                                                            <div class="m-dropdown__content">
                                                                <ul class="m-nav">
                                                                    <li class="m-nav__section m-nav__section--first">
																		<span class="m-nav__section-text">
																			Quick Actions
																		</span>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                                            <span class="m-nav__link-text">
																				Create Post
																			</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                            <span class="m-nav__link-text">
																				Send Messages
																			</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-multimedia-2"></i>
                                                                            <span class="m-nav__link-text">
																				Upload File
																			</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__section">
																		<span class="m-nav__section-text">
																			Useful Links
																		</span>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                                            <span class="m-nav__link-text">
																				FAQ
																			</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                            <span class="m-nav__link-text">
																				Support
																			</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__separator m-nav__separator--fit m--hide"></li>
                                                                    <li class="m-nav__item m--hide">
                                                                        <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                                                            Submit
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <!--begin: Search Form -->
                                <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                                    <div class="row align-items-center">
                                        <div class="col-xl-8 order-2 order-xl-1">
                                            <div class="form-group m-form__group row align-items-center">
                                                <div class="col-md-4">
                                                    <div class="m-form__group m-form__group--inline">
                                                        <div class="m-form__label">
                                                            <label>
                                                                Status:
                                                            </label>
                                                        </div>
                                                        <div class="m-form__control">
                                                            <select class="form-control m-bootstrap-select" id="m_form_status">
                                                                <option value="">
                                                                    All
                                                                </option>
                                                                <option value="1">
                                                                    Pending
                                                                </option>
                                                                <option value="2">
                                                                    Delivered
                                                                </option>
                                                                <option value="3">
                                                                    Canceled
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="d-md-none m--margin-bottom-10"></div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="m-form__group m-form__group--inline">
                                                        <div class="m-form__label">
                                                            <label class="m-label m-label--single">
                                                                Type:
                                                            </label>
                                                        </div>
                                                        <div class="m-form__control">
                                                            <select class="form-control m-bootstrap-select" id="m_form_type">
                                                                <option value="">
                                                                    All
                                                                </option>
                                                                <option value="1">
                                                                    Online
                                                                </option>
                                                                <option value="2">
                                                                    Retail
                                                                </option>
                                                                <option value="3">
                                                                    Direct
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="d-md-none m--margin-bottom-10"></div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="m-input-icon m-input-icon--left">
                                                        <input type="text" class="form-control m-input" placeholder="Search..." id="generalSearch">
                                                        <span class="m-input-icon__icon m-input-icon__icon--left">
															<span>
																<i class="la la-search"></i>
															</span>
														</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 order-1 order-xl-2 m--align-right">
                                            <a href="#" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
												<span>
													<i class="la la-cart-plus"></i>
													<span>
														New Order
													</span>
												</span>
                                            </a>
                                            <div class="m-separator m-separator--dashed d-xl-none"></div>
                                        </div>
                                    </div>
                                </div>
                                <!--end: Search Form -->
                                <!--begin: Datatable -->
                                <table class="m-datatable" id="html_table" width="100%">
                                    <thead>
                                    <tr>
                                        <th title="Field #1">ID</th>
                                        <th title="Field #2">Email</th>
                                        <th title="Field #3">Phone</th>
                                        <th title="Field #4">Date</th>
                                        <th title="Field #5">Assigned roles</th>
                                        <th title="Field #5">Active</th>
                                        <th title="Field #6">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Muhammad Owais</td>
                                        <td>mowais.ac@gmail.com</td>
                                        <td></td>
                                        <td>+92 345 2975338</td>
                                        <td>12 September 2018</td>
                                        <td>Assigned roles</td>
                                        <td>Yes</td>
                                        <td>Action</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <!--end: Datatable -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end:: Body -->
            @include('cms.partials.footer')
        </div>
        <!-- end:: Page -->
        <!-- begin::Quick Sidebar -->
        <div id="m_quick_sidebar" class="m-quick-sidebar m-quick-sidebar--tabbed m-quick-sidebar--skin-light">
            <div class="m-quick-sidebar__content m--hide">
                    <span id="m_quick_sidebar_close" class="m-quick-sidebar__close">
                        <i class="la la-close"></i>
                    </span>
                <ul id="m_quick_sidebar_tabs" class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
                    <li class="nav-item m-tabs__item">
                        <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_quick_sidebar_tabs_messenger" role="tab">
                            Messages
                        </a>
                    </li>
                    <li class="nav-item m-tabs__item">
                        <a class="nav-link m-tabs__link" 		data-toggle="tab" href="#m_quick_sidebar_tabs_settings" role="tab">
                            Settings
                        </a>
                    </li>
                    <li class="nav-item m-tabs__item">
                        <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_quick_sidebar_tabs_logs" role="tab">
                            Logs
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active m-scrollable" id="m_quick_sidebar_tabs_messenger" role="tabpanel">
                        <div class="m-messenger m-messenger--message-arrow m-messenger--skin-light">
                            <div class="m-messenger__messages">
                                <div class="m-messenger__wrapper">
                                    <div class="m-messenger__message m-messenger__message--in">
                                        <div class="m-messenger__message-pic">
                                            <img src="{{asset('images/user3.jpg')}}" alt=""/>
                                        </div>
                                        <div class="m-messenger__message-body">
                                            <div class="m-messenger__message-arrow"></div>
                                            <div class="m-messenger__message-content">
                                                <div class="m-messenger__message-username">
                                                    Megan wrote
                                                </div>
                                                <div class="m-messenger__message-text">
                                                    Hi Bob. What time will be the meeting ?
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-messenger__wrapper">
                                    <div class="m-messenger__message m-messenger__message--out">
                                        <div class="m-messenger__message-body">
                                            <div class="m-messenger__message-arrow"></div>
                                            <div class="m-messenger__message-content">
                                                <div class="m-messenger__message-text">
                                                    Hi Megan. It's at 2.30PM
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-messenger__wrapper">
                                    <div class="m-messenger__message m-messenger__message--in">
                                        <div class="m-messenger__message-pic">
                                            <img src="{{asset('images/user3.jpg')}}" alt=""/>
                                        </div>
                                        <div class="m-messenger__message-body">
                                            <div class="m-messenger__message-arrow"></div>
                                            <div class="m-messenger__message-content">
                                                <div class="m-messenger__message-username">
                                                    Megan wrote
                                                </div>
                                                <div class="m-messenger__message-text">
                                                    Will the development team be joining ?
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-messenger__wrapper">
                                    <div class="m-messenger__message m-messenger__message--out">
                                        <div class="m-messenger__message-body">
                                            <div class="m-messenger__message-arrow"></div>
                                            <div class="m-messenger__message-content">
                                                <div class="m-messenger__message-text">
                                                    Yes sure. I invited them as well
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-messenger__datetime">
                                    2:30PM
                                </div>
                                <div class="m-messenger__wrapper">
                                    <div class="m-messenger__message m-messenger__message--in">
                                        <div class="m-messenger__message-pic">
                                            <img src="{{asset('images/user3.jpg')}}"  alt=""/>
                                        </div>
                                        <div class="m-messenger__message-body">
                                            <div class="m-messenger__message-arrow"></div>
                                            <div class="m-messenger__message-content">
                                                <div class="m-messenger__message-username">
                                                    Megan wrote
                                                </div>
                                                <div class="m-messenger__message-text">
                                                    Noted. For the Coca-Cola Mobile App project as well ?
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-messenger__wrapper">
                                    <div class="m-messenger__message m-messenger__message--out">
                                        <div class="m-messenger__message-body">
                                            <div class="m-messenger__message-arrow"></div>
                                            <div class="m-messenger__message-content">
                                                <div class="m-messenger__message-text">
                                                    Yes, sure.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-messenger__wrapper">
                                    <div class="m-messenger__message m-messenger__message--out">
                                        <div class="m-messenger__message-body">
                                            <div class="m-messenger__message-arrow"></div>
                                            <div class="m-messenger__message-content">
                                                <div class="m-messenger__message-text">
                                                    Please also prepare the quotation for the Loop CRM project as well.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-messenger__datetime">
                                    3:15PM
                                </div>
                                <div class="m-messenger__wrapper">
                                    <div class="m-messenger__message m-messenger__message--in">
                                        <div class="m-messenger__message-no-pic m--bg-fill-danger">
                                                <span>
                                                    M
                                                </span>
                                        </div>
                                        <div class="m-messenger__message-body">
                                            <div class="m-messenger__message-arrow"></div>
                                            <div class="m-messenger__message-content">
                                                <div class="m-messenger__message-username">
                                                    Megan wrote
                                                </div>
                                                <div class="m-messenger__message-text">
                                                    Noted. I will prepare it.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-messenger__wrapper">
                                    <div class="m-messenger__message m-messenger__message--out">
                                        <div class="m-messenger__message-body">
                                            <div class="m-messenger__message-arrow"></div>
                                            <div class="m-messenger__message-content">
                                                <div class="m-messenger__message-text">
                                                    Thanks Megan. I will see you later.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-messenger__wrapper">
                                    <div class="m-messenger__message m-messenger__message--in">
                                        <div class="m-messenger__message-pic">
                                            <img src="{{asset('images/user3.jpg')}}"  alt=""/>
                                        </div>
                                        <div class="m-messenger__message-body">
                                            <div class="m-messenger__message-arrow"></div>
                                            <div class="m-messenger__message-content">
                                                <div class="m-messenger__message-username">
                                                    Megan wrote
                                                </div>
                                                <div class="m-messenger__message-text">
                                                    Sure. See you in the meeting soon.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="m-messenger__seperator"></div>
                            <div class="m-messenger__form">
                                <div class="m-messenger__form-controls">
                                    <input type="text" name="" placeholder="Type here..." class="m-messenger__form-input">
                                </div>
                                <div class="m-messenger__form-tools">
                                    <a href="" class="m-messenger__form-attachment">
                                        <i class="la la-paperclip"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane  m-scrollable" id="m_quick_sidebar_tabs_settings" role="tabpanel">
                        <div class="m-list-settings">
                            <div class="m-list-settings__group">
                                <div class="m-list-settings__heading">
                                    General Settings
                                </div>
                                <div class="m-list-settings__item">
                                        <span class="m-list-settings__item-label">
                                            Email Notifications
                                        </span>
                                    <span class="m-list-settings__item-control">
                                            <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                                <label>
                                                    <input type="checkbox" checked="checked" name="">
                                                    <span></span>
                                                </label>
                                            </span>
                                        </span>
                                </div>
                                <div class="m-list-settings__item">
                                        <span class="m-list-settings__item-label">
                                            Site Tracking
                                        </span>
                                    <span class="m-list-settings__item-control">
                                            <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                                <label>
                                                    <input type="checkbox" name="">
                                                    <span></span>
                                                </label>
                                            </span>
                                        </span>
                                </div>
                                <div class="m-list-settings__item">
                                        <span class="m-list-settings__item-label">
                                            SMS Alerts
                                        </span>
                                    <span class="m-list-settings__item-control">
                                            <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                                <label>
                                                    <input type="checkbox" name="">
                                                    <span></span>
                                                </label>
                                            </span>
                                        </span>
                                </div>
                                <div class="m-list-settings__item">
                                        <span class="m-list-settings__item-label">
                                            Backup Storage
                                        </span>
                                    <span class="m-list-settings__item-control">
                                            <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                                <label>
                                                    <input type="checkbox" name="">
                                                    <span></span>
                                                </label>
                                            </span>
                                        </span>
                                </div>
                                <div class="m-list-settings__item">
                                        <span class="m-list-settings__item-label">
                                            Audit Logs
                                        </span>
                                    <span class="m-list-settings__item-control">
                                            <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                                <label>
                                                    <input type="checkbox" checked="checked" name="">
                                                    <span></span>
                                                </label>
                                            </span>
                                        </span>
                                </div>
                            </div>
                            <div class="m-list-settings__group">
                                <div class="m-list-settings__heading">
                                    System Settings
                                </div>
                                <div class="m-list-settings__item">
                                        <span class="m-list-settings__item-label">
                                            System Logs
                                        </span>
                                    <span class="m-list-settings__item-control">
                                            <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                                <label>
                                                    <input type="checkbox" name="">
                                                    <span></span>
                                                </label>
                                            </span>
                                        </span>
                                </div>
                                <div class="m-list-settings__item">
                                        <span class="m-list-settings__item-label">
                                            Error Reporting
                                        </span>
                                    <span class="m-list-settings__item-control">
                                            <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                                <label>
                                                    <input type="checkbox" name="">
                                                    <span></span>
                                                </label>
                                            </span>
                                        </span>
                                </div>
                                <div class="m-list-settings__item">
                                        <span class="m-list-settings__item-label">
                                            Applications Logs
                                        </span>
                                    <span class="m-list-settings__item-control">
                                            <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                                <label>
                                                    <input type="checkbox" name="">
                                                    <span></span>
                                                </label>
                                            </span>
                                        </span>
                                </div>
                                <div class="m-list-settings__item">
                                        <span class="m-list-settings__item-label">
                                            Backup Servers
                                        </span>
                                    <span class="m-list-settings__item-control">
                                            <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                                <label>
                                                    <input type="checkbox" checked="checked" name="">
                                                    <span></span>
                                                </label>
                                            </span>
                                        </span>
                                </div>
                                <div class="m-list-settings__item">
                                        <span class="m-list-settings__item-label">
                                            Audit Logs
                                        </span>
                                    <span class="m-list-settings__item-control">
                                            <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                                                <label>
                                                    <input type="checkbox" name="">
                                                    <span></span>
                                                </label>
                                            </span>
                                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane  m-scrollable" id="m_quick_sidebar_tabs_logs" role="tabpanel">
                        <div class="m-list-timeline">
                            <div class="m-list-timeline__group">
                                <div class="m-list-timeline__heading">
                                    System Logs
                                </div>
                                <div class="m-list-timeline__items">
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                        <a href="" class="m-list-timeline__text">
                                            12 new users registered
                                            <span class="m-badge m-badge--warning m-badge--wide">
                                                    important
                                                </span>
                                        </a>
                                        <span class="m-list-timeline__time">
                                                Just now
                                            </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                        <a href="" class="m-list-timeline__text">
                                            System shutdown
                                        </a>
                                        <span class="m-list-timeline__time">
                                                11 mins
                                            </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
                                        <a href="" class="m-list-timeline__text">
                                            New invoice received
                                        </a>
                                        <span class="m-list-timeline__time">
                                                20 mins
                                            </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
                                        <a href="" class="m-list-timeline__text">
                                            Database overloaded 89%
                                            <span class="m-badge m-badge--success m-badge--wide">
                                                    resolved
                                                </span>
                                        </a>
                                        <span class="m-list-timeline__time">
                                                1 hr
                                            </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                        <a href="" class="m-list-timeline__text">
                                            System error
                                        </a>
                                        <span class="m-list-timeline__time">
                                                2 hrs
                                            </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                        <a href="" class="m-list-timeline__text">
                                            Production server down
                                            <span class="m-badge m-badge--danger m-badge--wide">
                                                    pending
                                                </span>
                                        </a>
                                        <span class="m-list-timeline__time">
                                                3 hrs
                                            </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                        <a href="" class="m-list-timeline__text">
                                            Production server up
                                        </a>
                                        <span class="m-list-timeline__time">
                                                5 hrs
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="m-list-timeline__group">
                                <div class="m-list-timeline__heading">
                                    Applications Logs
                                </div>
                                <div class="m-list-timeline__items">
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                        <a href="" class="m-list-timeline__text">
                                            New order received
                                            <span class="m-badge m-badge--info m-badge--wide">
                                                    urgent
                                                </span>
                                        </a>
                                        <span class="m-list-timeline__time">
                                                7 hrs
                                            </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                        <a href="" class="m-list-timeline__text">
                                            12 new users registered
                                        </a>
                                        <span class="m-list-timeline__time">
                                                Just now
                                            </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                        <a href="" class="m-list-timeline__text">
                                            System shutdown
                                        </a>
                                        <span class="m-list-timeline__time">
                                                11 mins
                                            </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
                                        <a href="" class="m-list-timeline__text">
                                            New invoices received
                                        </a>
                                        <span class="m-list-timeline__time">
                                                20 mins
                                            </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
                                        <a href="" class="m-list-timeline__text">
                                            Database overloaded 89%
                                        </a>
                                        <span class="m-list-timeline__time">
                                                1 hr
                                            </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                        <a href="" class="m-list-timeline__text">
                                            System error
                                            <span class="m-badge m-badge--info m-badge--wide">
                                                    pending
                                                </span>
                                        </a>
                                        <span class="m-list-timeline__time">
                                                2 hrs
                                            </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                        <a href="" class="m-list-timeline__text">
                                            Production server down
                                        </a>
                                        <span class="m-list-timeline__time">
                                                3 hrs
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="m-list-timeline__group">
                                <div class="m-list-timeline__heading">
                                    Server Logs
                                </div>
                                <div class="m-list-timeline__items">
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                        <a href="" class="m-list-timeline__text">
                                            Production server up
                                        </a>
                                        <span class="m-list-timeline__time">
                                                5 hrs
                                            </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                        <a href="" class="m-list-timeline__text">
                                            New order received
                                        </a>
                                        <span class="m-list-timeline__time">
                                                7 hrs
                                            </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                        <a href="" class="m-list-timeline__text">
                                            12 new users registered
                                        </a>
                                        <span class="m-list-timeline__time">
                                                Just now
                                            </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                        <a href="" class="m-list-timeline__text">
                                            System shutdown
                                        </a>
                                        <span class="m-list-timeline__time">
                                                11 mins
                                            </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
                                        <a href="" class="m-list-timeline__text">
                                            New invoice received
                                        </a>
                                        <span class="m-list-timeline__time">
                                                20 mins
                                            </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
                                        <a href="" class="m-list-timeline__text">
                                            Database overloaded 89%
                                        </a>
                                        <span class="m-list-timeline__time">
                                                1 hr
                                            </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                        <a href="" class="m-list-timeline__text">
                                            System error
                                        </a>
                                        <span class="m-list-timeline__time">
                                                2 hrs
                                            </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                        <a href="" class="m-list-timeline__text">
                                            Production server down
                                        </a>
                                        <span class="m-list-timeline__time">
                                                3 hrs
                                            </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                        <a href="" class="m-list-timeline__text">
                                            Production server up
                                        </a>
                                        <span class="m-list-timeline__time">
                                                5 hrs
                                            </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                        <a href="" class="m-list-timeline__text">
                                            New order received
                                        </a>
                                        <span class="m-list-timeline__time">
                                                1117 hrs
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end::Quick Sidebar -->
        <!-- begin::Scroll Top -->
        <div id="m_scroll_top" class="m-scroll-top">
            <i class="la la-arrow-up"></i>
        </div>
        <!-- end::Scroll Top -->		    <!-- begin::Quick Nav -->
        <ul class="m-nav-sticky" style="margin-top: 30px;">
            <!--
                <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Showcase" data-placement="left">
                    <a href="">
                        <i class="la la-eye"></i>
                    </a>
                </li>
                <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Pre-sale Chat" data-placement="left">
                    <a href="" >
                        <i class="la la-comments-o"></i>
                    </a>
                </li>
                -->
            <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Purchase" data-placement="left">
                <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" target="_blank">
                    <i class="la la-cart-arrow-down"></i>
                </a>
            </li>
            <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Documentation" data-placement="left">
                <a href="https://keenthemes.com/metronic/documentation.html" target="_blank">
                    <i class="la la-code-fork"></i>
                </a>
            </li>
            <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Support" data-placement="left">
                <a href="https://keenthemes.com/forums/forum/support/metronic5/" target="_blank">
                    <i class="la la-life-ring"></i>
                </a>
            </li>
        </ul>



        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
        </div>

        @include('cms/partials/footerScripts');
        <script src="{{URL::asset('js/datatables/base/html-table.js')}}" type="text/javascript"></script>
    </body>
</html>
