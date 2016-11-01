<div class="customnav"><a href="{{ url('/') }}" >Home</a>
    >>
    @if ((!empty($trail1['link'])) && $trail1['link']!='#')
        <a href="{{ $trail1['link']}}">{{$trail1['name']}}</a>
    @elseif (!isset($trail1) or empty($trail1['name']))
       &nbsp;
    @else
        {{$trail1['name']}}
    @endif

    @if (!empty($trail2))
        >> {{$trail2['name']}}
    @endif

</div>