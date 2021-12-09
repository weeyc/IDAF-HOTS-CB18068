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
                            <h1> <span class="text-warning"> Data Pengguna</span> </h1>
                        </div>
                    </div>
                    <div class="table-wrapper-scroll-y my-custom-scrollbar ">
                        <button type="button" class="btn btn-primary mb-3 float-right" data-toggle="modal" data-target="#exampleModal">
                            Create User
                        </button>
                        <table class="table table-dark table-hover table-striped table-bordered table-sm mb-10">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Second Name</th>
                                <th scope="col">Sex</th>
                                <th scope="col">Religion</th>
                                <th scope="col">Address</th>
                                <th colspan="2">Action</th>
                              </tr>
                            </thead>
                            <tbody table-dark>
                        <?php  $count=1; ?>
                        @foreach($Students as $i)
                              <tr >
                                <td>{{ $count }}</td>
                                <td>{{ $i->First_Name}}</td>
                                <td>{{ $i->Second_Name}}</td>
                                <td>{{ $i->Sex}}</td>
                                <td>{{ $i->Religion}}</td>
                                <td>{{ $i->Address}}</td>
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
                        <h5 class="modal-title text-body" class="">Add User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                                  <label class="text-body float-left">First Name: </label>
                                  <input type="text" class="form-control mb-3"  name="First Name" placeholder="eg. Muhammad" required>
                                  <label class="text-body float-left">Second Name: </label>
                                  <input type="text" class="form-control mb-3"  name="Second Name" placeholder="eg. Ali" required>
                                  <div >
                                    <label class="text-body float-left">Sex: </label>
                                    <select class="form-select gender mb-3" name="Sex" aria-label="Default select example" required>
                                        <option selected value="M">Male</option>
                                        <option value="F">Female</option>
                                    </select>
                                  </div>
                                  <div >
                                    <label class="text-body float-left">Religion: </label>
                                    <select class="form-select gender mb-3" name="Religion" aria-label="Default select example" required>
                                        <option selected value="Islam">Islam</option>
                                        <option value="Buddhism">Buddhism</option>
                                        <option value="Christianity">Christianity</option>
                                        <option value="Hinduism">Hinduism</option>
                                        <option value="Other ">Others</option>
                                    </select>
                                  </div>
                                  <label  class="text-body float-left">Address: </label>
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
