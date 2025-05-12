<x-layouts.admin>
  <div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row justify-content-center">
          <div class="col-lg-10 col-md-12">
            <div class="card shadow-sm rounded">
              <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Klientler</h4>
                <h5 class="mb-0">{{$summa}}</h5>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover table-bordered">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Klient</th>
                        <th scope="col">Telefon</th>
                        <th scope="col">Adres</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($clients as $client)
                      <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>
                          <a href="{{ route('client_products', $client->user_id) }}">
                            {{ $client->surname }} {{ $client->name }}
                          </a>
                        </td>
                        <td>{{ $client->phone }}</td>
                        <td>{{ $client->address }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</x-layouts.admin>