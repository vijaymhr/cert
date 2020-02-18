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
                            Edit ISO Details
                        </h2>
                        <ul class="header-dropdown m-r--5">
                                <li>
                                <a href="/iso"><i class="material-icons">arrow_back</i></a>
                                    </li>
                           
                        </ul>
                    </div>

                    @include('inc.messages')

                            
                    <div class="body">

                            {!! Form::open(['action' => ['IsoController@update', $iso->id], 'method'=> 'POST', 'enctype'=>'multipart/form-data']) !!}
                            <div class="row clearfix">
                                    <div class="col-sm-4">
                    <div class="form-group">

                        <div class="form-line">
                            
                            {{Form::label('title1', 'ISO Type')}}
                            {{Form::text('title1',$iso->title1,['class'=>'form-control', 'placeholder'=>'ISO 9001'])}}

                        </div>
                    </div>
                                    </div>


                                    <div class="col-sm-4">
                                            <div class="form-group">
                        
                                                <div class="form-line">
                                                    
                                                    {{Form::label('title2', 'ISO Title')}}
                                                    {{Form::text('title2',$iso->title2,['class'=>'form-control', 'placeholder'=>'ISO Title'])}}
                        
                                                </div>
                                            </div>
                                                            </div>



                                                            

                            </div><!--clearfix close div for col-sm-4-->

                            <div class="form-group">
                        
                                    <div class="form-line">
                                        
                                        {{Form::label('desc', 'ISO Description')}}
                                        {{Form::textarea('desc',$iso->desc,['class'=>'form-control', 'placeholder'=>'ISO Description'])}}
            
                                    </div>

                                    <script>
                                        CKEDITOR.replace( 'desc' );
                                </script>
                                </div>


                                {{-- <div class="form-group">

                                    {{Form::label('cover_image', 'Cover Image')}}

                                    {{Form::file(('cover_image'))}}
                                </div> --}}


                                {{Form::hidden('_method', 'PUT')}}
                                {{Form::button('<i class="material-icons">save</i> <span>Update Food</span>', ['type'=>'submit','class'=>'btn btn-success waves-effect'])}}

                        {!! Form::close() !!}



                    </div>
                      
                </div>
            </div>
        </div>
        <!-- #END# Headings -->
        
    </div>
</section>

@endsection
