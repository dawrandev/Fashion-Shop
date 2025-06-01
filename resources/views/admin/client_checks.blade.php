<x-layouts.admin>
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="card shadow-sm rounded">
                            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                                <h4 class="mb-0">Chekler</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered text-center">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>#</th>
                                                <th>Atı</th>
                                                <th>Familiyasi</th>
                                                <th>Telefon</th>
                                                <th>Check</th>
                                                <th>Jiberilgen waqıt</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            @foreach ($checks as $check)
                                            <tr>
                                                <td class="align-middle">{{ $i++ }}</td>
                                                <td class="align-middle">{{ $check->name }}</td>
                                                <td class="align-middle">{{ $check->surname }}</td>
                                                <td class="align-middle">{{ $check->phone }}</td>
                                                <td class="align-middle">
                                                    <img src="{{ asset('storage/checks/' . $check->check) }}"
                                                        alt="Check"
                                                        width="100"
                                                        class="img-thumbnail"
                                                        style="cursor:pointer"
                                                        data-toggle="modal"
                                                        data-target="#checkModal{{ $check->id }}">

                                                    <!-- Modal for enlarged image -->
                                                    <div class="modal fade" id="checkModal{{ $check->id }}" tabindex="-1" role="dialog" aria-labelledby="checkModalLabel{{ $check->id }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-body p-0">
                                                                    <img src="{{ asset('storage/checks/' . $check->check) }}" alt="Check Image" class="img-fluid w-100">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">{{ $check->created_at->format('d.m.Y H:i') }}</td>
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

    <!-- Bootstrap JS (modal uchun) -->
</x-layouts.admin>