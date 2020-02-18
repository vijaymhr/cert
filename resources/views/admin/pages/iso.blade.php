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
                           ISO Details
                        </h2>
                        <ul class="header-dropdown m-r--5">
                               


                            <li class="dropdown">

                                   
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">

                                        
                                    <li><a href="/iso/create">Add ISO</a></li>
                                   
                                </ul>
                            </li>
                            
                        </ul>
                    </div>
                    @include('inc.messages')

                    @if(count($isos) > 0 )
                        @foreach ($isos as $iso)


                    <div class="body">

                        <div class="row">
                            <div class="col-md-4 col sm-4">
                                <img style ="width: 80%" height="50%" src="/storage/cover_images/{{$iso->cover_image}}">

                            </div>
                            <div class="col-md-8 col sm-8">

                    <h3>
                         {{$iso -> title1}}
                    </h3>
                    <small>{{$iso->title2}}</small>
                    <br>
                    <small>{!!$iso->desc!!}</small>
                    <br>


                    <small>Added on: {{$iso->created_at}}</small>
                        

                            </div>


                            <div class="col-md-4 col sm-4">

                                <a href="/iso/{{$iso->id}}/edit" class="btn btn-success waves-effect"> 
                                    <i class="material-icons">mode_edit</i>
                                    <span>Edit ISO</span>
                                </a>
                            
                            
                            
                            
                                {!!Form::open(['action'=>['IsoController@destroy', $iso->id],'method'=>'POST', 'class'=>'pull-right'])!!}
                            
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::button('<i class="material-icons">delete_forever</i> <span>Delete ISO</span>', ['type'=>'submit','class'=>'btn btn-warning waves-effect', 'onclick'=>'return validateForm(this)'])}}
                            
                            {!! Form::close() !!}
                            
                            <script>
                                       
                            
                                         function validateForm() {
                                           
                                            if ( confirm("Are you sure you wish to delete?") == false ) {
                                                return false ;
                                            } else {
                                                return true ;
                                            } 
                                               }
                            
                                   </script>
                            </div>




                    </div>
                    </div>
                        @endforeach

                        <div class="header">{{$isos->links()}}</div>
                    @else

                        <p> Nothing is here. Try adding Something.</p>
                    @endif
                    
                </div>
            </div>
        </div>
        <!-- #END# Headings -->
        
    </div>
</section>



@endsection