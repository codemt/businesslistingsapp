@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
                <div class="col-md-8 col-md-offset-2">
            
                        <div class="panel panel-default">
                                <div class="panel-heading"> </div>
            
            
                        <div class="panel-body">
            
            
                                <form action="{{ route('listings/create') }}" method="post">
                                {{ csrf_field() }}
                                   <label for=""> Enter Business Name </label> 
                                   <input type="text" name="name" id=""> 
                                   <br>
                                   <label for=""> Enter Website  </label> 
                                   <input type="text" name="website" id=""> 
                                   <br>
                                   <label for=""> Enter Email </label>
                                   <input type="text" name="email" id="">
                                   <br>
                                   <label for=""> Enter Phone </label>
                                   <input type="text" name="phone" id="">
                                   <br>
                                   <label for=""> Enter Address </label>
                                   <input type="text" name="address" id="">
                                   <br>
                                   <label for=""> Enter Bio </label>
                                   <input type="text" name="bio" id="">
                                    <br>
                                    <button type="submit" class="btn btn-primary">Submit</button>
            
                            </form>
                        </div>
                        </div>
            
            
            
                </div>
            
            



</div>
</div>
@endsection
