<x-layouts.admin>
  <div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="card">
              <div class="card-header">
                <h4>Ónim jaratıw</h4>
              </div>
              <form action="{{Route('create_product')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Kategoriyanı saylań</label>
                    <select class="form-control" name="category_id">
                      @foreach ($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Ónim atı</label>
                    <input type="text" class="form-control" name="product_name" value="{{old('product_name')}}">
                  </div>
                  <div class="form-group">
                    <label>Baxası</label>
                    <input type="number" class="form-control" name="price">
                  </div>
                  @error('price')
                  <li style="color:red">{{$message}}</li>
                  @enderror
                  <div class="form-group">
                    <label class="form-label">Ólshemi</label>
                    <div class="d-flex flex-wrap gap-2 mb-3">
                      @foreach ($sizes as $size)
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="sizes[]" value="{{$size->id}}" id="size{{$size->id}}">
                        <label class="form-check-label" for="size{{$size->id}}">{{$size->size}}</label>
                      </div>
                      @endforeach
                    </div>
                  </div>
                  @error('sizes')
                  <li style="color:red">{{$message}}</li>
                  @enderror
                  <div class="form-group">
                    <label class="form-label">Reńi</label>
                    <div class="d-flex flex-wrap gap-2 mb-3">
                      @foreach($colors as $color)
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="colors[]" value="{{$color->id}}" id="color{{$color->id}}">
                        <label class="form-check-label btn" for="color{{$color->id}}">{{$color->color}}</label>
                      </div>
                      @endforeach
                    </div>
                  </div>
                  @error('colors')
                  <li style="color:red">{{$message}}</li>
                  @enderror
                  <div class="form-group">
                    <label>Tekst 1</label>
                    <textarea class="form-control" name="text_1" value="{{old('text_1')}}"></textarea>
                    @error('text_1')
                    <li style="color:red">{{$message}}</li>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>Tekst 2</label>
                    <textarea class="form-control" name="text_2" value="{{old('text_2')}}"></textarea>
                    @error('text_2')
                    <li style="color:red">{{$message}}</li>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>Tiykarǵı súwret</label>
                    <input type="file" class="form-control" name="image" value="{{old('image')}}">
                    @error('image')
                    <li style="color:red">{{$message}}</li>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>1-súwret</label>
                    <input type="file" class="form-control" name="image_1" value="{{old('image_1')}}">
                    @error('image_1')
                    <li style="color:red">{{$message}}</li>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>2-súwret</label>
                    <input type="file" class="form-control" name="image_2" value="{{old('image_2')}}">
                    @error('image_2')
                    <li style="color:red">{{$message}}</li>
                    @enderror
                  </div>
                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Jaratıw</button>
                    <button class="btn btn-secondary" type="reset">Tazalaw</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</x-layouts.admin>