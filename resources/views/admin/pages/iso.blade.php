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
                           ISO Standards
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

                 


                         
                        <div class="body">
    
                            <table class="table">
                                    <thead>
                                      <tr>
                                        <th scope="col">ISO 9001</th>
                                        <th scope="col">ISO 45001</th>
                                        <th scope="col">ISO 14001-EM</th>
                                        <th scope="col">ISO 14001-BCP</th>
                                        <th scope="col">ISO 14001-IRM</th>



                                      </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($isos as $iso)
                                            
                                      <tr>
                                      <td>{!!$iso->iso_9001!!}</td>
                                        <td>{!!$iso->iso_45001!!}</td>
                                         <td>{!!$iso->iso_14001_1!!}</td>
                                         <td>{!!$iso->iso_14001_2!!}</td>
                                         <td>{!!$iso->iso_14001_3!!}</td>

                                      </tr>
                                      @endforeach

                                    </tbody>
                                    <div class="col-md-4 col sm-4">

                                        <a href="/iso/{{$iso->id}}/edit" class="btn btn-success waves-effect"> 
                                            <i class="material-icons">mode_edit</i>
                                            <span>Edit ISO</span>
                                        </a>
                                    
                                    </div> 
                                  </table>


<br>
          
             
                     
            </div>



                        {{-- @endforeach --}}

                        
                </div>
            </div>
        </div>
        <!-- #END# Headings -->
        
    </div>
</section>



@endsection