{{dd($fields)}}
<form action="profiles" method="post">
    
    @foreach ($fields as $field)
        @include ( "crud.common.input-field", [ 'field' => $field ] )
    @endforeach
    
</form>