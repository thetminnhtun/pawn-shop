<nav class="col-md-2">
    <div class="list-group list-group-flush">
        <a class="list-group-item list-group-item-action active" href="{{route('customer.index')}}">
            All
        </a>
        <a class="list-group-item list-group-item-action " href="{{route('customer.create')}}">
            New
        </a>
        <a class="list-group-item list-group-item-action " href="{{url('customer/export')}}" onclick="return confirm('Export ထုတ္မွာေသခ်ာလား ?')">
            Export
        </a>
        <a class="list-group-item list-group-item-action " href="{{url('customer/trash')}}" >
            Trash
        </a>
        <a class="list-group-item list-group-item-action " href="{{url('customer/search')}}" >
            Search
        </a>
    </div>
</nav>