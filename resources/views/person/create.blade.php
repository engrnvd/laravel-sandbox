<div class="panel-group col-md-6 col-sm-12" id="accordion" style="padding-left: 0">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                    <i class="fa fa-plus"></i>
                    Add a New Person
                </a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse">
            <div class="panel-body">
                <form action="/person" method="post" id="create-person-form">

                    {{ csrf_field() }}

                    {!! \Nvd\Crud\Form::input('name','text')->show() !!}

                    {!! \Nvd\Crud\Form::input('dob','date')->show() !!}

                    {!! \Nvd\Crud\Form::textarea( 'about' )->show() !!}

                    {!! \Nvd\Crud\Form::select( 'is_a_good_person', [ 'Yes', 'No' ] )->show() !!}

                    {!! \Nvd\Crud\Form::select( 'gender', [ 'Male', 'Female' ] )->show() !!}

                    {!! \Nvd\Crud\Form::input('image','text')->show() !!}

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
    </div>
</div>
