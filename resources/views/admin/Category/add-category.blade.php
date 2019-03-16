@extends('admin.master')

@section('content')

    </br>
     <div class="row">
         <div class="col-sm-12">
             <div class="well">

                 @if($message = Session::get('message'))
                     <h2 class="text-center text-success">{{ $message }}</h2>
                 @endif

                 <form  class="form-horizontal" action="{{url('/Category/new-category')}}" method="post">
                     {{ csrf_field() }}
                     <div class="form-group">
                         <label class="col-sm-3">Category Name</label>
                         <div class="col-sm-9">
                             <input type="text" name="category_name" class="form-control"/>
                         </div>

                     </div>

                     <div class="form-group">
                         <label class="col-sm-3">Category Description</label>
                         <div class="col-sm-9">
                             <textarea name="category_description" class="form-control"></textarea>
                         </div>

                     </div>

                     <div class="form-group">
                         <label class="col-sm-3">Publication Status</label>
                         <div class="col-sm-9">
                             <select class="form-control" name="publication_status">
                                 <option value="1">Published</option>
                                 <option value="0">Unpublished</option>
                             </select>
                         </div>
                     </div>

                         <div class="form-group">
                             <div class="col-sm-9 col-sm-offset-3">
                                 <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Category Info "/>

                             </div>

                         </div>

                     </form>

                 </div>

             </div>

         </div>

     </div>

@endsection