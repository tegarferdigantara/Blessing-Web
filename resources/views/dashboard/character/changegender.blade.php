@extends('layouts.main')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Change Gender</h4>
                            <p class="card-description">
                              To update your character's gender, please select the character whose gender you wish to change.
                            </p>
                            <form class="forms-sample">
                              <div class="form-group">
                                <label for="exampleFormControlSelect2">Select the Character</label>
                                <select class="form-control" id="exampleFormControlSelect2">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                </select>
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
