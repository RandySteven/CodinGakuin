@extends('layouts.app')

@section('content')
<form action="" method="post">
    @csrf
    <input type="hidden" name="course_id" value="course_id">
</form>
@endsection
