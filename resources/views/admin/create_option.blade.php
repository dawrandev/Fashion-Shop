<x-layouts.admin>
  <div class="main-content">
    <section class="section">
      <div class="section-body">
        <h2 class="section-title">Create Options</h2>
        <div class="row">
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Create Category</h4>
              </div>
              <div class="card-body" style="text-align: center;">
                <form action="{{Route('create_category')}}" method="post">
                @csrf
                  <input type="text" class="form-control" name="name" placeholder="Category" value="{{ old('name')}}"><br>
                  @error('name')
                  <li style="color:red; text-align:start">{{$message}}</li>
                  @enderror
                  <input type="submit" class="btn btn-primary" value="Create">
                </form>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card card-secondary">
              <div class="card-header">
                <h4>Create Size</h4>
              </div>
              <div class="card-body" style="text-align: center;">
                <form action="{{Route('create_size')}}" method="post">
                @csrf
                  <input type="text" name="size" class="form-control" placeholder="Size" value="{{ old('size')}}"><br>
                  @error('size')
                  <li style="color:red; text-align:start">{{$message}}</li>
                  @enderror
                  <input type="submit" value="Create" class="btn btn-primary">
                </form>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card card-danger">
              <div class="card-header">
                <h4>Create Color</h4>
              </div>
              <div class="card-body" style="text-align: center;">
                <form action="{{Route('create_color')}}" method="post">
                @csrf
                  <input type="text" name="color" class="form-control" placeholder="Color"><br>
                  @error('color')
                  <li style="color:red; text-align:start">{{$message}}</li>
                  @enderror
                  <input type="submit" value="Create" class="btn btn-primary">
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                  <div class="card-header">
                    <h4>Categories</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Edit</th>
                        </tr>
                        @foreach($categories as $category)
                        <tr>
                          <td>{{$c++}}</td>
                          <td>{{$category->name}}</td>
                          <td><a href="{{Route('single_category', $category->id)}}" class="btn btn-warning"><i class="far fa-edit"></i></a>
                          <a href="{{Route('delete_category', $category->id)}}" class="btn btn-danger"><i class="fas fa-times"></i></a>
                          </td>
                        </tr>
                        @endforeach
                      </table>
                      @if($single_category != null)
                      <form action="{{Route('edit_category')}}" method="POST">
                      @csrf
                        <div class="row">
                          <div class="col-8">
                            <input type="hidden" name="category_id" value="{{$single_category->id}}">
                            <input type="text" name="new_category" class="form-control" value="{{$single_category->name}}">
                          </div>
                          <div class="col-2">
                            <input type="submit" value="Update" class="btn btn-primary">
                          </div>
                          <br>
                        </div>
                      </form>
                      @endif
                    </div>
                  </div>
                  {{$categories->links()}}
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                  <div class="card-header">
                    <h4>Sizes</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Edit</th>
                        </tr>
                        @foreach($sizes as $size)
                        <tr>
                          <td>{{$s++}}</td>
                          <td>{{$size->size}}</td>
                          <td><a href="{{Route('single_size', $size->id)}}" class="btn btn-warning"><i class="far fa-edit"></i></a>
                          <a href="{{Route('delete_size', $size->id)}}" class="btn btn-danger"><i class="fas fa-times"></i></a>
                          </td>
                        </tr>
                        @endforeach
                      </table>
                      @if($single_size != null)
                      <form action="{{Route('edit_size')}}" method="POST">
                      @csrf
                        <div class="row">
                          <div class="col-8">
                            <input type="hidden" name="size_id" value="{{$single_size->id}}">
                            <input type="text" name="new_size" class="form-control" value="{{$single_size->size}}">
                          </div>
                          <div class="col-2">
                            <input type="submit" value="Update" class="btn btn-primary">
                            <br>
                          </div>
                        </div>
                      </form>
                      @endif
                    </div>
                  </div>
                    {{$sizes->links()}}
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                  <div class="card-header">
                    <h4>Colors</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Edit</th>
                        </tr>
                        @foreach($colors as $color)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$color->color}}</td>
                          <td><a href="{{Route('single_color', $color->id)}}" class="btn btn-warning"><i class="far fa-edit"></i></a>
                          <a href="{{Route('delete_color', $color->id)}}" class="btn btn-danger"><i class="fas fa-times"></i></a>
                          </td>
                        </tr>
                        @endforeach
                      </table>
                      @if($single_color != null)
                      <form action="{{Route('edit_color')}}" method="POST">
                      @csrf
                        <div class="row">
                          <div class="col-8">
                            <input type="hidden" name="color_id" value="{{$single_color->id}}">
                            <input type="text" name="new_color" class="form-control" value="{{$single_color->color}}">
                          </div>
                          <div class="col-2">
                            <input type="submit" value="Update" class="btn btn-primary">
                          </div>
                          <br>
                        </div>
                      </form>
                      @endif
                    </div>
                  </div>
                  {{$colors->links()}}
                </div>
              </div>
          </div>
      </div>
</div>

            </div>
          </div>
</x-layouts.admin>