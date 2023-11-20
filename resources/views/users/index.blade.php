@extends('layouts.app')

@section('style')

<style>
    /* tr {
        display: inline-flex;
        flex-direction: column;
    } */
</style>

@endsection

@section('content')
    
<div class="container py-5 bg-light">
    <div class="row py-5">
        <div class="col">
            <h1>Users</h1>
            <hr>
            <table class="table bordered">
                <tr>
                    @foreach ($data as $item)
                        <th>
                            {{$item['question']}}
                        </th>
                    @endforeach
                </tr>
                
                @php
                    $count = 1;
                @endphp

                @for ($i = 0; $i < $count; $i++)
                    
                
                <tr>
                    @foreach ($data as $item)
                        @php
                            $count = count($item['answers']);
                        @endphp

                        <td>
                            {{$item['answers'][$i]}}
                        </td>
                    @endforeach
                </tr>

                @endfor
                    
                
               
                {{-- <tr>
                    @for ($i = 0; $i < count($data); $i++)
                    @for ($j = 0; $j < count($data[$i]['answers']); $j++)
                        <td>
                            {{count($data[$i]['answers'])}}
                        </td>
                    @endfor
                    @endfor
                </tr> --}}
            </table>
            
        </div>
    </div>
</div>


@endsection