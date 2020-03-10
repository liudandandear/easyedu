<div id='subHeader'>
    <div class='container'>
        <div id="pageNav" class='btn-toolbar'></div>
        <nav id='subNavbar'>
            <ul class='nav nav-default'>
                @foreach($subHeaders as $key=>$header)
                    <li class='' data-id='index'><a href='/my/'>{{$subHeaders[$key]}}</a></li>
                @endforeach
            </ul>
        </nav>
        <div id="pageActions">
            <div class='btn-toolbar'></div>
        </div>
    </div>
</div>