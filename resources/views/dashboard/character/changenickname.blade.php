@extends('layouts.main')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Change Nickname</h4>
                            <p class="card-description">
                              To change your nickname, please select the character for which you want to update the nickname.
                            </p>
                            <form class="forms-sample">
                              <div class="form-group">
                                <label for="exampleFormControlSelect2">Select the Character Name</label>
                                <select class="form-control" id="exampleFormControlSelect2">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">New Character Name</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Character Name..">
                              </div>
                              <button type="submit" class="btn btn-primary mr-2">Change For 15000 Rps</button>
                            </form>
                          </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        @include('partials.footer')
        <!-- partial -->
    </div>
@endsection
