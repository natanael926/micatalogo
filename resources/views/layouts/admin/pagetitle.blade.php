<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
    <div class="page-title">

        <div class="pull-left">
            <h1 class="title">{{ $sectionTitle }}</h1>
        </div>
            
        @if(isset($lineTime))
        <div class="pull-right hidden-xs">
            <ol class="breadcrumb">
                {{ $i = 0 }}
                @foreach($lineTime as $title => $link)
                    
                   Title: {{ $title }}




                    {{--<li>--}}

                            {{--<a href="index.html"><i class="fa fa-home"></i>Home</a>--}}

                            {{--<a href="tables-basic.html">Tables</a>--}}

                    {{--</li>--}}
                {{--<li>--}}
                {{--</li>--}}
                {{--<li class="active">--}}
                    {{--<strong>Basic tables</strong>--}}
                {{--</li>--}}
                @endforeach
            </ol>
        </div>
        @endif

    </div>
</div>