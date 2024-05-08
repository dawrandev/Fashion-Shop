<x-layouts.main>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col"></div>
            <div class="col mt-5">
                <h4>Registration</h4>
            <form action="{{Route('registration')}}" method="post">
                @csrf
                    <p>Surname</p>
                    <input type="text" class="form-control" name="surname"><br>
                    @error('surname')
                    <li style="color:red">{{$message}}</li>
                    @enderror
                    <p>Name</p>
                    <input type="text" class="form-control" name="name"><br>
                    @error('name')
                    <li style="color:red">{{$message}}</li>
                    @enderror
                    <p>Phone</p>
                    <input type="number" class="form-control" name="phone"><br>
                    @error('phone')
                    <li style="color:red">{{$message}}</li>
                    @enderror
                    <p>Address</p>
                    <input type="text" class="form-control" name="address"><br>
                    @error('address')
                    <li style="color:red">{{$message}}</li>
                    @enderror
                    <div style="text-align:end">
                    <input type="submit" class="btn btn-outline-dark" value="Save">
                    </div>
                    <div id="map"></div>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=INSERT_YOUR_API_KEY&callback=initMap&v=weekly&solution_channel=GMP_CCS_customcontrols_v1"
        defer
      ></script>
</x-layouts.main>