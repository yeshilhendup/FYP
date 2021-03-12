    @extends('layouts.master')
    @section('content')


            <div class="input-group">
                 <input type="search" class="form-control mx-2" placeholder="Search Licensee" aria-label="Search" aria-describedby="search-addon" />
                <button type="button" class="btn btn-primary mx-2">search</button>
            </div>
            <hr><br>

                       <!-- Nav pills -->
            <ul class="nav nav-pills" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="pill" href="#bar">BAR</a>
                </li>
                <li class="nav-item ml-5">
                    <a class="nav-link" data-toggle="pill" href="#ent">ENTERTAINMENT</a>
                </li>

            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div id="bar" class="container tab-pane active"><br>
                    <h3>BAR</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div id="ent" class="container tab-pane fade"><br>
                    <h3>Entertainment</h3>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

            </div>
       
    @endsection