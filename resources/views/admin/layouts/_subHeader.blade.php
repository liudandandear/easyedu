<div id='subHeader'>
    <div class='container'>
        <div id="pageNav" class='btn-toolbar'></div>
        <nav id='subNavbar'>
            <ul class='nav nav-default'>
                @foreach($subHeaders as $subHeader)
                    <li class='active' data-id='index'><a href='/my/'>{{$subHeader}}</a></li>
                @endforeach
            </ul>
        </nav>
        <div id="pageActions">
            <div class='btn-toolbar'></div>
        </div>
    </div>
</div>