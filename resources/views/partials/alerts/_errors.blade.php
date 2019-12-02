@if($errors->any())
    @foreach($errors->all() as $error)

        <div class="row">
            <div class="container">
                <div class="col l6 offset-l3">
                    <div class="card-alert card red lighten-5">
                        <div class="card-content red-text">
                            <p>ERROR : {{ $error }}</p>
                        </div>
                        <button type="button" class="close red-text" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    @endforeach
@endif


