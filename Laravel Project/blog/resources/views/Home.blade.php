@if($LoginStatusKey==true)

<h1>You Are Loged In</h1>

@elseif($LoginStatusKey==false)

<h1>You Are Not Loged In</h1>

@else
<h1>Login Status Not Found</h1>

@endif





