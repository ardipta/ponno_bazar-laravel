<nav class="cd-side-nav js-cd-side-nav">
    <ul class="cd-side__list js-cd-side__list">

{{--        <li class="cd-side__item cd-side__item--has-children cd-side__item--overview js-cd-item--has-children">--}}
{{--            <a href="#0">Overview</a>--}}

{{--            <ul class="cd-side__sub-list">--}}
{{--                <li class="cd-side__sub-item"><a href="#0">All Data</a></li>--}}
{{--                <li class="cd-side__sub-item"><a href="#0">Category 1</a></li>--}}
{{--                <li class="cd-side__sub-item"><a href="#0">Category 2</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}

        <li class="cd-side__item cd-side__item--selected js-cd-item--has-children" style="padding: 9px">
            <span style="font-weight: bold; color: white; font-size: 16px"><i class="fa fa-dollar"></i> Wallet Balance</span><br>
        </li>
        <li class="cd-side__item cd-side__item--selected js-cd-item--has-children" style="padding: 9px">
            <span class="cd-count">0.00 ৳</span>
        </li>

{{--        <li class="cd-side__item cd-side__item--has-children cd-side__item--comments js-cd-item--has-children">--}}
{{--            <a href="#0">Comments</a>--}}

{{--            <ul class="cd-side__sub-list">--}}
{{--                <li class="cd-side__sub-item"><a href="#0">All Comments</a></li>--}}
{{--                <li class="cd-side__sub-item"><a href="#0">Edit Comment</a></li>--}}
{{--                <li class="cd-side__sub-item"><a href="#0">Delete Comment</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
    </ul>

    <ul class="cd-side__list js-cd-side__list">
        <li class="cd-side__label"><span>Primary</span></li>
        <li class="cd-side__item cd-side__item--selected js-cd-item--has-children" style="padding: 9px">
            <span style="font-weight: bold; color: white; font-size: 14px"><i class="fa fa-user-md"></i> {{auth()->user()->first_name." ".auth()->user()->last_name}}<span style="float: right"></span></span><br>
        </li>
        <li class="cd-side__item cd-side__item--selected js-cd-item--has-children" style="padding: 9px">
            <span style="font-weight: bold; color: white; font-size: 14px"><i class="fa fa-phone"></i> {{"+88".auth()->user()->phone}}<span style="float: right"></span></span><br>
        </li>

{{--        <li class="cd-side__item cd-side__item--has-children cd-side__item--bookmarks js-cd-item--has-children">--}}
{{--            <a href="#0">Bookmarks</a>--}}

{{--            <ul class="cd-side__sub-list">--}}
{{--                <li class="cd-side__sub-item"><a href="#0">All Bookmarks</a></li>--}}
{{--                <li class="cd-side__sub-item"><a href="#0">Edit Bookmark</a></li>--}}
{{--                <li class="cd-side__sub-item"><a href="#0">Import Bookmark</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}

{{--        <li class="cd-side__item cd-side__item--has-children cd-side__item--images js-cd-item--has-children">--}}
{{--            <a href="#0">Images</a>--}}

{{--            <ul class="cd-side__sub-list">--}}
{{--                <li class="cd-side__sub-item"><a href="#0">All Images</a></li>--}}
{{--                <li class="cd-side__sub-item"><a href="#0">Edit Image</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
    </ul>

{{--    <ul class="cd-side__list js-cd-side__list">--}}
{{--        <li class="cd-side__label"><span>Action</span></li>--}}
{{--        <li class="cd-side__btn"><button class="reset" href="#0">+ Button</button></li>--}}
{{--    </ul>--}}
</nav>
