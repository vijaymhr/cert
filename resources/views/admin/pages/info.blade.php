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
                        Address Info
                    </h2>


                                            <ul class="header-dropdown m-r--5">
                                                    <li>
                                                    <a href="#"><i class="material-icons">arrow_back</i></a>
                                                        </li>
                                               
                                            </ul>
                                       
                  
                </div>

              
                        
                <div class="body">

                        <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">Address</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Email</th>


                                  </tr>
                                </thead>
                                <tbody>

                                    @foreach ($infos as $info)
                                        
                                  <tr>
                                    <td>{{$info->address}}</td>
                                     <td>{{$info->contact}}</td>
                                     <td>{{$info->email}}</td>
                                  </tr>
                                  @endforeach

                                </tbody>
                              </table>


<br>
                    
                 
        </div>

            <hr>
            <div class="header">

            <a href="/info/{{$info->id}}/edit" class="btn btn-success waves-effect"> 
                <i class="material-icons">mode_edit</i>
                <span>Edit Address Info</span>
            </a>

           
               
            </div>
            
            
            </div>
        </div>
    </div>
    <!-- #END# Headings -->
    
</div>
</section>

@endsection