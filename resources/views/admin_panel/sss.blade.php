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
                        <h6 class="mb-0">Sıkça Sorulan Sorular</h6>
                        <div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#addModal">
                                <i class="fas fa-plus"></i> Yeni SSS
                            </button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="example" class="display">
                            <!-- vehicle title start -->
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">Soru</th>
                                    <th scope="col">Cevap</th>

                                    <th scope="col">Düzenle</th>
                                    <th scope="col">Sil</th>
                                </tr>
                            </thead>
                            <!-- vehicle title end -->
                            <tbody>
                                <!-- vehicle content start -->
                                @foreach ($sss as $data)
                                    <tr>
                                        <td>{{ $data->question }}</td>
                                        <td>{{ $data->answer }}</td>

                                        <td>
                                            <button type="button" class="btn btn-warning edit-btn"
                                                data-id="{{ $data->id }}" data-question="{{ $data->question }}"
                                                data-answer="{{ $data->answer }}" data-bs-toggle="modal"
                                                data-bs-target="#editModal">
                                                Düzenle
                                            </button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-warning delete-btn"
                                                data-id="{{ $data->id }}" data-question="{{ $data->question }}"
                                                data-answer="{{ $data->answer }}" data-bs-toggle="modal"
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
            <script>
                // table kodu 
                let table = new DataTable('#example', {

                });
            </script>

            <!-- Add Modal Start -->
            @include('admin_panel.part.sss_part.sssadd')
            <!-- Add Modal End -->

            <!-- Edit Modal Start -->
            @include('admin_panel.part.sss_part.sssupdate')
            <!-- Edit Modal End -->

            <!-- Delete Modal Start -->
            @include('admin_panel.part.sss_part.sssdelete')
            <!-- Delete Modal End -->

            <!-- Footer Start -->
            @include('admin_panel.part.footer')
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        @include('component.backToTop')
    </div>

</body>
@include('layouts.script')
