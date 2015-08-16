<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
    <div class="page-title">

        <div class="pull-left">
            <h1 class="title">{{ $sectionTitle }}</h1>
        </div>
            
        @if(isset($lineTime))
        <div class="pull-right hidden-xs">
            <ol class="breadcrumb">
               @foreach($lineTime as $link)               
                    @if(key(\Helper::getFirstValueInArray($lineTime)) == key($link))
                        <li>
                            <a href={{ url($link[key($link)]) }}><i class="fa fa-home"></i>{{ key($link) }}</a>
                        </li>
                    @elseif(key(\Helper::getLastValueInArray($lineTime)) == key($link))
                        <li class="active">
                                <strong>{{ key($link) }}</strong>
                        </li>
                    @else
                        <li>
                            <a href={{ url($link[key($link)]) }}>{{ key($link) }}</a>
                        </li>
                    @endif           
                @endforeach
            </ol>
        </div>
        @endif

    </div>
</div>