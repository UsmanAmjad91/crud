<div>
   
<table border="1">
   
<tr>
    <td>User ID</td>
    <td>Username</td>
    <td>Email</td>
    <td>Password</td>
    
</tr>
@foreach ($members as $member)
<tr>
    <td>{{$member['id']}}</td>
    <td>{{$member['username']}}</td>
    <td>{{$member['email']}}</td>
  <td>{{$member['password']}}</td>
   
</tr>
    
@endforeach

</table>

</div>
{{-- <span>
    {{$members->links()}} 
</span> --}}


<style>
    div{
        display: flex;
        justify-content: center;
        align-content: center;
        text-align: center;
        padding-top:2%; 
    }
    h1{
        display: flex;
        text-align: center;
        justify-content: center;
        align-content: center;
    }
    .w-5{
        display:none;
    }
</style>