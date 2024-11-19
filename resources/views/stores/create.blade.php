@extends('layouts.app')
@section('title','Stores')
@section('content')

<form action="{{route('stores.store')}}" method="POST">
    @csrf
    <input name="name" >    
<select name="reservation_status">
    <option value="Open">Open</option>    
    <option value="Closed">Closed</option>    
</select>  
<select name="reservation_method">
    <option value="Online">Online</option>    
    <option value="Phone">Phone</option>    
</select>   
<select name="requires_products">
    <option value="Yes">Yes</option>    
    <option value="No">No</option>    
</select> 
<select name="activity_status">
    <option value="Active">Active</option>    
    <option value="Inactive">Inactive</option>    
</select>   
<select name="store_payment_method">
    <option value="Credit">Credit</option>    
    <option value="Cash">Cash</option>    
</select>   
<button type="submit">Save</button>
</form>
 

@endsection