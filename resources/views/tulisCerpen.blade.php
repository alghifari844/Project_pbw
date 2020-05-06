@extends('body')
@section('content')
<div class="main_content">
<div class="info">
<form action = "/project/input" method = "POST">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<table>
<tr>
<td>Judul</td>
<td><input type='text' name='judul' /></td>
<tr>
<td>isi cerpen</td>
<td><textarea name="deskripsi" rows="20" cols="100">
</textarea>
</td>
</tr>
<tr>
<td colspan = '2'>
<input type = 'submit' value = "submit cerpen"/>
</td>
</tr>
</table>
</form>
</div>
</div>
@endsection