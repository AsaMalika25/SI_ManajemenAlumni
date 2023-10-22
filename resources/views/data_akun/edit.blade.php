@extends('layout.layouts')
@section('content')   
    <!-- konten utama -->
    <!-- div one page -->
    <div class="card" style="width: 85.86762075134168vh; margin:auto; border-radius: 2.862254025044723vh; margin-top: 7rem; margin-bottom: 14.311270125223613vh;">
        <div class="card-body">
          <!-- text judul   -->
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4 font-nav">Edit Akun</h1>
            <br>
          </div>
          <!-- end text judul -->
    
          <!-- form tambah -->
          <form action="/list_akun/edit/simpan" method="post">
            <div class="mb-3" >
              <label for="inputNama" class="form-label font-form">Username</label>
              <input type="hidden" class="form-control" id="inputNama" name="id_akun" style="border-radius:  1.8635607321131447vh;" value="{{$takun->id_akun}}" required>
              <input type="hidden" class="form-control" id="inputNama" name="password" style="border-radius:  1.8635607321131447vh;" value="{{$takun->password}}" required>
              <input type="text" class="form-control" id="inputNama" name="username" style="border-radius:  1.8635607321131447vh;" value="{{$takun->username}}" required>
            </div> 
            <div class="form-group">
              <label>Role</label><br>
              <select name="role" id="role" class="form-control" value="{{$takun->role}}">
              <option value="superadmin" @if ($takun->role == 'superadmin')
                                return selected
                            @endif>Super Admin</option>
                          
                            <option value="kaprog" @if ($takun->role == 'kaprog')
                                return selected
                            @endif>Kaprog</option>
                            <option value="alumni" @if ($takun->role == 'alumni')
                                return selected
                            @endif>Alumni</option>

              </select>
            </div>
            <br>
            @csrf
            <button type="submit" class="btn btn-primary" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Submit</button>
          </form>
          <!-- end form tambah -->
        </div>
      </div>
        <!-- end konten utama -->
      </div> 
      <!-- end one page -->  
@endsection