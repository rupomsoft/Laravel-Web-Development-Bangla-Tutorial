


<table>



@foreach($selectKey as $item)


    <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->class}}</td>
        <td>{{$item->roll}}</td>
    </tr>


@endforeach

</table>
