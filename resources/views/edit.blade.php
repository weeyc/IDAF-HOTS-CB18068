@extends('master')
@section('content')
                <div style="height: 100vh;" class="bg-dark text-light p-5 text-center">
                    <div class="container">
                        <div class="container text-center mb-1">
                            <h1> This is selected<span class="text-warning"> Student Data</span> </h1>
                        </div>
                    <form action="/update_student/{{ $data_student->id }}" method="POST" >
                       {{csrf_field()}}
                        <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">

                        <h5 class="modal-title text-body" class="">Edit User</h5>
                        </div>
                        <div class="modal-body">
                                  <label class="text-body float-left">Name: </label>
                                  <input type="text" class="form-control mb-3"  value="{{ $data_student->Name }}" name="Name" placeholder="eg. Muhammad Ali" required>

                                <div >
                                    <label class="text-body float-left">Gender: </label>
                                    <select class="form-select gender mb-3" name="Gender" aria-label="Default select example" required>
                                        <option @if($data_student->Gender == 'male') selected @endif value="Male">Male</option>
                                        <option @if($data_student->Gender == 'female') selected @endif value="Female">Female</option>
                                    </select>
                                </div>

                                <label class="text-body float-left">Age: </label>
                                <input type="number" class="form-control mb-3"  name="Age" placeholder="21" min=1 value="{{ $data_student->Age }}"  required>


                                  <label  class="text-body float-left">Address</label>
                                  <textarea class="form-control" name="Address" id="exampleFormControlTextarea1" required rows="3">{{ $data_student->Address }}</textarea>


                        </div>
                        <div class="modal-footer">

                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>

                    </div>
                </div>





@endsection
