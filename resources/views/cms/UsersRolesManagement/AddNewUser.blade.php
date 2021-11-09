<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Laravel</title>
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
                                    <form class="m-form m-form--fit m-form--label-align-right">
                                        <div class="m-portlet__body">
                                            <div class="form-group m-form__group">
                                                <label for="exampleInputEmail1">Full Name</label>
                                                <input type="email" class="form-control m-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Muhammad Owais">
                                            </div>

                                            <div class="form-group m-form__group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control m-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="mail@domain.com">
                                                <span class="m-form__help">We'll never share your email with anyone else.</span>
                                            </div>
                                            <div class="form-group m-form__group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control m-input" id="exampleInputPassword1" placeholder="Password">
                                                <span class="m-form__help">Click here to generate random password. <a href="https://passwordsgenerator.net/" target="_blank">Generate password</a></span>
                                            </div>
                                            <div class="m-form__group form-group">
                                                <label for="">
                                                    Assign roles
                                                </label>
                                                <div class="m-checkbox-list">
                                                    <label class="m-checkbox m-checkbox--bold">
                                                        <input type="checkbox">
                                                        Admin
                                                        <span></span>
                                                    </label>
                                                    <label class="m-checkbox m-checkbox--bold m-checkbox--state-success">
                                                        <input type="checkbox" checked="checked">
                                                        Blog manager
                                                        <span></span>
                                                    </label>
                                                    <label class="m-checkbox m-checkbox--bold m-checkbox--state-success">
                                                        <input type="checkbox" checked="checked">
                                                        Marketing manager
                                                        <span></span>
                                                    </label>
                                                    <label class="m-checkbox m-checkbox--bold m-checkbox--state-success">
                                                        <input type="checkbox" checked="checked">
                                                        SEO Manager
                                                        <span></span>
                                                    </label>
                                                    <label class="m-checkbox m-checkbox--bold m-checkbox--disabled">
                                                        <input type="checkbox" disabled="disabled">
                                                        Students
                                                        <span></span>
                                                    </label>
                                                    <label class="m-checkbox m-checkbox--bold m-checkbox--disabled">
                                                        <input type="checkbox" disabled="disabled">
                                                        Tutor
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-portlet__foot m-portlet__foot--fit">
                                            <div class="m-form__actions">
                                                <button type="reset" class="btn btn-primary">
                                                    Submit
                                                </button>
                                                <button type="reset" class="btn btn-secondary">
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
                        {{--<a href="{{ url('/home') }}">Home</a>--}}
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
