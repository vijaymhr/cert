@extends('/admin/layouts.app')

@section('content')

<section class="content">
    <div class="container-fluid">
        
        
        <!-- Headings -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Edit About Us
                        </h2>
                        <ul class="header-dropdown m-r--5">
                                <li>
                                <a href="/about"><i class="material-icons">arrow_back</i></a>
                                    </li>
                           
                        </ul>
                    </div>

                    @include('inc.messages')

                            
                    <div class="body">

                            {!! Form::open(['action' => ['AboutController@update', $about->id], 'method'=> 'POST', 'enctype'=>'multipart/form-data']) !!}
                            <div class="row clearfix">
                                    <div class="col-sm">
                    <div class="form-group">

                        <div class="form-line">
                            
                            {{Form::label('author', 'Author')}}
                            {{Form::textarea('author',$about->author,['class'=>'form-control', 'placeholder'=>'Author'])}}


                            <script>
                                CKEDITOR.replace( 'author' );
                        </script>
                        </div>
                    </div>
                                    </div>


                                    <div class="col-sm">
                                            <div class="form-group">
                        
                                                <div class="form-line">
                                                    
                                                    {{Form::label('ourclient', 'Our Client')}}
                                                    {{Form::textarea('ourclient',$about->ourclient,['class'=>'form-control', 'placeholder'=>'Our Client', ])}}
                                                    <script>
                                                        CKEDITOR.replace( 'ourclient' );
                                                </script>
                                                </div>
                                            </div>
                                                            </div>



                                                            

                            </div><!--clearfix close div for col-sm-4-->


                                {{-- <div class="form-group">

                                    {{Form::label('aboutImage', 'About Us Cover Image')}}

                                    {{Form::file(('aboutImage'))}}
                                </div> --}}


                                {{Form::hidden('_method', 'PUT')}}
                                {{Form::button('<i class="material-icons">save</i> <span>Update Data</span>', ['type'=>'submit','class'=>'btn btn-success waves-effect'])}}

                        {!! Form::close() !!}



                    </div>
                      
                </div>
            </div>
        </div>
        <!-- #END# Headings -->
        
    </div>
</section>

@endsection
