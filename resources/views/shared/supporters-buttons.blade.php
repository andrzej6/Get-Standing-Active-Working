{{-- */
$supporters=array('chiropractors'=>'Chiropractors','osteopaths'=>'Osteopaths',
'physiotherapists'=>'Physiotherapists','exercise_professionals'=>'Exercise Professionals',
'regional_dealers'=>'Regional Dealers','national_dealers'=>'National Dealers',
'product_suppliers'=>'Product Suppliers','professional_services'=>'Professional Services');
/* --}}


<div class="gb-partners-title">We are delighted to be officially supported by the following:</div>
<br/><br/><br/>

{{--*/$i=0;/*--}}

<div class="gbs-supporters-list">
    @foreach ($supporters as $key=>$value)
        <div class="supporters-horizont @if($key==$page) active @endif">
            <a href="{{$key}}">{{$value}}</a>
        </div>

    @if ($i==3)
            <div class="clear"><!-- ClearFix --></div>
    @endif

        {{--*/$i++;/*--}}

    @endforeach
</div>