@include('layouts.head')

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        @include('component.loading')
        <!-- Spinner End -->

        <!-- Sidebar Start -->
        @include('admin_panel.part.sidebar')
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            @include('admin_panel.part.navbar')
            <!-- Navbar End -->

            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Araçlar</h6>
                        <div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#addModal">
                                <i class="fas fa-plus"></i> Yeni Araç
                            </button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="example" class="display">
                            <!-- vehicle title start -->
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">Marka</th>
                                    <th scope="col">Model</th>
                                    <th scope="col">Yıl</th>
                                    <th scope="col">Vites Tipi</th>
                                    <th scope="col">Düzenle</th>
                                    <th scope="col">Sil</th>
                                </tr>
                            </thead>
                            <!-- vehicle title end -->
                            <tbody>
                                <!-- vehicle content start -->
                                @foreach ($vehicle as $data)
                                    <tr>
                                        <td>{{ $data->brand }}</td>
                                        <td>{{ $data->model }}</td>
                                        <td>{{ $data->year }}</td>
                                        <td>{{ $data->gear_type }}</td>

                                        <td>
                                            <button type="button" class="btn btn-warning edit-btn"
                                                data-id="{{ $data->id }}" data-brand="{{ $data->brand }}"
                                                data-model="{{ $data->model }}" data-year="{{ $data->year }}"
                                                data-gear_type="{{ $data->gear_type }}" data-bs-toggle="modal"
                                                data-bs-target="#editModal">
                                                Düzenle
                                            </button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-warning delete-btn"
                                                data-id="{{ $data->id }}" data-brand="{{ $data->brand }}"
                                                data-model="{{ $data->model }}" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal">
                                                Sil
                                            </button>

                                        </td>
                                    </tr>
                                @endforeach

                                <!-- vehicle content end-->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @include('admin_panel.part.vehicle_part.vehicle_add')
            @include('admin_panel.part.vehicle_part.vehicle_update')
            @include('admin_panel.part.vehicle_part.vehicle_delete')
            <!-- Footer Start -->
            @include('admin_panel.part.footer')
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        @include('component.backToTop')
    </div>
    <script>
        // table kodu 
        let table = new DataTable('#example', {

        });
    </script>

</body>
@include('layouts.script')

</html>
