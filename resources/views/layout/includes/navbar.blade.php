<nav class="navbar navbar-expand-sm navbar-light bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">primary</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID"
            aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarID">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                <a class="nav-link active" aria-current="page" href="{{URL::to('/service')}}">Service</a>
                <a class="nav-link active" aria-current="page" href="{{URL::to('/about/kolade')}}">About</a>
                <a class="nav-link active" aria-current="page" href="{{URL::to('/create')}}">New Product</a>
                
            </div>
        </div>
    </div>
</nav>

