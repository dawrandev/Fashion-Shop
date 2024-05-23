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
                      <th scope="col">Phone</th>
                      <th scope="col">Address</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($clients as $client)
            <tr>
            <th scope="row">{{$i++}}</th>
            <td class="max-texts"><a href="{{Route('client_products', $client->user_id)}}">
              {{$client->surname}} {{$client->name}}</td>
            <td>{{$client->phone}}</td>
            <td>{{$client->address}}</td>
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