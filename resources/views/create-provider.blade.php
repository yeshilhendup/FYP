    @extends('layouts.master')
    @section('content')

                <br> 
                <main class="py-4">
                  <div class="container">
              <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="card">
                      <div class="card-header">Create BIN/EIN Providers</div>
              
                      <div class="card-body">
                          <form method="POST">
                              <input type="hidden" name="_token">
                              <div class="form-group row">
                                  <label for="name" class="col-md-4 col-form-label text-md-right">CID Number:</label>
              
                                  <div class="col-md-6">
                                      <input id="name" type="text" class="form-control " name="name" value="" required autocomplete="name" autofocus>
              
                                   </div>
                              </div>
              
                              <div class="form-group row">
                                  <label for="phone" class="col-md-4 col-form-label text-md-right">Name:</label>
              
                                  <div class="col-md-6">
                                      <input id="phone" type="text" class="form-control " name="phone" value="" required autocomplete="phone" autofocus>
              
                                   </div>
                              </div>
              
                              <div class="form-group row">
                                  <label for="email" class="col-md-4 col-form-label text-md-right">Phone Number :</label>
              
                                  <div class="col-md-6">
                                      <input id="email" type="email" class="form-control " name="email" value="" required autocomplete="email">
              
                                   </div>
                              </div>

                              <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Designation:</label>
            
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control " name="email" value="" required autocomplete="email">
            
                                 </div>
                            </div>
              
                              <div class="form-group row">
                                  <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
              
                                  <div class="col-md-6">
                                      <input id="password" type="password" class="form-control " name="password" required autocomplete="new-password">
              
                                   </div>
                              </div>
              
                              <div class="form-group row">
                                  <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
              
                                  <div class="col-md-6">
                                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                  </div>
                              </div>
              
                              <div class="form-group row mb-0">
                                  <div class="col-md-6 offset-md-4">
                                      <button type="submit" class="btn btn-primary">
                                          Create
                                      </button>
                                      <button type="submit" class="btn btn-danger mx-3">
                                        Cancel
                                    </button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
              </div>
              </div>
              </main>
    @endsection