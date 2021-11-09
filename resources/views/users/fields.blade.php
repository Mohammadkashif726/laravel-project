
<form class="m-form m-form--fit m-form--label-align-right">
    <div class="m-portlet__body">

        <!-- First Name Field -->
        <div class="form-group m-form__group">
                {!! Form::label('first_name', 'First Name:') !!}
                {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'Ex: John']) !!}
        </div>

        <!-- Last Name Field -->
        <div class="form-group m-form__group">
            {!! Form::label('last_name', 'Last Name:') !!}
            {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Ex: Doe']) !!}
        </div>

        <!-- Email Field -->
        <div class="form-group m-form__group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'mail@domain.com']) !!}
        </div>

        <!-- Password Field -->
        <div class="form-group m-form__group">
            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>

        <!-- Email Field -->
        <div class="form-group m-form__group">
            {{ Form::hidden('role_id', 4) }}
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

            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            <a href="{!! route('users.index') !!}" class="btn btn-default">Cancel</a>
        </div>
    </div>
</form>
