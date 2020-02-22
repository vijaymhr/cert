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
                            <div class="col-sm">
                                <div class="form-group">
                
                                    <div class="form-line">
                                        
                                        {{Form::label('iso_9001', 'ISO 9001')}}
                                        {{Form::textarea('iso_9001',$iso->iso_9001,['class'=>'form-control', 'placeholder'=>'ISO 9001'])}}
                
                
                                        <script>
                                            CKEDITOR.replace( 'iso_9001' );
                                    </script>
                                    </div>
                                </div>
                                                </div>

                                                <div class="col-sm">
                                                    <div class="form-group">
                                    
                                                        <div class="form-line">
                                                            
                                                            {{Form::label('iso_45001', 'ISO 45001')}}
                                                            {{Form::textarea('iso_45001',$iso->iso_45001,['class'=>'form-control', 'placeholder'=>'ISO 45001'])}}
                                    
                                    
                                                            <script>
                                                                CKEDITOR.replace( 'iso_45001' );
                                                        </script>
                                                        </div>
                                                    </div>
                                                                    </div>

                                                

                                
                                                        </div>

                                                        <div class="col-sm">
                                                            <div class="form-group">
                                        
                                                                <div class="form-line">
                                                                    
                                                                    {{Form::label('iso_14001_1', ' ISO 14001 EM')}}
                                                                    {{Form::textarea('iso_14001_1',$iso->iso_14001_1,['class'=>'form-control', 'placeholder'=>'ISO 14001 EM', ])}}
                                                                    <script>
                                                                        CKEDITOR.replace( 'iso_14001_1' );
                                                                </script>
                                                                </div>
                                                            </div>
                                                                            </div>

                                                                      <div class="col-sm">
                                                                                <div class="form-group">
                                                            
                                                                                    <div class="form-line">
                                                                                        
                                                                                        {{Form::label('iso_14001_2', ' ISO 14001 BCP')}}
                                                                                        {{Form::textarea('iso_14001_2',$iso->iso_14001_2,['class'=>'form-control', 'placeholder'=>'ISO 14001 BCP', ])}}
                                                                                        <script>
                                                                                            CKEDITOR.replace( 'iso_14001_2' );
                                                                                    </script>
                                                                                    </div>
                                                                                </div>                    
                                                                                </div>


                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                
                                                                                        <div class="form-line">
                                                                                            
                                                                                            {{Form::label('iso_14001_3', ' ISO 14001 IRM')}}
                                                                                            {{Form::textarea('iso_14001_3',$iso->iso_14001_3,['class'=>'form-control', 'placeholder'=>'ISO 14001 IRM', ])}}
                                                                                            <script>
                                                                                                CKEDITOR.replace( 'iso_14001_3' );
                                                                                        </script>
                                                                                        </div>
                                                                                    </div>                    
                                                                                    </div>

                                   
                            {{Form::hidden('_method', 'PUT')}}
                            {{Form::button('<i class="material-icons">save</i> <span>Update Data</span>', ['type'=>'submit','class'=>'btn btn-success waves-effect'])}}

                    {!! Form::close() !!}
                        </div><!--clearfix close div for col-sm-4-->


                            {{-- <div class="form-group">

                                {{Form::label('aboutImage', 'About Us Cover Image')}}

                                {{Form::file(('aboutImage'))}}
                            </div> --}}





                </div>
                      
                </div>
            </div>
        </div>
        <!-- #END# Headings -->
        
    </div>
</section>

@endsection
