@extends('layouts.app')

@section('content')

<div class="bg-white p-4 w-2/3 mx-auto">

<form action="/pictures" method="POST" enctype="multipart/form-data">
@csrf
<label for="dog_name">Dog Name:</label>
<br>
<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="dog_name" auto-complete>
<br>
<label for="file">Upload your image:</label>
<br>
<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="file" name="file">
<br>
<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" >Submit</button>
</form>    
</div>

@endsection