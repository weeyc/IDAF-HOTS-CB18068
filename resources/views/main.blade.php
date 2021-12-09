@extends('master')
@section('content')
                <div style="height: 100vh;" class="bg-dark text-light p-5 text-center">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    @endif

                    <div class="container">
                        <div class="container text-center mb-1">
                            <h1> This is <span class="text-warning"> Student Tables</span> </h1>
                        </div>
                        <form action="{{ route('filter') }}" method="GET">
                          <div class="d-flex flex-row-reverse">
                                                    <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModal">
                                Create User
                            </button>
                            <div class="p-2">
                                <button type="submit"  name = "submit" value = "cleared" class="btn btn-secondary px-4">Clear</button>
                            </div>
                            <div class="p-2">
                                <button type="submit"  name = "submit" value = "filtered" class="btn btn-primary px-4">Filter</button>
                            </div>
                            <div class="p-2">
                                <select class="form-select age"  name= "age" aria-label="Default select example">
                                <option selected value="">Age</option>
                                <option value="age>20">Age >20</option>
                            </select>
                            </div>
                            <div class="p-2 ">
                                <select class="form-select gender"  name="gender" aria-label="Default select example">
                                    <option selected value="">Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </form>
                          </div>
                        </div>
                    <div class="table-wrapper-scroll-y my-custom-scrollbar ">
                        <table class="table table-dark table-hover table-striped table-bordered table-sm mb-10">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Age</th>
                                <th scope="col">Address</th>
                                <th colspan="2">Action</th>
                              </tr>
                            </thead>
                            <tbody table-dark>
                        <?php  $count=1; ?>
                        @foreach($Students as $i)
                              <tr >
                                <td>{{ $count }}</td>
                                <td>{{ $i->Name}}</td>
                                <td>{{ $i->Gender}}</td>
                                <td>{{ $i->Age}}</td>
                                <td>{{ $i->Address}}</td>
                                <td><a href="edit/{{ $i->id }}"> Edit</a></td>
                                <td><a href="delete/{{ $i->id }}" onclick="return confirm('Are you sure you want to delete this user?')"> Delete</a></td>
                              </tr>
                        <?php $count++; ?>
                        @endforeach
                            </tbody>
                          </table>
                </div>

                 <!-- Modal -->
                <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <form action="{{ route('createStudent') }}" method="POST" >
                       {{csrf_field()}}
                        <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            hello
                        <h5 class="modal-title text-body" class="">Add User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                                  <label class="text-body float-left">Name: </label>
                                  <input type="text" class="form-control mb-3"  name="Name" placeholder="eg. Muhammad Ali" required>

                                <div >
                                    <label class="text-body float-left">Gender: </label>
                                    <select class="form-select gender mb-3" name="Gender" aria-label="Default select example" required>
                                        <option selected value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>

                                <label class="text-body float-left">Age: </label>
                                <input type="number" class="form-control mb-3"  name="Age" placeholder="21" min=1 required>


                                  <label  class="text-body float-left">Address</label>
                                  <textarea class="form-control"  name="Address" id="exampleFormControlTextarea1" required rows="3"></textarea>


                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>




@endsection
