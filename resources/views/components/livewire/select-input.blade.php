<div>
    <form action="{{Route('create_pieces')}}" method="post">
        @csrf
        <div class="form-group">
            <label>Birnesheni tańlaw</label>
            <select name="category_id" class="form-control" wire:model="selectedCategory" wire:change="CategoryProducts">
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <select name="product_id" class="form-control" wire:model="selectedProduct" wire:change="ProductOptions">
                @foreach ($category_products as $product)
                <option value="{{$product->id}}">{{$product->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label class="form-label">Ólshem</label>
            <div class="selectgroup selectgroup-pills">
                @foreach ($sizes as $size)
                <label class="selectgroup-item">
                    <input type="radio" name="size_id" value="{{$size->id}}" class="selectgroup-input">
                    <span class="selectgroup-button">{{$size->size}}</span>
                </label>
                @endforeach
            </div>
            @error('size_id')
            <li style="color:red">{{$message}}</li>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-label">Reń</label>
            <div class="selectgroup w-100">
                @foreach($colors as $color)
                <label class="selectgroup-item">
                    <input type="radio" name="color_id" value="{{$color->id}}" style="accent-color: {{$color->color}}">
                    <span>{{$color->color}}</span>
                </label>
                @endforeach
            </div>
        </div>
        @error('color_id')
        <li style="color:red">{{$message}}</li>
        @enderror
        <div class="form-group">
            <label class="form-label">Sanı</label>
            <input type="number" name="piece" class="form-control">
            @error('piece')
            <li style="color:red">{{$message}}</li>
            @enderror
        </div>
        <div class="card-footer text-right">
            <button class="btn btn-primary mr-1" type="submit">Jaratıw</button>
            <button class="btn btn-secondary" type="reset">Tazalaw</button>
        </div>
    </form>
</div>