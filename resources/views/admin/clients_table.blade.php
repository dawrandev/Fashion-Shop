<x-layouts.admin>
  <div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
          <div class="col-1"></div>
          <div class="col-10 col-md-6 col-lg-8">
            <div class="card">
              <div class="card-header">
                <h4>Clients</h4>
              </div>
              <div class="card-body">
                <div class="section-title mt-0" style="text-align:end;">
                  <h3>{{$summa}}</h3>
                </div>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Client</th>
                      <th scope="col">Category</th>
                      <th scope="col">Product</th>
                      <th scope="col">Summa</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($histories as $history)
            <tr>
            <th scope="row">{{$i++}}</th>
            <td><a href="{{Route('user_products', $history->user_id)}}">
              {{$history->surname}} {{$history->name}}
              </a></td>
            <td>{{$history->category_name}}</td>
            <td>{{$history->product_name}}</td>
            <td>{{$history->summa}}</td>
            </tr>
          @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-1"></div>
          </div>
        </div>
      </div>
    </section>
</x-layouts.admin>